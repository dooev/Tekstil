  <section id="offer" class="offer dark-bg">
    <div class="container fadeIn animated wow">
      <h2 class="offer-title">Оставьте свои данные и мы перезвоним Вам
        <span class="offer-title_small">в течении 10 минут!</span>
      </h2>
      <!-- /.offer-title -->
      <form class="offer-form" action="PHPmailer/mailer/smart.php" method="POST">
        <label class="offer-form__label" for="offer-tel">Введите ваш номер телефона:</label>
        <input id="phone_2" class="offer-form__input" name="user_phone-2" type="tel" required placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ"> <!-- id='offer-tel'  -->
        <!-- 
        <input type="hidden" name="utm_source" value="<?php $utm_source = $GET['utm_source']; echo $utm_source; ?>">
        <input type="hidden" name="utm_medium" value="<?php $utm_medium = $GET['utm_medium']; echo $utm_medium; ?>">
        <input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $GET['utm_campaign']; echo $utm_campaign; ?>">
        <input type="hidden" name="utm_content" value="<?php $utm_content = $GET['utm_content']; echo $utm_content; ?>">
        <input type="hidden" name="utm_term" value="<?php $utm_term = $GET['utm_term']; echo $utm_term; ?>"> -->
      
        <small class="offer-form-small">* Мы никогда не передаем Ваши данные третьим лицам.</small>
          <button type="submit" class="button offer-form__button ">Оставить заявку!</button>
      </form>
      <!-- /.offer-form -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.offer -->