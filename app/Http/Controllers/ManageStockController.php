<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Product;
use App\Models\User;

class ManageStockController extends Controller
{
    public function all()
    {
        $stocks = Stock::all();
        
        return view('admin.manager.stock.view', [
            'stocks' => $stocks,
        ]);
    }

    public function view($id)
    {
        $stock = Stock::findOrFail($id);
        $products = Product::orderBy('name')->get();
        $stocks = Stock::all();

        return view('admin.manager.stock.view', [
            'stock' => $stock,
            'stocks' => $stocks,
            'products' => $products
        ]);
    }

    public function create(Request $request)
    {
        $stock = new Stock;
        $stock->user_id = User::first()->id;
        $stock->line_total = 0;
        $stock->save();

        return redirect()->route('admin.manager.stock.view', ['stock_id' => $stock->id]);
    }

    public function edit(Request $request, $id)
    {
        $stock = Stock::findOrFail($id);
        
        $items = $request->input('item');
        $syncs = [];
        foreach($items as $item) {
            $syncs[$item['product_id']] = ['price' => $item['price'], 'quantity' => $item['quantity']];
        }

        $stock->products()->sync($syncs);
        $stock->line_total = $this->stockValue($stock);
        $stock->save();

        return redirect()->route('admin.manager.stock.view', ['stock_id' => $stock->id]);
    }

    public function delete($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        return redirect()->route('admin.manager.stock');
    }

    public function createItem(Request $request, $stock_id)
    {
        $stock = Stock::findOrFail($stock_id);
        $stock->products()->attach($request->input('product_id'), [
            'price' => $request->input('price', 10), 
            'quantity' => $request->input('quantity', 1)
        ]);
        $stock->line_total = $this->stockValue($stock);
        $stock->save();

        return redirect()->route('admin.manager.stock.view', ['stock_id' => $stock_id]);
    }

    public function deleteItem($stock_id, $product_id)
    {
        $stock = Stock::findOrFail($stock_id);
        $stock->products()->detach($product_id);
        $stock->line_total = $this->stockValue($stock);
        $stock->save();

        return redirect()->route('admin.manager.stock.view', ['stock_id' => $stock_id]);
    }

    private function stockValue($stock) {
        $value = 0;
        foreach($stock->items as $item) {
            $value += $item->price * $item->quantity;
        }

        return $value;
    }
}