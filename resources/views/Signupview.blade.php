<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
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
    <h2>Get started</h2>
    <p>All the details provided below will be verified </p>
    <p>Already have an account?<a href="{{route('login')}}">Login</a></p>

</section>
<section class="section-2">
    <form action="{{route('Signupuser')}}" method="post">
        @csrf
        <i class="fa-solid fa-envelope"></i>
        <label for="Email">Email *</label> <br>
        <input type="text" name="Email"  class="input">
         <br>
        <p>enter a valid accessible email address</p>
        <br>
        <i class="fa-regular fa-user"></i>
        <label for="First name">First name *</label> <br>
        <input type="text" name="FirstName"  class="input">
         <br>
        <p>enter names as it appears on your bank account </p>
        <br>

        <i class="fa-regular fa-user"></i>
        <label for="">Last name *</label> <br>
        <input type="text" name="LastName"  class="input">
         <br>
        <p>enter names as it appears on your bank account </p>
        <br>

        <i class="fa-solid fa-phone"></i>
        <label for="Phone number ">Phone Number  *</label> <br>
        <input type="text" name="PhoneNumber"   class="input">
         <br>
        <p>you'll verify your phone number during bank transfer  </p>
        <br>

        <i class="fa-solid fa-key"></i>
        <label for="password">Password * <i class="fa-regular fa-eye-slash"></i></label> <br>
        <input type="password" name="Password"   class="input">
            <br>
            <br>
            <i class="fa-regular fa-user"></i>
        <label for="Referral code ">Rerferral code  (optional) </label> <br>
        <input type="text" name="Referralcode"   class="input">
            <br>

            <button type="submit" class="btn-signup" name="Create_customer"> Sign Up </button>


    </form>
</section>

</div>

<div class="page-right">

</div>




</body>
</html>
