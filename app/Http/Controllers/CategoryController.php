<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $request->user()->authorizeRoles('admin');
        $categoriesPaginate = Category::orderBy('priority', 'DESC')->paginate(10);
        return view('module.categories.index')->with('categoriesPaginate', $categoriesPaginate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $category = [
            'name' => $request->name,
            'priority' => $request->priority,
            'parent_id' => $request->parent_id == 0 || $request->parent_id == '0' ? null : $request->parent_id,

        ];

        $save = Category::create($category);
        if ($save) {
            return redirect()->route('category.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('module.categories.update', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $category->name = $request->name;
        $category->priority = $request->priority;
        if (!$request->parent_id == 0 || !$request->parent_id == '0') {
            $category->parent_id = $request->parent_id;
        };
        $update = $category->save();

        if ($update) {
            return redirect()->route('category.index');
        } else {
            return view('module.categories.update', ['category' => $category]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect()->route('category.index');
    }
}
