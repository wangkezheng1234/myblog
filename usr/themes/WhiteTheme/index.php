<?php
/**
 * 白色宽版简洁主题
 * 
 * @package White Theme 
 * @author KongWeicong
 * @version 1.0.0
 * @link http://www.kongweicong.com
 */
 
 $this->need('header.php');
 ?>
  <div class="main">
    <div class="left">
	<?php while($this->next()): ?>
      <div class="cont">
        <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <p class="entry_data">发布时间：<?php $this->date('Y-m-d H:i:s'); ?> &nbsp;分类：<?php $this->category(','); ?> &nbsp; <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 评论', '1 评论', '%d 评论'); ?></a></p>
        <div class="content">
        <?php $this->excerpt(150, "........");?>
        </div>
      </div>
	  <?php endwhile; ?>
      <?php $this->pageNav(); ?>
    </div>
<?php $this->need('sidebar.php'); ?>
  </div>
<?php $this->need('footer.php'); ?>