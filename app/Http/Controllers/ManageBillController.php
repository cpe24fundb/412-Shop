<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Product;
use App\Models\User;

class ManageBillController extends Controller
{
    public function all()
    {
        $bills = Bill::all();
        
        return view('admin.manager.bill.view', [
            'bills' => $bills,
        ]);
    }

    public function view($id)
    {
        $bill = Bill::findOrFail($id);
        $products = Product::orderBy('name')->get();
        $bills = Bill::all();

        return view('admin.manager.bill.view', [
            'bill' => $bill,
            'bills' => $bills,
            'products' => $products
        ]);
    }

    public function create(Request $request)
    {
        $bill = new Bill;
        $bill->line_total = 0;
        $bill->save();

        return redirect()->route('admin.manager.bill.view', ['bill_id' => $bill->id]);
    }

    public function edit(Request $request, $id)
    {
        $bill = Bill::findOrFail($id);
        
        $items = $request->input('item');
        $syncs = [];
        foreach($items as $item) {
            $syncs[$item['product_id']] = ['price' => $item['price'], 'quantity' => $item['quantity']];
        }

        $bill->products()->sync($syncs);
        $bill->line_total = $this->billValue($bill);
        $bill->save();

        return redirect()->route('admin.manager.bill.view', ['bill_id' => $bill->id]);
    }

    public function delete($id)
    {
        $bill = Bill::findOrFail($id);
        $bill->items()->delete();
        $bill->delete();

        return redirect()->route('admin.manager.bill');
    }

    public function createItem(Request $request, $bill_id)
    {
        $bill = Bill::findOrFail($bill_id);
        $bill->products()->attach($request->input('product_id'), [
            'price' => $request->input('price', 10), 
            'quantity' => $request->input('quantity', 1)
        ]);
        $bill->line_total = $this->billValue($bill);
        $bill->save();

        return redirect()->route('admin.manager.bill.view', ['bill_id' => $bill_id]);
    }

    public function deleteItem($bill_id, $product_id)
    {
        $bill = Bill::findOrFail($bill_id);
        $bill->products()->detach($product_id);
        $bill->line_total = $this->billValue($bill);
        $bill->save();

        return redirect()->route('admin.manager.bill.view', ['bill_id' => $bill_id]);
    }

    private function billValue($bill) {
        $value = 0;
        foreach($bill->items as $item) {
            $value += $item->price * $item->quantity;
        }

        return $value;
    }
}