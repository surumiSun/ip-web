<?php

use yii\bootstrap4\Html;

$this->title = 'Добавить новость';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><?= Html::encode($this->title) ?></h1>
            <?= $this->render('_form', ['model' => $model]) ?>
        </div>
    </div>
</div>