<?php

namespace app\controllers;
use Yii;
use app\models\Menu;
use app\models\Medewerker;
use app\models\bestelling;
use app\models\bestellingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BestellingController implements the CRUD actions for bestelling model.
 */
class BestellingController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all bestelling models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new bestellingSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $medewerkers =  Medewerker::find()->select(['naam']);
        $menu =  Menu::find()->all();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'medewerkers' => $medewerkers,
            'menu' => $menu,

        ]);
    }

    /**
     * Displays a single bestelling model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $medewerkers = Medewerker::find()->all();
        $menu = Menu::find()->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'medewerkers' => $medewerkers,
            'menu' => $menu,
            
        ]);
    }

    /**
     * Creates a new bestelling model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Bestelling();
        $medewerkers = Medewerker::find()->all();
        
        $model1 = new Menu();
        $menu = Menu::find()->all();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }


        if ($model1->load(Yii::$app->request->post()) && $model1->save()) {
            return $this->redirect(['view', 'id' => $model1->id]);
        }

       // echo "bart";


        return $this->render('_form', [
            'model1' => $model1,
            'model' => $model,
            'medewerkers' => $medewerkers,
            'menu' => $menu,
            
        ]); // hoi :) 
     
    }
    
    /**
     * Updates an existing bestelling model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $medewerkers = Medewerker::find()->all();
        $menu = Menu::find()->all();
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('_form', [
            'model' => $model,
            'menu' => $menu,
            'medewerkers' => $medewerkers,
        ]);
    }

    /**
     * Deletes an existing bestelling model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the bestelling model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return bestelling the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = bestelling::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
