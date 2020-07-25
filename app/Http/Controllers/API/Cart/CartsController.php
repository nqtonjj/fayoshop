<?php
namespace App\Http\Controllers\API\Cart;

use App\Http\Controllers\Controller;
use App\Http\Resources\converJson;
use App\Model\Carts;
use Illuminate\Http\Request;

Class CartsController extends Controller {
    public function __construct()
    {
        $this->middleware('auth.customer');
    }

    public function getCartItems()
    {
        # code...
    }
    public function addCartItem()
    {
        # code...
    }
    public function deleteCartItem()
    {
        # code...
    }
}
