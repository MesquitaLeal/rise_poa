<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AbstractsUsers */

$this->title = Yii::t('app', 'Create Abstracts Users');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abstracts Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abstracts-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
