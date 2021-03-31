<? if( ! defined('BASEPATH') ) exit('No direct script access allowed'); ?>
<!-- application/views/form.php -->
<html>
 <head>
  <title>폼 전송</title>
 </head>
 
 <body>
  <!--<form action = "http://qkrgustn.com/test/process_post_data" method="post">-->
   <!--<input type="text" name="name">-->
   <?
		echo $name;
		echo "<br>";
		echo $age;
		echo "<br>";
		echo $grade;
   ?>
   <button type="submit">전송</button>
  </form>
 </body>
</html>