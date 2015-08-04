<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Xem Trước Khách Hàng';
$this->params['breadcrumbs'][] = ['label' => 'Khách Hàng', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h2>Xem Trước Khách Hàng</h2>
    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'Categories-form']); ?>
                <?= $form->field($model, 'id')->hiddenInput(['name'=>'id'])->label(false) ?>
                <?= $form->field($model, 'deleted')->hiddenInput(['name'=>'id'])->label(false) ?>
                <?= $form->field($model, 'name')->textInput(['disabled'=>true]) ?>
                <?= $form->field($model, 'email')->textarea(['disabled'=>true]) ?>
                <?= $form->field($model, 'address')->textarea(['disabled'=>true]) ?>
                <?= $form->field($model, 'phone')->textarea(['disabled'=>true]) ?>
            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
