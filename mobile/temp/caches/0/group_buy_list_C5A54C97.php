<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:80:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/group_buy_list.dwt";i:1;s:79:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/pages.lbi";i:2;s:85:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/page_footer.lbi";}s:7:"expires";i:1444903293;s:8:"maketime";i:1444899693;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<title>团购商品_ecshop开发中心  </title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="alternate" type="application/rss+xml" title="RSS|团购商品_ecshop开发中心  " href="feed.php?type=group_buy" />
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/category.css"/>
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/fonts/font-awesome.min.css">
<link href="themesmobile/68ecshopcom_mobile/style.css" rel="stylesheet" type="text/css" />
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
                <span class="nav___nav-tit">首页</span>
            </a>
        </div>
         <div class="nav__nav-item">
            <a href="catalog.php" class="nav__nav-link">
                <i class="nav__iconfont"><img src="themesmobile/68ecshopcom_mobile/img/cutp_04.png"></i>
                <span class="nav___nav-tit">分类</span>
            </a>
        </div>
        <div class="nav__nav-item">
            <a href="flow.php" class="nav__nav-link">
                <i class="nav__iconfont"><img src="themesmobile/68ecshopcom_mobile/img/cutp_08.png"></i>
                <span class="nav___nav-tit" >购物车</span>
                <span class="nav__nav-shop-cart-num" id="ECS_CARTINFO"> 0 </span>
            </a>
        </div>
        <div class="nav__nav-item">
            <a href="user.php" class="nav__nav-link">
                <i class="nav__iconfont"><img src="themesmobile/68ecshopcom_mobile/img/cutp_10.png"></i>
                <span class="nav___nav-tit" >用户中心</span>
            </a>
        </div>
    </div>
</header>
<div id="wrapper" class="xm_app">
  <div id="viewport" class="viewport" style="display: block; background: transparent;">
    <div class="product_sorting" style="display:none">
      <ul>
        <li><a id="sortbtn_adapt" class="ico-down" href="javascript:;"><span>筛选</span></a></li>
        <li><a id="sortbtn_newtime"  class="sort-cur " href=".php?category=&display=&brand=&price_min=&price_max=&filter_attr=&page=1&sort=goods_id&order=DESC#goods_list"><span class="">上架</span></a></li>
        <li><a id="sortbtn_price" class="sort-cur " href=".php?category=&display=&brand=&price_min=&price_max=&filter_attr=&page=1&sort=shop_price&order=ASC#goods_list"><span  class="">价格</span></a></li>
        <li style="border-right:none"><a id="sortbtn_update" class="sort-cur " href=".php?category=&display=&brand=&price_min=&price_max=&filter_attr=&page=1&sort=last_update&order=DESC#goods_list"><span  class="">更新</span></a></li>
</ul>
</div>
<div class="product_product " id="showname"> 
<div class="list_product list_column list_tmp">
	   <ul id="ProductList">
          <li>
      <div class="product items "> <a href="group_buy.php?act=view&amp;id=10" class="ScanProductViewBtn" >
        <div class="imgurl"><img src="../images/201310/thumb_img/4_thumb_G_1381393928859.jpg"></div>
        <div class="info">
          <dl>
            <dt>
              <span>ECSHOP模板中心68ecshop.com测试商品</span>
            </dt>
            <dd><span class="pull-left"><strong>价格:<b class="ect-colory">￥4800.00</b></strong></span><span class="ect-pro-price"></span></dd>
            <dd><span class="pull-left">已购：0</span></dd>
      </dl>
        </div>
        </a> </div>
    </li>
        <li>
      <div class="product items "> <a href="group_buy.php?act=view&amp;id=8" class="ScanProductViewBtn" >
        <div class="imgurl"><img src="../images/201405/thumb_img/24_thumb_G_1399962854067.jpg"></div>
        <div class="info">
          <dl>
            <dt>
              <span>ECSHOP模板中心68ecshop.com测试商品</span>
            </dt>
            <dd><span class="pull-left"><strong>价格:<b class="ect-colory">￥1910.00</b></strong></span><span class="ect-pro-price"></span></dd>
            <dd><span class="pull-left">已购：0</span></dd>
      </dl>
        </div>
        </a> </div>
    </li>
      
  </ul>
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
</script>
<form method="post" action="category.php">
  <div class="cate-list cate-list-pop" id="Cate_Choose" >
    <input type="hidden" name="brand" id="brand" value=""><input type="hidden" name="price_min" id="price_min" value=""><input type="hidden" name="price_max" id="price_max" value=""><input type="hidden" name="filter_attr" id="filter_attr" value=""><input type="hidden" name="id" value="">
            <div class="btn-box" style="margin-bottom:1em;">
    <input class="btn btn-sn-d" id="quxiaoanniu" value="取消">
      <input class="btn btn-sn-b" type="submit" value="确定">
    </div>
  </div>
</form>
</div>
</div>
     <div class="comment_page" id="PorductListPage"> 
<a href="javascript:;" class="prev dis" ><span>上一页</span></a> 
<a href="javascript:;" class="page_select" >
<span class="page_tip">第1/1页</span>
</a> 
<a href="javascript:;" class="next dis"><span>下一页</span></a>
  <select class="input_select"  onchange="location.href=this.options[this.selectedIndex].value;">
  <option selected="selected" value="group_buy.php?act=list&page=1">第1页</option>
  </select>
</div>
 </div>
  </div>
  
</div>
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
</script></body>
</html>