<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Country $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="country-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Continent')->dropDownList([ 'Asia' => 'Asia', 'Europe' => 'Europe', 'North America' => 'North America', 'Africa' => 'Africa', 'Oceania' => 'Oceania', 'Antarctica' => 'Antarctica', 'South America' => 'South America', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SurfaceArea')->textInput() ?>

    <?= $form->field($model, 'IndepYear')->textInput() ?>

    <?= $form->field($model, 'Population')->textInput() ?>

    <?= $form->field($model, 'LifeExpectancy')->textInput() ?>

    <?= $form->field($model, 'GNP')->textInput() ?>

    <?= $form->field($model, 'GNPOld')->textInput() ?>

    <?= $form->field($model, 'LocalName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GovernmentForm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HeadOfState')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Capital')->textInput() ?>

    <?= $form->field($model, 'Code2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
