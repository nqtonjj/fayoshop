<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = Brand::orderBy('priority', 'DESC')->paginate(10);
        return view('module.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // cái brands ở create dau? ??
        // biet dau t coppy ben cate qua am =,=
        return view('module.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $brands = [
            'name' => $request->name,
            'priority' => $request->priority,
            'parent_id' => $request->parent_id == 0 || $request->parent_id == '0' ? null : $request->parent_id,
        ];

        $save = Brand::create($brands);
        if ($save) {
            return redirect()->route('brands.index');
        }else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
        return view('module.brands.update', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
        $brand->name = $request->name;
        $brand->priority = $request->priority;
        if (!$request->parent_id == 0 || !$request->parent_id == '0') {
            $brand->parent_id = $request->parent_id;
        };
        $update = $brand->save();

        if ($update) {
            return redirect()->route('brands.index');
        } else {
            return view('module.categories.update', ['brand' => $brand]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
