// add cart
$(".addCart").click(function() {
    var id = $(this).attr("idsp");
    $.ajax({
        url: "/cart/addcart/" + id,
        type: "get",
        success: function(data) {
            let div = "";
            for (const prop in data.cart) {
                var mang = data.cart[prop];
                div += '<div class="item checkout-item border-0"><div class="cart_image" style=" width:60px;"><img src="'+mang['image_id']+'" alt="" /></div><div class="cart_description cart_description2"><span style="font-size: 11px;">'+mang['name']+'</span><span style="font-size: 11px;">x '+mang['qty']+'</span></div><div class="cart_total-price text-right" style="width: 30%;"><p style="font-size: 14px;">'+mang['total']+' đ</p></div></div>'
            }
            $("#countcart").html(data.count);
            $("#showCartHeader").html(div);
        }
    });
    return false;
});
// add cart
//---------------------------------------------------------------------------
// delete cart

$(".delCart").click(function() {
    var id = $(this).attr("idsp");
    $.ajax({
        url: "/cart/deleteCart/" + id,
        type: "get",
        success: function(data) {
            let div = "";
            for (const prop in data.cart) {
                var mang = data.cart[prop];
                div += '<div class="item checkout-item border-0"><div class="cart_image" style=" width:60px;"><img src="'+mang['image_id']+'" alt="" /></div><div class="cart_description cart_description2"><span style="font-size: 11px;">'+mang['name']+'</span><span style="font-size: 11px;">x '+mang['qty']+'</span></div><div class="cart_total-price text-right" style="width: 30%;"><p style="font-size: 14px;">'+mang['total']+' đ</p></div></div>'
            }
            let divcart = "";
            for (const prop in data.cart) {
                var mang = data.cart[prop];
                divcart += '<div class="item"><div class="cart_image"><img src="'+mang['image_id']+'" alt="" /> </div><div class="cart_description"><span>'+mang['name']+'</span><span>x '+mang['qty']+'</span></div><div class="cart_quantity"><button class="plus-btn updateQty" type="button" name="button" idsp='+mang['id']+'><img src="plus.svg" alt="" /><span>+</span> </button><input type="number" class="qty'+mang['id']+'" name="qty" value="'+mang['qty']+'"><button class="minus-btn updateQty" type="button" name="button" idsp='+mang['id']+'><span>-</span></button></div><div class="cart_total-price">'+mang['total']+'đ('+mang['price']+'đ)</div><button type="button" idsp='+mang['id']+' class="btn-danger btn-pad delCart"><span>X</span></button></div>';
            }
            divcart +="<script src='/front-end/js/Cart.js'>";
            $("#countcart").html(data.count);
            $("#showCartHeader").html(div);
            $(".total-cart").html(data.subtotal+" đ");
            if (data.count==0) {
                $("#showCart").html('<div class="item"><h5>Bạn chưa có sản phẩm nào trong giỏ hàng</h5></div>');
            }else{
                $("#showCart").html(divcart);
            }
        }
    });
return false;
});
// delete cart
//---------------------------------------------------------------------------
// + qty cart
$(".plus-btn").click(function(e) {
    e.preventDefault();
        var $this = $(this);
        var $input = $this.closest("div").find("input");
        var value = parseInt($input.val());

        if (value && 100) {
            value = value + 1;
        } else {
            value = value + 1;
        }

        $input.val(value);
    var id = $(this).attr("idsp");
    var qty = $('.qty'+id).val();
    var qty1 = $('.qty').val();
    console.log(qty1,'dsadsa');
    console.log(id+qty,'1');
    $.ajax({
        url: "/cart/updateCart/" + id,
        type: "get",
        data:{qty: qty},
        success: function(data) {
            let div = "";
            for (const prop in data.cart) {
                var mang = data.cart[prop];
                div += '<div class="item checkout-item border-0"><div class="cart_image" style=" width:60px;"><img src="'+mang['image_id']+'" alt="" /></div><div class="cart_description cart_description2"><span style="font-size: 11px;">'+mang['name']+'</span><span style="font-size: 11px;">x '+mang['qty']+'</span></div><div class="cart_total-price text-right" style="width: 30%;"><p style="font-size: 14px;">'+mang['total']+' đ</p></div></div>'
            }
            let divcart = "";
            for (const prop in data.cart) {
                var mang = data.cart[prop];
                divcart += '<div class="item"><div class="cart_image"><img src="'+mang['image_id']+'" alt="" /></div><div class="cart_description"><span>'+mang['name']+'</span><span>x '+mang['qty']+'</span></div><div class="cart_quantity"><button class="plus-btn" type="button" name="button" idsp='+mang['id']+'><img src="plus.svg" alt="" /><span>+</span></button><input type="number" class="qty'+mang['id']+'" name="qty" value="'+mang['qty']+'"><button class="minus-btn" type="button" name="button" idsp='+mang['id']+'><span>-</span></button></div><div class="cart_total-price">'+mang['total']+'đ('+mang['price']+'đ)</div><button type="button" idsp='+mang['id']+' class="btn-danger btn-pad delCart"><span>X</span></button></div>';
            }
            divcart +="<script src='/front-end/js/Cart.js'></script>";
            $("#countcart").html(data.count);
            $("#showCartHeader").html(div);
            $("#showCart").html(divcart);
            $(".total-cart").html(data.subtotal+" đ");
        }
    });
return false;
});

