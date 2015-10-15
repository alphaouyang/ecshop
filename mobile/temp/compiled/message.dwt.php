<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/category.css">
<link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/ecsmart.css">
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
</head>
<body style="background:#F4F4F4">
<div id="Cheader" style="">
  <div id="header" class="header_03">
    <div class="back"> <a href="./" class="arrow">首页</a> </div>
    <div class="tit" style="">
      <h3>系统提示</h3>
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
<div id="tbh5v0">
  <div class="screen-wrap fullscreen login">
    <div class="content ptop0" style="margin-top:10px; margin-bottom:10px;">
      <div class="con-ct radius shadow fo-con">
        <ul class="ct-list">
          <li style="text-align:center"><?php echo $this->_var['message']['content']; ?></li>
          <?php if ($this->_var['message']['url_info']): ?>
          <?php $_from = $this->_var['message']['url_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('info', 'url');if (count($_from)):
    foreach ($_from AS $this->_var['info'] => $this->_var['url']):
?>
          <li style="text-align:center"><a href="<?php echo $this->_var['url']; ?>" class="link"><span><?php echo $this->_var['info']; ?></span></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>