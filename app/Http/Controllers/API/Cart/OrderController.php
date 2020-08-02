<?php

namespace App\Http\Controllers\API\Cart;

use App\Http\Controllers\Controller;
use App\Http\Resources\converJson;
use App\Model\Orders;
use App\Model\Product_orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function __construct()
    {
    }

    public function createOrderId()
    {
        $user = Auth::user();

        $order = new Orders();
        $order->is_guest = $user ? true : false;
        $order->save();
        return response()->json(['orderID' => $order->id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addOrderItem(Request $request)
    {
        # code...
        $rule = [
            'orders_id' => 'required',
            'product_id' => 'required',
        ];
        $isValidate = Validator::make($request->post(), $rule);

        if ($isValidate->fails()) return response()->json(['errMess' => $isValidate->errors()->first()]);

        $order = Orders::where('id', $request->orders_id)->first();
        if (!$order) return response()->json(['messenge' => 'gio hang khong ton tai']);

        $orderItem = [
            'orders_id' => $request->orders_id,
            'product_id' => $request->product_id,
            'custom_attr' => $request->custom_attr,
            'amount' => $request->amount ?? 0,
        ];

        Product_orders::create($orderItem);
        return response()->json(['messenge' => 'Thanh cong']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param    $orderId
     * @param    $itemId
     * @return \Illuminate\Http\Response
     */
    public function updateOrderItem(Request $request, $orderId, $itemId)
    {
        # code...
        $order = Orders::where('id', $orderId)->first();
        if (!$order) return response()->json(['messenge' => 'gio hang khong ton tai']);

        $item = Product_orders::where('id', $itemId)->first();
        if (!$item) return response()->json(['messenge' => 'san pham khong ton tai']);

        $itemUpdate = [
            'custom_attr'=> $request->custom_attr,
            'amount'=> $request->amount ?? $item->amount,
        ];

        $item->update($itemUpdate);

        return response()->json(['messenge' => 'capa nhat thanh cong']);
    }

    /**
     * Display the specified resource.
     *
     * @param  $orders_id
     * @return \Illuminate\Http\Response
     */
    public function getOrderItems($orders_id)
    {
        $order = Orders::where('id', $orders_id)->with('product_orders')->first();
        return new converJson($order);
    }

    /**
     * Display the specified resource.
     *
     * @param  $orderId
     * @return \Illuminate\Http\Response
     */
    public function destroyOrder($orderId)
    {
        $order = Orders::where('id', $orderId)->first();
        $order->delete();
        return response()->json(['messenge' => 'Thanh cong']);
    }
    /**
     * Display the specified resource.
     *
     * @param  $orderId
     * @param  $itemId
     * @return \Illuminate\Http\Response
     */
    public function destroyOrderItem($orderId, $itemId)
    {
        $order = Orders::where('id', $orderId)->first();
        if (!$order) return response()->json(['messenge' => 'gio hang khong ton tai']);


        $item = Product_orders::where('id', $itemId)->first();
        if (!$item) return response()->json(['messenge' => 'san pham khong ton tai']);

        $item->delete();
        return response()->json(['messenge' => 'Thanh cong']);
    }
}
