<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 11:52 AM
 */
?>
<?php foreach($posts as $item){?>
    <div class="blog-item">
        <div class="row">
            <div class="col-xs-12 col-sm-2 text-center">
                <div class="entry-meta">
                    <span id="publish_date">07  NOV</span>
                    <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>
                    <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-10 blog-content">
                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->id])?>">
                    <img class="img-responsive img-blog" src="<?='/'.$item->banner?>" width="100%" alt="" />
                </a>
                <h2>
                    <a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->id])?>">
                        <?=$item->title?>
                    </a>
                </h2>

                <h3>
                    <?=$item->brief?>
                </h3>
                <a class="btn btn-primary readmore" href="<?=Yii::$app->urlManager->createAbsoluteUrl(['blog/default/view', 'id'=> $item->id])?>">
                    阅读全文<i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div><!--/.blog-item-->
<?php } ?>


<ul class="pagination pagination-lg">
    <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
</ul><!--/.pagination-->
