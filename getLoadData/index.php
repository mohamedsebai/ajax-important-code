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

<button id="btn" type="button" name="button">get data</button>
<div id="show">
  <script type="text/javascript">
  $(function(){
    $( "#btn" ).on( "click", function() {
        $('#show').load('data.php .getData', function(responseText,statusCodes,xhrObject){
            if(statusCodes == 'success'){
              console.log(responseText);
              console.log(xhrObject);
              console.log('good success');
            }
            if(statusCodes == 'error'){
              console.log('there is error');
            }
        });
    });
   });
  </script>
</div>


</body>
</html>
