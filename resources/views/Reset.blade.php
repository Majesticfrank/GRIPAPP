
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
    <div class="page-left">
        @if ($errors->any())

        @foreach ($erros->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
            
        @endforeach
            
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
            
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <header class="header-image">
            <img src="/Images/logo.png" alt="logo">
        </header>

    <section class="section-1">
        <h2>Recover Password</h2>

        <p>Return to?<a href="{{route('login')}}">Login</a></p>
           
    </section>
    <section class="section-2">
        <p>A link will be sent to your email make sure your email is correct</p>
        <form action="{{route('resetlink')}}" method="post">    
            @csrf
            <i class="fa-solid fa-envelope"></i>
            <label for="Email">Email *</label> <br>
            <input type="text" name="Email"  class="input">
             <br>
            <p>Email address is required</p>

                <button type="submit" class="btn-signup">Send Reset OTP</button>
         
        </form>
    </section>

    </div>

    <div class="page-right">

    </div>


</body>
</html>


<div class="reset-password-container">
    <h2>Reset Password</h2>
    <form  >
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Reset Password</button>

    </form>
</div>




