<link type="text/css" rel="stylesheet" href="./web-gallery/css/oi.css" />
<script type="text/javascript" src="./web-gallery/js/common.js"></script>
<link type="text/css" rel="stylesheet" href="./web-gallery/css/tchau.css" />
 </head> 
<body class=" time-to-upgrade"> 
 <div id="statusmessage" name="statusmessage" style="display:none;"> 
 <div style="width:600px;margin:auto;padding:10px;opacity:0.95;">
 <div class="statusmessage_wrapper" style="padding:20px;text-align:center;">
 <div id="statusmessage_text" name="statusmessage_text"></div>
 <div id="dismiss_message_div"> Click to dismiss this message </div> </div> </div> </div> 
 <div id="modal_window_popup" style="display:none" class="popup"> <a href='#' OnClick="ai('modal_window_popup');pN('http://cdn.mediafire.com/blank.html','modal_msg_iframe');return false;" id="modal_window_closer" class="popup-close"></a> <div style=""> 
 <iframe name="modal_msg_iframe" id="modal_msg_iframe" src="http://cdn.mediafire.com/blank.html" scrolling="no" frameborder="0"></iframe>
 </div> </div>  
 <div id="notify_main" class="msg_default msg_size1" style="display:none;" onclick="Qv(event);" onmouseover="if(!NH&& !NB)OI(4);NH=true;" onmouseout="NH=false;"> 
 <div class="notify_msgwrapper"> <p> <span id="notify_msgtitle_min" class="notify_msgtitle_min">100 Recent Messages</span> 
 <span id="notify_msgtitle" class="notify_msgtitle">Message title goes here</span> 
 <span id="notify_msgbody" class="notify_msgbody">Short paragraph explaining the nature of the message goes here.</span>
 </p> </div> <div id="notify_msgscroll" class="notify_msgscroll"> <a class="msgscroll_up" href="#" onclick="Pf();return false;"></a>
 <a class="msgscroll_dn" href="#" onclick="Pe();return false;"></a> <p id="notify_msgnumber" class="msgnumber"></p> </div>  </div>  
<div id="header"> <div class="wrap cf" style="position:relative;"> <h2 class="logo cf">  
<span class="slogan"><p><img src="./web-gallery/images/coins.gif" alt="Smiley face"/><?php echo get_userinfo("credits"); ?>
 <img src="./web-gallery/images/pixels.gif" alt="Smiley face"/><?php echo get_userinfo("pixels"); ?> 
  <img src="./web-gallery/images/people.gif" alt="Smiley face"/><?php echo get_users_online(); ?>
