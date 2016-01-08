<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClPosts */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cl Posts',
]) . ' ' . $model->id_post;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cl Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_post, 'url' => ['view', 'id' => $model->id_post]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cl-posts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
