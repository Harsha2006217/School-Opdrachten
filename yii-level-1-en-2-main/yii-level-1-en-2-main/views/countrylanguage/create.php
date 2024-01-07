<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\countrylanguage $model */

$this->title = 'Create Countrylanguage';
$this->params['breadcrumbs'][] = ['label' => 'Countrylanguages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countrylanguage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
