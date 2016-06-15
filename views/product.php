<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 2:31 PM
 */
?>

<div class="blog-item">
    <img class="img-responsive img-blog" src="images/blog/blog1.jpg" width="100%" alt="" />
    <div class="row">
        <div class="col-xs-12 col-sm-2 text-center">
            <div class="entry-meta">
                <span id="publish_date">07  NOV</span>
                <span><i class="fa fa-user"></i> <a href="#"> John Doe</a></span>
                <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>
                <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-10 blog-content">
            <h2>Consequat bibendum quam</h2>
            <p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</p>

            <p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper.</p>

            <div class="post-tags">
                <strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
            </div>

        </div>
    </div>
</div><!--/.blog-item-->

<div class="media reply_section">
    <div class="pull-left post_reply text-center">
        <a href="#"><img src="images/blog/boy.png" class="img-circle" alt="" /></a>
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
        </ul>
    </div>
    <div class="media-body post_reply_content">
        <h3>Antone L. Huges</h3>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturp</p>
        <p><strong>Web:</strong> <a href="#">www.shapebootstrap.net</a></p>
    </div>
</div>

<h1 id="comments_title">5 Comments</h1>
<div class="media comment_section">
    <div class="pull-left post_comments">
        <a href="#"><img src="images/blog/girl.png" class="img-circle" alt="" /></a>
    </div>
    <div class="media-body post_reply_comments">
        <h3>Marsh</h3>
        <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a href="#">Reply</a>
    </div>
</div>
<div class="media comment_section">
    <div class="pull-left post_comments">
        <a href="#"><img src="images/blog/boy2.png" class="img-circle" alt="" /></a>
    </div>
    <div class="media-body post_reply_comments">
        <h3>Marsh</h3>
        <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a href="#">Reply</a>
    </div>
</div>
<div class="media comment_section">
    <div class="pull-left post_comments">
        <a href="#"><img src="images/blog/boy3.png" class="img-circle" alt="" /></a>
    </div>
    <div class="media-body post_reply_comments">
        <h3>Marsh</h3>
        <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a href="#">Reply</a>
    </div>
</div>


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

