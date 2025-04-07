<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function getAllWilayas(){
        $wilayas=Wilaya::all();
        return response()->json($wilayas);
    }
    public function store(Request $request){
      $orderInfo=$request->validate([
        "custommer_name"=> ["required","string","max:255"],
        "custommer_wilayas"=> ["required","string","max:255"],
        "custommer_phone"=> ["required","string","min:10"],
        "custommer_address"=> ["required","string",],
        "status"=>["required","string"],
        "product_id"=>["required","exists:products,id"],
        "quantity"=>["required","integer"],
        "total_price"=> ["required"],
      ]);
        $order=Order::create($orderInfo);

      $product=Product::find($orderInfo["product_id"]);
    /*   $wilaya=Wilaya::where("name",$orderInfo["custommer_wilayas"])->first();
      $order=Order::create(array_merge($orderInfo,[
        "total_price"=>($product->price*$orderInfo["quantity"])+$wilaya->delivery_price,
        ])
    ); */
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

    public function getSpecificOrder($orderId){
        $order=Order::find($orderId);
        $orderItem=OrderItem::find($orderId);
        $product=Product::find($orderItem->product_id);
        $product_price=$orderItem->price_at_purchase;
        $quantity= $orderItem->quantity;
        $product_price= $product_price*$quantity;
        $dilevery_price=Wilaya::where("name",$order->custommer_wilayas)->first()->delivery_price;

        return response()->json([
            "custommer_name"=>$order->custommer_name,
            "custommer_phone"=>$order->custommer_phone,
            "product_name"=>$product->name,
            "product_price"=>$product_price,
            "dilevery_price"=>$dilevery_price,
            "total"=>$order->total_price,
        ]);
    }

}
