<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

$this->title = Yii::t('app', 'Request password reset');
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">
    <div class="row" style="margin-top:100px; margin-bottom: 100px;">
        <div class="col-md-6 col-md-offset-3 col-lg-6 col-xs-12 col-sm-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(['id' => 'login-nala-form', 'options' => ['class'=> 'form-horizontal']]); ?>
                        <div class="form-group">
                            <h4 style="text-align: center;"><?= Yii::t('app', 'Please fill out your email. A link to reset password will be sent there.') ?></h4>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">邮箱</label>
                            <div class="col-sm-10">
                                <?= Html::activeTextInput($model, 'email', ['class' => 'form-control', 'placeholder' => "邮箱"]) ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <?= Html::submitButton( Yii::t('app', 'Send'), ['class' => 'btn btn-success', 'name' => 'login-button']) ?>

                                <?php if($model->errors != null) {?>
                                        错误：<?=$model->errors['email'][0]?>
                                <?php } else { ?>
                                    成功：<?=Yii::$app->getSession()->getFlash('success')?>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <a href="<?= Yii::$app->urlManager->createUrl(['blog/default/signin']) ?>">点击登录</a>
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>