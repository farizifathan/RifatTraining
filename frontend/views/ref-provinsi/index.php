<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RefProvinsiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ref Provinsis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-provinsi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ref Provinsi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_prov',
            'nama_prov',
            'create_at',
            'update_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index) {
                    return Url::to([$action, 'kd_prov' => $model->kd_prov]);
                 }
            ],
        ],
    ]); ?>


</div>
