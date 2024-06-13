<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
    <div class="page-left">
        <header class="header-image">
            <img src="/Images/logo.png" alt="logo">
            <button class="signup-btn"><a href="#">Calculate Rate</a></button>
        </header>

    <section class="section-1">
        <h2>Login into your account</h2>

        <p>Don't have an account?<a href="{{route('signup')}}">Create an account</a></p>
           
    </section>
    <section class="section-2">
        <form action="{{route('Signin')}}" method="post">
            @csrf
            <i class="fa-solid fa-envelope"></i>
            <label for="Email">Email *</label> <br>
            <input type="text" name="Email"  class="input">
             <br>
            <p>Email address is required</p>
            <br>

            <i class="fa-solid fa-key"></i>
            <label for="password">Password * <i class="fa-regular fa-eye-slash"></i></label> <br>
            <input type="Password" name="Password"   class="input">

                <br>
                <button type="submit" class="btn-signup">Sign in</button>
                       
        </form>
        <a href="{{route('SendEmail')}}">Forgot password?</a> 
    </section>

    </div>

    <div class="page-right">

    </div>


</body>
</html>
