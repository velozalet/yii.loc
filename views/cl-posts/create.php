<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClPosts */

$this->title = Yii::t('app', 'Create Cl Posts');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cl Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cl-posts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
