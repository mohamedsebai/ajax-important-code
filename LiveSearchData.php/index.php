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

<div id="show"></div>

<form id="form" method="post" action="data.php">

  <div class="form-group">
    <input type="text" class="form-control"  id="search" placeholder="Enter search" name="search">
  </div>

</form>
<script type="text/javascript">

$(function(){
  $( "#search" ).on( "keypress", function() {
   // ajax call
   $.ajax({
     method: 'post',
     url: 'data.php',
     data:  {
       search: $('#search').val(),
     },
     // so we can send all data by use serialize function like that data:  $('#form').serialize(), by name atrr
     success: function(data, statusCodes, xhrObject){
       console.log(data); // wil echo data from comments page
       document.getElementById('show').innerHTML = data;
     },
     // if there is error
     error: function(xhrObject, statusCodes, errorType){
       console.log(xhrObject);
       console.log(statusCodes);
       console.log(errorType);
     },
   });

  });
 });
</script>
  </body>
</html>
