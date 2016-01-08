<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ClPostsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cl-posts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_post') ?>

    <?= $form->field($model, 'id_user_post') ?>

    <?= $form->field($model, 'post_title') ?>

    <?= $form->field($model, 'post_text') ?>

    <?= $form->field($model, 'id_post_category') ?>

    <?php // echo $form->field($model, 'post_date') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
