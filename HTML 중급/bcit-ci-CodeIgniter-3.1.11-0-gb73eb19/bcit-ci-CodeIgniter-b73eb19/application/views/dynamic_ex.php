<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); ?>
<!-- 동적 폼 전송 공부 -->
<html>
 <head>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 
  <script>
   function go(){
    $.post(
     "http://qkrgustn.com/test/dynamic_ex",
     { msg : "야호" },
     function( data ){
      alert( data );
     }
    );
   }
  </script>
 </head>
 
 <body>
  <button type="button" onclick="go();">전송</button>
 </body>
</html>