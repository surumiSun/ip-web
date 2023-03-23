<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = Yii::$app->name;
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= Url::to(['/img/banner-0.png']) ?>" alt="Слайд" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="<?= Url::to(['/img/banner-0.png']) ?>" alt="Слайд" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="<?= Url::to(['/img/banner-0.png']) ?>" alt="Слайд" class="d-block w-100">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <h1 class="text-center">О нас</h1>
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-3 p-3">
                        <img src="/img/i.png" class="card-img-top p-0" alt=" Я тут.">
                    </div>
                    <div class="col p-3">
                        <h5>
                            <p> САДОВОДЧЕСКИЙ ПОТРЕБИТЕЛЬСКИЙ КООПЕРАТИВ ИНВАЛИДОВ "РУЧЕЕК" находится в черте г. Феодосии на расстоянии 1,5-2 км
                                от центральных улиц.</p>
                            <p>Дата регистрации: 22 октября 1993 года.</p>
                            <p>На землях размером 20,13 га расположено более 200 участков.</p>
                            <p>Имеется разветвленная электрическая сеть и водоснабжение питьевой водой.</p>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center">Новости</h1>
    <?php if (Yii::$app->user->identity->isAdmin) : ?>
        <a href="<?= Url::to(['/news/create']) ?>" class="btn btn-success d-block mb-3">Добавить новость</a>
    <?php endif; ?>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{items}\n{pager}",
        'itemView' => '_list',
        'options' => ['class' => 'list-view mb-3'],
        'itemOptions' => ['class' => 'mb-3'],
        'pager' => [
            'maxButtonCount' => 10,
            'disableCurrentPageButton' => true,
            'options' => ['class' => 'list-inline w-100 p-0 pr-3 pb-3 d-flex flex-wrap justify-content-center'],
            'linkContainerOptions' => ['class' => 'list-inline-item m-0 p-0 pr-3 pb-3'],
            'linkOptions' => ['class' => 'btn btn-primary'],
            'disabledListItemSubTagOptions' => ['class' => 'btn btn-primary disabled'],
            'firstPageLabel' => 'Первая',
            'prevPageLabel' => 'Предыдущая',
            'nextPageLabel' => 'Следующая',
            'lastPageLabel' => 'Последняя',
        ],
    ]) ?>
</div>