<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Nav;

use yii\bootstrap\NavBar;

use yii\widgets\Menu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ClPostCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cl Post Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cl-post-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Cl Post Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_category',
            'category_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>


<!-----------------------testing------------------------------>
