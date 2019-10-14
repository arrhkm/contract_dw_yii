<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reg_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_bpjstk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_bpjskes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_hired')->textInput() ?>

    <?= $form->field($model, 'is_permanent')->checkbox() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
