<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request){
      $orderInfo=$request->validate([
        "custommer_name"=> ["required","string","max:255"],
        "custommer_wilayas"=> ["required","string","max:255"],
        "custommer_phone"=> ["required","string","min:10"],
        "custommer_address"=> ["required","string",],
        "status"=>["required","string"],
        "product_id"=>["required","exists:products,id"],
        "quantity"=>["required","integer"],
        "delivery_price"=> ["required",],
      ]);

      $product=Product::find($orderInfo["product_id"]);
      $wilaya=Wilaya::where("name",$orderInfo["custommer_wilayas"])->first();
      $order=Order::create(array_merge($orderInfo,[
        "total_price"=>($product->price*$orderInfo["quantity"])+$wilaya->delivery_price,
        ])
    );
      $orderItem=OrderItem::create([
      "order_id"=> $order->id,
      "product_id"=>$product->id,
      "quantity"=>$orderInfo["quantity"],
      "price_at_purchase"=>$product->price
    ]);

    return response()->json([
        "message"=>"Order placed successfully!",
        "order"=> $order,
        "orderItem"=> $orderItem
    ] );



    }

}
