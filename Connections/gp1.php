<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_gp1 = "localhost";
$database_gp1 = "acccm_cms_accm";
$username_gp1 = "acccm_web";
$password_gp1 = "web123456";
$gp1 = mysql_pconnect($hostname_gp1, $username_gp1, $password_gp1) or trigger_error(mysql_error(),E_USER_ERROR); 
?>