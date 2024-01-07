<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\countrylanguage $model */

$this->title = $model->CountryCode;
$this->params['breadcrumbs'][] = ['label' => 'Countrylanguages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="countrylanguage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'CountryCode' => $model->CountryCode, 'Language' => $model->Language], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'CountryCode' => $model->CountryCode, 'Language' => $model->Language], [
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
            'CountryCode',
            'Language',
            'IsOfficial',
            'Percentage',
        ],
    ]) ?>

</div>
