<?php if (count($data)) { ?>
    <div id='allcomments'>
        <?php
            foreach($data as $item){
        ?>
            <div class="media comment_section">
                <div class="pull-left post_comments">
                    <a href="#"><img src="/images/avatar3.png" class="img-circle" alt="" /></a>
                </div>
                <div class="media-body post_reply_comments">
                    <h3 id="comment_author"><?=$item->author?></h3>
                    <h4><?=date('Y-m-d H:i', $item->created_at)?></h4>
                    <p id="comment_content"><?=$item->content?></p>
                    <a href="#" class="reply">回复</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <div style="margin-left:30px;">
        <?= \yii\widgets\LinkPager::widget(['pagination' => $pagination, 'options'=>['class'=>'pagination'], 'activePageCssClass' => 'active']) ?>
    </div>
<?php } ?>
