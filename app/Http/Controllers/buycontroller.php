<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order\Order;
use App\Models\Order\OrderItem;

class buycontroller extends Controller
{
    function show()
    {
        $orders = Order::all();
        return view('welcome')->with('orders', $orders);
    }

    function add()
    {
        return view('addorder');
    }


    function store(Request $req)
        {
            $order = Order::create([
                'name'=> $req->username,
                'email'=> $req->email_id,
            ]);
            foreach($req->product_name as $key=> $prodtname){
                OrderItem::create([
                    'order_id' => $order->id,
                    'itemame'=> $prodtname,
                    'quantity'=> $req->quantity[$key],
                    'price'=> $req->price[$key]
                   
                ]);     
            }

            return redirect()->route('editorder', ['orderid'=> $order->id]);

        }

        public function edit($orderid)
        {
            $order = Order::find($orderid);
            $orderitem = OrderItem::where('order_id' ,$orderid)->get();
            return view('editorder')->with(['orderdetails' => $order, 'orderitems' => $orderitem]);
        }
        
        public function destroy($orderid){
            $order = Order::where('id', $orderid)->delete();
            return redirect()->back()->with('status', 'Deleted Successfully');
        }
    

        public function update(Request $request, $orderid){
            $orderitems = OrderItem::where('order_id', $orderid)->get();
            foreach($orderitems as $orderitem){
                if($request->has('trackingid_'.$orderitem->id)){
                    $trackid = 'trackingid_'.$orderitem->id;
                    OrderItem::where('id',$orderitem->id)->update([
                        'trackingid' => $request[$trackid]
                    ]);
                }
            }
            return redirect()->route('editorder', ['orderid'=> $orderid]);
        }

    
}
