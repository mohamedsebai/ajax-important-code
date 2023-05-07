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

<div id="show">
 first comments click load more to see more comments
</div>
<button type="button" class="btn btn-primary" id="btn">Load more</button>
<script type="text/javascript">

var limit = 1;
$(function(){
  $( "#btn" ).on( "click", function() {
    limit = limit + 1; // it's most important part
   // ajax call
   $('#show').load('data.php', {
     // sending data
     limit: limit,
   },function(responseText,statusCodes,xhrObject){
     console.log(responseText);
     console.log(statusCodes);
     console.log(xhrObject);
   });
  });
 });
</script>
  </body>
</html>
