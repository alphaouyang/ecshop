<div class="list">
  <div class="head"><span><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></span></div>
  <div class="blank6"></div>
  <div class="list-cell"> 
    <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_62623700_1444895326');$this->_foreach['catgoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['catgoods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_62623700_1444895326']):
        $this->_foreach['catgoods']['iteration']++;
?> 
      <div class="cell"> <div class="product items "> <a href="<?php echo $this->_var['goods_0_62623700_1444895326']['url']; ?>" class="ScanProductViewBtn" >
        <div class="imgurl"><img src="<?php echo $this->_var['option']['static_path']; ?><?php echo $this->_var['goods_0_62623700_1444895326']['thumb']; ?>"></div>
        <div class="info">
          <dl>
            <dt>
              <span><?php echo htmlspecialchars($this->_var['goods_0_62623700_1444895326']['short_name']); ?></span>
            </dt>
            <dd><span class="pull-left"><span>价格:<b class="ect-colory"><?php if ($this->_var['goods_0_62623700_1444895326']['promote_price'] != ""): ?> <?php echo $this->_var['goods_0_62623700_1444895326']['promote_price']; ?><?php else: ?> 
            <?php echo $this->_var['goods_0_62623700_1444895326']['shop_price']; ?><?php endif; ?></b></span><small class="ect-margin-lr" style="display:none"><del><?php echo $this->_var['goods_0_62623700_1444895326']['market_price']; ?></del></small></span><span class="ect-pro-price"></span></dd>
            <dd><span class="pull-left"><i class="fa fa-eye"></i><?php echo $this->_var['goods_0_62623700_1444895326']['click_count']; ?>人浏览</span></dd>
      </dl>
        </div>
        </a> </div></div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
</div>
<div class="col1 more"><a href="<?php echo $this->_var['goods_cat']['url']; ?>"><span>查看更多<?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?>&nbsp;&gt;</span></a></div>
