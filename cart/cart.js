var cart = {};
var itog = 0;
function loadCart() {
    //проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('cart')) {
        // если есть - расширфровываю и записываю в переменную cart
        cart = JSON.parse(localStorage.getItem('cart'));
            showCart();{
            }
        }
    else {
        $('.main-cart').html('Корзина пуста!');
    }
}

function showCart() {
    //вывод корзины
    if (!isEmpty(cart)) {
        $('.main-cart').html('Корзина пуста!');
    }
    else {
        $.getJSON('../admin/goods.json', function (data) {
            var goods = data;
            var out = '';
            for (var id in cart) {
            out+='<div class="col-md-12 col-lg-12">'
            out+='<div class="col-md-2 col-lg-2">'
            out+='<img class="img-cart" src="../'+data[id].img+'" alt=""></img>';
            out+='</div>';
            out+='<div class="col-md-2 col-lg-2">'
            out+='<p class="name-cart">'+data[id].name+'</p>';
            out+='</div>';
            out+='<div class="col-md-1 col-lg-1">'
            out+=  `<button data-id="${id}" class="minus-goods">-</button>`;
            out+=`${cart[id]}`;
            out+=  `<button data-id="${id}" class="plus-goods">+</button>`;
            out+='</div>';
            out+='<div class="col-md-1 col-lg-1">'
            out+='<div class="cost-cart">'+cart[id]*data[id].cost+'</div>';
            itog += cart[id]*goods[id].cost;
            out +='Руб.'
            out+='</div>';
            out+='<div class="col-md-1 col-lg-1">'
            out+= `<button data-id="${id}" class="del-goods">x</button>`;
            out+='</div>';
            out += '<br>';
            out += '<br>';
            out+='</div>';
            }
            out+='<div class="col-md-12 col-lg-12">'
            out +='<p id="summ">Итого: '+itog+' Руб.</p>';
            out+='</div>';
            $('.main-cart').html(out);
            $('.del-goods').on('click', delGoods);
            $('.plus-goods').on('click', plusGoods);
            $('.minus-goods').on('click', minusGoods);
        });
    }
}

function delGoods() {
    //удаляем товар из корзины
    var id = $(this).attr('data-id');
    delete cart[id];
    saveCart();
    showCart();
}
function plusGoods() {
    //добавить выбранный товар в корзине
    var id = $(this).attr('data-id');
    cart[id]++;
    saveCart();
    showCart();
}
function minusGoods() {
    //уменьшаем товар в корзине
    var id = $(this).attr('data-id');
    if (cart[id]==1) {
        delete cart[id];
    }
    else {
        cart[id]--;
    }
    saveCart();
    showCart();
}
function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart)); //корзину в строку
}

function isEmpty(object) {
    //проверка корзины на пустоту
    for (var key in object)
    if (object.hasOwnProperty(key)) return true;
    return false;
}

function sendEmail() {
    var ename = $('#ename').val();
    var email = $('#email').val();
    var ephone = $('#ephone').val();
    var emassege = $('#emassege').val();
    var adress = $('#adress').val();
    if (ename!='' && email!='' && ephone!='') {
        if (isEmpty(cart)) {
            $.post(
                "core/mail.php",
                {
                    "ename" : ename,
                    "email" : email,
                    "ephone" : ephone,
                    "emassege" : emassege,
                    "adress" : adress,
                    "cart" : cart
                },
                function(data){
                    if (data==1){
                        alert('Заказ отправлен')
                    }else{
                        alert('Повторите заказ')
                    }
                }
            );
        }
        else {
            alert('Корзина пуста');
        }
    }
    else {
        alert('Заполните поля');
    }

}


$(document).ready(function () {
   loadCart();
   $('.send-email').on('click', sendEmail); // отправить письмо с заказом
});