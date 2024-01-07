<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


/**
 * CountryController implements the CRUD actions for country model.
 * Code by Navneet Shiravadakar
 */

class ExampleController extends Controller
{
  public function actionSay($message = 'empty')
  {
    echo "Hello $message";
    exit;
  }
}