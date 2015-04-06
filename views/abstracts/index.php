<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Panels;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Abstracts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content abstracts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Abstracts'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'author',    
            'text:ntext',
            'panel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
