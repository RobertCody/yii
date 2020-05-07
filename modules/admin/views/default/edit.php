<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Редактировать блюдо';
?>
<?php $this->registerJs("$('#bbb').click(function(){ alert('РАБОТАЕТ');"); ?>

<button type="button" id="bbb">КЛИК</button>
<?php $form = ActiveForm::begin([
    'id' => 'food-form',
    'enableClientValidation'=>false,
    'validateOnSubmit' => true, // this is redundant because it's true by default
]); ?>

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
        <div class="well well-sm">
        <?php foreach ($ingred as $ing) {
            if(in_array($ing->ingredient_id, $ingredients)) {
            echo $form->field($dish, 'ingredients['. $ing->ingredient_id .']')->label($ing->name)->CheckBox(['value' => $ing->ingredient_id, 'checked ' => true, 'label'=>null])->label($ing->name);
            } else {
            echo $form->field($dish, 'ingredients['. $ing->ingredient_id .']')->CheckBox(['value' => $ing->ingredient_id, 'checked ' => false, 'label'=>null])->label($ing->name);
            }
        } ?>
        </div>
    </div>

    <div class="col-md-6">
        <?= $form->field($dish, 'description')->textarea()->label('Описание'); ?>
    </div>
</div>

<?php ActiveForm::end(); ?>

