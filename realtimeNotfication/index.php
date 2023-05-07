<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- include jquery -->
    <script
      src="https://code.jquery.com/jquery-3.6.4.min.js"
      integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
      crossorigin="anonymous">
    </script>
  </head>
  <body>

<div id="show">0</div>
<script type="text/javascript">

$(function(){
   // ajax call
   $('#show').load('data.php', function($responseText,$statusCodes,$xhrObject){
     if($statusCodes == 'success'){
       console.log('good success');
     }
   });
});
</script>
  </body>
</html>
