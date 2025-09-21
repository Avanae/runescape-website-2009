<?php
define("_VALID_PHP", true);
require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/init.php");
?>

<head>
<script type="text/javascript">
$(function(){


$("#play, #playExisting, #playBannerNoad").each(function(){ this.href += "?j=1"; })
})
</script>

<script type="text/javascript" src="../../www.jagex.com/js/create/ajax-0.js"></script>
<script type="text/javascript">//<![CDATA[
var last_ajax_username = "".toLowerCase();
var last_ajax_response = '17';
var has_valid_username = true;
var blocked = false;
var info_showing = '';
var submitted = false;


function _(objid){
 if (typeof objid == "string") objid=document.getElementById(objid);
 if (!objid) return;
 return objid;
}

function findPosY(obj)
{
  var curtop = 0;
  if(obj.offsetParent)
      while(1)
      {
        curtop += obj.offsetTop;
        if(!obj.offsetParent)
          break;
        obj = obj.offsetParent;
      }
  else if(obj.y)
      curtop += obj.y;
  return curtop;
}

function display(obj){
 info_showing = obj.id;
 var jmesg = _('jmesg');
 var srctext = _(obj.id + '_desc').innerHTML;
 var ypos = findPosY(obj) - findPosY(_('formBoxes')) + 1;
 jmesg.innerHTML = srctext;
 jmesg.style.backgroundPosition =  '0px ' + (ypos - 10) + 'px';
}

function uncross(obj){
 if(obj.className == 'fail'){
  obj.className = '';
 }
 return;
}

function checkit(){
 _('creatForm').action='';
}

var input_order=["username","password1","password2", "email", "bot", "captcha", "submitbutton"];

function a_pos(val, arr) {
 for(var i=0; i<arr.length; i++) if(val===arr[i]) return i;//>
 return -1;
}

function handle_keypress(event) {
 if(!event) event=window.event;
 if(event.keyCode!=13) return true;
 var p=a_pos(this.id, input_order);
 if(p!=-1 && p<input_order.length-1) var next=_(input_order[p+1]);//>
 if(next && next.focus) {
  next.focus();
  return false;
 }
 return true;
}

function install_textboxes() {
 // Skip the last one (submit button), but it needs to be in the array so things know where to go
 for(var i=0; i<input_order.length-1; i++) if(!_(input_order[i]).onkeypress){//>
  _(input_order[i]).onkeypress=handle_keypress;
 }
}

function install(){
 install_textboxes();
 if(_('jmesg').innerHTML == ''){display(_('usr'));}
}

// window.onload fix: Dean Edwards/Matthias Miller/John Resig
function dummy() {
};
function init() {
 if (arguments.callee.done) return;
 arguments.callee.done = true;
 if (_timer) clearInterval(_timer);
 if (install) install();
};
/* for Mozilla/Opera9 */
if (document.addEventListener) {
 document.addEventListener("DOMContentLoaded", init, false);
}
/* for Internet Explorer */
/*@cc_on @*/
/*@if (@_win32)
 document.write("<script id=__ie_onload defer src=dummy()><\/script>");
 var script = _("__ie_onload");
 script.onreadystatechange = function() {
  if (this.readyState == "complete") {
   init(); // call the onload handler
  }
 };
/*@end @*/
/* for Safari */
if (/WebKit/i.test(navigator.userAgent)) { // sniff
 var _timer = setInterval(function() {
  if (/loaded|complete/.test(document.readyState)) {
   init(); // call the onload handler
  }
 }, 10);
}
/* for other browsers */
window.onload = init;//]]></script>
<noscript>
<style type="text/css">
  #jmesgBg, #jmesg {
   display: none;
  }
  #formBoxes {
   padding-bottom: 1em;
  }
  .formDesc {
   display: block;
  }
  .formDesc p {
   display: inline;
  }
  .formSection {
   padding: 1em 0 5px;
  }

  #email_desc {
   padding-top: 1em;
   border-top: 2px solid black;
  }

  #bot_desc {
   padding-top: 1em;
   border-top: 2px solid black;
  }

  #pass_desc, #data_desc {
   padding-top: 1em;
   border-top: 2px solid black;
  }
  #alts {
   display: block;
   margin-bottom: 1em;
   padding: 0;
  }
  #alts span {
   cursor: default;
   text-decoration: none;
  }
  #errorUsername, #errorPassword {
   margin-bottom: 1em;
  }
 </style>
