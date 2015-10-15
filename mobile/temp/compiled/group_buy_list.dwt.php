<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/category.css"/>
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/fonts/font-awesome.min.css">
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript"> 
$(function () { 
//绑定事件处
var showheight = $("#showname").height();
$("#sortbtn_adapt").click(function () { 

if (!$("#showname").hasClass("adapt_panel_on")) { 
//设置弹出层位置在点击的下面 
$("#adapt_panel").show(); 
$("#showname").height($("#adapt_panel").height());

$("#showname").addClass("adapt_panel_on");
$("#sortbtn_adapt").addClass("active on");
} 
else { 
$("#adapt_panel").hide(); 
$("#showname").removeClass("adapt_panel_on");
$("#sortbtn_adapt").removeClass("active on");
$("#showname").height(showheight);
} 
}); 

$("#quxiaoanniu").click(function () { 
$("#adapt_panel").hide(); 
$("#showname").height(showheight);
$("#showname").removeClass("adapt_panel_on");
$("#sortbtn_adapt").removeClass("active on");
}
)
}); 
</script>
</head>
<body style="background:#EEF0F3; padding-top:57px;">
<header class="nav">
    <div class="nav__nav-wrap">
         <div class="nav__nav-item">
            <a href="index.php" class="nav__nav-link">
                <i class="nav__iconfont"><img src="themesmobile/68ecshopcom_mobile/img/cutp_02.png"></i>
                <span class="nav___nav-tit"><?php echo $this->_var['lang']['home']; ?></span>
            </a>
        </div>
         <div class="nav__nav-item">
            <a href="catalog.php" class="nav__nav-link">
                <i class="nav__iconfont"><img src="themesmobile/68ecshopcom_mobile/img/cutp_04.png"></i>
                <span class="nav___nav-tit"><?php echo $this->_var['lang']['category']; ?></span>
            </a>
        </div>
        <div class="nav__nav-item">
            <a href="flow.php" class="nav__nav-link">
                <i class="nav__iconfont"><img src="themesmobile/68ecshopcom_mobile/img/cutp_08.png"></i>
                <span class="nav___nav-tit" ><?php echo $this->_var['lang']['cart']; ?></span>
                <span class="nav__nav-shop-cart-num" id="ECS_CARTINFO"> 0 </span>
            </a>
        </div>
        <div class="nav__nav-item">
            <a href="user.php" class="nav__nav-link">
                <i class="nav__iconfont"><img src="themesmobile/68ecshopcom_mobile/img/cutp_10.png"></i>
                <span class="nav___nav-tit" ><?php echo $this->_var['lang']['user_center']; ?></span>
            </a>
        </div>
    </div>
</header>
<div id="wrapper" class="xm_app">
  <div id="viewport" class="viewport" style="display: block; background: transparent;">
    <div class="product_sorting" style="display:none">
      <ul>
        <li><a id="sortbtn_adapt" class="ico-down" href="javascript:;"><span>筛选</span></a></li>
        <li><a id="sortbtn_newtime"  class="sort-cur <?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>active<?php endif; ?>" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><span class="<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php elseif ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?><?php endif; ?>">上架</span></a></li>
        <li><a id="sortbtn_price" class="sort-cur <?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>active<?php endif; ?>" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list"><span  class="<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php elseif ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?><?php endif; ?>">价格</span></a></li>
        <li style="border-right:none"><a id="sortbtn_update" class="sort-cur <?php if ($this->_var['pager']['sort'] == 'last_update'): ?>active<?php endif; ?>" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><span  class="<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php elseif ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?><?php endif; ?>">更新</span></a></li>
</ul>
</div>
<div class="product_product " id="showname"> 
<div class="list_product list_column list_tmp">
	 <?php if ($this->_var['gb_list']): ?>
  <ul id="ProductList">
      <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');if (count($_from)):
    foreach ($_from AS $this->_var['group_buy']):
?>
    <li>
      <div class="product items "> <a href="<?php echo $this->_var['group_buy']['url']; ?>" class="ScanProductViewBtn" >
        <div class="imgurl"><img src="../<?php echo $this->_var['group_buy']['goods_thumb']; ?>"></div>
        <div class="info">
          <dl>
            <dt>
              <span><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></span>
            </dt>
            <dd><span class="pull-left"><strong>价格:<b class="ect-colory"><?php echo $this->_var['group_buy']['formated_cur_price']; ?></b></strong></span><span class="ect-pro-price"></span></dd>
            <dd><span class="pull-left">已购：<?php echo $this->_var['group_buy']['num']; ?></span></dd>
      </dl>
        </div>
        </a> </div>
    </li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
  </ul>
   <?php else: ?>
       <span style="margin:2px 10px; font-size:14px; line-height:36px;"><?php echo $this->_var['lang']['group_goods_empty']; ?></span>
      <?php endif; ?>
</div>
<div id="adapt_panel" class="overlay_adapt_panel" >
<div id="pick_panel" class="pick_panel" >
<script type="text/javascript">
function get_brand(brand_id)
{
	document.getElementById('brand').value = brand_id;
	var obj = document.getElementById('brands').getElementsByTagName('a');
	for(var i=0;i<obj.length;i++)
	{
		obj[i].className = '';
	}
	document.getElementById('brand_'+brand_id).className = 'cur';
}

