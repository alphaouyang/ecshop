<?php exit;?>a:3:{s:8:"template";a:2:{i:0;s:81:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/group_buy_goods.dwt";i:1;s:85:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/page_footer.lbi";}s:7:"expires";i:1444903296;s:8:"maketime";i:1444899696;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>ECSHOP模板中心68ecshop.com测试商品_团购商品_ecshop开发中心  </title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/category.css">
<link href="themesmobile/68ecshopcom_mobile/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/touchslider.dev.js"></script>
<script type="text/javascript" src="js/common.js"></script></head>
<body style="background: rgb(255, 255, 255);">
<div id="Cheader" style="">
  <div id="header" class="header_03">
    <a href="./" class="arrow">首页</a>
    <div class="tit" style="">
      <h3>团购商品详情</h3>
    </div>
    <div class="nav">
      <ul>
        <li class="cart"> <a href="flow.php">购物车</a> <span id="ECS_CARTINFO" class="ECS_CARTINFO">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</span> </li>
      </ul>
    </div>
  </div>
</div>
<div id="wrapper" class="xm_app">
  <div id="viewport" class="viewport">
   <div class="product_view" style="background:none">
      <div class="box box_01">
        <div class="product_swipe" style="text-align:center"> 
          <a href="goods.php?id=4"><img src="../images/201310/goods_img/4_G_1381393928437.jpg" alt="ECSHOP模板中心68ecshop.com测试商品"  width="100%"/></a>
        </div>
        <div class="product_info">
          <div class="info info_right">
            <h3 class="name">ECSHOP模板中心68ecshop.com测试商品</h3>
          </div>
     <span class="price" >￥4800.00</span>
     <div class="group_details newclass">
     	       团购商品： <font class="f5">ECSHOP模板中心68ecshop.com测试商品</font><br>
                          起止时间：2014-05-22 00:00 -- 2021-05-25 00:00<br>
          保证金： ￥1000.00<br />
      
            限购数量： 20<br />
      
      		<script type="text/javascript" src="js/lefttime.js"></script>            <font class="f4">该团购活动正在火热进行中，距离结束时间还有：      <span id="leftTime">请稍等, 正在载入中...</span></font><br />
      当前定购数量： 0<br />
             价格阶梯：<br />
       <table width="100%" border="1" cellpadding="5" cellspacing="1" bgcolor="#dddddd" bordercolor="#E5E5E5">
       <tr>
          <th width="50%" bgcolor="#F1F1F1" align="center" >数量</th>
         <th width="50%" bgcolor="#F1F1F1" align="center">价格</th>
        </tr>
                <tr>
          <td width="50%" bgcolor="#FFFFFF" align="center" height="30px;">5</td>
         <td width="50%" bgcolor="#FFFFFF" align="center" height="30px;">￥4800.00</td>
        </tr>
              </table>
     </div>
      <form action="group_buy.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
           <div class="ui-sku" style="margin-bottom:20px;">
                        		</div>
           <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                            <tr>
                <td colspan="2" align="left" bgcolor="#FFFFFF"><br />
                  <font class="f_red">提示：您需要先注册成为本站会员并且登录后，才能参加商品团购!</font></td>
              </tr>
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
           
        </div>
      </div>
    </div>
    <div id="productViewWeixinTip" class="weixin_share_tip"></div>
    <div class="footer"  style="padding-bottom:2em;">
      <div class="links"  id="ECS_MEMBERZONE"> <script type="text/javascript" src="js/utils.js"></script>          554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
      <div class="links" >
      <a href="javascript:;"><span class="gl">触屏版</span></a>
      <a href="http://pcib.sj.91.com/soft/Controller.ashx?action=readfile&f_id=41520455&platform=android&position=1000011&positionIndex=1&project=2200&qrcode=1"><span>安卓端</span></a>
      <a href="https://itunes.apple.com/cn/app/ecshop-kai-fa-zhong-xin/id805998027?l=zh&ls=1&mt=8"><span>苹果端</span></a>
      </div>
</div>
<section>
  <div id="jisou-info" class="jisou-info" style="display: none;"></div>
  <div class="info-nr">
    <div id="info-nr-phone" class="info-nr-phone color-orange">
      <input id="info-nr-btn" type="checkbox" name="" value="" class="info-nr-menu">
      <div class=""> <a href="tel:4000785268" class="icon-phone"></a> </div>
      <div class=""> <a href="index.php" class="icon-location"></a> </div>
      <div class=""> <a href="user.php?act=message_list" class="icon-message"></a> </div>
      <div class=""> <a href="share.php" class="icon-share"></a> </div>
    </div>
  </div>
</section>
<a href="#top" class="u-backtop" id="goTop"><span class="u-icon i-backtop"></span></a>
<script>
        window.addEventListener("DOMContentLoaded", function () {
            btn = document.getElementById("info-nr-btn");
            btn.onclick = function () {
                var divs = document.getElementById("info-nr-phone").querySelectorAll("div");
                var className = className = this.checked ? "on" : "";
                for (i = 0; i < divs.length; i++) {
                    divs[i].className = className;
                }
                document.getElementById("jisou-info").style.display = "on" == className ? "block" : "none";
            }
        }, false);
    </script>
<script>
$(function () {
            new Swipe(document.getElementById('jisou-banner'), {
                speed: 500,
                auto: 3000,
                callback: function () {
                    var lis = $(this.element).next("ol").children();
                    lis.removeClass("on").eq(this.index).addClass("on");
                }
            });
        });
</script>
<script>
function mall_search(){
	$(window).scroll(function() {
		h = $(window).height();
		t = $(document).scrollTop();
		t > h ? $("#goTop").fadeIn() : $("#goTop").fadeOut();
	});	
}
mall_search();
</script>  </div>
</div>
<script type="text/javascript">
var goods_id = ;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = ;
var now_time = 1444899696;
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
var gmt_end_time = "1621872000";
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var now_time = 1444899696;
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