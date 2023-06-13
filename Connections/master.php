<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_master = "localhost";
$database_master = "acccm_cms_accm";
$username_master = "acccm_web";
$password_master = "web123456";
$master = mysql_pconnect($hostname_master, $username_master, $password_master) or trigger_error(mysql_error(),E_USER_ERROR); 
?>