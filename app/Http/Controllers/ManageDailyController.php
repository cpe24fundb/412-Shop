<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daily;
use App\Models\Product;
use Carbon\Carbon;

class ManageDailyController extends Controller
{
    public function all()
    {
        $dailies = Daily::all();
        
        return view('admin.manager.daily.view', [
            'dailies' => $dailies,
        ]);
    }

    public function view($id)
    {
        $daily = Daily::findOrFail($id);
        $products = Product::orderBy('name')->get();
        $dailies = Daily::all();
        $today = Carbon::now()->toDateString();

        return view('admin.manager.daily.view', [
            'daily' => $daily,
            'dailies' => $dailies,
            'products' => $products,
            'today' => $today
        ]);
    }

    public function create(Request $request)
    {
        try{
        $daily = new Daily;
        $daily->today = Carbon::now()->toDateString();
        $daily->save();
        } catch(\Exception $e){
            $daily = Daily::orderBy('id', 'desc')->firstOrFail();
            return redirect()->route('admin.manager.daily.view', ['daily_id' => $daily->id]);
        }

        return redirect()->route('admin.manager.daily.view', ['daily_id' => $daily->id]);
    }

    public function edit(Request $request, $id)
    {
        $daily = Daily::findOrFail($id);
        
        $items = $request->input('item');
        $syncs = [];
        foreach($items as $item) {
            $syncs[] = $item['product_id'];
        }

        $daily->products()->sync($syncs);
        $daily->save();

        return redirect()->route('admin.manager.daily.view', ['daily_id' => $daily->id]);
    }

    public function delete($id)
    {
        $daily = Daily::findOrFail($id);
        $daily->items()->delete();
        $daily->delete();

        return redirect()->route('admin.manager.daily');
    }

    public function createItem(Request $request, $daily_id)
    {
        $daily = Daily::findOrFail($daily_id);
        $daily->products()->attach($request->input('product_id'));
        $daily->save();

        return redirect()->route('admin.manager.daily.view', ['daily_id' => $daily_id]);
    }

    public function deleteItem($daily_id, $product_id)
    {
        $daily = Daily::findOrFail($daily_id);
        $daily->products()->detach($product_id);
        $daily->save();

        return redirect()->route('admin.manager.daily.view', ['daily_id' => $daily_id]);
    }
}