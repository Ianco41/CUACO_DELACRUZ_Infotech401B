<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bike Co's Store</title>
</head>
<body>
    <div>
       <h1>{{$account->brand}}</h1>
       <p><strong>framesize</strong>{{$account->framesize}}</p>
       <p><strong>material</strong>{{$account->material}}</p>
       <p><strong>ratio</strong>{{$account->ratio}}</p>
       <p><strong>price</strong>{{$account->price}}</p>
       <p><strong>quantity</strong>{{$account->quantity}}</p>
    </div>
    <div><button><a href="{{route('accounts.view')}}">GO BACK</a></button></div>
</body>
</html>