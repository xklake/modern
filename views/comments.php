<?php if (count($data)) { ?>
    <div id='allcomments'>
        <?php
            $useremail = '';
            if(Yii::$app->user->isGuest == false){
                $useremail = Yii::$app->user->identity->email;
            }
            foreach($data as $item){
        ?>
            <div class="media comment_section">
                <div class="pull-left post_comments">
                    <a href="#"><img src="/images/avatar3.png" class="img-circle" alt="" /></a>
                </div>
                <div class="media-body post_reply_comments" id="<?=$item->id?>">
                    <h3 id="comment_author"><?=$item->author?></h3>
                    <h4><?=date('Y-m-d H:i', $item->created_at)?></h4>

                    <?php if($isbackend === true) { ?>
                        <p>
                            <form role="form" class='contact-form'><textarea id='content' class='form-control' placeholder='评论内容' rows='4'><?=trim($item->content)?></textarea></form>
                        </p>
                    <?php } else { ?>
                        <p id="comment_content"><?=$item->content?></p>
                    <?php } ?>


                    <?php if($isbackend) { ?>
                        <p>
                            状态:<span class="text-primary"><?= (new \funson86\blog\models\Status)->getLabel($item->status)?></span>
                        </p>
                    <?php } ?>

                    <?php if($isbackend == false) { ?>
                        <a href="#" class="reply">回复</a>
                    <?php } ?>

                    <?php
                        if($item->email === $useremail){
                            if($item->status === 1 && !$isbackend){
                    ?>
                        <a href="#" class="modify">修改</a>
                        <a href="#" class="delete">删除</a>
                        <?php } else if($isbackend) {
                            if($item->status === 1){?>
                                <a href="#" class="delete">删除</a>
                                <a href="#" class="modifyinusercentre">修改</a>
                            <?php } else { ?>
                                <a href="#" class="activate">启用</a>
                                <a href="#" class="modifyinusercentre">修改</a>
                        <?php }} } ?>
                </div>
            </div>
        <?php } ?>
    </div>

    <div style="margin-left:30px;">
        <?= \yii\widgets\LinkPager::widget(['pagination' => $pagination, 'options'=>['class'=>'pagination'], 'activePageCssClass' => 'active']) ?>
    </div>
<?php } ?>



