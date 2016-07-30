<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

//$this->registerCssFile('@web/css/login.css', ['depends' => [\frontend\assets\UikitAsset::className(), \yii\authclient\widgets\AuthChoiceAsset::className()]]);

$this->title = Yii::t('app', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">
    <div class="row" style="margin-top:100px; margin-bottom: 100px;">
        <div class="col-md-6 col-md-offset-3 col-lg-6 col-xs-12 col-sm-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(['id' => 'login-nala-form', 'options' => ['class'=> 'form-horizontal']]); ?>
                        <div class="form-group">
                            <h2 style="width: 100%;text-align: center;font-size:3.3rem;" >登录</h2>
                        </div>


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
                            <div class="col-sm-10">
                                <?= Html::activeTextInput($model, 'username', ['class' => 'form-control', 'placeholder' => "用户名"]) ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                            <div class="col-sm-10">
                                <?= Html::activePasswordInput($model, 'password', ['class' => 'form-control', 'placeholder' => "密码"]) ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <?= Html::activeCheckbox($model, 'rememberMe', ['class' => "remember-me"]) ?>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <?= Html::submitButton( Yii::t('app', 'Login'), ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <label>
                                    <a href="<?= Yii::$app->urlManager->createUrl(['site/request-password-reset']) ?>">忘记密码?</a>
                                </label>
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>