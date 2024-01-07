<?php

use app\models\bestelling;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\bestellingSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */


$this->title = 'Bestelling';
$this->params['breadcrumbs'][] = $this->title;



//bart :)
//dd($model->medewerkers);
$menuList = ArrayHelper::map($menu,'id','naam',);
$medewerkerList = ArrayHelper::map($medewerkers,'id','naam');


//dd($medewerkerList);

?>


<div class="bestelling-form">
    <h1>Create bestelling</h1>


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'medewerker_id')->dropDownList($medewerkerList, ['prompt' => ''])->label('<b>Medewerker</b>') ?>

    <?= $form->field($model, 'naam')->textInput(['maxlength' => true, ])->label('<b>Klantnaam</b>') ?>
    
    <?= $form->field($model, 'menu_id')->dropDownList($menuList, ['prompt' => ''])->label('<b>bestelling</b>') ?>

    
    <?= $form->field($model, 'status')->dropDownList([
        'besteld' => 'is Besteld', 'klaar' => 'is Klaar', 'betaald' => ' is Betaald', ], ['prompt' => ''])->label('<b>Status Bestelling </b>') ?>

    


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
