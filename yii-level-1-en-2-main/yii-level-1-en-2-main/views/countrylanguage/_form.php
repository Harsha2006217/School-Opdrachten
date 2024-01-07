<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\countrylanguage $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="countrylanguage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CountryCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Language')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IsOfficial')->dropDownList([ 'T' => 'T', 'F' => 'F', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Percentage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
