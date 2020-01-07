<?php require_once ($_SERVER["DOCUMENT_ROOT"]."/header.php");?>

      <h1> ВАША КОРЗИНА </h1>
      <span>товары резервируются на ограниченное время</span>
      <div class="basket">
      <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1"></div>
      <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">Фото</div>
      <div class="col-xs-0 col-sm-0 col-md-2 col-lg-2">Наименование</div>
      <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">Количество</div>
      <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">Стоимость</div>
      <div class="col-xs-0 col-sm-0 col-md-1 col-lg-2">Удалить</div>
      <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3"></div>
      </div>
      <div class="main-cart"></div> 

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="email-field">
          <h2>ДАННЫЕ ДОСТАВКИ</h2>
      <p><input type="text" id="ename" placeholder="Введите имя"></p>
        <p><input type="mail" id="email" placeholder="Введите email"></p>
        <p><input type="phone" id="ephone" placeholder="Введите телефон"></p>
        <p><input type="text" id="adress" placeholder="Введите адрес доставки"></p>
        <p><input type="text" id="emassege" placeholder="Введите комментарий к заказу"></p>
        <button class="send-email">Заказать</button>
    </div>
<?php require_once ($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>