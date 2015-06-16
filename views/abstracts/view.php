<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Panels;

/* @var $this yii\web\View */
/* @var $model app\models\Abstracts */

$this->title = $model->author;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abstracts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content abstracts-view">

    <h1>
        <?php 
            if (Yii::$app->user->isGuest) 
                echo 'Resumen presentado com éxito';
            else
                echo $model->author;
        ?>
    </h1>

    <!--<?php if(!Yii::$app->user->isGuest): ?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php endif;?>-->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'author',
            'email',
            'institution',
            'text:ntext',
            [
                'attribute' => 'panel',
                'value' => $model->panels->name,
            ],
        ],
    ]) ?>

    <?php if (!Yii::$app->user->isGuest) 
        echo Html::a(Yii::t('app', 'Volver'), ['index'], ['class' => 'btn btn-primary voltar']) 
    ?>

</div>
