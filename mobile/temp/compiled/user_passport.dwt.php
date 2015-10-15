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
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,user.js,transport.js')); ?>
</head>
<body style="background:#F4F4F4">
<div id="Cheader" style="">
  <div id="header" class="header_03">
    <a href="javascript:history.back(-1)" class="top_home"><?php echo $this->_var['lang']['home']; ?></a>
    <div class="tit" style="">
      <h3><?php if ($this->_var['action'] == 'login'): ?><?php echo $this->_var['lang']['label_login']; ?><?php endif; ?>
                <?php if ($this->_var['action'] == 'register'): ?><?php echo $this->_var['lang']['label_regist']; ?><?php endif; ?>
                <?php if ($this->_var['action'] == 'get_password'): ?><?php echo $this->_var['lang']['get_password']; ?><?php endif; ?>
                <?php if ($this->_var['action'] == 'get_passwd_question'): ?><?php echo $this->_var['lang']['get_password']; ?><?php endif; ?>
                <?php if ($this->_var['action'] == 'reset_password'): ?><?php echo $this->_var['lang']['get_password']; ?><?php endif; ?>	
                <?php if ($this->_var['action'] == 'qpassword_name'): ?><?php echo $this->_var['lang']['get_password']; ?><?php endif; ?></h3>
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
    
<?php if ($this->_var['action'] == 'login'): ?>
 <div class="m311 log_reg_box">
    <div id="logRegTabCon">
      <div class="log_reg_item" id="phonearea"> 
        
    <section class="innercontent" >
      <form action="user.php" method="post" class="c-form login-form">
        <fieldset>
         <div class="register"><a href="user.php?act=register" >没有帐号,免费注册</a> </div>
          <div class="field username">
            <div class="c-form-search">
              <input type="text" name="username" placeholder="请输入用户名/邮箱" value=""/>
            </div>
          </div>
          <div class="field pwd">
            <input type="password" name="password" placeholder="密码" class="c-form-txt-normal"/>
          </div>
           <?php if ($this->_var['enabled_captcha']): ?>
          <div class="field identifyCode">
                        <div class="c-form-search">
                            <div class="codeTxt">
            <input type="text" name="captcha" placeholder="验证码" class="c-f-text"/>
            </div>
             <div class="codePhoto">
            <img class="check-code-img" src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>"  title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_login=1&'+Math.random()" height="35"/> </div>
            </div>
             <?php endif; ?>
          <div class="field submit-btn">
            <input type="submit" class="c-btn-orange" onclick="member_login()" value="登 录">
            <input type="hidden" name="act" value="act_login">
			<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>">
          </div>
          <div class="field">
            <label class="bf1 login_ffri"><input type="checkbox" name="remember" value="1" checked="" >&nbsp;保存登录信息</label>
        
               <a class="login_ffleft" href="user.php?act=get_password"><?php echo $this->_var['lang']['get_password']; ?></a>
          
          <div style="height:20px; line-height:20px; clear:both"></div>
  <div class="field">

           	使用合作网站账号登录：
           </div>
           <div class="signIn_coo" >
       <ul class="coo_panel cssBox">
                    <li class="box_flex_1">
                        <a href="user.php?act=oath&type=qq"><div class="btn_qq" ></div></a>
                    </li>
                    <li class="box_flex_1">
                        <a href="user.php?act=oath&type=alipay"><div class="btn_alipay" ></div></a>
                    </li>
                    <li class="box_flex_1">
                        <a href="user.php?act=oath&type=weibo"><div class="btn_weibo"></div></a>
                    </li>
                   </ul>
		</div>
           </div>
           
        </fieldset>
      </form>
    </section>
    

      </div>
    </div>
    
  </div>

    
<?php endif; ?>

<?php if ($this->_var['action'] == 'register'): ?>
<?php if ($this->_var['shop_reg_closed'] == 1): ?>
<section class="innercontent">
<div><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
</section>
<?php else: ?>
 <div class="m311 log_reg_box">
    <div id="logRegTabCon">
      <div class="log_reg_item " id="accountarea"> 
      <section class="innercontent">
