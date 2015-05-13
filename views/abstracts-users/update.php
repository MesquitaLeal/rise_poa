<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AbstractsUsers */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Abstracts Users',
]) . ' ' . $model->users_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abstracts Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->users_id, 'url' => ['view', 'users_id' => $model->users_id, 'abstracts_id' => $model->abstracts_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="abstracts-users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
