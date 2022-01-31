<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RefProvinsi */

$this->title = 'Update Ref Provinsi: ' . $model->kd_prov;
$this->params['breadcrumbs'][] = ['label' => 'Ref Provinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_prov, 'url' => ['view', 'kd_prov' => $model->kd_prov]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ref-provinsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
