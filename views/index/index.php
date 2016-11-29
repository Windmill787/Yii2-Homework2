<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 27.11.16
 * Time: 13:31
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \yii\captcha\Captcha;

?>
<?php $form = ActiveForm::begin([
    'id' => 'form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]); ?>

<?= $form->field($model, 'firstName')->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'lastName')->textInput() ?>

<?= $form->field($model, 'login')->textInput() ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<?= $form->field($model, 'age')->textInput() ?>

<?= $form->field($model, 'sex[]')->radioList(['male' => 'male', 'female' => 'female']) ?>

<?= $form->field($model, 'about')->textarea(['rows' => 5]) ?>

<?= $form->field($model, 'have[]')->checkboxList(['car' => 'car', 'checked',
    'house' => 'house', 'appartament' => 'appartament']) ?>

<?= $form->field($model, 'city')->textInput(['placeholder' => 'Cherkassy, Kyiv or Kharkiv']) ?>

<?= $form->field($model, 'email')->textInput() ?>

<?= $form->field($model, 'verify')->widget(Captcha::className()) ?>


    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

<?php ActiveForm::end(); ?>