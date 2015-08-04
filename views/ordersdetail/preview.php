<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Xem Trước Chi Tiết Hóa Đơn';
$this->params['breadcrumbs'][] = ['label' => 'Chi Tiết Hóa Đơn', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h2>Xem Trước Chi Tiết Hóa Đơn</h2>
    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'Categories-form']); ?>
                <?= $form->field($model, 'id')->hiddenInput(['name'=>'id'])->label(false) ?>
                <?= $form->field($model, 'deleted')->hiddenInput(['name'=>'id'])->label(false) ?>
                <?= $form->field($model, 'ordersid')->textInput(['disabled'=>true]) ?>
                <?= $form->field($model, 'name')->textInput(['disabled'=>true]) ?>
                <?= $form->field($model, 'quantity')->textarea(['disabled'=>true]) ?>
                <?= $form->field($model, 'price')->textarea(['disabled'=>true]) ?>
                <?= $form->field($model, 'guarantee')->textarea(['disabled'=>true]) ?>
            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
