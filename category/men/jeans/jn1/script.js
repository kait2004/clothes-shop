var cart = {}; // корзина

function init() {
    //вычитуем файл goods.json
    $.getJSON("goods.json", goodsOut);
}

function goodsOut(data) {
    // вывод на страницу
    console.log(data);
    var out='';
    for (var key in data) {
        out+='<div class="cart">';
        out+='<div class="col-md-4 col-lg-4">'
        out+='</div>';
        out+='<div class="col-xs-8 col-sm-8 col-md-3 col-lg-3">'
        out+='<img class="img_good" src="'+data[key].img+'" alt=""></img>';
        out+='<p class="name">'+data[key].name+'</p>';
        out+='<div class="cost">'+data[key].cost+'руб'+'</div>';
        out+=`<button class="add-to-cart" data-id="${key}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>`;
        out+='</div>';
        out+='<div class="col-md-4 col-lg-4">'
        out+='</div>';
        out+='</div>';
    }
    $('.goods-out').html(out);
    $('.add-to-cart').on('click', addToCart);
}

function addToCart() {
    //добавляем товар в корзину
    var id = $(this).attr('data-id');
    // console.log(id);
    if (cart[id]==undefined) {
        cart[id] = 1; //если в корзине нет товара - делаем равным 1
    }
    else {
        cart[id]++; //если такой товар есть - увеличиваю на единицу
    }
    showMiniCart();
    saveCart();
}

function saveCart() {
    //сохраняю корзину в localStorage
    localStorage.setItem('cart', JSON.stringify(cart)); //корзину в строку
}

function showMiniCart() {
    //показываю мини корзину
    var out="";
    for (var key in cart) {
        out += key +' --- '+ cart[key]+'<br>';
    }
    $('.mini-cart').html(out);
}

function loadCart() {
    //проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('cart')) {
        // если есть - расширфровываю и записываю в переменную cart
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}

$(document).ready(function () {
    init();
    loadCart();
});