function get_price(price_min,price_max)
{
	document.getElementById('price_min').value = price_min;
	document.getElementById('price_max').value = price_max;
	var obj = document.getElementById('prices').getElementsByTagName('a');
	for(var i=0;i<obj.length;i++)
	{
		obj[i].className = '';
	}
	document.getElementById('price_'+price_min).className = 'cur';
}

<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr');$this->_foreach['filter_attr_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr_list']['total'] > 0):
    foreach ($_from AS $this->_var['filter_attr']):
        $this->_foreach['filter_attr_list']['iteration']++;
?>

function get_attr_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>(attr_id)
{
	document.getElementById('show68ecshop_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>').value=attr_id;
	var show68ecshop = document.getElementsByName("show68ecshop");
	var zongshu = null;
	for(var i=show68ecshop.length;i>0;i--){
	if(zongshu == null)
	{
		zongshu = document.getElementById("show68ecshop_"+i).value;
	
	}
	else
	{
		zongshu = document.getElementById("show68ecshop_"+i).value +"."+zongshu;
		document.getElementById('filter_attr').value = zongshu;	
	}
	}

	var obj = document.getElementById('attrs_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>').getElementsByTagName('a');

	for(var i=0;i<obj.length;i++)
	{
		obj[i].className = '';
	}
	document.getElementById('attr_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>_'+attr_id).className = 'cur';

}

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


</script>
<form method="post" action="category.php">

  <div class="cate-list cate-list-pop" id="Cate_Choose" >
    <input type="hidden" name="brand" id="brand" value="<?php echo $this->_var['brand']; ?>"><input type="hidden" name="price_min" id="price_min" value="<?php echo $this->_var['price_min']; ?>"><input type="hidden" name="price_max" id="price_max" value="<?php echo $this->_var['price_max']; ?>"><input type="hidden" name="filter_attr" id="filter_attr" value="<?php echo $this->_var['filter_attr_str']; ?>"><input type="hidden" name="id" value="<?php echo $this->_var['cat_id']; ?>">
     <?php if ($this->_var['brands']['1']): ?>
    <p class="f16 a1 ti10 mt10"><?php echo $this->_var['lang']['brand']; ?></p>
    <div class="type1 type fix" id="brands">
    <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brands'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brands']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brands']['iteration']++;
?><a href="javascript:get_brand('<?php echo $this->_var['brand']['brand_id']; ?>')" class="<?php if ($this->_var['brand']['selected']): ?>cur<?php endif; ?>" id="brand_<?php echo $this->_var['brand']['brand_id']; ?>"><?php echo $this->_var['brand']['brand_name']; ?><em></em></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
   </div>
    <?php endif; ?>
 <?php if ($this->_var['price_grade']['1']): ?>
    <p class="f16 a1 ti10 mt10"><?php echo $this->_var['lang']['price']; ?></p>
    <div class="type1 type fix" id="prices">
    <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');$this->_foreach['price_grade'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['price_grade']['total'] > 0):
    foreach ($_from AS $this->_var['grade']):
        $this->_foreach['price_grade']['iteration']++;
?><a href="javascript:get_price('<?php echo $this->_var['grade']['formated_start1']; ?>','<?php echo $this->_var['grade']['formated_end1']; ?>')" class="<?php if ($this->_var['grade']['selected']): ?>cur<?php endif; ?>" id="price_<?php echo $this->_var['grade']['formated_start1']; ?>"><?php if (($this->_foreach['price_grade']['iteration'] <= 1)): ?><?php echo $this->_var['grade']['price_range']; ?><?php else: ?><?php echo $this->_var['grade']['formated_start']; ?> - <?php echo $this->_var['grade']['formated_end']; ?><?php endif; ?><em></em></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
   </div>
    <?php endif; ?>
  <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr');$this->_foreach['filter_attr_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr_list']['total'] > 0):
    foreach ($_from AS $this->_var['filter_attr']):
        $this->_foreach['filter_attr_list']['iteration']++;
?>
    <p class="f16 a1 ti10 mt10"><?php echo htmlspecialchars($this->_var['filter_attr']['filter_attr_name']); ?><?php echo $this->_var['lang']['colon']; ?></p>
		<div class="type1 type fix" id="attrs_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>">
		<?php $_from = $this->_var['filter_attr']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['filter_attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['filter_attr']['iteration']++;
?><a href="javascript:get_attr_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>('<?php if ($this->_var['attr']['attr_id']): ?><?php echo $this->_var['attr']['attr_id']; ?><?php else: ?>0<?php endif; ?>')" class="<?php if ($this->_var['attr']['selected']): ?>cur<?php endif; ?>" id="attr_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>_<?php if ($this->_var['attr']['attr_id']): ?><?php echo $this->_var['attr']['attr_id']; ?><?php else: ?>0<?php endif; ?>"><?php echo $this->_var['attr']['attr_value']; ?><em></em></a><?php if ($this->_var['attr']['selected']): ?>
<input type="hidden" id="show68ecshop_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>" name="show68ecshop" value="<?php echo $this->_var['attr']['attr_id']; ?>"/>
<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <div class="btn-box" style="margin-bottom:1em;">
    <input class="btn btn-sn-d" id="quxiaoanniu" value="取消">

      <input class="btn btn-sn-b" type="submit" value="确定">
    </div>
  </div>

</form>
</div>
</div>

     <?php echo $this->fetch('library/pages.lbi'); ?> </div>
  </div>
  
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>