<?php
header('Content-Type: application/json');

echo json_encode(array(
    'status' => true,
    'html' => getHtml()
));
exit();

function getHtml()
{
    ob_start();
    ?>
    <div class="form">
        <form action="" class="form__wrap">
            <h2 class="form__title">Добавить аккаунт</h2>
            <div class="form__fields">
                <label class="form__field field">
                    <span class="field__name">Название</span>
                    <input type="text" name="name" class="field__input" value="Lorem">
                </label>
                <label class="form__field field">
                    <span class="field__name">Аккаунт</span>
                    <select name="acc" class="field__select">
                        <option value="Тинькофф">Тинькофф</option>
                        <option value="ВТБ" selected>ВТБ</option>
                    </select>
                </label>
                <label class="form__field field">
                    <span class="field__name">Аккаунт</span>
                    <select name="bill" class="field__select">
                        <option value="Основной">Основной</option>
                        <option value="Второй" selected>Второй</option>
                    </select>
                </label>
                <label class="form__field form__field--full field">
                    <span class="field__name">Токен API</span>
                    <input type="text" name="token" class="field__input" value="d3e00cdb90a92a3fdace9f1706d69bc67af83d3a86cf4ef29477">
                </label>


            </div>
            <div class="form__link">
                <a href="/">Инструкция, где взять API ключи</a>
            </div>
            <div class="form__list form-list">
                <div class="form-list__title">Уровень риска</div>
                <div class="form-list__items">
                    <div class="form-list__item">
                        <div class="form-item">
                            <div class="form-item__left">
                                <div class="form-item__name">Первый уровень</div>
                                <div class="form-item__sub">(Рекомендуется)</div>
                            </div>
                            <div class="form-item__right">
                                <div class="form-item__txt">Вы принимаете для себя только самый низкий уровень риска. Сделки
                                    для Вас будут совершаться только low-risk с минимальным процентом от депозита.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-list__item">
                        <div class="form-item">
                            <div class="form-item__left">
                                <div class="form-item__name">Второй уровень</div>
                            </div>
                            <div class="form-item__right">
                                <div class="form-item__txt">Вы готовы к большему риску в надежде на более высокую
                                    доходность. В данном случае сумма сделки удвоится по сравнению с 1 уровнем, если для 1
                                    уровня сумма сделки составит 3% от депозита, то для Вас она будет уже 6%. Также для Вас
                                    будут исполнятся более рискованные сделки, которые недоступны для 1 уровня.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-list__item">
                        <div class="form-item">
                            <div class="form-item__left">
                                <div class="form-item__name">Третий уровень</div>
                                <div class="form-item__sub">(Не рекомендуется)</div>
                            </div>
                            <div class="form-item__right">
                                <div class="form-item__txt">В погоне за прибылью Вы готовы на все. Если для 1 уровня робот
                                    будет покупать на 3%, то для Вас уже на 9%.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="form__blocks">
                <div class="form__block">
                    <div class="form-block">
                        <div class="form-block__left">
                            <div class="form-block__title">Ограничения по балансу USD</div>
                            <div class="form-block__txt">Робот будет покупать акции, пока суммарный объем всех купленных
                                акций роботом не достигнет ограничения. Поставив ограничение в 1000$, робот больше этой
                                суммы покупать не будет
                            </div>
                        </div>
                        <div class="form-block__right">
                            <div class="form-block__sub">0 - без ограничений</div>
                            <input class="field__input field__input--white field__input--center" type="text" name="limits" value="0">
                        </div>
                    </div>
                </div>
                <div class="form__block">
                    <div class="form-block">
                        <div class="form-block__left">
                            <div class="form-block__title">Маржинальная торговля</div>
                            <div class="form-block__txt">Робот будет покупать акции, даже если баланс в минусе</div>
                        </div>
                        <div class="form-block__right">
                            <select name="trading" class="field__select field__select--white">
                                <option value="Y" selected>Да</option>
                                <option value="N">Нет</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <button type="submit" class="form__submit">Добавить</button>
        </form>
    </div>

    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}