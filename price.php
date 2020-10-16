<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Цены</title>
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
      <div class="content price-page">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Цены</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Цены</h1>
        </div>
        <div class="price">
          <div class="grid-container">
            <div class="price_wrapper">
              <?php
                include_once('./templates/blocks/item-rent.php');
              ?>
            </div>
            <div class="grid-x">
              <div class="price_download"><a class="price-download" href="#" target="_blank"><i class="icon-load"></i>Скачать прайс-лист</a></div>
            </div>
          </div>
        </div>
        <?php
          include_once('./templates/blocks/calculator.php');
        ?>
        <div class="grid-container">
          <div class="seo_text">
            <p>Компания «Бытовки-Сервис» (Москва) предлагает взять в аренду блок контейнеры и вагончики недорого. Мы гарантируем клиентам выгодные условия сотрудничества и самостоятельно доставляем бытовки до строительных объектов.</p>
            <p>Аренда блок контейнера – это возможность получить качественное временное жилье, не тратясь на его приобретение. Арендовать такое сооружение можно гораздо дешевле, чем купить. К тому же наниматель не тратится на монтаж и демонтаж бытовки: все работы выполняют специалисты нашей компании.</p>
            <p>Преимущества сотрудничества с ООО «Бытовки-Сервис»</p>
            <p>Аренда бытовки может осуществляться на любой срок по желанию клиента. Все обязательства прописываются в договоре, действие которого можно продлить. Для постоянных клиентов действуют специальные предложения. </p>
            <ul>Аренда бытовок – оптимальный вариант для многих организаций. Каждому клиенту гарантированы следующие преимущества:
              <li>возможность арендовать вагончик любого типа, как утепленный, так и металлический, с разными вариантами отделки и оборудования;</li>
              <li>индивидуальный подход к заказу: учитываются все пожелания клиентов, подбирается наиболее оптимальный вариант сотрудничества для каждого;</li>
              <li>выгодные цены на услуги;</li>
              <li>оперативная доставка сооружений на объект;</li>
              <li>Бытовка арендуется без залога, по договору.</li>
            </ul>
            <ul>Мы предлагаем различные виды бытовок:
              <li>для складов: с решетками на окнах, внутренней отделкой, металлической дверью;</li>
              <li>для офисных помещений: с окнами, дверями, подведенными инженерными коммуникациями, отделкой;</li>
              <li>для торговых точек: с выходами, к которым подключается торговое оборудование, с коммуникациями;</li>
              <li>для проживания: с системой сигнализации, мебелью, отделкой и различными удобствами;</li>
              <li>для охранных постов со всем необходимым оснащением и мебелью.</li>
            </ul>
            <p>Аренда бытовки может осуществляться на любой срок по желанию клиента. Все обязательства прописываются в договоре, действие которого можно продлить. Для постоянных клиентов действуют специальные предложения. </p>
            <p>Звоните по телефонам:<span class="tel">+7 (495) 789-55-63</span>,<span class="tel">+7 (495) 641-85-68 </span>, и наши консультанты подберут для вас наиболее выгодные условия сотрудничества."</p>
          </div>
        </div>
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