<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Sửa Khách Hàng';
$this->params['breadcrumbs'][] = ['label' => 'Khách Hàng', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h2>Sửa Khách Hàng</h2>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'customer-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'email')->textarea() ?>
            <?= $form->field($model, 'address')->textarea() ?>
            <?= $form->field($model, 'phone')->textarea() ?>

            <div class="form-group">
                <?= Html::submitButton('Sửa', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
