<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShoppingList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ShoppingListRequest;

class ShoppingListController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $products= Product::all();
        View::share('products', $products);
    }

    public function index()
    {
        $totalPrice=0;
        $lists=Auth::user()->shoppinglists()->orderByDesc('created_at')->get();
        for ($i=0; $i < sizeof($lists); $i++) { 
            $total=$lists[$i]->product->price*$lists[$i]->quantity;
            $totalPrice+=$total;
        }
        return view('welcome', compact('lists', 'totalPrice'));
    }

    public function create(ShoppingListRequest $request)
    {
        Auth::user()->shoppinglists()->create([
            'quantity'=>$request->quantity,
            'product_id'=>$request->product_id,
        ]);

        return redirect(route('homepage'));
    }
    
    public function update(ProductRequest $request)
    {
        $product=Product::find($request->product);
        
        $product->update([
            'price'=>$request->price
        ]);
        
        
        return redirect(route('homepage'));
    }
    
    public function delete(ShoppingList $list)
    {
        $list=Auth::user()->shoppinglists()->where("id", $list->id )->delete();
        
        
        return redirect(route('homepage'));
    }
}