</noscript>
</head>
<div class='main-body'>
    <div class='inner-body'>
        <div id="content">
            <div id="centered-content">
                <div id="single-content">
                    <div class="sectionHeader" style="text-align: center;">
                        <div class="left-content">
                        <div class="right-content">
                            <h1 class="plaque">
                                Create Account
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="brown_background sectionContentContainer">
                <div class="inner_brown_background">
                    <div class="brown_box">
                        <div class="statusbarwrap">
                            <div id="statusbar">
                                <div class="left">
                                    <div class="right"></div>
                                </div>
                            </div>
                        </div>

                        <?php if (!$user->isLoggedIn()) { ?>
                            <div id="errorlog" style="position: absolute; top: 5px; right: 5px; float: right; padding: 5px;"></div>
                                <form id="createForm" class="register" name="register" method="post" action="" onsubmit="return checkform(this);">
                                    <div class="inner_brown_box brown_box_stack" id="cIntro">
                                        <div class='register-notification'>
                                            <div class="green-msg">
                                                Please take the time to create a quick account. You are not required to validate your e-mail to play <?= SITE_NAME ?>, but secure website functionality will be disabled until you do so.
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="error" style="display: none;"></h4>
                               
                                    <div class='form-visability'>
                                        <div id="formBoxes" class="inner_brown_box brown_box_stack brown_box_padded">
                                            <div class="formDesc" id="usr_desc">
                                                <p id="username_constraints_characters">Usernames can be a maximum of 12 characters long and may contain letters, numbers, spaces and underscores.</p>
                                                <p>They should not contain your real name, birth date, or other personally identifiable information, to better protect your identity.</p>
                                                <p>They should not be offensive or break our Terms & Conditions</p>
                                            </div>

                                            <div class="formSuperGroup single_line">
                                                <div class="formSection" id="usr">
                                                    <input style="display:none;" type="hidden" id="origusername" name="origusername" value="">
                                                    <label for="username">Username:</label>
                                                    <input id="username" name="username" type="text" style="width: 200px;" autocomplete="off" maxlength="32" onfocus="display(this.parentNode);" onkeypress="display(this.parentNode);uncross(this);" value="">
                                            
                                                    <br class="clear" />
                                                </div>

                                                <br class="clear" />
                                            </div>

                                            <div class="formSuperGroup double_line">
                                                <div class="formDesc" id="pass_desc">
                                                    <p>NEVER give anyone your password, not even to Jagex staff. Jagex staff will never ask you for your password.</p>
                                                    <p id="pass_constraints">Passwords must be between 5 and 20 characters long and may contain letters and numbers.</p>
                                                    <p>We recommend you use a mixture of numbers and letters in your password to make it harder for someone to guess.</p>
                                                </div>

                                                <div id="pass" class="formGroup">
                                                    <div class="formSection">
                                                        <label for="password1">Password:</label>
                                                        <input id="password1" name="password1" type="password" style="width: 200px;" autocomplete="off" value="" maxlength="20" onfocus="display(this.parentNode.parentNode);uncross(this)">
                                                    </div>

                                                    <div class="formSection">
                                                        <label for="password2">Confirm Password:</label>
                                                        <input id="password2" name="password2" type="password" style="width: 200px;" autocomplete="off" value="" maxlength="20" onfocus="display(this.parentNode.parentNode);uncross(this)">
                                                    </div>

                                                    <br class="clear" />
                                                </div>

                                                <br class="clear" />
                                            </div>

                                            <div class="formDesc" id="email_desc">
                                                <p>Your email address will be used to send you an account confirmation email.</p>
                                                <p>This email adress will also be used to send you a recovery email in case you lose your password.</p>
                                            </div>

                                            <div class="formSuperGroup single_line">
                                                <div class="formSection" id="email">
                                                    <label for="email">Email:</label>
                                                    <input id="email" name="email" type="text" style="width: 200px;" autocomplete="off" maxlength="64" onfocus="display(this.parentNode);" onkeypress="display(this.parentNode);uncross(this);" value="">
                                            
                                                    <br class="clear" />
                                                </div>

                                                <br class="clear" />
                                            </div>

                                            <div class="formDesc" id="bot_desc">
                                                <p>Please fill in the captcha to validate you're human.</p>
                                            </div>

                                            <div class="formSuperGroup single_line">
                                                <div class="formSection" id="bot">
                                            
                                                    <label for="bot">5 + 5 = ?</label>
                                                    <input id="bot" name="bot" type="text" style="width: 200px;" autocomplete="off" maxlength="2" onfocus="display(this.parentNode);" onkeypress="display(this.parentNode);uncross(this);" value="">
                                            
                                                    <br class="clear" />
                                                </div>

                                                <br class="clear" />
                                            </div>

                                            <br class="clear" />

                                            <div id="jmesgBg" class="input_details"><div id="jmesg" class="input_details"></div>
                                        </div>
                                    </div>

                                    <div class="inner_brown_box brown_box_padded">
                                        <button class="submitRegister" type="submit" name="submit" value="" id="submitbutton"></button>
                                    </div>
                                </form>
                            </div>
                        <?php } else { ?>
                            <div class="brown_background">
                                <div class="inner_brown_background" >
                                    <div class="brown_box" >
                                        <div class="default-notification" style="right:20px; width:635px;">
                                            <h3>You cannot create another account while your current session has not ended. Please sign out of your account in order to create a new one.</h3>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php        
    $system->displayStruct("footer");
?>

<script>
    $(document).ready(function () {
        $(".submitRegister").click(function (e) {
            e.preventDefault();
            $.post("/structure/system/ActionHandler.php?action=Register", $(".register").serialize(), function (data) {
                if (data == "SUCCESS") {
                    $(".register-notification").html("<div class='green-msg'>You've successfully registered and can now log into the game. Don't forget to check your e-mail for a validation link to use our website features!</div>");
                    $(".form-visability").html("")
                } else {
                    $(".error").html(data);
                    $(".error").fadeIn(500, function () {
                        setTimeout(function () {
                            $(".error").fadeOut(500);
                        }, 3000);
                    });
                }
            });
        });
    });

</script>