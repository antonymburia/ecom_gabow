<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    function shop()
    {
        $data = Product::all();
        return view('shop', ['products' => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();

            return redirect('/shop');
        } else {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId = session()->get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    function cartList()
    {
        $userId = session()->get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        return view('cartList', ['products' => $products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartList');
    }
    function orderNow()
    {
        $userId = session()->get('user')['id'];
        $total = $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }
    function checkout(Request $req)
    {
        $userId = session()->get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = "paypal";
            $order->first_name = $req->firstName;
            $order->last_name = $req->lastName;
            $order->phone_number = $req->phone_number;
            $order->email = $req->email;
            $order->town = $req->town;
            $order->city = $req->email;
            $order->region = $req->region;
            $order->save();

            Cart::where('user_id', $userId)->delete();
            return redirect('/');
        }
    }
    function myOrders()
    {
        $userId = session()->get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('orders', ['orders' => $orders]);
    }
    function addProduct(Request $req)
    {
        $product = new Product;
        $product->name = $req->name;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->category = $req->category;
        $product->description = $req->description;
        if ($req->file('image')) {
            $file = $req->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;  
        }
        $product->save(); 


        return redirect('/login');
    }
}
