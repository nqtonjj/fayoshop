<?php

namespace App\Http\Controllers;

use App\Model\Products;
use App\Brand;
use App\Http\Resources\ProductsResources;
use App\Model\Category;
use App\Model\Custom_attributes;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::with(['image', 'attributes', 'category'])->paginate(10);
        return view('module.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('module.products.create');
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
        $model = Products::create($param);
        if ($model && $request->has('attributes')) {
            $array = $request['attributes'];
            $attributes = array();
            foreach (array_keys($array) as $fieldKey) {
                foreach ($array[$fieldKey] as $key => $value) {
                    $attributes[$key][$fieldKey] = $value;
                }
            }
            foreach ($attributes as $key => $value) {
                Custom_attributes::create([
                    'products_id' => $model['id'],
                    'label' => $value['label'],
                    'value' => $value['value'],
                    'price' => $value['price'],
                ]);
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Products $product)
    {
        return new ProductsResources($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        //
        $attr = Custom_attributes::where('products_id', $product->id)->get();
        return view('module.products.update')->with(['product' => $product, 'attr' => $attr]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        $param = $request->post();

        $param['is_hot'] = $param['is_hot'] ?? false ? true : false;
        $param['is_new'] = $param['is_new'] ?? false ? true : false;
        $product->update($param);

        if ($product && $request->has('attributes')) {
            $array = $request['attributes'];
            $attributes = array();
            foreach (array_keys($array) as $fieldKey) {
                foreach ($array[$fieldKey] as $key => $value) {
                    $attributes[$key][$fieldKey] = $value;
                }
            }

            foreach ($attributes as $key => $value) {
                if (array_key_exists('id', $value)) {
                    Custom_attributes::where('id', $value['id'])->update($value);
                }else {
                    Custom_attributes::create([
                        'products_id' => $product['id'],
                        'label' => $value['label'],
                        'value' => $value['value'],
                        'price' => $value['price'],
                    ]);
                }
            }
        }

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        //
        $product->delete();
        return redirect()->route('product.index');
    }
}
