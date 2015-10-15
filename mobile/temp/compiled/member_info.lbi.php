<?php if ($this->_var['user_info']): ?>
<a href="user.php"><span><?php echo $this->_var['user_info']['username']; ?></span></a><a href="user.php?act=logout"><span>退出</span></a><a href="javascript:window.scrollTo(0,0);"><span>返回顶部</span></a>
<?php else: ?>
<a href="user.php"><span>登录</span></a><a href="javascript:window.scrollTo(0,0);"><span>返回顶部</span></a>
<?php endif; ?>