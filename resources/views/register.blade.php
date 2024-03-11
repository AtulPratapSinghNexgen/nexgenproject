
<!--
Name : Atul Pratap Singh
Date : 12-02-2024
Company Name : NexGen

-->
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>NexGen | Welcome Atul</title> 
    <link rel="stylesheet" href="{{url('asset/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>NexGen | Register Form</span></div>
        <form action="{{route('Doneregister')}}" method="POST">
            {{ csrf_field() }}
            @if ($errors->any())
            {{implode('', $errors->all(':message'))}}
                
            @endif
          <div class="row">
         
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Enter Email Here" name="email" required>
           
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Enter Password Here" name="password" required>
          </div>
      
          <div class="row button">
            <input type="submit" value="Register">
          </div>
          <div class="signup-link">Already a member? <a href="{{route('login')}}">SignIn</a></div>
        </form>
      </div>
    </div>

  </body>
</html>