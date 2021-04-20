<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<section>
<div class="container">
<div class="row">
<div class="col-sm-3">
    <div class="left-sidebar">
        <h2 style="color: #4A9DF6">Каталог</h2>
        <ul class="catalog category-products">
            <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
        </ul>
    </div>
</div>

<?php
$mainImg = $product->getImage();
$gallery = $product->getImages();
?>

<div class="col-sm-9 padding-right">
<div class="product-details"><!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <?= Html::img($mainImg->getUrl(), ['alt' => $product->name])?>
        </div>
        <div id="similar-product" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
<?php $count = count($gallery); $i = 0; foreach($gallery as $img): ?>
    <?php if($i % 3 == 0):?>
        <div class="item <?php if($i == 0) echo ' active'?>">
    <?php endif;?>
        <a href=""><?= Html::img($img->getUrl('84x85'), ['alt' => ''])?></a>
    <?php $i++; if($i % 3 == 0 || $i == $count):?>
        </div>
    <?php endif;?>
<?php endforeach;?>
            </div>

            <!-- Controls -->
            <a class="left item-control" href="#similar-product" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right item-control" href="#similar-product" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>

    </div>
    <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->

            <h2><?= $product->name?></h2>
								<span>
									<span style="color:#f64046 " ><?= $product->price?> руб.</span>
									<label>Кол-во</label>
									<input type="text" value="1" id="qty" />
									<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>" class="btn btn-fefault add-to-cart cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        В корзину
                                    </a>
                                    <p class="categ-lol"><b>Категория:</b> <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $product->category->id]) ?>"><?= $product->category->name?></a></p>
                                    <h3>Описание</h3>
                                    <?= $product->content?>
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->


<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center" style="color: #4A9DF6">Популярные товары</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
<?php $count = count($hits); $i = 0; foreach($hits as $hit): ?>
<?php if($i % 3 == 0): ?>
    <div class="item <?php if($i == 0) echo 'active' ?>">
<?php endif; ?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">

                        <p><a href="<?= \yii\helpers\Url::to(['', 'id' => $hit->id])?>"><?= $hit->name?></a></p>
                        <h2 style="color: #f64046"><?= $hit->price?> руб.</h2>
                        <button type="button" class="btn btn-default add-to-cart" style="color: #0a73bb"><i class="fa fa-shopping-cart"></i>В корзину</button>
                    </div>
                </div>
            </div>
        </div>
<?php $i++; if($i % 3 == 0 || $i == $count): ?>
    </div>
<?php endif; ?>
<?php endforeach; ?>
        </div>
        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div><!--/recommended_items-->

</div>
</div>
</div>
</section>