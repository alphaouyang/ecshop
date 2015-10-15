<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/TouchSlide.1.1.js"></script>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/68ecshop.css"/>
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/fonts/font-awesome.min.css">
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<div id="wrapper" >
  <div class="page-index" id="home">
    <header class='header'>
    <a href="catalog.php" class="top_bt">首页</a>
    <div class="tit" style="">
      <h3><?php echo $this->_var['lang']['shop_name']; ?></h3>
    </div>
    <div class="nav">
      <ul>
        <li class="cart"> <a href="flow.php">购物车</a> <span id="ECS_CARTINFO" class="ECS_CARTINFO"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span> </li>
      </ul>
    </div>
</header>
   <?php echo $this->fetch('library/index_ad.lbi'); ?> 
    <div id="fake-search" >
      <div class="fakeInput">
       <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="searchform">      
          <input  name="keywords" id="keyword" class="search_text" value="请输入搜索的商品" onFocus="if(this.value=='请输入搜索的商品'){this.value=''}" onBlur="if(this.value==''){this.value='请输入搜索的商品'}" type="text"/>
          <input type="submit"  class="search_submit" value=""/>
		</form>
        </div>

</div>
     <?php echo $this->fetch('library/index_icon.lbi'); ?> 
    
    
    
    <div class="card show_big">
      <div class="col2">
        <div class="row2 mg-bor-right"><span>
<?php $this->assign('ads_id','6'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</span></div>
        <div class="rows">
          <div class="row1"><span>
<?php $this->assign('ads_id','8'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</span></div>
          <div class="row1 mg-bor-no-left mg-bor-top"><span>
<?php $this->assign('ads_id','9'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</span></div>
        </div>
      </div>
      
      <div>
        <div class="col2">
          <div class="row1 mg-bor-right"><span>
<?php $this->assign('ads_id','7'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</span></div>
          <div class="row1 mg-bor-right"><span>
<?php $this->assign('ads_id','10'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</span></div>
</div>
</div>
</div>




<?php echo $this->fetch('library/recommend_hot.lbi'); ?>
<?php echo $this->fetch('library/recommend_new.lbi'); ?>
<?php echo $this->fetch('library/recommend_promotion.lbi'); ?>


<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>



  </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
 
<script type="text/javascript">
window.onload = function()
{
  //Compare.init();
  //fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>