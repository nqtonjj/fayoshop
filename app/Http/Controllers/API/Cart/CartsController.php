<?php

namespace App\Http\Controllers\API\Cart;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartsResources;
use App\Http\Resources\converJson;
use App\Model\Carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth.customer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Carts::with(['orders', 'user'])->get();
        return converJson::collection($carts);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('module.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->post();
        $isUser = Auth::check();
        // if ($isUser) {
        //     echo 'check';
        //     die;
        // }else {
        //     echo 'don`t check';
        //     die;
        // }
        // $userId = Auth::id();
        // TODO update check login user


        $model = Carts::create([
            'user_id' => $param['user_id'],
            'orders_id' => $param['orders_id'],
            'status_transport' => $param['status_transport'],
            'status_pay' => $param['status_pay'],
            // 'total' => $param['total'],
        ]);
        return new converJson($model);
        // return $isUser;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Carts  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Carts $cart)
    {
        return new CartsResources($cart);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Carts  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Carts $cart)
    {
        //
        // return view('');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Carts  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carts $cart)
    {
        $param = $request->post();
        $cart->update($param);
        return new CartsResources($cart);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Carts  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carts $cart)
    {
    }
}
