<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Аренда</title>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=f461f187-b614-45c4-988e-6b214fceb781&amp;lang=ru_RU" type="text/javascript"></script></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">
    <link rel="stylesheet" href="/assets/css/screen.css">
  </head>
  <body>
    <?php 
      include_once('./templates/blocks/header.php');
    ?>
    <?php 
      include_once('./templates/blocks/mobile-menu.php');
    ?>
    <main>
      <div class="content">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Аренда бытовок</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Аренда бытовок</h1>
        </div>
        <div class="preview_bytovka-wrapper">
          <?php
            include_once('./templates/blocks/rentbyt.php');
          ?>
        </div>
        <?php
          include_once('./templates/blocks/calculator.php');
        ?>
        <?php
          include_once('./templates/blocks/main_foto-gal.php');
        ?>
        <?php
          include_once('./templates/blocks/form.php');
        ?>
        <?php
          include_once('./templates/blocks/polezno.php');
        ?>
      </div>
    </main>
    <?php
      include_once('./templates/blocks/footer.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/foundation.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/jquery.fancybox.min.js"></script>
    <script src="/assets/js/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script async src="/assets/js/main.js"></script>
    <div class="popup_form order_popup reveal" id="popup_order" data-reveal>
      <button class="close-modal" data-close aria-label="Close modal" type="button"></button>
      <form action="" method="">
        <div class="heading">Заказ бытовок</div>
        <div class="order_form-group">
          <label>
            <input type="text">
            <div class="placeholder-input">Ваше имя</div>
          </label>
          <label>
            <input type="tel" required>
            <div class="placeholder-input">Ваш телефон<span>*</span></div>
            <div class="error-message">Пожалуйста, введите корректный номер телефона</div>
          </label>
          <label>
            <textarea></textarea>
            <div class="placeholder-input">Комментарий</div>
          </label>
        </div>
        <div class="order_form-personal">
          <label class="checkbox">
            <input type="checkbox" required>
            <div class="personal-text checkbox-text">Даю согласие на обработку персональных данных.  <a href="/obrabotka-personalnyh-dannyh/"> Узнать подробности</a></div>
          </label>
        </div>
        <button class="to-order btn_pink">Заказать</button>
      </form>
    </div>
  </body>
</html>