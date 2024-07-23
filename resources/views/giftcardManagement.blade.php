<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giftcard Management</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="{{route('Adminboard')}}">Overview</a></li>
            <li><a href="{{route('admin.user-management')}}">User Management</a></li>
            <li><a href="{{route('admin.transaction-management')}}">Transaction Management</a></li>
            <li><a href="{{route('admin.giftcard-management')}}">Gift Card Management</a></li>
        </ul>
    </div>
    <H2>GIFTCARD MANAGEMENT</H2>

    <div class="giftcardManagement">
        @foreach ($Giftcard as $Giftcards)
        <div class="gift-card1">
            <p class="name">{{ $Giftcards->name }}</p>
            {{-- <img src="{{ Storage::url('images' . $Giftcards->image) }}" width="250" height="250"> --}}
            <img src="{{"images" .$Giftcards->image}}" width="50" height="50">
            <button><a href="#">Edit</a></button>
            <button><a href="#">Remove</a></button>
        </div>
        @endforeach
    </div>
    
      
</body>
</html>
 