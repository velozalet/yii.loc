<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClPostCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cl Post Category',
]) . ' ' . $model->id_category;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cl Post Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_category, 'url' => ['view', 'id' => $model->id_category]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cl-post-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
