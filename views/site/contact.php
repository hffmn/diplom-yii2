<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Оплата';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 style="padding-bottom: 60px; margin-left: 50px">Оплата</h2>
<div class="clearfix"></div>
<div></div>
<div class="centeringin clearfix"><img width="170" alt="sber.jpg" src="/web/images/checkout/" height="91" title="sber.jpg" style="float:left; margin-right: 60px;">
    <div style="overflow:hidden;">
        <h3 style="margin-bottom: 15px;">Оплата с помощью карт Сбербанк, Tinkoff, ВТБ, Альфа-банк, Почта Банк</h3>
        Самый удобный и выгодный способ оплаты заказа для держателей карт этих банков. Перевод можно произвести при помощи мобильного банка или банкомата при наличии карты. Если Вы не пользуетесь одной из карт перечисленных банков, оплату можно произвести в любом отделении соответствующего банка через оператора или через банкомат, произведя оплату наличными денежными средствами. Комиссия составит от 0% (более подробную информацию о комиссии уточняйте у сотрудников своего банка).<br>
    </div>
    <br>
    <br>
    <img width="175" alt="9da0b385558b467_1.png" src="/web/images/checkout/" height="97" title="9da0b385558b467_1.png" style="float:left; margin-right: 60px;">
    <div style="overflow:hidden;">
        <h3 style="margin-bottom: 15px;">Банковской картой онлайн (Visa, Mastercard, Maestro, Мир)</h3>
        Этот способ оплаты подразумевает стандартную оплату заказа с помощью банковской карты любого банка. Платежи проходят через эквайринговую систему PayKeeper. ВНИМАНИЕ! Есть ограничения по сумме платежа: 100 000 руб. Комиссия отсутствует. После оплаты вы получите электронный кассовый чек.<br>
        <br>
    </div>
    <br>
    <br>
    <br>
    <img width="170" alt="naloj.jpg" src="/web/images/checkout/" height="91" title="naloj.jpg" style="float:left; margin-right: 60px;">
    <div style="overflow:hidden;">
        <h3 style="margin-bottom: 15px;">Наложенный платеж (оплата при получении)</h3>
        Оплата заказа будет производиться в почтовом отделении при получении товара. За услуги наложенного платежа Почта России берет дополнительную комиссию - примерно 4% от суммы "Наложенного платежа"<br>
        Ниже описана комиссия почты от суммы "Наложенного платежа" Вашей посылки, т.е. почта помимо стоимости доставки с Вас возьмет еще комиссию за услугу наложенный платеж. &nbsp;<br>
        <br>
        Комиссия почты за услугу наложенный платеж:<br>
        <br>
        <ul>
            <li>до 1 000 руб. включительно - 80 руб. + 5% от суммы</li>
            <li>
                свыше 1 000 до 5 000 руб. включительно - 90 руб. + 4%</li>
            <li>
                свыше 5 000 руб. до 20 000 руб. включительно - 190 руб. + 2%</li>
            <li>
                свыше 20 000 руб. до 500 000 руб. включительно - 290 руб. + 1,5%</li>
        </ul>
        Оплатить при получении можно все товары, доставляемые Почтой России. В некоторых случаях может потребоваться предоплата в размере СТОИМОСТИ ДОСТАВКИ, а именно:<br>
        <br>
        - в заказе есть товары, изготавливаемые под заказ покупателя (окраска в цвет кузова, пошив, цвет строчки и подобные);<br>
        - стоимость доставки заказа по тарифам Почты России превышает 500 руб.<br>
        <br>
        Дополнительную информацию уточняйте у менеджера.<br>
    </div>
    <br>
    <div>
        <br>
        <div style="overflow:hidden;">
            <br>
        </div>
        <br>
        <div>
<!--            <img width="170" alt="dengi.jpg" src="/web/images/checkout" height="91" title="dengi.jpg" style="float:left; margin-right: 60px;">-->
            <div style="overflow:hidden;">
                <h3 style="margin-bottom: 15px;">Яндекс. Деньги</h3>
                Удобный и быстрый способ оплаты заказа, для заказчиков, имеющих Яндекс Кошелек. Оплата производится на номер Яндекс Кошелька магазина, Вам его предоставит менеджер или сайт после оформления заказа. Комиссия составит 0%.
            </div>
            <br>
            <br>
            <br>
            <div>
<!--                <img width="170" alt="qiwi.jpg" src="/web/images/checkout" height="91" title="qiwi.jpg" style="float:left; margin-right: 60px;">-->
                <div style="overflow:hidden;">
                    <h3 style="margin-bottom: 15px;">Qiwi</h3>
                    Удобный и быстрый способ оплаты заказа для заказчиков, имеющих Qiwi кошелек или терминалQiwi поблизости (при оплате через терминал иметь Qiwi кошелек необязательно). Оплата производится на номер Qiwi кошелька магазина. Вам его предоставит менеджер или сайт после оформления заказа. Комиссия составит 0%.
                </div>
                <br>
                <br>
                <br>
                <div>
<!--                    <img width="170" alt="kvit.jpg" src="/web/images/checkout" height="91" title="kvit.jpg" style="float:left; margin-right: 60px;">-->
                    <div style="overflow:hidden;">
                        <h2><span style="font-size: 14pt;">Оплата на расчетный счет для ЮЛ и ИП (без НДС)</span></h2>
                        <br>
                        Этот способ оплаты предназначен только для юридических лиц и индивидуальных предпринимателей. После подтверждения заказа менеджер отправит на электронную почту счет на оплату.&nbsp;<br>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    Реквизиты для оплаты заказа отправляются Вам на E-mail и смс сообщением после подтверждения заказа нашими менеджерами, также реквизиты представлены в личном кабинете.&nbsp;<br>
                    <br>
                    <h3>Внимание!</h3>
                    <br>
                    После оплаты заказа ОБЯЗАТЕЛЬНО сообщите № заказа и сумму оплаты на электронную почту <a href="mailto:manager@vasavtozp.ru">manager@vasavtozp.ru</a> или уведомите смс сообщением по данному номеру телефона 89379979163. <br>
                    Без уведомления платеж может быть не отслежен, заказ Вам отправлен не будет.&nbsp;<br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <style>
    div{
        font: 13px Opensans,Arial,Helvetica,sans-serif;
        line-height: 18px;
        text-align: left;
        margin: 0px 10px;
}   </style>
</div>
</div>