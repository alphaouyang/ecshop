<?php if ($this->_var['new_goods']): ?>
<div class="list">
      <div class="head"><span><?php echo $this->_var['lang']['new_goods']; ?></span></div>
      <div class="blank6"></div>
      <ul>  
         <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_61223600_1444895326');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_61223600_1444895326']):
        $this->_foreach['new_goods']['iteration']++;
?>
           <li class="hproduct">
                <div class="url">
                    <a class="photo" href="<?php echo $this->_var['goods_0_61223600_1444895326']['url']; ?>"><img src="<?php echo $this->_var['option']['static_path']; ?><?php echo $this->_var['goods_0_61223600_1444895326']['thumb']; ?>" width="80"></a>
                   <a class="fn"href="<?php echo $this->_var['goods_0_61223600_1444895326']['url']; ?>"><?php echo sub_str($this->_var['goods_0_61223600_1444895326']['name'],10); ?></a><p class="price">本店价：<?php if ($this->_var['goods_0_61223600_1444895326']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_61223600_1444895326']['promote_price']; ?>          <?php else: ?><?php echo $this->_var['goods_0_61223600_1444895326']['shop_price']; ?><?php endif; ?></p><del class="old_price">原　价：<?php echo $this->_var['goods_0_61223600_1444895326']['market_price']; ?></del>
                    <a href="javascript:addToCart(<?php echo $this->_var['goods_0_61223600_1444895326']['id']; ?>)" class="btn">立即购买</a>
                  </div>             
                </li>          
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </ul>
    </div>
<?php endif; ?> 