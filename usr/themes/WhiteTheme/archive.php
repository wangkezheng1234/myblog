<?php $this->need('header.php'); ?>
  <div class="main">
    <div class="left">
	<?php if ($this->have()): ?>
	<?php while($this->next()): ?>
      <div class="cont">
        <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <p class="entry_data">发布时间：<?php $this->date('Y-m-d H:i:s'); ?>  &nbsp; 分类：<?php $this->category(','); ?> &nbsp; <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 评论', '1 评论', '%d 评论'); ?></a></p>
        <div class="content">
          <?php $this->content('Read More →'); ?>
        </div>
      </div>
	<?php endwhile; ?>
    <?php else: ?>
        <div class="cont">
            <h2 class="entry_title"><?php _e('没有找到内容'); ?></h2>
        </div>
    <?php endif; ?>
      <?php $this->pageNav(); ?>
    </div>
<?php $this->need('sidebar.php'); ?>
  </div>
<?php $this->need('footer.php'); ?>