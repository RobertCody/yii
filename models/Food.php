<?php
namespace app\models;
use yii\db\ActiveRecord;
class Food extends \yii\db\ActiveRecord {

    public static function tableName()
    {
        return 'dish';
    }

    public static function getDishes(){
        $dishes = self::find()->all();
        return $dishes;
    }

    public static function getDish($id){
        $dishes = self::find()->where(['dish_id' => $id])->one();
        return $dishes;
    }

    public static function getDishIngredients($id){
        $dishes = self::find()->where(['dish_id' => $id])->one();
        return $dishes;
    }



}
