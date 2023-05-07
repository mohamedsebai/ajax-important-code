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
    <label for="exampleInputEmail1">User naem: </label>
    <input type="text" class="form-control"  id="username" placeholder="Enter username" name="username">
    <div id="userError" style="color: red"></div>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <div id="mailError" style="color: red"></div>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    <div id="passError" style="color: red"></div>
  </div>

  <button type="submit" class="btn btn-primary" id="btn">Submit</button>

</form>


<script type="text/javascript">

$(function(){
  $( "#form" ).on( "submit", function() {
   // ajax call
   $.ajax({
     method: 'post',
     url: 'data.php',
     data:  $('#form').serialize(),
     // so we can send all data by use serialize function like that data:  $('#form').serialize(), by name atrr
     success: function(data, statusCodes, xhrObject){

       var dataError = JSON.parse(data);
       document.getElementById('userError').innerHTML = dataError.usernameError;
       document.getElementById('passError').innerHTML = dataError.passwordError;
       document.getElementById('mailError').innerHTML = dataError.emailError;
       // console.log(dataError.usernameError);
       // console.log(dataError.passwordError);
       // console.log(dataError.emailError);
       // console.log(xhrObject);
       // console.log(statusCodes);
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
