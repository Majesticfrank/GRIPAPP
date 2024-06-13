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
    <header class="header-image">
        <img src="/Images/logo.png" alt="logo">
    </header>

<section class="section-1">
    <h2>RESET PASSWORD HERE</h2>
    <p>Kindly Enter your new password </p>

</section>
<section class="section-2">
    <form action="" method="post">

        @csrf
        <i class="fa-solid fa-envelope"></i>
        <label for="Email">Email *</label> <br>
        <input type="text" name="Email"  class="input">
         <br>
        <p>enter a valid accessible email address</p>
        <br>

        <i class="fa-solid fa-key"></i>
        <label for="password">Password * <i class="fa-regular fa-eye-slash" placeholder='New Password'></i></label> <br>
        <input type="password" name="Password"   class="input">
            <br>
            <i class="fa-solid fa-key"></i>
            <label for="password">Password * <i class="fa-regular fa-eye-slash" placeholder='Confirm password'></i></label> <br>
            <input type="password" name="Password"   class="input">
            <button type="submit" class="btn-signup" name="Create_customer">Submit </button>


    </form>
</section>

</div>

<div class="page-right">

</div>

    
</body>
</html>