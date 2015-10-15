<?php if ($this->_var['hot_goods']): ?>
<div class="list">
      <div class="head"><span><?php echo $this->_var['lang']['hot_goods']; ?></span></div>
      <div class="blank6"></div>
     <p> <ul>  
          <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['hot_goods']['iteration']++;
?>
           <li class="hproduct">
                <div class="url">
                    <a class="photo" href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['option']['static_path']; ?><?php echo $this->_var['goods']['thumb']; ?>" width="80"></a>
                    <a class="fn"href="<?php echo $this->_var['goods']['url']; ?>"><?php echo sub_str($this->_var['goods']['name'],10); ?></a><p class="price">本店价：<?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?>          <?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></p><del class="old_price">原　价：<?php echo $this->_var['goods']['market_price']; ?></del>
                       <a href="javascript:addToCart(<?php echo $this->_var['goods']['id']; ?>)" class="btn">立即购买</a>
                  </div>             
                </li>          
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </ul></p>
</div>
<?php endif; ?> 
