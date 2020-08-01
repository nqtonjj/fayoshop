<?php

namespace App\Http\Controllers;

use App\Slide;
use App\slider;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::with(['image', 'slider'])->paginate(10);
        return view('module.slides.index', ['slide' => $slide]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = slider::all();
        return view('module.slides.create', ['sliders' => $sliders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = [
            'title' => $request->title,
            'content' => $request->content,
            'image_id' => $request->image_id,
        ];
        $slide = Slide::create($param);
        if ($request->has('slider_id')) $slide->slider_id = $request->slider_id;

        $slide->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliders = slider::all();
        $slide = Slide::where('id', $id)->first();
        return view('module.slides.update', ['slide' => $slide, 'sliders' => $sliders]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $param = [
            'title' => $request->title,
            'content' => $request->content,
            'image_id' => $request->image_id,
        ];
        $slide = Slide::where('id', $id)->first();
        $slide->update($param);
        if ($request->has('slider_id')) $slide->slider_id = $request->slider_id;
        $slide->save();
        return redirect()->back()->with('message', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        //
        $slide->delete();
        return redirect()->route('slides.index');
    }
}
