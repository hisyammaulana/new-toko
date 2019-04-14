<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Carts;
use Session;
use Auth;

class ApiCartController extends Controller
{
    protected $cart;

  public function __construct(CartService $cart)
    {
        $this->cart = $cart;
    }

    public function addProduct(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
        ]);

        $product = Product::find($request->get('product_id'));
         $quantity = $request->get('quantity');
    }

    public function cartin(Request $request){
        $cart = Cart::create([
            'customer_id' => $request->customer_id,
            'status' => $request->status,
        ]);

        return [
            'message' => 'success',
            'status' => 1,
            'data' => $cart,
        ];
    }

    public function productin(Request $request){
        $productcart = ProductCart::create([
            'cart_id' => $request->cart_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return [
            'message' => 'success',
            'status' => 1,
            'data' => $productcart,
        ];
    }

    public function bayar(Request $request){

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imagename = $image->getClientOriginalName();

            if ($request->file('image')->isValid()) {
                $img_name = "$imagename";
                $path = 'transaksi';
                $request->file('image')->move($path, $imagename);
                $input['image'] = $img_name;
            }
        }

        $data = Transaksi::create([
            'product_cart_id' => $request->product_cart,
            'image' => $request->image,
        ]);

        return[
            'message' => 'success',
            'status' => 1,
            'data' => $data,
        ];
    }
}
