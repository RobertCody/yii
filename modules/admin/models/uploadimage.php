<?php

namespace app\modules\admin\models;

class UploadImage extends \app\models\Food {

    public $image;

    public function rules(){
        return[
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    public function upload(){
        if($this->validate()){
            var_dump($this->image);
        }else{
            return false;
        }
    }

}