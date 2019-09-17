<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CartController extends Controller
{
    public function addToCart ($product_id) 
    {
        $product = new Product();
        $item = $product->find($product_id);
        
        // Add some items in your cart
        $cartA = \Cart::add($item->id, $item->name, 1, $item->price);

        return redirect()->route('cart.show');        
    }

    public function remove(Request $request, $row) 
    {
        $cartA = \Cart::remove($row);
        return $cartA;    
    }



    public function show()
    {
        return view('front.carts.show');
    }

    
}
