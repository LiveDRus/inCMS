<?php
require_once("../../includes/core.php");
if(!get_userinfo("username") < 6)
{
header("Location: ../error");
die;
}
if(isset($_POST['timer']) && isset($_POST['pixels']) && isset($_POST['credits']) && isset($_POST['motd']))
{
	$query = mysql_query("UPDATE server_settings SET timer = '".$core->EscapeString($_POST['timer'])."', pixels = '".$core->EscapeString($_POST['pixels'])."', credits = '".$core->EscapeString($_POST['credits'])."', motd = '".$core->EscapeString($_POST['motd'])."'");
}
?>