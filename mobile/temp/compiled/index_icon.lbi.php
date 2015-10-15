<div class="nav-index card">
      <ul>
      <?php $_from = $this->_var['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['list']):
        $this->_foreach['name']['iteration']++;
?>
        <li>
        <a href="<?php echo $this->_var['list']['menu_url']; ?>"><span class="icon" style="background:url(<?php echo $this->_var['list']['menu_img']; ?>);background-size: 4em 4em;">&nbsp;</span><span class="t"><span><?php echo $this->_var['list']['menu_name']; ?></span></span></a>
        </li>	
          <?php if ($this->_foreach['name']['iteration'] % 4 == 0 && $this->_foreach['best_goods']['iteration'] != $this->_foreach['name']['total']): ?></ul><ul><?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>