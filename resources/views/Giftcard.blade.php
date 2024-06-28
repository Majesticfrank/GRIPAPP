<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Giftcard</title>
</head>
<body>
    <h2>CREATE GIFT CARD IN DATABASE</h2>
    <form action="{{route('StoreGiftcard')}}" method="post"> 
        @csrf
<input type="text" name="name">
<input type="file" name="image" accept="image/*">
<button type="Submit">Submit</button>
    </form>
</body>
</html>