<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Slider::paginate(10);
        return view('module.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('module.sliders.create');
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
        // $param = $request->post();
        // $get_image = $request->file('image');
        // if($get_image){
        //     $get_name_image = $get_image->getClientOriginalName();
        //     $name_image = current(explode('.',$get_name_image));
        //     $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        //     $get_image->store('public/uploads/slider',$new_image);
        //     $slider = new Slider();
        //     $slider->title = $param['title'];
        //     $slider->content = $param['content'];
        //     $slider->image = $new_image;
        //     $slider->link = $param['link'];
        //     $slider->save();
        //     return redirect()->back();
        // }
        // $model = Slider::create($param);
        $param = [
            'title' => $request->title,
            'location' => $request->location,
        ];
        $slider = Slider::create($param);
        if ($request->has('image_id')) {
            foreach ($request->image_id as $slider_id) {
                Slide::find($slider_id)->update([
                    'slider_id' => $slider->id
                ]);
            }
        }

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
        $slider = Slider::where('id', $id)->with(['slides' => function ($q) {
            return $q->with('image')->get();
        }])->first();
        return response()->json(['data' => $slider]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::where('id', $id)->with(['slides' => function ($q) {
            return $q->with('image')->get();
        }])->first();
        return view('module.sliders.update')->with('slider', $slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
        $param = $request->post();
        $slider->update($param);
        return redirect()->back()->with('message', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
        $slider->delete();
        return redirect()->route('sliders.index');
    }
}
