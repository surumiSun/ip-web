<?php

use yii\helpers\Url;
use yii\bootstrap4\Html;

$this->title = nl2br(Html::encode($model->title));
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><?= $this->title ?></h1>
            <p class="card-text">Дата создания: <?= $model->onCreate ?></p>
            <p class="card-text"><?= nl2br($model->text) ?></p>
            <?php if (Yii::$app->user->identity->isAdmin) : ?>
                <a href="<?= Url::to(['update', 'id' => $model->id]) ?>" class="btn btn-primary">Редактировать</a>
                <a href="<?= Url::to(['delete', 'id' => $model->id]) ?>" class="btn btn-danger" data-method="post" data-confirm="Вы действительно хотите удалить эту новость?">Удалить</a>
            <?php endif; ?>
        </div>
    </div>
</div>