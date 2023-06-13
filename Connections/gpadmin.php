<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_gpadmin = "localhost";
$database_gpadmin = "acccm_cms_accm";
$username_gpadmin = "acccm_web";
$password_gpadmin = "web123456";
$gpadmin = mysql_pconnect($hostname_gpadmin, $username_gpadmin, $password_gpadmin) or trigger_error(mysql_error(),E_USER_ERROR); 
?>