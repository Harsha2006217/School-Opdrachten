<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CountrylanguageSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="countrylanguage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CountryCode') ?>

    <?= $form->field($model, 'Language') ?>

    <?= $form->field($model, 'IsOfficial') ?>

    <?= $form->field($model, 'Percentage') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
