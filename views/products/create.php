<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Tạo Sản Phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Sản Phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h2>Tạo Sản Phẩm</h2>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'products-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'description')->textarea() ?>
                <?= $form->field($model, 'price')->textarea() ?>
                <?= $form->field($model,'file')->fileInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Tạo', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