// + qty cart
//---------------------------------------------------------------------------
// - qty cart
$(".minus-btn").click(function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest("div").find("input");
    var value = parseInt($input.val());

    if (value && 1) {
        value = value - 1;
    } else {
        value = 0;
    }
    $input.val(value);
    var id = $(this).attr("idsp");
    var qty = $('.qty'+id).val();
    var qty1 = $('.qty').val();
    console.log(qty1,'dsadsa');
    console.log(id+qty,'1');
    $.ajax({
        url: "/cart/updateCart/" + id,
        type: "get",
        data:{qty: qty},
        success: function(data) {
            let div = "";
            for (const prop in data.cart) {
                var mang = data.cart[prop];
                div += '<div class="item checkout-item border-0"><div class="cart_image" style=" width:60px;"><img src="'+mang['image_id']+'" alt="" /></div><div class="cart_description cart_description2"><span style="font-size: 11px;">'+mang['name']+'</span><span style="font-size: 11px;">x '+mang['qty']+'</span></div><div class="cart_total-price text-right" style="width: 30%;"><p style="font-size: 14px;">'+mang['total']+' đ</p></div></div>'
            }
            let divcart = "";
            for (const prop in data.cart) {
                var mang = data.cart[prop];
                divcart += '<div class="item"><div class="cart_image"><img src="'+mang['image_id']+'" alt="" /></div><div class="cart_description"><span>'+mang['name']+'</span><span>x '+mang['qty']+'</span></div><div class="cart_quantity"><button class="plus-btn" type="button" name="button" idsp='+mang['id']+'><img src="plus.svg" alt="" /><span>+</span></button><input type="number" class="qty'+mang['id']+'" name="qty" value="'+mang['qty']+'"><button class="minus-btn" type="button" name="button" idsp='+mang['id']+'><span>-</span></button></div><div class="cart_total-price">'+mang['total']+'đ('+mang['price']+'đ)</div><button type="button" idsp='+mang['id']+' class="btn-danger btn-pad delCart"><span>X</span></button></div>';
            }
            divcart +="<script src='/front-end/js/Cart.js'></script>";
            $("#countcart").html(data.count);
            $("#showCartHeader").html(div);
            $("#showCart").html(divcart);
            $(".total-cart").html(data.subtotal+" đ");
        }
    });
return false;
});
// - qty cart
//---------------------------------------------------------------------------
