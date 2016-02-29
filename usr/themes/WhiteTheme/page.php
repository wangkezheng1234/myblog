<?php $this->need('header.php'); ?>
<div class="main">
  <div class="left">
    <div class="cont">
      <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      <p class="entry_data">发布时间：<?php $this->date('Y-m-d H:i:s'); ?> &nbsp; <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 评论', '1 评论', '%d 评论'); ?></a></p>
      <div class="content">
        <?php $this->content(); ?>
      </div>
    </div>
<?php $this->need('comments.php'); ?>
  </div>
<?php $this->need('sidebar.php'); ?>
</div>
<?php $this->need('footer.php'); ?>