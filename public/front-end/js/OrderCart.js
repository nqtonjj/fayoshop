const url = "http://127.0.0.1:8000/api";
const api = function ({ param, method = "GET", data = {} }) {
    return new Promise(function (resolve, reject) {
        $.ajax({
            url: `${url}/${param}`,
            method: method,
            // contentType: "application/json",
            data: data,
            success(response, textStatus) {
                resolve(response, textStatus);
            },
            error(response) {
                resolve({
                    result: false,
                    type: "popup",
                    code: "500",
                    message: "Server Error",
                });
            },
        });
    });
};

const getLocalData = function (key, type) {
    if (!localStorage) {
        console.error("not support localStorage");
    }
    try {
        const stringValue = localStorage.getItem(key);
        if (!stringValue || stringValue == "null") {
            return null;
        }
        if (type == "string") {
            return stringValue;
        }
        return JSON.parse(stringValue);
    } catch (error) {
        return null;
    }
};

const LocalStorageKeyOrderId = "orderId";
const LocalStorageKeyOrderItems = "order/Items";
const LocalStorageKeyStatusOrder = "statusOrder";

const dataType = {
    attributes: [
        {
            id: 4,
            products_id: 4,
            label: String,
            value: String,
            price: 90,
        },
    ],
    brand_id: 0,
    category_id: 3,
    content: String,
    description: String,
    id: 4,
    image_id: 2,
    is_hot: 0,
    is_new: 1,
    name: String,
    parent_id: 0,
    price: 60,
    sale_price: 9,
    size: String,
    image: {
        name: String,
    },
};

const OrderType = {
    amount: 0,
    id: 7,
    is_guest: 0,
    is_order: 1,
    product_orders: [
        {
            id: 2,
            orders_id: 7,
            product_id: 4,
            custom_attr: "4",
            amount: 60,
        },
    ],
    total: 0,
};

let Order_Id = parseInt(getLocalData(LocalStorageKeyOrderId, "string"));
/**
 * @type {OrderType}
 */
let Order_items = getLocalData(LocalStorageKeyOrderItems);

const getItemsOrder = async function () {
    const option = {
        param: `order/${Order_Id}`,
        method: "GET",
        data: {},
    };
    const { data } = await api(option);
    localStorage.setItem(LocalStorageKeyOrderItems, JSON.stringify(data));
    Order_items = data;
};
/**
 * @param {dataType} item
 * @param {Number} quantity
 */
const addItemToOrder = async function (item, quantity) {
    const option = {
        param: "order/add_item",
        method: "post",
        data: {
            orders_id: Order_Id,
            product_id: item.id,
            amount: item.price,
            quantity: quantity,
            custom_attr: item.attributes[0].id,
        },
    };
    await api(option);
    localStorage.setItem(LocalStorageKeyStatusOrder, "ordering");
};

const setCountOrder = function () {
    $(".nav_cart--count").text(Order_items.product_orders.length);
};

/**
 *
 * @param {OrderType} Order_items
 */
const renderItemsOrder = async function (Order_items) {
    await Promise.all(
        Order_items.product_orders.map(async (item) => {
            const option = {
                param: `product/${item.product_id}`,
                method: "GET",
                data: {},
            };
            const { data } = await api(option);
            return data;
        })
    ).then((value) => {
        $("#mySidebar").find(".list-item").empty();
        $.each(value, function (i, el) {
            const template = `<div class="item checkout-item border-0">
            <div class="cart_image" style=" width:60px;">
                <img width="100" src="/asset/${el.image.name}" alt="" />
            </div>
            <div class="cart_description cart_description2">
                <span style="font-size: 11px;">${el.name}</span>
                <span style="font-size: 11px;">White</span>
            </div>
            <div class="cart_total-price text-right" style="width: 30%;">
                <p style="font-size: 14px;">${el.price || el.sale_price} đ</p>
            </div>
        </div>`;
            $("#mySidebar").find(".list-item").append(template);
        });
    });
};
$(document).ready(function () {
    $(".add-to-cart").on("click", async function (e) {
        e.preventDefault();
        const that = $(this);
        const item = JSON.parse(that.attr("data-item"));
        if (!Order_Id) {
            const option = {
                param: "order/create_order",
            };
            await api(option).then(({ orderID }) => {
                localStorage.setItem(LocalStorageKeyOrderId, orderID);
                Order_Id = parseInt(orderID);
            });
        }
        await addItemToOrder(item, 1).then(async (val) => {
            await getItemsOrder();
        });
        setCountOrder();
        await renderItemsOrder(Order_items)
    });
    setCountOrder();
});

window.onload = async function () {
    if (Order_Id && !Order_items) await getItemsOrder();
    await renderItemsOrder(Order_items);
};
