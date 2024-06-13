<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <div class="fold-major">
    <div class="fold-minor1">

  <div class="dash">
    <img src="/Images/logo.png" alt="logo">
    <ul>
      <li><i class="fa-solid fa-house"></i><a href="#" class="dashboard">Dashboard</a></li>
        <li><i class="fa-solid fa-credit-card"></i><a href="#" class="trade">Trade Gift Cards</a>
            <div class="dropdown">
              <ul>
                <li><a href="#">sell</a></li>
                <li><a href="#">Calculate Rate</a></li>
              </ul>
            </div> 
        </li>
        <li><i class="fa-solid fa-wallet"></i><a href="#" class="wallet"> Wallet</a></li>
        <li><i class="fa-regular fa-clipboard"></i><a href="#" class="transaction">Transactions</a></li>
        <li><i class="fa-solid fa-award"></i><a href="#" class="board">LeaderBoard</a></li>
        <li><i class="fa-solid fa-power-off"></i><form action="{{route('Logout')}}" class="log" method="post"> @csrf <button>Log out</button></form></li>
    </ul>
  </div>
 </div>
  <div class="fold-minor2">
    <h3>Hello Melvin Cyrus,</h3>
    <P>Welcome to your grip dashboard, use the cards below to get started. </P>
<div class="box-container1">

</div>
<div class="box-container2">

</div>
<div class="box-container3">

</div>
  </div> 
  </div>
  

</body>
</html>  