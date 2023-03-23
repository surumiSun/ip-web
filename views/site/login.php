<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
            <?= Html::submitButton('Войти', ['class' => 'btn btn-primary']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>