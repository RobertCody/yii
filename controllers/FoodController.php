<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Food;
class FoodController extends Controller{

    public $layout = 'food';
    public function actionIndex(){
        $qq = 'Hello!';
        $arr = Food::getDishes();
       return $this->render('index', compact('arr'));
}
}