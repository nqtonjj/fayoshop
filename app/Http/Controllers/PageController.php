<?php

namespace App\Http\Controllers;
use App\Model\Products;
use App\Model\Image;
use App\Brand;
use App\Model\Category;
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

    public function index(){
        $brand    = Brand::orderByDesc('id')->get();
        $cate     = Category::orderByDesc('id')->get();
        $featured = Products::where('is_new',1)->orderByDesc('id')->get();
        return view('front-end.page.index', compact('featured', 'brand', 'cate'));
    }
    public function contact(){
        $brand    = Brand::orderByDesc('id')->get();
        $cate     = Category::orderByDesc('id')->get();
        return view('front-end.page.contact', compact( 'brand', 'cate'));
    }

    public function blog(){
        $brand    = Brand::orderByDesc('id')->get();
        $cate     = Category::orderByDesc('id')->get();
        return view('front-end.page.blog', compact( 'brand', 'cate'));
    }

    public function products($category){
        $brand    = Brand::orderByDesc('id')->get();
        $cate     = Category::orderByDesc('id')->get();
        $sp_theoloai = Products::where('category_id ', $category)->get();
        return view('front-end.page.products', compact('sp_theoloai', 'brand', 'cate'));
    }

    public function detail(){
        $brand    = Brand::orderByDesc('id')->get();
        $cate     = Category::orderByDesc('id')->get();
        return view('front-end.page.details', compact( 'brand', 'cate'));
    }

    public function register(){
        $brand    = Brand::orderByDesc('id')->get();
        $cate     = Category::orderByDesc('id')->get();
        return view('front-end.page.register', compact( 'brand', 'cate'));
    }

    public function login(){
        $brand    = Brand::orderByDesc('id')->get();
        $cate     = Category::orderByDesc('id')->get();
        return view('front-end.page.login');
    }
}
