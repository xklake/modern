<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 11:55 AM
 */
?>

<div class="blog-item">
    <?php if($post->banner != null && $post->banner != "") {?>
        <img class="img-responsive img-blog" src="<?=Yii::$app->urlManager->getHostInfo().'/'.$post->banner?>" width="100%" alt="" />
    <?php } ?>

    <div class="row">
        <div class="col-xs-12 col-sm-2 text-center">
            <div class="entry-meta text-center">
                <span id="publish_date"><?=substr(date('Y', $post->created_at), 2).'年'.date('m', $post->created_at).'月'?></span>
                <span><i class="fa fa-user"></i> <a href="#"><?=$post->user->username?></a></span>
                <span><i class="fa fa-comment"></i> <a href=""><?=$post->getCommentsCount()?> 评论</a></span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-10 blog-content">
            <h2><?=$post->title?></h2>
            <?=$post->content?>
            <div class="post-tags">
                <strong>标签:</strong>

                <?php
                    $tags = $post->getTagLinks();
                    foreach($tags as $item){
                        echo ($item .'  ');
                    }
                ?>
            </div>
        </div>
    </div>
</div><!--/.blog-item-->

<div class="blog-item">
    <h3>相关阅读</h3>
    <ul>
    <?php
        $others = \funson86\blog\models\BlogPost::find()->where(['=', 'catalog_id', $post->catalog_id])->andWhere(['<>', 'id', $post->id])->limit(10)->orderBy(['created_at' => SORT_DESC])->all();

        foreach($others as $article){
    ?>
        <li><a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=>$article->id])?>"><?=$article->title?></a></li>

    <?php } ?>
    </ul>
</div>

<div class="media reply_section">
    <div class="pull-left post_reply text-center">
        <img src="<?=Yii::$app->urlManager->getHostInfo().'/images/avatar3.png'?>" class="img-circle" alt="网站制作" />
        <ul>
            <li><i class="fa fa-facebook"></i></li>
            <li><i class="fa fa-twitter"></i></li>
            <li><i class="fa fa-google-plus"></i></li>
        </ul>
    </div>
    <div class="media-body post_reply_content">
        <h3>作者 ：英国中软软件</h3>
        <p class="lead">
            <?php
                $intro = Yii::$app->getHtmlBlock('auth-intro');
                if($intro != null)
                {
                    echo($intro);
                }
            ?>
        </p>

        <p>
            <strong>网站:</strong>
            <a href="<?=Yii::$app->urlManager->getHostInfo()?>" target="_blank">英国中软软件官网</a>
        </p>
    </div>
</div>

<div id="allcomments">
    <h1 id="comments_title">共<span id='comment_count'></span>条评论</h1>
</div>


<div id="contact-page clearfix">
    <div class="status alert alert-success" style="display: none"></div>
    <div class="message_heading">
        <h4><span class="fa fa-comment"></span>我要评论</h4>
        <p>所有带星号(*)输入框都需要填写.不允许有任何的HTML代码</p>
    </div>

    <?php
        $isGuest = Yii::$app->user->isGuest;
    ?>

    <form role="form" class='contact-form'>
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label>昵称 *</label>
                    <?php
                    if($isGuest || !isset(Yii::$app->user->identity) ||  !isset(Yii::$app->user->profile) || !isset(Yii::$app->user->identity->profile->surname)) {  ?>
                        <input type='text'  id='author' class='form-control' placeholder='昵称'>
                    <?php } else { ?>
                        <input type='text'  id='author' class='form-control' placeholder='昵称' disabled='disabled' value="<?=Yii::$app->user->identity->profile->surname?>">
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label>邮箱 *</label>
                    <?php
                    if($isGuest || !isset(Yii::$app->user->identity) || !isset(Yii::$app->user->identity->email)) {  ?>
                        <input type='text'  id='email' class='form-control' placeholder='邮箱'>
                    <?php } else { ?>
                        <input type='text'  id='email' class='form-control' placeholder='邮箱' disabled='disabled' value="<?=Yii::$app->user->identity->email?>">
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label>URL</label>
                    <?php
                    if($isGuest) {  ?>
                        <input type='text'  id='url' class='form-control' placeholder='URL'>
                    <?php } else { ?>
                        <input type='text'  id='url' class='form-control' placeholder='URL' disabled='disabled'>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="form-group">
                    <label>评论内容 *</label>
                    <?php
                    if($isGuest) {  ?>
                        <textarea  id='content' class='form-control' placeholder='评论内容' rows='8'></textarea>
                    <?php } else { ?>
                        <textarea id='content' class='form-control' placeholder='评论内容' rows='8'></textarea>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <div id="addcomment" class="btn btn-success" > 提交 </div>
                </div>
            </div>
        </div>
    </form>
</div><!--/#contact-page-->


<?php
$urlNewComment = Yii::$app->urlManager->createAbsoluteUrl(['blog/default/newcomment']);
$urlModifyComment = Yii::$app->urlManager->createAbsoluteUrl(['blog/default/modifycomment']);
$urlDeleteComment = Yii::$app->urlManager->createAbsoluteUrl(['blog/default/deletecomment']);

$csrfcode = Yii::$app->request->getCsrfToken();
$urlComment = Yii::$app->urlManager->createAbsoluteUrl(['blog/default/comment']);


$this->registerJs('
    var urlNewComment = "' . $urlNewComment . '";
    var csrfcode = "'. $csrfcode .'";
    var postid = "'. $post->id .'";
');


$js = <<<JS

    $.ajax({
        url: "{$urlComment}?postid=" + postid + "&userid=",
        type: "GET",
        dataType: "html",
        success: function(data){
            $('#allcomments').html(data);
            //$('#comment_count').text(count(data));
        }
    }).fail(function(){
            alert("Error");
    });

    $('#allcomments').on('click','.delete', function(e){

        var id = $(this).parent().attr('id');
        param = {
            id:id,
            _csrf: csrfcode
        };

        $.post("{$urlDeleteComment}", param, function(data) {
            if (data.status < 0) {
                alert('删除评论失败');
            } else {
                location.reload();
            }
        }, "json");
    });


    $('#allcomments').on('click','.modify', function(e){

       $('#content').val($(this).parent().children('#comment_content').text());

       $('#content').attr('commentid', $(this).parent().attr('id'));

        //scroll down
       $('html, body').animate(
        {
            scrollTop: $("#content").offset().top
        }, 2000);

       //stay focus
       var input_content = document.getElementById('content');
       if(input_content){
        input_content.focus();
        input_content.setSelectionRange(0,0);
       }
    });


    $('#allcomments').on('click','.reply', function(e){
       var author = "  //@" + $(this).parent().children('#comment_author').text();
       var content = ":" + $(this).parent().children('#comment_content').text();
       $('#content').val(author + content);

       $('html, body').animate(
        {
            scrollTop: $("#content").offset().top
        }, 2000);


       var input_content = document.getElementById('content');
       if(input_content){
        input_content.focus();
        input_content.setSelectionRange(0,0);
       }
    });


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


    $("#addcomment").click(function(e){
    param = {
        author:$('#author').val(),
        email:$('#email').val(),
        content:$(this).parent().parent().find('#content').val(),
        commentid:$(this).parent().parent().find('#content').attr("commentid"),
        url:$('#url').val(),
        postid:postid,
        _csrf: csrfcode
    };

    $.post("{$urlNewComment}", param, function(data) {

        if (data.status < 0) {
            alert('评论失败');
        } else {
            location.reload();
        }
    }, "json");
});
JS;

$this->registerJs($js);
?>