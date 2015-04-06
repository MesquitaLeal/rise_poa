<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Abstracts */

$this->title = Yii::t('app', 'Enviar Resumen');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abstracts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abstract">
    <div class="content">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