<form action="user.php" method="post"  name="formUser" onsubmit="return register();">
<fieldset>
<div class="field username">
<div class="c-form-search st" style="background-position: 7px 10px;">
<input type="text" name="username" id="username" placeholder="账户名" class="c-f-text"  onblur="is_registered(this.value);"/>
                        </div>
                        <div class="tips" ><span id="username_notice"></span></div>
                    </div>
                     <div class="field email">
                        <div class="c-form-search st">
                            <input type="email" name="email" placeholder="邮箱地址" value="" class="c-f-text" id="email" onblur="checkEmail(this.value);" />
                        </div>
                        <div class="tips"><span id="email_notice"></span></div>
                    </div>
                    
                 
                    <div class="field pwd">
                        <div class="ptxt st">
                            <input type="password" name="password" id="password1" onblur="check_password(this.value);" value="" placeholder="密码" class="c-f-text"/>
                        </div>
                        <div class="tips"><span id="password_notice"> </span></div>
                    </div>
                     <div class="field pwd">
                        <div class="ptxt st">
                            <input type="password" name="confirm_password" id="conform_password" onblur="check_conform_password(this.value);" value="" placeholder="确认密码" class="c-f-text">
                        </div>
                         <div class="tips"><span id="conform_password_notice"> </span></div>
                    </div>
                    <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
					<?php if ($this->_var['field']['id'] == 6): ?>
                      <div class="" >
                        <div class="" >
					
						<select name="sel_question"<?php if ($this->_var['field']['is_need']): ?> required<?php endif; ?> class="c-f-text">
							<?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'],'selected'=>$this->_var['profile']['passwd_question'])); ?>
						</select>
                    </div></div>
                      <div class="field no">
                        <div class="ptxt st">
				
						<input type="text "  placeholder="密码问题答案" name="passwd_answer" value="<?php echo $this->_var['profile']['passwd_answer']; ?>" <?php if ($this->_var['field']['is_need']): ?> required<?php endif; ?> class="c-f-text"/>
                   </div>
                     <?php if ($this->_var['field']['is_need']): ?>
       <div class="tips"><span id="conform_password_notice"> </span></div>
        <?php endif; ?>
                   </div>
					<?php else: ?>
                     <div class="field no">
                        <div class="ptxt st">					
						<input type="text" name="extend_field<?php echo $this->_var['field']['id']; ?>" value="<?php echo $this->_var['field']['content']; ?>" placeholder="<?php echo $this->_var['field']['reg_field_name']; ?>" id="extend_field_<?php echo $this->_var['field']['id']; ?>" class="c-f-text"/>
                    </div>
                     <?php if ($this->_var['field']['is_need']): ?>
       <div class="tips"><span id="conform_password_notice"> </span></div>
        <?php endif; ?>
                    </div>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php if ($this->_var['enabled_captcha']): ?>
                    <div class="field identifyCode">
                        <div class="c-form-search">
                            <div class="codeTxt">
                                <input name="captcha" type="text" value="" placeholder="输入验证码" class="c-f-text">
                            </div>
                            <div class="codePhoto">
                                <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?'+Math.random()" height="35"/>
                            </div>
                        </div>
                        
                    </div>
                    <?php endif; ?>
                    <div class="field submit-btn">
            <input type="checkbox" style="display:none" name="agreement" value="1" checked="checked" required>
                        <input type="submit" class="c-btn-orange" value="注 册">
                       <input type="hidden" name="act" value="act_register">
						<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>">
                        
                    </div>

                </fieldset>
       </form> 
        <div class="field"> <a href="user.php" class="register_effleft go_login">已有帐号，去登录&gt;&gt;</a>  </div>
</section>
         
      </div>
    </div>
    
  </div>

<?php endif; ?>
   
	
	<?php endif; ?>
	<?php if ($this->_var['action'] == 'get_password'): ?>
<section class="innercontent">

      <form action="user.php" method="post">
        <fieldset>
          <div class="field username">
            <div class="c-form-search st">
              <input type="text" name="user_name" placeholder="请输入用户名/邮箱" value="" class="c-f-text"/>
            </div>
          </div>
           
           <div class="field email">
             <div class="c-form-search st">
            <input type="email" name="email" placeholder="邮箱" class="c-f-text"/>
           </div>
                        <div class="tips"></div>
                    </div>
         
          <div class="field submit-btn">
            <input type="submit" class="c-btn-oran-big1" value="提 交">
            <input type="hidden" name="act" value="send_pwd_email">
          </div>
            <div class="tips">填写正确的用户名和注册邮箱地址后会收到包含取回密码链接的邮件。</div>
             <div class="tips">如果您想马上登录，可以使用密码问题来修改密码。</div>
			<div class="tips">
				<a href="user.php?act=qpassword_name">密码问题找回密码</a>
			</div>
        </fieldset>
      </form>
    </section>
