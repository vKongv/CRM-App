<?php
namespace app\controllers;
use \yii\web\Controller;
class SiteController extends Controller{
  public function actionIndex(){
    return 'Our CRM Test add feature';
  }

  public function actionTest(){
    return 'Yeah~';
  }
}
