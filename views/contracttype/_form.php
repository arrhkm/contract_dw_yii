<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contracttype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contracttype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contract_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contract_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
