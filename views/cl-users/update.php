<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClUsers */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cl Users',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cl Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_users]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cl-users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
