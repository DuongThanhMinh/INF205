<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Xem Trước Hóa Đơn';
$this->params['breadcrumbs'][] = ['label' => 'Hóa Đơn', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h2>Xem Trước Hóa Đơn</h2>
    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'orders-form']); ?>
                <?= $form->field($model, 'id')->hiddenInput(['name'=>'id'])->label(false) ?>
                <?= $form->field($model, 'deleted')->hiddenInput(['name'=>'id'])->label(false) ?>
                <?= $form->field($model, 'customer_id')->textarea(['disabled'=>true]) ?>
                <?= $form->field($model, 'date')->textInput(['disabled'=>true]) ?>
            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
