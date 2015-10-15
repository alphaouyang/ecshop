<?php exit;?>a:3:{s:8:"template";a:9:{i:0;s:71:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/index.dwt";i:1;s:82:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/index_ad.lbi";i:2;s:84:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/index_icon.lbi";i:3;s:85:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/ad_position.lbi";i:4;s:87:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/recommend_hot.lbi";i:5;s:87:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/recommend_new.lbi";i:6;s:93:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/recommend_promotion.lbi";i:7;s:83:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/cat_goods.lbi";i:8;s:85:"D:/xampp/htdocs/ecshop/mobile/themesmobile/68ecshopcom_mobile/library/page_footer.lbi";}s:7:"expires";i:1444903289;s:8:"maketime";i:1444899689;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>ecshop开发中心  </title>
<meta name="Keywords" content="ecshop开发中心" />
<meta name="Description" content="ecshop开发中心" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/TouchSlide.1.1.js"></script>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/68ecshop.css"/>
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/fonts/font-awesome.min.css">
<link href="themesmobile/68ecshopcom_mobile/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/common.js"></script></head>
<body>
<div id="wrapper" >
  <div class="page-index" id="home">
    <header class='header'>
    <a href="catalog.php" class="top_bt">首页</a>
    <div class="tit" style="">
      <h3>ECSHOP开发中心</h3>
    </div>
    <div class="nav">
      <ul>
        <li class="cart"> <a href="flow.php">购物车</a> <span id="ECS_CARTINFO" class="ECS_CARTINFO">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</span> </li>
      </ul>
    </div>
</header>
   <style>
	.scrollimg{position:relative; overflow:hidden; margin:0px auto; /* 设置焦点图最大宽度 */}
	.scrollimg .hd{ position: absolute;
bottom: 1em;
text-align: center;
width: 100%;}
	.scrollimg .hd li{display: inline-block;
width: .8em;
height: .8em;
margin: 0 .4em;
-webkit-border-radius: .8em;
-moz-border-radius: .8em;
-ms-border-radius: .8em;
-o-border-radius: .8em; 
border-radius: .8em;
background: #FFF;
filter: alpha(Opacity=60);
opacity: .6;
box-shadow: 0 0 1px #ccc; text-indent:-100px; overflow:hidden; }
	.scrollimg .hd li.on{ filter: alpha(Opacity=90);
opacity: .9;
background: #f8f8f8;
box-shadow: 0 0 2px #ccc; }
	.scrollimg .bd{position:relative; z-index:0;}
	.scrollimg .bd li{position:relative; text-align:center;}
	.scrollimg .bd li img{background:url(themesmobile/68ecshopcom_mobile/images/loading.gif) center center no-repeat;  vertical-align:top; width:100%;/* 图片宽度100%，达到自适应效果 */}
	.scrollimg .bd li a{-webkit-tap-highlight-color:rgba(0,0,0,0);}  /* 去掉链接触摸高亮 */
	.scrollimg .bd li .tit{display:block; width:100%;  position:absolute; bottom:0; text-indent:10px; height:28px; line-height:28px; background:url(themesmobile/68ecshopcom_mobile/images/focusBg.png) repeat-x; color:#fff;  text-align:left;}
</style>
<div id="scrollimg" class="scrollimg">
				<div class="bd">
					<ul>
			          <li><a href="affiche.php?ad_id=3&uri="><img src="data/afficheimg/1395294388718461791.jpg" width="100%" /></a></li>
                    <li><a href="affiche.php?ad_id=4&uri="><img src="data/afficheimg/1395294394438406359.jpg" width="100%" /></a></li>
                    <li><a href="affiche.php?ad_id=5&uri="><img src="data/afficheimg/1395294400918255199.jpg" width="100%" /></a></li>
          					</ul>
				</div>
				<div class="hd">
					<ul></ul>
				</div>
			</div>
			<script type="text/javascript">
				TouchSlide({ 
					slideCell:"#scrollimg",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					mainCell:".bd ul", 
					effect:"leftLoop", 
					autoPage:true,//自动分页
					autoPlay:true //自动播放
				});
			</script>
 
    <div id="fake-search" >
      <div class="fakeInput">
       <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="searchform">      
          <input  name="keywords" id="keyword" class="search_text" value="请输入搜索的商品" onFocus="if(this.value=='请输入搜索的商品'){this.value=''}" onBlur="if(this.value==''){this.value='请输入搜索的商品'}" type="text"/>
          <input type="submit"  class="search_submit" value=""/>
		</form>
        </div>
</div>
     <div class="nav-index card">
      <ul>
              <li>
        <a href="catalog.php"><span class="icon" style="background:url(images/201505/1431744519889007772.png);background-size: 4em 4em;">&nbsp;</span><span class="t"><span>全部商品</span></span></a>
        </li>	
                  <li>
        <a href="group_buy.php"><span class="icon" style="background:url(images/201503/1426736491563019383.png);background-size: 4em 4em;">&nbsp;</span><span class="t"><span>团购</span></span></a>
        </li>	
                  <li>
        <a href="brand.php"><span class="icon" style="background:url(images/201503/1426736580583813598.png);background-size: 4em 4em;">&nbsp;</span><span class="t"><span>品牌</span></span></a>
        </li>	
                  <li>
        <a href="article_cat_list.php"><span class="icon" style="background:url(images/201503/1426736612738140157.png);background-size: 4em 4em;">&nbsp;</span><span class="t"><span>文章分类</span></span></a>
        </li>	
          </ul><ul>        <li>
        <a href="flow.php"><span class="icon" style="background:url(images/201503/1426736641431265014.png);background-size: 4em 4em;">&nbsp;</span><span class="t"><span>购物车</span></span></a>
        </li>	
                  <li>
        <a href="share.php"><span class="icon" style="background:url(images/201503/1426736669176561709.png);background-size: 4em 4em;">&nbsp;</span><span class="t"><span>分享</span></span></a>
        </li>	
                  <li>
        <a href="user.php"><span class="icon" style="background:url(images/201503/1426736691023298586.png);background-size: 4em 4em;">&nbsp;</span><span class="t"><span>用户中心</span></span></a>
        </li>	
                  <li>
        <a href="exchange.php"><span class="icon" style="background:url(images/201503/1426736710634933382.png);background-size: 4em 4em;">&nbsp;</span><span class="t"><span>积分兑换</span></span></a>
        </li>	
          </ul><ul></div> 
    
    
    
    <div class="card show_big">
      <div class="col2">
        <div class="row2 mg-bor-right"><span>
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"6";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca</span></div>
        <div class="rows">
          <div class="row1"><span>
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"8";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca</span></div>
          <div class="row1 mg-bor-no-left mg-bor-top"><span>
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"9";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca</span></div>
        </div>
      </div>
      
      <div>
        <div class="col2">
          <div class="row1 mg-bor-right"><span>
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"7";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca</span></div>
          <div class="row1 mg-bor-right"><span>
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:2:"10";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca</span></div>
</div>
</div>
</div>
<div class="list">
      <div class="head"><span>热销商品</span></div>
      <div class="blank6"></div>
     <p> <ul>  
                     <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=10"><img src="../images/201405/thumb_img/10_thumb_G_1399963234065.jpg" width="80"></a>
                    <a class="fn"href="goods.php?id=10">ECSHOP模板中心...</a><p class="price">本店价：￥1250          </p><del class="old_price">原　价：￥1594</del>
                       <a href="javascript:addToCart(10)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=14"><img src="../images/201405/thumb_img/14_thumb_G_1399963309409.jpg" width="80"></a>
                    <a class="fn"href="goods.php?id=14">ECSHOP模板中心...</a><p class="price">本店价：￥2625</p><del class="old_price">原　价：￥3150</del>
                       <a href="javascript:addToCart(14)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=13"><img src="../images/201405/thumb_img/13_thumb_G_1399963013189.jpg" width="80"></a>
                    <a class="fn"href="goods.php?id=13">ECSHOP模板中心...</a><p class="price">本店价：￥1311</p><del class="old_price">原　价：￥1573</del>
                       <a href="javascript:addToCart(13)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=24"><img src="../images/201405/thumb_img/24_thumb_G_1399962854067.jpg" width="80"></a>
                    <a class="fn"href="goods.php?id=24">ECSHOP模板中心...</a><p class="price">本店价：￥1850          </p><del class="old_price">原　价：￥2400</del>
                       <a href="javascript:addToCart(24)" class="btn">立即购买</a>
                  </div>             
                </li>          
                  </ul></p>
</div>
 
<div class="list">
      <div class="head"><span>新品上市</span></div>
      <div class="blank6"></div>
      <ul>  
                    <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=5"><img src="../images/201405/thumb_img/5_thumb_G_1399963282906.jpg" width="80"></a>
                   <a class="fn"href="goods.php?id=5">ECSHOP模板中心...</a><p class="price">本店价：￥20</p><del class="old_price">原　价：￥24</del>
                    <a href="javascript:addToCart(5)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=33"><img src="../images/201405/thumb_img/33_thumb_G_1399963191124.jpg" width="80"></a>
                   <a class="fn"href="goods.php?id=33">ECSHOP模板中心...</a><p class="price">本店价：￥0</p><del class="old_price">原　价：￥0</del>
                    <a href="javascript:addToCart(33)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=3"><img src="../images/201405/thumb_img/3_thumb_G_1399963174586.jpg" width="80"></a>
                   <a class="fn"href="goods.php?id=3">ECSHOP模板中心...</a><p class="price">本店价：￥68</p><del class="old_price">原　价：￥82</del>
                    <a href="javascript:addToCart(3)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=7"><img src="../images/201405/thumb_img/7_thumb_G_1399963118634.jpg" width="80"></a>
                   <a class="fn"href="goods.php?id=7">ECSHOP模板中心...</a><p class="price">本店价：￥100</p><del class="old_price">原　价：￥120</del>
                    <a href="javascript:addToCart(7)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=22"><img src="../images/201405/thumb_img/22_thumb_G_1399963097437.jpg" width="80"></a>
                   <a class="fn"href="goods.php?id=22">ECSHOP模板中心...</a><p class="price">本店价：￥5999</p><del class="old_price">原　价：￥7199</del>
                    <a href="javascript:addToCart(22)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=12"><img src="../images/201405/thumb_img/12_thumb_G_1399962907989.jpg" width="80"></a>
                   <a class="fn"href="goods.php?id=12">ECSHOP模板中心...</a><p class="price">本店价：￥960          </p><del class="old_price">原　价：￥1180</del>
                    <a href="javascript:addToCart(12)" class="btn">立即购买</a>
                  </div>             
                </li>          
                  </ul>
    </div>
 <div class="list">
      <div class="head"><span>促销商品</span></div>
      <div class="blank6"></div>
       <ul>  
                     <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=10"><img src="../images/201405/thumb_img/10_thumb_G_1399963234065.jpg" width="80"></a>
                    <a class="fn"href="goods.php?id=10">ECSHOP模板中心...</a><p class="price">本店价：￥1250          </p><del class="old_price">原　价：￥1594</del>
                    <a href="javascript:addToCart(10)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=24"><img src="../images/201405/thumb_img/24_thumb_G_1399962854067.jpg" width="80"></a>
                    <a class="fn"href="goods.php?id=24">ECSHOP模板中心...</a><p class="price">本店价：￥1850          </p><del class="old_price">原　价：￥2400</del>
                    <a href="javascript:addToCart(24)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=12"><img src="../images/201405/thumb_img/12_thumb_G_1399962907989.jpg" width="80"></a>
                    <a class="fn"href="goods.php?id=12">ECSHOP模板中心...</a><p class="price">本店价：￥960          </p><del class="old_price">原　价：￥1180</del>
                    <a href="javascript:addToCart(12)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=32"><img src="../images/201405/thumb_img/32_thumb_G_1399962881763.jpg" width="80"></a>
                    <a class="fn"href="goods.php?id=32">ECSHOP模板中心...</a><p class="price">本店价：￥2750          </p><del class="old_price">原　价：￥3612</del>
                    <a href="javascript:addToCart(32)" class="btn">立即购买</a>
                  </div>             
                </li>          
                        <li class="hproduct">
                <div class="url">
                    <a class="photo" href="goods.php?id=8"><img src="../images/201405/thumb_img/8_thumb_G_1399951905746.jpg" width="80"></a>
                    <a class="fn"href="goods.php?id=8">ECSHOP模板中心...</a><p class="price">本店价：￥385          </p><del class="old_price">原　价：￥479</del>
                    <a href="javascript:addToCart(8)" class="btn">立即购买</a>
                  </div>             
                </li>          
                  	</ul>
</div>
 
<div class="list">
  <div class="head"><span>卧房</span></div>
  <div class="blank6"></div>
  <div class="list-cell"> 
     
      <div class="cell"> <div class="product items "> <a href="goods.php?id=32" class="ScanProductViewBtn" >
        <div class="imgurl"><img src="../images/201405/thumb_img/32_thumb_G_1399962881763.jpg"></div>
        <div class="info">
          <dl>
            <dt>
              <span>ECSHOP模板中心68ecshop.com测试商品</span>
            </dt>
            <dd><span class="pull-left"><span>价格:<b class="ect-colory"> ￥2750</b></span><small class="ect-margin-lr" style="display:none"><del>￥3612</del></small></span><span class="ect-pro-price"></span></dd>
            <dd><span class="pull-left"><i class="fa fa-eye"></i>235人浏览</span></dd>
      </dl>
        </div>
        </a> </div></div>
     
      <div class="cell"> <div class="product items "> <a href="goods.php?id=31" class="ScanProductViewBtn" >
        <div class="imgurl"><img src="../images/201405/thumb_img/31_thumb_G_1399963036056.jpg"></div>
        <div class="info">
          <dl>
            <dt>
              <span>ECSHOP模板中心68ecshop.com测试商品</span>
            </dt>
            <dd><span class="pull-left"><span>价格:<b class="ect-colory"> 
            ￥1337</b></span><small class="ect-margin-lr" style="display:none"><del>￥1604</del></small></span><span class="ect-pro-price"></span></dd>
            <dd><span class="pull-left"><i class="fa fa-eye"></i>19人浏览</span></dd>
      </dl>
        </div>
        </a> </div></div>
     
      <div class="cell"> <div class="product items "> <a href="goods.php?id=24" class="ScanProductViewBtn" >
        <div class="imgurl"><img src="../images/201405/thumb_img/24_thumb_G_1399962854067.jpg"></div>
        <div class="info">
          <dl>
            <dt>
              <span>ECSHOP模板中心68ecshop.com测试商品</span>
            </dt>
            <dd><span class="pull-left"><span>价格:<b class="ect-colory"> ￥1850</b></span><small class="ect-margin-lr" style="display:none"><del>￥2400</del></small></span><span class="ect-pro-price"></span></dd>
            <dd><span class="pull-left"><i class="fa fa-eye"></i>177人浏览</span></dd>
      </dl>
        </div>
        </a> </div></div>
     
      <div class="cell"> <div class="product items "> <a href="goods.php?id=23" class="ScanProductViewBtn" >
        <div class="imgurl"><img src="../images/201405/thumb_img/23_thumb_G_1399962927636.jpg"></div>
        <div class="info">
          <dl>
            <dt>
              <span>ECSHOP模板中心68ecshop.com测试商品</span>
            </dt>
            <dd><span class="pull-left"><span>价格:<b class="ect-colory"> 
            ￥3700</b></span><small class="ect-margin-lr" style="display:none"><del>￥4440</del></small></span><span class="ect-pro-price"></span></dd>
            <dd><span class="pull-left"><i class="fa fa-eye"></i>56人浏览</span></dd>
      </dl>
        </div>
        </a> </div></div>
     
      <div class="cell"> <div class="product items "> <a href="goods.php?id=22" class="ScanProductViewBtn" >
        <div class="imgurl"><img src="../images/201405/thumb_img/22_thumb_G_1399963097437.jpg"></div>
        <div class="info">
          <dl>
            <dt>
              <span>ECSHOP模板中心68ecshop.com测试商品</span>
            </dt>
            <dd><span class="pull-left"><span>价格:<b class="ect-colory"> 
            ￥5999</b></span><small class="ect-margin-lr" style="display:none"><del>￥7199</del></small></span><span class="ect-pro-price"></span></dd>
            <dd><span class="pull-left"><i class="fa fa-eye"></i>37人浏览</span></dd>
      </dl>
        </div>
        </a> </div></div>
     
      <div class="cell"> <div class="product items "> <a href="goods.php?id=21" class="ScanProductViewBtn" >
        <div class="imgurl"><img src="../images/201405/thumb_img/21_thumb_G_1399963079916.jpg"></div>
        <div class="info">
          <dl>
            <dt>
              <span>ECSHOP模板中心68ecshop.com测试商品</span>
            </dt>
            <dd><span class="pull-left"><span>价格:<b class="ect-colory"> 
            ￥2000</b></span><small class="ect-margin-lr" style="display:none"><del>￥2400</del></small></span><span class="ect-pro-price"></span></dd>
            <dd><span class="pull-left"><i class="fa fa-eye"></i>10人浏览</span></dd>
      </dl>
        </div>
        </a> </div></div>
     </div>
</div>
<div class="col1 more"><a href="category.php?id=1"><span>查看更多卧房&nbsp;&gt;</span></a></div>
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
</script> 
<script type="text/javascript">
window.onload = function()
{
  //Compare.init();
  //fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
</body>
</html>