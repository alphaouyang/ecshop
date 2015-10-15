<?php if ($this->_var['pager']): ?>
<div class="comment_page" id="PorductListPage"> 
<?php if ($this->_var['pager']['page_prev']): ?>
<a href="<?php echo $this->_var['pager']['page_prev']; ?>"class="prev" ><span><?php echo $this->_var['lang']['page_prev']; ?></span></a> 
<?php else: ?>
<a href="javascript:;" class="prev dis" ><span><?php echo $this->_var['lang']['page_prev']; ?></span></a> 
<?php endif; ?>
<a href="javascript:;" class="page_select" >
<span class="page_tip">第<?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['pager']['page'] == $this->_var['key']): ?><?php echo $this->_var['key']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>/<?php echo $this->_var['pager']['page_count']; ?>页</span>
</a> 
<?php if ($this->_var['pager']['page_next']): ?>
<a  href="<?php echo $this->_var['pager']['page_next']; ?>"class="next"><span><?php echo $this->_var['lang']['page_next']; ?></span></a>
<?php else: ?>
<a href="javascript:;" class="next dis"><span><?php echo $this->_var['lang']['page_next']; ?></span></a>
<?php endif; ?>

  <select class="input_select"  onchange="location.href=this.options[this.selectedIndex].value;">
<?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  <option <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_var['item']; ?>">第<?php echo $this->_var['key']; ?>页</option>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</select>
</div>
<?php endif; ?>