<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\Food;
use app\models\Ingredientname;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{



    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $dishes = Food::getDishes();
        return $this->render('index', compact('dishes'));


    }

    public function actionEdit($id)
    {

        $dish = Food::getDish($id);
        $dishingredients = Food::getDishIngredients($id); // получаем ингредиенты блюда
        $ingred = Ingredientname::getIngredients(); // получаем все ингредиенты

        $ing_id = '';
        if($_POST['Food']){
            $dish->name = $_POST['Food']['name'];
            $dish->description = $_POST['Food']['description'];
            foreach ($_POST['Food']['ingredients'] as $ingredient){
                if($ingredient !=0) {
                    $ing_id .= $ingredient . ";";
                }
            }

            $dish->ingredients = $ing_id;

            $dish->save();

            return $this->redirect('/admin');
        }

        $dishing = explode(';',$dishingredients->ingredients);





        return $this->render('edit',['dish' => $dish,'ingredients' => $dishing, 'ingred' => $ingred]);

    }
    public function actionCreate()
    {
        $dish = new Food();

        if($_POST['Food']){
            $dish->name = $_POST['Food']['name'];
            $dish->description = $_POST['Food']['description'];
            //$dish->attributes = $_POST['Food'];
            $dish->save();
            return $this->redirect('/admin');
        }

        return $this->render('create',['dish' => $dish]);
    }

    public function actionDelete($id)
    {
        $dish = Food::getDish($id);
        if($dish) {
            $dish->delete();
            return $this->redirect('/admin');
        }
    }

    public function autocomplete()
    {
        $json = array();

    }

}
