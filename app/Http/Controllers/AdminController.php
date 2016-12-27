<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Checkout;
use App\KeepOrder;

class AdminController extends Controller
{
    public function product(){

      $products = Product::all();

		  return view('product_report')->with([
			       'product' => $products,
		  ]);
    }

    public function order(){

      $order = KeepOrder::all();

		  return view('order_report')->with([
			       'order' => $order,
		  ]);
    }

    public function customer(){

      $customer = Checkout::all();

		  return view('customer_report')->with([
			       'customer' => $customer,
		  ]);
    }

    public function report(){

      $customer = Checkout::all();
      $order = KeepOrder::all();
      $products = Product::all();

		  return view('report')->with([
			       'customer' => $customer,
             'order' => $order,
             'product' => $products,
		  ]);
    }


}
