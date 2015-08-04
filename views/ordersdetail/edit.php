<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Sửa Chi Tiết Hóa Đơn';
$this->params['breadcrumbs'][] = ['label' => 'Chi Tiết Hóa Đơn', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h2>Sửa Chi Tiết Hóa Đơn</h2>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'productstype-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>
            <?= $form->field($model, 'ordersid') ?>
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'quantity')->textarea() ?>
            <?= $form->field($model, 'price')->textarea() ?>
            <?= $form->field($model, 'guarantee')->textarea() ?>

            <div class="form-group">
                <?= Html::submitButton('Sửa', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
