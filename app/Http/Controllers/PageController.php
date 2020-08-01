<?php

namespace App\Http\Controllers;

use App\Model\Products;
use App\Model\Image;
use App\Brand;
use App\Model\Category;
use App\slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PageController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $featured = Products::where('is_new', 1)->orderByDesc('id')->get();
        $sp_hot = Products::where('is_hot', 1)->orderByDesc('id')->get();
        $banner = slider::where('location', 'banner-home')->with(['slides' => function ($q) {
            return $q->with('image')->get();
        }])->first();
        return view('front-end.page.index', compact('featured', 'sp_hot', 'banner'));
    }
    public function contact()
    {

        return view('front-end.page.contact');
    }

    public function blog()
    {

        return view('front-end.page.blog');
    }

    public function getproducts($id)
    {

        $loai_sp = Products::where('category_id', $id)->get();
        $sp_tatca = Products::all();
        return view('front-end.page.products', compact('loai_sp', 'sp_tatca'));
    }

    public function detail(Request $request)
    {
        $sanpham = Products::where('id', $request->id)->first();
        $sp_tuongtu = Products::where('category_id', $sanpham->category_id)->get();
        return view('front-end.page.details', compact('sanpham', 'sp_tuongtu'));
    }

    public function register()
    {

        return view('front-end.page.register');
    }

    public function login()
    {

        return view('front-end.page.login');
    }
}
