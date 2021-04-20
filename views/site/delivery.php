<?php


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'Доставка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div id="content" class="content"><div class="centering"><div class="centeringin clearfix"><div>
                    <img width="132" alt="post.jpg" src="/upload/medialibrary/a16/a1606c971a2e823c6c558f4fd5f9123a.jpg" height="70" title="post.jpg" style="float:left; margin-right: 40px;">
                    <div style="overflow:hidden;">
                        <h3 style="margin-bottom: 15px;">Доставка Почтой России</h3>
                        <ul>
                            <li>Срок доставки: 5-12 дней в зависимости от удаленности Вашего населенного пункта от г. Тольятти. </li>
                            <li>Стоимость доставки от 200 руб. в зависимости от веса, дальности и объявленной ценности посылки (заказа).</li>
                        </ul>
                    </div>
                </div>
                <br>
                <br>
                <div>
                    <img width="132" alt="ems.jpg" src="/upload/medialibrary/755/7554cfb995b34010ccc2963532c32bc5.jpg" height="70" title="ems.jpg" style="float:left; margin-right: 40px;">
                    <div style="overflow:hidden;">
                        <h3 style="margin-bottom: 15px;">Доставка Почтой России (EMS курьер)</h3>
                        <br>
                        <ul>
                            <li>Срок доставки: 3-7 дней в зависимости от удаленности Вашего населенного пункта от г. Тольятти. </li>
                            <li>Стоимость доставки от 550 руб. в зависимости от веса, дальности и объявленной ценности посылки (заказа).</li>
                        </ul>
                    </div>
                </div>
                <br>
                <br>
                <div>
                    <img width="132" alt="1kl.jpg" src="/upload/medialibrary/eb2/eb24b0b3bfc66091c328f990a623878f.jpg" height="70" title="1kl.jpg" style="float:left; margin-right: 40px;">
                    <div style="overflow:hidden;">
                        <h3 style="margin-bottom: 15px;">Доставка Почтой России (1 класс)</h3>
                        <br>
                        <ul>
                            <li><b>Внимание! Доставка 1 классом возможна только малогабаритных товаров весом до 2,5 кг.&nbsp;</b></li>
                            <li>
                                Срок доставки: 2-5 дней в зависимости от удаленности Вашего населенного пункта от г. Тольятти. </li>
                            <li>
                                Стоимость доставки от 250 руб. в зависимости от веса, дальности и объявленной ценности посылки (заказа).</li>
                        </ul>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h2>Доставка транспортной компанией</h2>
                    <br>
                    Доставка одной из транспортных компаний, имеющих представительство в Вашем городе. Срок доставки: 2-10 дней в зависимости от удаленности Вашего населенного пункта от г. Тольятти. Самый удобный и быстрый способ доставки заказов разных габаритов. Стоимость доставки от 250 руб. в зависимости от веса и дальности доставки.<br>
                    <br>
                    <span style="color: #ff0000;">Отправление заказов транспортными компаниями осуществляются по 100% оплате за заказ.&nbsp;</span><br>
                    <br>
                    <br>
                    <h3> Мы сотрудничаем с:</h3>
                    <br>
                    <br>
                    <div>
                        <img width="132" alt="pek.jpg" src="/upload/medialibrary/012/0127d7be3c6700b107816429a1f16b75.jpg" height="70" title="pek.jpg" style="float:left; margin-right: 40px;">
                        <div style="overflow:hidden;">
                            <h3 style="margin-bottom: 15px;">ПЭК</h3>
                            Найти ближайшее представительство, отследить груз и рассчитать стоимость доставки <a href="http://pecom.ru" target="_blank">pecom.ru</a>
                        </div>
                        <br>
                        <br>
                        <div>
                            <img width="132" alt="del.jpg" src="/upload/medialibrary/6f5/6f5ce530251e5175742729cbb3be7ce2.jpg" height="70" title="del.jpg" style="float:left; margin-right: 40px;">
                            <div style="overflow:hidden;">
                                <h3 style="margin-bottom: 15px;">Деловые Линии</h3>
                                Найти ближайшее представительство, отследить груз и рассчитать стоимость доставки <a href="http://dellin.ru" target="_blank">dellin.ru</a>
                            </div>
                            <br>
                            <br>
                            <div>
                                <img width="132" alt="baik.jpg" src="/upload/medialibrary/c7c/c7c305ec589e5365868333d6a328f231.jpg" height="70" title="baik.jpg" style="float:left; margin-right: 40px;">
                                <div style="overflow:hidden;">
                                    <h3 style="margin-bottom: 15px;">Байкал Сервис</h3>
                                    Найти ближайшее представительство, отследить груз и рассчитать стоимость доставки <a href="http://baikalsr.ru" target="_blank">baikalsr.ru</a>
                                </div>
                                <br>
                                <br>
                                <div>
                                    <img width="132" alt="energ.jpg" src="/upload/medialibrary/ffe/ffef019fafda62ef5e68c601d0048f24.jpg" height="70" title="energ.jpg" style="float:left; margin-right: 40px;">
                                    <div style="overflow:hidden;">
                                        <h3 style="margin-bottom: 15px;">Энергия</h3>
                                        Найти ближайшее представительство, отследить груз и рассчитать стоимость доставки <a href="http://nrg-tk.ru" target="_blank">nrg-tk.ru</a>
                                    </div>
                                    <br>
                                    <br>
                                    <div>
                                        <img width="132" alt="kit.jpg" src="/images/2pIyXAfWVFI.jpg" height="70" title="kit.jpg" style="float:left; margin-right: 40px; margin-top: 10px;">
                                        <div style="overflow:hidden;">
                                            <h3 style="margin-bottom: 15px;">GTD (бывший КИТ)</h3>
                                            Найти ближайшее представительство, отследить груз и рассчитать стоимость доставки <a href="https://gtdel.com" target="_blank">https://gtdel.com</a>
                                        </div>
                                        <br>
                                        <br>
                                        <div>
                                            <img width="132" alt="jeldor.jpg" src="/upload/medialibrary/249/249e9dc4fb596d2521089daa97afbfa3.jpg" height="70" title="jeldor.jpg" style="float:left; margin-right: 40px;">
                                            <div style="overflow:hidden;">
                                                <h3 style="margin-bottom: 15px;">Желдор экспедиция </h3>
                                                Найти ближайшее представительство, отследить груз и рассчитать стоимость доставки <a href="http://jde.ru" target="_blank">jde.ru</a>
                                            </div>
                                            <br>
                                            <br>
                                            <div>
                                                <img width="132" alt="sdek.jpg" src="/upload/medialibrary/f07/f079922e6565450019f4ca5c80f05e36.jpg" height="70" title="sdek.jpg" style="float:left; margin-right: 40px;">
                                                <div style="overflow:hidden;">
                                                    <h3 style="margin-bottom: 15px;">СДЭК</h3>
                                                    Найти ближайшее представительство, отследить груз и рассчитать стоимость доставки <a href="http://www.cdek.ru" target="_blank">www.cdek.ru</a><br>
                                                    <br>
                                                </div>
                                            </div>
                                            <div>
                                                <div style="overflow:hidden;">
                                                    <br>
                                                </div>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>



                <div class="clearfix"></div>
            </div></div></div>

</div>
<style>
    .site-about{
        margin-top: 50px;
        margin-left: 50px;
        width: 900px;
        font: 13px Opensans,Arial,Helvetica,sans-serif;
        text-align: left;
        line-height: 18px;
    }
    h3{
        margin-left: 45px;
    }
</style>

