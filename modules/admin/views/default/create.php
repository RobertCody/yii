<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Новое блюдо';
?>
<?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="pull-right">
            <?= html::submitButton('Сохранить', ['class' => 'btn btn-success']); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h4>Изображение</h4>

        </div>

        <div class="col-md-6">
            <?= $form->field($dish, 'name')->textInput()->label('Название'); ?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h4>Ингредиенты</h4>
            <?php foreach($ingredientsname as $ingredient) echo $ingredient->name; ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($dish, 'description')->textarea()->label('Описание'); ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>