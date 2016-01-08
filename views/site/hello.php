<?php
/**
 * Created by PhpStorm.
 * User: dev48
 * Date: 10.08.15
 * Time: 10:50
 */
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Menu;

$this->title = 'Hello'; // title для вкладки браузера для этой страницы
$this->params['breadcrumbs'][] = $this->title; // блочок навигации вверху на данной странице с возможностью перейти на стр.'Home'
?>

<!--не знаю,просто перенес этот блок, чтобы работал Bootstrap-->
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]);
?>
<!--------------------end----------------------------------------->

<div class="site-hello"> <!--но пока нет такого класса для CSS - class="site-hello"-->
    <h1><?= Html::encode($this->title) ?></h1> <!--название Зкладки в браузере-->

    <p> This text testing Page "Hello !" </p>

    <code> <?= __FILE__ ?> </code> <!--для наглядности,чтобы было видно путь к этому файлу-->
</div>


<?php

?>
