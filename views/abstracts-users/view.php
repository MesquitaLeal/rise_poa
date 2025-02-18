<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AbstractsUsers */

$this->title = $model->users_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abstracts Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abstracts-users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'users_id' => $model->users_id, 'abstracts_id' => $model->abstracts_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'users_id' => $model->users_id, 'abstracts_id' => $model->abstracts_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'users_id',
            'abstracts_id',
        ],
    ]) ?>

</div>
