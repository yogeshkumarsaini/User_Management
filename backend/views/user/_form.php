<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>

    <div class="row-cols-3">
        <div class="mb-2">
            <?= $form->field($model,'username')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="mb-2">
            <?= $form->field($model,'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="mb-2">
            <?= $form->field($model, 'status')->dropDownList(['Deleted'=>'Deleted', 'Active'=>'Active', 'Inactive'=>'Inactive'], ['prompt'=>'Select Status']) ?>
        </div>

    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
