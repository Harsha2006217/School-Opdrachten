<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CountrySearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="country-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Code') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Continent') ?>

    <?= $form->field($model, 'Region') ?>

    <?= $form->field($model, 'SurfaceArea') ?>

    <?php // echo $form->field($model, 'IndepYear') ?>

    <?php // echo $form->field($model, 'Population') ?>

    <?php // echo $form->field($model, 'LifeExpectancy') ?>

    <?php // echo $form->field($model, 'GNP') ?>

    <?php // echo $form->field($model, 'GNPOld') ?>

    <?php // echo $form->field($model, 'LocalName') ?>

    <?php // echo $form->field($model, 'GovernmentForm') ?>

    <?php // echo $form->field($model, 'HeadOfState') ?>

    <?php // echo $form->field($model, 'Capital') ?>

    <?php // echo $form->field($model, 'Code2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
