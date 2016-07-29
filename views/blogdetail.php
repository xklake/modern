<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 11:55 AM
 */
?>

<div class="blog-item">
    <img class="img-responsive img-blog" src="<?='/'.$post->banner?>" width="100%" alt="" />
    <div class="row">
        <div class="col-xs-12 col-sm-2 text-center">
            <div class="entry-meta">
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

<div class="media reply_section">
    <div class="pull-left post_reply text-center">
        <a href="#"><img src="/images/avatar3.png" class="img-circle" alt="" /></a>
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
        </ul>
    </div>
    <div class="media-body post_reply_content">
        <h3>作者 ： Panda Blog</h3>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturp
        </p>
        <p><strong>Web:</strong> <a href="http://www.chinasoftware.co.uk" target="_blank">www.chinasoftware.co.uk</a></p>
    </div>
</div>

<?php
    $comments = $post->comments;
    $commentcount = count($comments);
?>
<h1 id="comments_title">共<?=$commentcount?>条评论</h1>

<?php
    foreach($comments as $item){
?>
<div class="media comment_section">
    <div class="pull-left post_comments">
        <a href="#"><img src="/images/avatar3.png" class="img-circle" alt="" /></a>
    </div>
    <div class="media-body post_reply_comments">
        <h3><?=$item->author?></h3>
        <h4><?=date('Y-m-d H:i', $item->created_at)?></h4>
        <p><?=$item->content?></p>
        <a href="#">回复</a>
    </div>
</div>
<?php } ?>


<div id="contact-page clearfix">
    <div class="status alert alert-success" style="display: none"></div>
    <div class="message_heading">
        <h4>Leave a Replay</h4>
        <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
    </div>

    <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Name *</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>URL</label>
                    <input type="url" class="form-control">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="form-group">
                    <label>Message *</label>
                    <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                </div>
            </div>
        </div>
    </form>
</div><!--/#contact-page-->
