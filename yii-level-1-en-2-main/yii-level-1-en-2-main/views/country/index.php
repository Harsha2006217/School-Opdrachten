<?php

use app\models\Country;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CountrySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Country', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
           
            // 'Code',
            ['label' => 'Name',
            'attribute' => 'Name',
            'format' => 'raw',
            'value' => function($data) {
                    return sprintf("<b>$data->Name</b>");
                }
            ],
            'Continent',
            // ['label' => 'Hoofdstad',
            // 'attribute' => 'Capital',
            // 'contentOptions' => ['style' => 'width:120px;'],
            // 'format' => 'raw',
            // 'value' => function($data) {
            //     return Html::a('Naar hoofdstad', ['/city/index', 'CirySearch[ID]' => $data->Capital]);
                
            //     }
            // ],
            [ 'label' => 'Inwoners',
                'attribute' => 'Population',
              'contentOptions' => ['style' => 'width:30px;'],
            ],
            // 'Population',
            // [ 'label' => 'Oppervlakte',
            // 'attribute' => 'SurfaceArea',
            // 'contentOptions' => ['style' => 'width:30px; white-space: normal;'],
            // 'format' => 'raw',
            // 'value' => function($data) {
            //         return sprintf("%8d k&#13217", $data->SurfaceArea);
            //     }
            // ],
        ['label' => 'Bevolkingsdichtheid bart',
        'attribute'=>'Population',
        'contentOptions' => ['style' => 'width:30px; white-space: normal; color: red; font-weight: bold;'],
        'format' => 'raw',
        'value' => function ($data) {
        return  number_format($data->Population/$data->SurfaceArea, 2);
        }],
            // 'SurfaceArea',   
             ['label' =>'Capital', 'format' => 'raw','value' => function($a){ return Html::a($a->Name, ['/city/index', 'CitySearch[ID]' => $a->Capital]);}],
            // 'Region',
            //'IndepYear',
            //'LifeExpectancy',
            //'GNP',
            //'GNPOld',
            //'LocalName',
            //'GovernmentForm',
            //'HeadOfState',
            //'Code2',
            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}',],
            
        ],
    ]); ?>
    <button style="background-color:green;">Create country</button>

