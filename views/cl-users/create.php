<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClUsers */

$this->title = Yii::t('app', 'Create Cl Users');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cl Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cl-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
