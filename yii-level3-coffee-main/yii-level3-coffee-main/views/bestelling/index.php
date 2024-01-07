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


$this->title = 'Bestellings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bestelling-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bestelling', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $this->render('_search', ['model' => $searchModel]);  
    $medewerkerList = ArrayHelper::map($medewerkers,'id','naam');
    $menuList = ArrayHelper::map($menu,'id','naam',);
    $status = ['besteld' => 'is Besteld', 'klaar' => 'is Klaar', 'betaald' => ' is Betaald',];

    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'naam',
            [
            'label' => 'bestelling', 
            'attribute' => 'menu_id',
            'filter' => $menuList,
            'value' =>'menu.naam',


            ],
            [
            'label' => 'status',
            'attribute' => 'status',
            'filter' => $status,
        
            ],
            [
            'label' => 'naam Medewerker',
            'attribute' => 'medewerker_id',
            'filter' => $medewerkerList,
            'value' =>  'medewerkers.naam'
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Bestelling $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
               


        ],
    ]);
     ?>


</div>
