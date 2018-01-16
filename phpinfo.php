<?php
/**
 * Created by PhpStorm.
 * User: Ahmed Waly
 * Date: 11/23/2015
 * Time: 4:06 PM
 */

 if(!function_exists('apache_get_modules') ){ phpinfo(); exit; }
 $res = 'Module Unavailable';
 if(in_array('mod_rewrite',apache_get_modules()))
 $res = 'Module Available';
?>
<html>
<head>
<title>A mod_rewrite availability check !</title></head>
<body>
<p><?php echo apache_get_version(),"</p><p>mod_rewrite $res"; ?></p>
</body>
</html>

<!--phpinfo();
 67.227.154.78 
easyappo_gcv
easyappo_gcvu
RoD!-8-(0eA^ -->
