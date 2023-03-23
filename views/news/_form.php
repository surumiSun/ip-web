<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\News $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="news-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'text')->textArea(['rows' => 6]) ?>
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>