<?php

namespace App\Http\Controllers;

use App\Model\Products;
use App\Model\Image;
use App\Brand;
use App\Comment;
use App\Model\Category;
use App\slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Customer;
use Illuminate\Support\Facades\Session;
use App\Model\Orders;
use App\Model\Carts;
use App\Model\Product_orders;
use Illuminate\Support\Facades\Auth;


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

        $featured = Products::where('is_new', 1)->with('attributes')->orderByDesc('id')->get();
        $sp_hot = Products::where('is_hot', 1)->with('attributes')->orderByDesc('id')->get();
        $sp_sale = Products::where('sale_price', '>', 0)->with('attributes')->orderByDesc('id')->get();
        $banner = slider::where('location', 'banner-home')->with(['slides' => function ($q) {
            return $q->with('image')->get();
        }])->first();
        return view('front-end.page.index', compact('featured', 'sp_hot', 'banner', 'sp_sale'));
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

        $loai_sp =  Products::where('category_id', $id)->get();
        $name_cate = Category::where('id', $id)->get();
        return view('front-end.page.products', compact('loai_sp','name_cate' ));
    }

    public function getBrand_products($id)
    {
        $brand_sp = Products::where('brand_id', $id)->get();
        $name_brand = Brand::where('id', $id)->get();
        return view('front-end.page.products_brands', compact( 'brand_sp', 'name_brand'));
    }

    public function detail($id)
    {
        $sanpham = Products::find($id);
        $sp_tuongtu = Products::where('category_id', $sanpham->category_id)->get();
        $comments = Comment::where('product_id', $id)->get();

        return view('front-end.page.details', compact('sanpham', 'sp_tuongtu', 'comments'));
    }

    public function create()
    {
        return view('front-end.page.register');
    }

    public function store(Request $request)
    {
        $param = $request->post();
        $param['password'] = Hash::make($param['password']);
        $model = User::create($param);
        return redirect()->back()->with('message', 'Đăng ký thành công');
    }


    public function login()
    {

        return view('front-end.page.login');
    }

    public function search(Request $req)
    {
        $product = Products::where('name', 'like', '%' . $req->key . '%')
            ->orWhere('price', $req->key)
            ->get();
        return view('front-end.page.search', compact('product'));
    }




    //  Cart
    public function indexCart(){
        $cart = Carts::with(['user', 'orders' => function($q) {
            return $q->with(['product_orders' => function($o){
                return $o->with(['product'])->get();
            }])->get();
        }])->get();
        return view('module.carts.index', compact('cart'));
    }

    // public function cartDetail(){

    //     return view ('module.carts.update');
    // }


    public function addCart($id)
    {
        $getProById = Products::find($id);
        $cart = Session::get('cart');
        if (!empty($cart[$id])) {
            if ($id == $cart[$id]['id']) {
                $qty = $cart[$id]['qty'] + 1;
            } else {
                $qty = 1;
            }
        } else {
            $qty = 1;
        }
        $cart[$id] = [
            "id" => $id,
            "name" => $getProById->name,
            "image_id" => route('asset.show', $getProById->image['name']),
            "qty" => $qty,
            "sale_price" => $getProById->sale_price,
            "price" => $getProById->price,
            "total" => $getProById->price * $qty,
        ];
        session()->put('cart', $cart);
        return  response()->json(['count' => count($cart), 'cart' => $cart], 200);
        // return ['count'=>count($cart),'cart'=>$cart];
    }

    public function deleteCart(Request $request)
    {
        // Session::flush();
        $request->session('cart')->flush();
        return redirect()->back();
    }

    public function getCart()
    {
        $subtotal = 0;
        if (!empty(Session::get('cart'))) {
            foreach (Session::get('cart') as $item) {
                $subtotal += $item['total'];
            }
        }
        return view('front-end.page.cart', compact('subtotal'));
    }
    public function delCart($id)
    {
        $cart = Session::get('cart');
        unset($cart[$id]);
        Session::put('cart', $cart);
        $subtotal = 0;
        if (!empty(Session::get('cart'))) {
            foreach (Session::get('cart') as $item) {
                $subtotal += $item['total'];
            }
        }
        return response()->json(['count' => count($cart), 'cart' => $cart, 'subtotal' => $subtotal], 200);
    }
    public function upCart(Request $request, $id)
    {
        $quantity = $request->qty;
        $cart = Session::get('cart');
        if (isset($cart)) {
            $cart[$id]['qty'] = $quantity;
            $cart[$id]['total'] = $quantity * $cart[$id]['price'];
        }
        session()->put('cart', $cart);
        $subtotal = 0;
        if (!empty(Session::get('cart'))) {
            foreach (Session::get('cart') as $item) {
                $subtotal += $item['total'];
            }
        }
        return  response()->json(['count' => count($cart), 'cart' => $cart, 'subtotal' => $subtotal], 200);
    }
    // End  Cart

    // start  Order
    public function getOrder()
    {
        $subtotal = 0;
        if (!empty(Session::get('cart'))) {
            foreach (Session::get('cart') as $item) {
                $subtotal += $item['total'];
            }
        }
        return view('front-end.page.order', compact('subtotal'));
    }

    public function creatOrder(Request $request)
    {
        $subtotal = 0;
        if (!empty(Session::get('cart'))) {
            foreach (Session::get('cart') as $item) {
                $subtotal += $item['total'];
            }
        }
        $creatOrder=new Orders;
        $creatOrder->amount="0";
        $creatOrder->total=$subtotal;
        $creatOrder->save();
        $getOneOrder=Orders::orderBy('id','desc')->first();
        $creatCarts=new Carts;
        $creatCarts->user_id= Auth::user()->id;
        $creatCarts->orders_id= $getOneOrder->id;
        $creatCarts->total= $subtotal;
        $creatCarts->is_address	= $request->is_address;
        $creatCarts->is_numberphone	= $request->is_numberphone;
        $creatCarts->save();
        foreach (Session::get('cart') as  $item) {
            $creatProduct_orders=new Product_orders;
            $creatProduct_orders->orders_id=$getOneOrder->id;
            $creatProduct_orders->product_id=$item['id'];
            $creatProduct_orders->custom_attr="36";
            $creatProduct_orders->quantity=$item['qty'];
            $creatProduct_orders->amount=$item['total'];
            $creatProduct_orders->save();
        }
        // echo 'Đặt hàng thành công';
        return redirect()->back()->with('alert', 'Đặt hàng thành công');
    }
    // End  Order
}
