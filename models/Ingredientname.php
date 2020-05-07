<?php
namespace app\models;
use yii\db\ActiveRecord;
class Ingredientname extends \yii\db\ActiveRecord {

    public static function tableName()
    {
        return 'ingredient';
    }

    public static function getIngredients(){

        $ingredient = self::find()->all();
        return $ingredient;
    }


}

