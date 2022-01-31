<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RefUrusan */
?>
<div class="ref-urusan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tahun',
            'kd_urusan',
            'nm_urusan',
            'create_at',
            'update_at',
        ],
    ]) ?>

</div>
