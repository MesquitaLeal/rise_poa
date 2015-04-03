<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Panels;

/* @var $this yii\web\View */
/* @var $model app\models\Abstracts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abstracts-form">

    <?php $form = ActiveForm::begin() ; ?>

    <?= $form->field($model, 'author')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'institution')->textInput() ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'panel')->dropdownList(ArrayHelper::map(Panels::find()->all(), 'id', 'name'), ['prompt' => 'Selecione Mesa Tematica']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Enviar') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
