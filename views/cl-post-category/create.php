<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClPostCategory */

$this->title = Yii::t('app', 'Create Cl Post Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cl Post Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cl-post-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
