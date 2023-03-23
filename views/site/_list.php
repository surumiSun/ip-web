<?php

use yii\helpers\Url;

?>
<div class="card border-success">
    <div class="card-body">
        <h2 class="card-title text-truncate"><?= $model->safeTitle ?></h2>
        <p class="card-text">Дата создания: <?= $model->onCreate ?></p>
        <p class="card-text text-truncate"><?= $model->safeText ?></p>
        <a href="<?= Url::to(['/news/view', 'id' => $model->id]) ?>" class="btn btn-success">Подробнее</a>
    </div>
</div>