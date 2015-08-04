<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Sửa Hóa Đơn';
$this->params['breadcrumbs'][] = ['label' => 'Hóa Đơn', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h2>Sửa Hóa Đơn</h2>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'orders-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>
                 <?= $form->field($model, 'date')->widget(\bootui\datetimepicker\datepicker::className(),[
                'options' => ['class' => 'form-control'],
                'addon' => ['prepend' => 'Ngày Đặt Hàng'],
                'format' => 'YY-MM-DD',
            ]); ?>
            <?= $form->field($model, 'customer_id') ?>
            <div class="form-group">
                <?= Html::submitButton('Sửa', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
