<?php
/*=======================================================================
| UberCMS - Advanced Website and Content Management System for uberEmu
| #######################################################################
| Copyright (c) 2010, Roy 'Meth0d' and updates by Matthew 'MDK'
| http://www.meth0d.org & http://www.sulake.biz
| #######################################################################
| This program is free software: you can redistribute it and/or modify
| it under the terms of the GNU General Public License as published by
| the Free Software Foundation, either version 3 of the License, or
| (at your option) any later version.
| #######################################################################
| This program is distributed in the hope that it will be useful,
| but WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
| GNU General Public License for more details.
\======================================================================*/
	
	require_once "global.php";
	require_once "nucleo/recaptchalib.php";
	
	if (!LOGGED_IN)
	{
		header("Location: " . WWW . "/");
		exit;
	}
	else if ($users->GetUserVar(USER_ID, 'newbie_status') == "0")
	{
		header("Location: " . WWW . "/register/welcome");
		exit;
	}
	
	// Initialize template system
	$tpl->Init();
	
	// Errors
	$tpl->SetParam('errors', '');
	if (isset($_GET['errors']))
	{
		$error = '<div id="error-messages-container" style="margin: 5px; margin-top: 10px;">

            <div class="error-messages-holder">

                <h3>Change some information, And try again.</h3>

                <ul>

                    <li><p class="error-message">'.$_GET['errors'].'.</p></li>

                </ul>

            </div>

            </div>';
            
  	$tpl->SetParam('errors', $error);
	}
	
	$type = $_GET['type'];
	
	// Initial variables
	$tpl->SetParam('page_title', 'Elige Personaje');
	
	// Generate page header
	$tpl->AddIncludeSet('identity');

	if ($type == "password")
	{
		$tpl->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/changepassword.css', 'stylesheet'));
		$tpl->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/embeddedregistration.css', 'stylesheet'));/**/
	}

	$tpl->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/identity_settings.css', 'stylesheet'));
		
	if ($type == "avatars" or $type == "add_avatar")
		$tpl->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/avatarselection.css', 'stylesheet'));			
	
	$tpl->WriteIncludeFiles();
	$tpl->AddGeneric('head-bottom');
	

	
	switch ($type)
	{
		case "avatars":
			dbquery("UPDATE `users` SET `real_name` = '".$_SESSION['jjp']['login']['name']."' WHERE `mail` = '".$_SESSION['jjp']['login']['email']."'");
			$tpl->AddGeneric('identity-avatars');
			break;
		
		case "add_avatar":
			$tpl->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/avatarselection.css', 'stylesheet'));
			$tpl->AddGeneric('identity-add-avatars');
			break;
		
		case "add_avatar_add":
			$userP = $_SESSION['UBER_USER_H'];
			$userL = filter($_POST['bean_look']);
			$userN = filter($_POST['bean_avatarName']);
			$userE = $_SESSION['jjp']['login']['email'];
			$gender = filter($_POST['bean_gender']);
			
			if (strlen($userN) < 1 and strlen($userN) > 32)
			{
				$errors = "Your name must be between 1 and 32 characters";
			}
			else if ($users->IsNameTaken($userN))
			{
				$errors = "This name is already in use";
			}
			else if ($users->IsNameBlocked($userN))
			{
				$errors = "This name is blocked by habbo staff";
			}
			else if (!$users->IsValidName($userN))
			{
				$errors = "This name is not valid";
			}		
			
			if (!isset($errors))
			{			
				$users->add($userN, $userP, $userE, 1, $userL, $gender);
				
				dbquery("UPDATE `users` SET `real_name` = '".$_SESSION['jjp']['login']['name']."' WHERE `mail` = '".$_SESSION['jjp']['login']['email']."'");
				
				$_SESSION['SHOW_WELCOME'] = true;
				$_SESSION['UBER_USER_N'] = $userN;
				
				$_SESSION['jjp']['login']['user'] = $_SESSION['UBER_USER_N'];
				$_SESSION['jjp']['login']['email'] = $users->GetUserVar($users->Name2id($_SESSION['jjp']['login']['user']), 'mail');
				$_SESSION['jjp']['login']['name'] = $users->GetUserVar($users->Name2id($_SESSION['jjp']['login']['user']), 'real_name');
				
				header("Location: " . WWW . "/quickregister/complete");
				exit;
			}
			
			header("Location: " . WWW . "/identity/add_avatar/error/".$errors);
			exit;				
			break;			
		
		case "useOrCreateAvatar":
			$tpl->AddIncludeFile(new IncludeFile('text/css', '%www%/web-gallery/v2/styles/avatarselection.css', 'stylesheet'));
			if ($users->GetUserVar($_GET['param'], 'mail') == $_SESSION['jjp']['login']['email'] and $users->GetUserVar($_GET['param'], 'password') == $_SESSION['UBER_USER_H'])
				$_SESSION['UBER_USER_N'] = $users->GetUserVar($_GET['param'], 'username');
			else
			{
				header("Location: " . WWW . "/identity/avatars/error/You can't log-in on this account");
				exit;
			}
				
			header('Location: '.WWW.'/');
			exit;
			
			break;
			
		case "settings":
			$tpl->AddGeneric('identity-settings');
			break;
			
		case "password":
			$tpl->SetParam('recaptcha_html', recaptcha_get_html("6Le-aQoAAAAAABnHRzXH_W-9-vx4B8oSP3_L5tb0"));
			$tpl->AddGeneric('identity-password');
			break;
			
		case "password_change":
			$userP = $_SESSION['UBER_USER_H'];
			$userE = $_SESSION['jjp']['login']['email'];
			$userCP = $core->uberHash($_POST['currentPassword']);
			$userNP = $_POST['newPassword'];
			$userNPA = $_POST['retypedNewPassword'];
			
			$resp = recaptcha_check_answer ('6Le-aQoAAAAAAKaqhlUT0lAQbjqokPqmj0F1uvQm', $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
			if (!$resp->is_valid)
			{
				$error = "Captcha code is not valid";
			}	
			else if ($userP <> $userCP)
			{
				$error = "Your password is not equal with your old password";
			}
			else if ($userNP <> $userNPA)
			{
				$error = "Your new password is not equal with your retype password";
				exit;
			}
			else if (strlen($userNP) < 6)
			{
				$error = "Your new password is too short";
			}
			else if (!isset($error))
			{
				$newPass = $core->uberHash($userNP);
				$result = dbquery("UPDATE `users` SET `password` = '".$newPass."' WHERE `mail` = '".$userE."'");
				if ($result)
				{
					$_SESSION['UBER_USER_H'] = $newPass;
					header("Location: " . WWW . "/identity/settings&passwordChanged=true");
				}
				else
				{
					$error = "Your password is not saved!";
				}
			}
			
			header("Location: " . WWW . "/identity/password/error/".$error);
			exit;
			
			break;
	}
	
	// Footer
	$tpl->AddGeneric('footer');
	
	// Output the page
	$tpl->Output();
	
?>