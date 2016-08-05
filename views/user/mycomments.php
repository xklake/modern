<?php
use yii\helpers\Html;
use \common\models\Profile;

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'My Comments');
$this->params['breadcrumbs'][] = $this->title;
$i = 0;
?>


<ul class="list-group">
    <li class="list-group-item">
        <div class="form-horizontal">
            <div class="form-group">
                <h3 style="width: 100%;text-align: center;font-size:2.3rem;" >我的评论记录</h3>
            </div>

            <div class="form-group">
                <div id='allcomments'>
                </div>
            </div>
        </div>
    </li>
</ul>

<?php
$urlComment = Yii::$app->urlManager->createUrl(['blog/default/comment']);
$userid = Yii::$app->user->id;
$js = <<<JS

    $('#allcomments').on('click', '.pagination a', function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: "GET",
            dataType: "html",
            success: function(data){
                $('#allcomments').html(data);
            }

        }).fail(function(){
                alert("Error");
        });

    });

    $.ajax({
        url: "{$urlComment}?postid=&userid="+{$userid},
        type: "GET",
        dataType: "html",
        success: function(data){
            $('#allcomments').html(data);
        }
    }).fail(function(){
            alert("Error");
    });
;
JS;

$this->registerJs($js);
?>
