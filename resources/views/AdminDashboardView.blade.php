<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

    
        
        
</body>
</html>
 