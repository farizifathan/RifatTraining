<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefProvinsi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-provinsi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_prov')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'nama_prov')->textInput(['maxlength' => true]) ?>
<!-- 
    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
