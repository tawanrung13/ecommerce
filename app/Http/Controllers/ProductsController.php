<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Order;
use App\Checkout;
use App\KeepOrder;

class ProductsController extends Controller
{
    public function __construct()
  {
      $this->middleware('auth');
  }

    public function index(){

        if(Auth::user()->id != 0){
          $hit = Product::orderBy('p_hit', 'desc')->get();
          $products = Product::all();

		  return view('index')->with([
			       'product' => $products,
             'hit' => $hit,
		  ]);}else{
              return view('admin');
          }
    }

    public function showProduct($p_id){
      $products = Product::where('id',$p_id)->first();

        $products->p_hit += 1;
        $products->save();

		  return view('product')->with([
			       'product' => $products,
		  ]);
    }

    public function update(Request $request, $p_id){

      $product = Product::where('id',$p_id)->first();
      $order = new Order;

      $order->user_id = Auth::user()->id;
      $order->p_id = $product->id;
      $order->qty = $request->qty;
      $order->total_price = $request->qty * $product->p_price;
      $order->p_title = $product->p_title;
      $order->save();

		  return redirect('/');
    }

    public function showBrand($brand){
      $products = Product::where('p_cat',$brand)->count();
      $hit = Product::orderBy('p_hit', 'desc')->get();

      if($products < 1){
          $products = Product::where('p_brand',$brand)->get();
      }else{
          $products = Product::where('p_cat',$brand)->get();
      }

        redirect('/');
		  return view('index')->with([
			       'product' => $products,
             'hit' => $hit,
		  ]);
    }

    public function showCat($cat){
      $products = Product::where('p_cat',$cat)->get();

		  redirect('/');
		  return view('index')->with([
			       'product' => $products,
		  ]);
    }

    public function cart(){
      $products = Order::where('user_id',Auth::user()->id)->get();
      $price = Order::where('user_id',Auth::user()->id)->sum('total_price');
		  return view('cart')->with([
			       'order' => $products,
                   'price' => $price,
		  ]);
    }

    public function upCart(Request $request, $id, $p_id){

      $order = Order::where('id',$id)->first();
      $product = Product::where('id',$p_id)->first();

      $order->qty = $request->qty;
      $order->total_price = $request->qty * $product->p_price;
      $order->save();

		  return back();
    }

    public function delete($id){

      $order = Order::where('id',$id)->first();

      $order->delete();

		  return back();
    }

    public function pay(Request $request){

      $pay = new Checkout;
      $price = Order::where('user_id',Auth::user()->id)->sum('total_price');

      $pay->user_id = Auth::user()->id;
      $pay->user_name = $request->name;
      $pay->address = $request->address;
      $pay->contact = $request->contact;
      $pay->price = $price;
      $pay->save();

      ;


      $order = Order::where('user_id',Auth::user()->id)->get();
      foreach ($order as $order){
        $keep = new KeepOrder;
        $keep->user_name = $request->name;
        $keep->p_title = $order->p_title;
        $keep->qty = $order->qty;
        $keep->total_price = $order->total_price;
        $keep->save();
        $order->delete();
        }

	    return view('home');
    }


    public function checkout(Request $request){

        $price = Order::where('user_id',Auth::user()->id)->sum('total_price');
	    return view('checkout')->with([
               'price' => $price,
		]);
    }
}
