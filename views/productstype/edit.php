<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Sửa Chi Tiết Sản Phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Chi Tiết Sản Phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h2>Sửa Chi Tiết Sản Phẩm</h2>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'productstype-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>
            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'type_name')->textarea() ?>

            <div class="form-group">
                <?= Html::submitButton('Sửa', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