<?php endif; ?>
	<?php if ($this->_var['action'] == 'qpassword_name'): ?>
<section class="innercontent">

      <form action="user.php" method="post">
        <fieldset>
          <div class="field username">
            <div class="c-form-search st">
              <input type="text" name="user_name" placeholder="请输入用户名/邮箱" value="" class="c-f-text"/>
            </div>
          </div>
         
          <div class="field submit-btn">
            <input type="submit" class="c-btn-oran-big1" value="提 交">
            <input type="hidden" name="act" value="get_passwd_question"/>
          </div>
            <div class="tips">如果您忘记了密码问题答案，可以使用注册邮箱来修改密码。</div>
			<div class="tips">
				<a href="user.php?act=get_password">注册邮件找回密码</a>
			</div>
        </fieldset>
      </form>
    </section>
<?php endif; ?>
	<?php if ($this->_var['action'] == 'get_passwd_question'): ?>
<section class="innercontent">

      <form action="user.php" method="post">
        <fieldset>
          <div class="field username">
            <div class="c-form-search st">
            <?php echo $this->_var['lang']['passwd_question']; ?><?php echo $this->_var['lang']['colon']; ?>
              <?php echo $this->_var['passwd_question']; ?>
            </div>
          </div>
           
           <div class="field email">
             <div class="c-form-search st">
            <input type="text" name="passwd_answer" placeholder="<?php echo $this->_var['lang']['passwd_answer']; ?>" class="c-f-text"/>
           </div>
                        <div class="tips"></div>
                    </div>
          <?php if ($this->_var['enabled_captcha']): ?>
                    <div class="field identifyCode">
                        <div class="c-form-search">
                            <div class="codeTxt">
                                <input name="captcha" type="text" value="" placeholder="<?php echo $this->_var['lang']['comment_captcha']; ?>" class="c-f-text">
                            </div>
                            <div class="codePhoto">
                                <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_login=1&'+Math.random()"/>
                            </div>
                        </div>
                        
                    </div>
                    <?php endif; ?>
          <div class="field submit-btn">
            <input type="submit" class="c-btn-oran-big1" value="<?php echo $this->_var['lang']['submit']; ?>">
           <input type="hidden" name="act" value="check_answer"/>
          </div>
           
        </fieldset>
      </form>
    </section>
<?php endif; ?>
	<?php if ($this->_var['action'] == 'reset_password'): ?>
<section class="innercontent">

      <form action="user.php" method="post">
        <fieldset>
          <div class="field username">
            <div class="c-form-search st">
              <input type="password" name="new_password" placeholder="<?php echo $this->_var['lang']['new_password']; ?>" value="" class="c-f-text"/>
            </div>
          </div>
           
           <div class="field email">
             <div class="c-form-search st">
            <input type="password" name="confirm_password" placeholder="<?php echo $this->_var['lang']['confirm_password']; ?>" class="c-f-text"/>
           </div>
                        <div class="tips"></div>
                    </div>
         
          <div class="field submit-btn">
            <input type="submit" class="c-btn-oran-big1" value="<?php echo $this->_var['lang']['confirm_submit']; ?>">
            <input type="hidden" name="act" value="act_edit_password">
						<input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>">
						<input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>">
          </div>
            
        </fieldset>
      </form>
    </section>
<?php endif; ?>

   <?php echo $this->fetch('library/page_footer.lbi'); ?>     
  </div>
</div>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</div>
<script language="javascript">
$(function(){ 
$('input[type=text],input[type=password]').bind({ 
focus:function(){ 
 $(".global-nav").css("display",'none'); 
}, 
blur:function(){ 
 $(".global-nav").css("display",'flex'); 
} 
}); 
}) 
</script>
</body>
</html>