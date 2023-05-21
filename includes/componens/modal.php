<div class="modal-wrapper">
    <div class="modal-window">
        <button type="button" class="close-btn">
            <img src="img/Close.png">
        </button>
        <h3 class="modal-title animated fadeInLeft ">
            Заказать обратный звонок
        </h3>

        <form action="sendmail.php" id="form" class="form__body">

            <div class="form__item">
                <label for="formName" class="form__label">Имя*:</label>
                <input id="formName" type="text" name="name" class="form__input _req">
            </div>
            <div class="form__item">
                <label for="formEmail" class="form__label">E-mail*:</label>
                <input id="formEmail" type="text" name="email" class="form__input _req _email">
            </div>

            <div class="form__item">
                <label for="formMessage" class="form__label">Сообщение:</label>
                <textarea name="message" id="formMessage" class="form__input"></textarea>
            </div>
            <div class="form__item">
                <div class="form__label">Прикрепить фото</div>
                <div class="file">
                    <div class="file__item">
                        <input id="formImage" accept=".jpg, .png, .gif" type="file" name="image" class="file__input">
                        <div class="file__button">Выбрать</div>
                    </div>
                    <div id="formPreview" class="file__preview"></div>
                </div>
            </div>
            <div class="form__item">
                <div class="checkbox">
                    <input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input _req">
                    <label for="formAgreement" class="checkbox__label"><span>Я даю свое согласие на обработку персональных
                            данных в
                            соответствии с <a href="">Условиями</a>*</span></label>
                </div>
            </div>
            <button type="submit" class="form__button">Отправить</button>
        </form>
        <!-- <form action="mail.php" id="modalForm" class="form-book js-form animated fadeInRightBig">
                    <input type="text" class="form-book__input" name="firstName" placeholder="Имя" required>
                    <input type="email" class="form-book__input" name="email" placeholder="E-mail" required>
                    <input type="tel" class="form-book__input" name="phoneNumber" placeholder="Телефон" required>
                    <button type="button" class=" modal-btn btn" data-submit>Заказать звонок</button>
                </form> -->
    </div>
    <div class="thanks-window">
        <h3 class="thanks__text">
            Отлично! Мы скоро вам перезвоним.
        </h3>
        <button type="button" class="thanks-btn">
            Закрыть
        </button>
    </div>
</div>