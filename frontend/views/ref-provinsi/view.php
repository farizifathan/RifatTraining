<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RefProvinsi */

$this->title = $model->kd_prov;
$this->params['breadcrumbs'][] = ['label' => 'Ref Provinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ref-provinsi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kd_prov' => $model->kd_prov], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kd_prov' => $model->kd_prov], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_prov',
            'nama_prov',
            'create_at',
            'update_at',
        ],
    ]) ?>

</div>
