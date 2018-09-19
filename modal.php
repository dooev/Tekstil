<!-- Modal windows -->
<div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Форма обратной связи</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body dark-bg">
        <div class="modal-form">
          <form action="PHPmailer/mailer/smart.php" method="POST" class="main-form">
            <div class="modal-form-header">Получите индивидуальное предложение
              <br>
              <span>на производство и поставку изделий</span>
            </div>
<!--             <input type="hidden" name="utm_source" value="<?php $utm_source = $GET['utm_source']; echo $utm_source; ?>">
            <input type="hidden" name="utm_medium" value="<?php $utm_medium = $GET['utm_medium']; echo $utm_medium; ?>">
            <input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $GET['utm_campaign']; echo $utm_campaign; ?>">
            <input type="hidden" name="utm_content" value="<?php $utm_content = $GET['utm_content']; echo $utm_content; ?>">
            <input type="hidden" name="utm_term" value="<?php $utm_term = $GET['utm_term']; echo $utm_term; ?>"> -->
            <label for="phone" class="  modal-form__label">Введите ваш номер телефона:</label>
            <input type="tel" id="phone-modal" class="modal-form__input phone" name="user_phone_header" required placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ">
            <div class="modal-form__note">* Мы никогда не передаем Ваши данные третьим лицам.</div>
            <button class="button modal-form__btn" type="submit" >Оставить заявку!</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
