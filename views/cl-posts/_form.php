<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClPosts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cl-posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user_post')->textInput() ?>

    <?= $form->field($model, 'post_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_post_category')->textInput() ?>

    <?= $form->field($model, 'post_date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
