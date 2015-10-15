<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/category.css">
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/touchslider.dev.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body style="background: rgb(255, 255, 255);">
<div id="Cheader" style="">
  <div id="header" class="header_03">
    <a href="./" class="arrow">首页</a>
    <div class="tit" style="">
      <h3><?php echo $this->_var['lang']['groupbuy_goods_info']; ?></h3>
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
  </div>
</div>
<div id="wrapper" class="xm_app">
  <div id="viewport" class="viewport">
   <div class="product_view" style="background:none">
      <div class="box box_01">
        <div class="product_swipe" style="text-align:center"> 
          <a href="<?php echo $this->_var['gb_goods']['url']; ?>"><img src="<?php echo $this->_var['gb_goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?>"  width="100%"/></a>
        </div>
        <div class="product_info">
          <div class="info info_right">
            <h3 class="name"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></h3>
          </div>
     <span class="price" ><?php echo $this->_var['group_buy']['formated_cur_price']; ?></span>
     <div class="group_details newclass">
     	       <?php echo $this->_var['lang']['gb_goods_name']; ?> <font class="f5"><?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?></font><br>
      <?php if ($this->_var['cfg']['show_goodssn'] && 0): ?>
      <?php echo $this->_var['lang']['goods_sn']; ?> <?php echo $this->_var['gb_goods']['goods_sn']; ?><br>
      <?php endif; ?>
      <?php if ($this->_var['cfg']['goods']['brand_name'] && $this->_var['show_brand'] && 0): ?>
      <?php echo $this->_var['lang']['goods_brand']; ?> <?php echo $this->_var['gb_goods']['brand_name']; ?><br>
      <?php endif; ?>
      <?php if ($this->_var['cfg']['show_goodsweight'] && 0): ?>
      <?php echo $this->_var['lang']['goods_weight']; ?> <?php echo $this->_var['gb_goods']['goods_weight']; ?><br>
      <?php endif; ?>
        <?php echo $this->_var['lang']['act_time']; ?>：<?php echo $this->_var['group_buy']['formated_start_date']; ?> -- <?php echo $this->_var['group_buy']['formated_end_date']; ?><br>
    <?php if ($this->_var['group_buy']['deposit'] > 0): ?>
      <?php echo $this->_var['lang']['gb_deposit']; ?> <?php echo $this->_var['group_buy']['formated_deposit']; ?><br />
      <?php endif; ?>

      <?php if ($this->_var['group_buy']['restrict_amount'] > 0): ?>
      <?php echo $this->_var['lang']['gb_restrict_amount']; ?> <?php echo $this->_var['group_buy']['restrict_amount']; ?><br />
      <?php endif; ?>

      <?php if ($this->_var['group_buy']['gift_integral'] > 0): ?>
      <?php echo $this->_var['lang']['gb_gift_integral']; ?> <?php echo $this->_var['group_buy']['gift_integral']; ?><br />
      <?php endif; ?>
		<?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
      <?php if ($this->_var['group_buy']['status'] == 0): ?>
      <?php echo $this->_var['lang']['gbs_pre_start']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 1): ?>
      <font class="f4"><?php echo $this->_var['lang']['gbs_under_way']; ?>
      <span id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span></font><br />
      <?php echo $this->_var['lang']['gb_valid_goods']; ?> <?php echo $this->_var['group_buy']['valid_goods']; ?><br />
      <?php elseif ($this->_var['group_buy']['status'] == 2): ?>
      <?php echo $this->_var['lang']['gbs_finished']; ?> <br /> <?php echo $this->_var['lang']['gb_valid_goods']; ?> <?php echo $this->_var['group_buy']['valid_goods']; ?><br />
      <?php elseif ($this->_var['group_buy']['status'] == 3): ?>
      <?php echo $this->_var['lang']['gbs_succeed']; ?><br />
      <?php echo $this->_var['lang']['gb_final_price']; ?> <?php echo $this->_var['group_buy']['formated_trans_price']; ?><br />
      <?php echo $this->_var['lang']['gb_final_amount']; ?> <?php echo $this->_var['group_buy']['trans_amount']; ?><br />
      <?php elseif ($this->_var['group_buy']['status'] == 4): ?>
      <?php echo $this->_var['lang']['gbs_fail']; ?>
      <?php endif; ?>
       <?php echo $this->_var['lang']['gb_price_ladder']; ?><br />
       <table width="100%" border="1" cellpadding="5" cellspacing="1" bgcolor="#dddddd" bordercolor="#E5E5E5">
       <tr>
          <th width="50%" bgcolor="#F1F1F1" align="center" ><?php echo $this->_var['lang']['gb_ladder_amount']; ?></th>
         <th width="50%" bgcolor="#F1F1F1" align="center"><?php echo $this->_var['lang']['gb_ladder_price']; ?></th>
        </tr>
        <?php $_from = $this->_var['group_buy']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <tr>
          <td width="50%" bgcolor="#FFFFFF" align="center" height="30px;"><?php echo $this->_var['item']['amount']; ?></td>
         <td width="50%" bgcolor="#FFFFFF" align="center" height="30px;"><?php echo $this->_var['item']['formated_price']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
     </div>
      <form action="group_buy.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
           <div class="ui-sku" style="margin-bottom:20px;">
                  <?php if ($this->_var['specification']): ?>                
                       <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['specification'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['specification']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['specification']['iteration']++;
?>
                                <div class="ui-sku-prop" <?php if ($this->_var['spec_key'] == $this->_var['attr_same']['attr_id']): ?>style="display:none;"<?php endif; ?>>
                                  <h2>可选<?php echo $this->_var['spec']['name']; ?>：</h2>
                                  <div class="items">
                                  <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                                  <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                  <a <?php if ($this->_var['key'] == 0): ?>class="hover"<?php endif; ?> href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" onclick="changeAtt(this);" for="spec_value_<?php echo $this->_var['value']['id']; ?>" title="<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php echo $this->_var['value']['format_price']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?>"><input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                                  <?php echo $this->_var['value']['label']; ?>  <?php if ($this->_var['value']['price'] > 0): ?><font>+ <?php echo $this->_var['value']['format_price']; ?></font><?php elseif ($this->_var['value']['price'] < 0): ?><font>- <?php echo $this->_var['value']['format_price']; ?></font><?php endif; ?>
                                  
                                  </a>
                                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                   <?php else: ?>
                                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                  <a <?php if ($this->_var['key'] == 0): ?>class="hover"<?php endif; ?> href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" onclick="changeAtt1(this)" for="spec_value_<?php echo $this->_var['value']['id']; ?>" title="<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php echo $this->_var['value']['format_price']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?>"><input type="checkbox" style=" display:none" name=" spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?>/>
                                                    <?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><font>+ <?php echo $this->_var['value']['format_price']; ?></font><?php elseif ($this->_var['value']['price'] < 0): ?><font>- <?php echo $this->_var['value']['format_price']; ?></font><?php endif; ?>
                                   </a>
                                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php endif; ?>
                                  </div>
                                </div>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <?php endif; ?>
      		</div>
           <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
              <?php if ($_SESSION['user_id'] > 0): ?>
              <tr>
                <td bgcolor="#FFFFFF"><strong class="newclass"><?php echo $this->_var['lang']['number']; ?>:</strong></td>
                <td bgcolor="#FFFFFF">
                <input name="number" type="text" class="inputBg newclass" id="number" value="1" size="4" />
                <input type="hidden" name="group_buy_id" value="<?php echo $this->_var['group_buy']['group_buy_id']; ?>" />
                <input type="image" class="newgoumai" src="themesmobile/68ecshopcom_mobile/img/bnt_buy_1.gif" />
                </td>
              </tr>
              <?php else: ?>
              <tr>
                <td colspan="2" align="left" bgcolor="#FFFFFF"><br />
                  <font class="f_red"><?php echo $this->_var['lang']['gb_notice_login']; ?></font></td>
              </tr>
              <?php endif; ?>
            </table>
          </form>
<section class="s-buy open ui-section-box" id="search_ka">
    <div class="fields">
              <script type="text/jscript">
			  function click_search (){
				  var search_ka = document.getElementById("search_ka");
				  if (search_ka.className == "s-buy open ui-section-box"){
					  search_ka.className = "s-buy ui-section-box";
					  }else {
						  search_ka.className = "s-buy open ui-section-box";
						  }
				  }
				function changeAtt(t) {
				t.lastChild.checked='checked';
				for (var i = 0; i<t.parentNode.childNodes.length;i++) {
						if (t.parentNode.childNodes[i].className == 'hover') {
							t.parentNode.childNodes[i].className = '';
							t.childNodes[0].checked="checked";
						}
					}
				t.className = "hover";
				changePrice();
				}
				function changeAtt1(t) {
				t.lastChild.checked='checked';
				for (var i = 0; i<t.parentNode.childNodes.length;i++) {
						if (t.className == 'hover') {
							t.className = '';
							t.childNodes[0].checked = false;
						}
						else{
							t.className="hover";
							t.childNodes[0].checked = true;
						}
						
					
				}
				
				changePrice();
				}
				</script>
    </div>
    
</section>
 </div>
        
      </div>
      
      <div class="box_02">
      	<p class="group_title newclass">团购说明</p>
        <div class="group_con">
         <?php echo $this->_var['group_buy']['group_buy_desc']; ?>  
        </div>
      </div>
    </div>
    <div id="productViewWeixinTip" class="weixin_share_tip"></div>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>
</div>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
</body>
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['group_buy']['gmt_end_date']) ? '0' : $this->_var['group_buy']['gmt_end_date']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function()
{
  try
  {
    onload_leftTime();
  }
  catch (e)
  {}
}

</script>
</html>