<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Xem Trước Chi Tiết Sản Phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Chi Tiết Sản Phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h2>Xem Trước Chi Tiết Sản Phẩm</h2>
    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'Categories-form']); ?>
                <?= $form->field($model, 'id')->hiddenInput(['name'=>'id'])->label(false) ?>
                <?= $form->field($model, 'deleted')->hiddenInput(['name'=>'id'])->label(false) ?>
                <?= $form->field($model, 'name')->textInput(['disabled'=>true]) ?>
                <?= $form->field($model, 'type_name')->textarea(['disabled'=>true]) ?>
            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