</p></span> </h2>   
<div id="notloggedin_wrapper" class="hide"> <div id="notloggedin" class="prelogin"> <div class="dropdown cf"> <a name="loggedin_email" id="loggedin_email" href="/profile.php"></a> <div id="avatar-icon" class="arrow_tab">
<div class="avatarContainer" ><a href="./personagens.php"><img src="http://www.habbo.com.br/habbo-imaging/avatarimage?figure=<?php echo $users->UserInfo($usuario, 'look'); ?>&action=sit&direction=1&head_direction=1&gesture=sml&size=s&type=gif" style="top: -12px; position:relative; left:-5px;" /></a></div></div> <ul id="loggedin_dropdown">  <li> <a href="/logout.php">Sair</a> </li>  <li> <a href="/client.php" >Client</a> </li> </ul> </div> </div>  <div id="notloggedin_wrapper" class="hide"> <div id="notloggedin" class="prelogin"> <ul id="login_signup"> <li class="signup_button"><a href="/register.php">Sign Up</a></li> <li> <a id="headerlogin_tab" href="javascript:void(0);" onclick="akQ(1);return false; " class="">Login<span class="logintab_overlay">Login</span></a> </li> </ul> </div> </div>  </div>
<ul class="nav"> <li id="toptab_0" class="toptab_home"><a href="/me">Start</a></li>
  <li id="toptab_1" class="toptab_myfiles"><a href="/staff">Staff</a></li>
   <li id="toptab_1" class="toptab_myfiles"><a href="/credits">Credits</a></li>
      <li id="toptab_1" class="toptab_myfiles"><a href="/logout.php">Logout</a></li>
 <li id="toptab_2" class="toptab_tour" style="display:none">
 <a class="tour-dropdown-from-top"> <b>|</b></a></li>
 <li id="toptab_3" class="toptab_tour" style="display:none">
 <a href="#"><?php echo get_userinfo("username"); ?></a></li>   </ul>   <div id="main_login" name="main_login" class="main_login">  <div class="tabs"> <ul class="cf"> <li id="login_tab_mediafire" onclick="if(UserLogin==0)vQ(1);return false;" title="MediaFire Login" class="current" ><div></div></li> <li id="login_tab_facebook" href="javascript:void(0);" onclick="if(!wM)vQ(2);return false;" title="Login Using Facebook" ><div></div></li> <li id="login_tab_twitter" href="javascript:void(0);" onclick="if(!wL)vQ(3);return false;" title="Login Using Twitter" ><div></div></li> <li id="login_close" href="javascript:void(0);" class="close" onclick="akT();"></li> </ul>  <div id="socialnetworks_support" class="login_hide"> <div class="login_social_inner"> <h2 class="soc_heading">Powerful for business. Simple for everyone.</h2> </div> </div>  <div id="login_mediafire">  <div style="display:none;margin-left:-19px;padding:82px 0;" id="login_spinner"> <div style="text-align:center"> <p style="margin:20px"><img src="http://cdn.mediafire.com/images/icons/ajax-loader-grey_round.gif"></p> <p>Logging in&hellip;</p> </div> </div>  <div id="login_form"> <p class="soc_error" style="display:none;margin:10px 20px 10px 0;padding:5px;" id="login_penalty_message"></p> <form name="form_login1" id="form_login1" method="post" action="/dynamic/login.php?popup=1" target="userwork"> <fieldset> <label>Your Email Address:</label> <input type="text" name="login_email" id="login_email"/> <label>Password:</label> <input type="password" name="login_pass" id="login_pass" autocomplete="off"/> <a href="/lost_password.php" class="forgot-pwd">Forgot your password?</a> <input type="checkbox" name="login_remember" id="login_remember" checked/><p id="login_remember_p">Remember me on this computer</p> <input id="submit_login" type="submit" name="submit_login" value="Login to MediaFire"/> <div id="login_secure_header_link"> <a href="https://www.mediafire.com/ssl_login.php?type=login" id="login_ssl_btn" class="secondary btn"><span></span>Login using SSL encryption</a> </div> </fieldset> </form> </div> </div>  <div id="login_facebook" class="login_hide"> <div class="login_social_inner"> <p class="soc_heading">Use your Facebook account to<br/>login to MediaFire.</p> <div class="soc_login_block"> <div style="display:none;"><input id="facebook_app_id" type="hidden" value="124578887583575"/></div> <div id="facebook_login_0"> <div style="text-align:center;"> <p style="margin:20px"> <img src="http://cdn.mediafire.com/images/icons/ajax-loader-grey_round.gif"> </p> <p> Please wait... </p> </div> </div> <div style="display:none;" id="facebook_login_1"> <div style="text-align:center;margin:14px 0 26px 0;"> <a href="#" onclick="javascript:mI=yF('facebook',function(){wP(1);});vZ();return false;"><img src="http://cdn.mediafire.com/images/buttons/btn_facebook_connect.png"></a> </div> <div class="soc_perms_option"> <span class="soc_options_heading">Options:</span> <div style="border-bottom:1px solid #d7d9db;"> <input type="checkbox" name="fb_email_allow" id="fb_email_allow" checked="checked"/> <p>Enable MediaFire to get my email address from Facebook. (recommended)</p> </div> <div> <input type="checkbox" name="fb_publish_stream_allow" id="fb_publish_stream_allow" checked="checked"/> <p>Allow me to post to my Facebook Wall from MediaFire.</p> </div> </div> </div> <div style="display:none;" id="facebook_login_2"> <div style="text-align:center"> <p style="margin:20px"> <img src="http://cdn.mediafire.com/images/icons/ajax-loader-grey_round.gif"> </p> <p> Logging in... </p> </div> </div> <div style="display:none;" id="facebook_login_3"> <p class="soc_error" style="display:none;" id="fb_error_step3"></p> <form action="/dynamic/fb_login.php" target="userwork" method="POST" onsubmit="wP(2);return true;"> <p class="soc_display_email" id="fb_step3_email"></p> <label>Password:</label> <input type="password" autocomplete="off" name="mf_password" id="mf_password"/> <a href="/lost_password.php" class="forgot-pwd">Forgot your password?</a> <div> <input type="submit" value="Connect" style="margin-top:10px;"/> </div> </form> </div> <div style="display:none;" id="facebook_login_4"> <div class="soc_toggler"> <a href="#" class="use_fbemail_active inset-box">Use My Facebook Email</a> <a href="#" onclick="wP(5);return false;" class="use_mfemail_inactive secondary-btn">Link Using MediaFire Account</a> </div> <div id="create_new_mf"> <p class="soc_error" style="display:none;" id="fb_error_step4">This gets filled if something bad happened.</p> <form action="/dynamic/fb_login.php" target="userwork" method="POST" id="use_fb_email_form" onsubmit="wP(2);return true;"> <label>Password:</label> <input type="password" autocomplete="off" name="use_fb_email_pass" id="use_fb_email_pass"/> <label>Confirm Password:</label> <input type="password" autocomplete="off" name="use_fb_email_pass2" id="use_fb_email_pass2"/> <div> <input type="submit" value="Use Facebook Email" style="margin-top:25px;"/> </div> </form> </div> </div> <div style="display:none;" id="facebook_login_5"> <div class="soc_toggler"> <a href="#" onclick="wP(4);return false;" class="use_fbemail_inactive secondary-btn">Use My Facebook Email</a> <a href="#" class="use_mfemail_active inset-box">Link Using MediaFire Account</a> </div> <div id="link_another_mf"> <p class="soc_error" style="display:none;" id="fb_error_step5"></p> <form action="/dynamic/fb_login.php" target="userwork" method="POST" id="link_mf_acct_form" onsubmit="wP(2);return true;"> <label>Your MediaFire Email:</label> <input type="text" name="mf2_email" id="mf2_email"> <label>MediaFire Password:</label> <input type="password" autocomplete="off" name="mf2_password" id="mf2_password"> <a href="/lost_password.php" class="forgot-pwd">Forgot your password?</a> <div> <input type="submit" value="Connect" style="margin-top:6px;"/> </div> </form> </div> </div> <div style="display:none;" id="facebook_login_6"> <p class="soc_p_center">You are logged in with Facebook,<br/>but you did not allow your email.</p> <p class="soc_p_center"><a href="#" onclick="javascript:vZ('email,publish_stream')"><img src="http://cdn.mediafire.com/images/buttons/btn_facebook_allowemail.png"></a></p> <p class="soc_p_center">or</p> <a href="/register.php" id="btn_fb_create_mfaccount" class="primary-btn">Create MediaFire Account</a> </div> <div style="display:none;"> <form action="/dynamic/fb_login.php" target="userwork" method="POST" id="facebook_login_form" name="facebook_login_form" style="margin:0px;"> <input type="hidden" name="fb_login_action" id="fb_login_action"/> <input type="hidden" name="fb_login_data1" id="fb_login_data1"/> <input type="hidden" name="fb_login_data2" id="fb_login_data2"/> </form> </div>   </div> </div> </div>  <div id="login_twitter" class="login_hide">  <div class="login_social_inner"> <p class="soc_heading">Use your Twitter account to<br/>login to MediaFire.</p> <div class="soc_login_block"> <div id="twitter_login_0"> <div style="text-align:center"> <p style="margin:20px"> <img src="http://cdn.mediafire.com/images/icons/ajax-loader-grey_round.gif"> </p> <p> Please Wait&hellip; </p> </div> </div> <div style="display:none;" id="twitter_login_1"> <div class="twitter_login_gfx"> <a href="#" onclick="mI=yF('twitter',function(){wX(1);});wI();wX(2);return false;" id="twitter_login_url"><img src="http://cdn.mediafire.com/images/buttons/btn_twitter_connect.png" alt="Sign in with Twitter"/></a> </div> </div> <div style="display:none;" id="twitter_login_2"> <div style="text-align:center"> <p style="margin:20px"> <img src="http://cdn.mediafire.com/images/icons/ajax-loader-grey_round.gif"> </p> <p> Logging in&hellip; </p> </div> </div> <div style="display:none;" id="twitter_login_3"> <div class="soc_toggler"> <a href="#" class="use_twemail_active inset-box">Use Twitter Email</a> <a href="#" onclick="wX(4);return false;" class="use_mfemail_inactive secondary-btn">Use MediaFire Email</a> </div> <div id="create_new_tw"> <p class="soc_error" style="display:none;" id="tw_error_step3"></p> <form action="/dynamic/tw_login.php" target="userwork" method="POST" onsubmit="wP(2);return true;"> <label>Twitter Email:</label> <input type="text" name="use_tw_email" id="use_tw_email" value=""/> <label>New password:</label> <input type="password" autocomplete="off" name="use_tw_email_pass" id="use_tw_email_pass"/> <label>Confirm Password:</label> <input type="password" autocomplete="off" name="use_tw_email_pass2" id="use_tw_email_pass2"/> <div> <input type="submit" value="Use Twitter Email" style="margin-top:25px;"/> </div> </form> </div> </div> <div style="display:none;" id="twitter_login_4"> <div class="soc_toggler"> <a href="#" onclick="wX(3);return false;" class="use_twemail_inactive secondary-btn">Use Twitter Email</a> <a href="#" class="use_mfemail_active inset-box">Use MediaFire Email</a> </div> <div id="link_another_tw"> <p class="soc_error" style="display:none;" id="tw_error_step4"></p> <form action="/dynamic/tw_login.php" target="userwork" method="POST" onsubmit="wP(2);return true;"> <label>Your MediaFire Email:</label> <input type="text" name="mf2_email" id="mf2_email" value=""/> <label>MediaFire Password:</label> <input type="password" autocomplete="off" name="mf2_password" id="mf2_password"/> <a href="/lost_password.php" class="forgot-pwd">Forgot your password?</a> <div> <input id="btn_fb_authenticate" type="submit" value="Connect" style="margin-top:10px;"/> </div> </form> </div> </div> <div style="display:none;"> <form action="/dynamic/tw_login.php" target="userwork" method="POST" id="twitter_login_form" name="twitter_login_form" style="margin:0px;"> <input type="hidden" name="tw_login_action" id="tw_login_action"/> <input type="hidden" name="tw_login_data1" id="tw_login_data1"/> <input type="hidden" name="tw_login_data2" id="tw_login_data2"/> </form> </div>  </div> </div> </div> </div> </div>  </div> </div>  