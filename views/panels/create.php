<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Panels */

$this->title = Yii::t('app', 'Create Panels');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Panels'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panels-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
