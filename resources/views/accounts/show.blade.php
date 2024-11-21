<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bike Co's Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20;
            padding: 5%;
            color: #333;
        }

        div {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .div_class{
            display: flex;
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            margin: 8px 0;
        }

        p strong {
            font-weight: bold;
            color: #34495e;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #2980b9;
        }

        .images img{
            width: 250px;
            height: 250px;
            border-radius: 10px;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 20px;
            }

            p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="div_class">
        <div>
       <h1>{{$account->brand}}</h1>
       <p><strong>framesize</strong>{{$account->framesize}}</p>
       <p><strong>material</strong>{{$account->material}}</p>
       <p><strong>ratio</strong>{{$account->ratio}}</p>
       <p><strong>price</strong>{{$account->price}}</p>
       <p><strong>quantity</strong>{{$account->quantity}}</p>
            
        </div>
        <div class=images>
            <p><strong>IMAGE</strong><img src="{{ asset('storage/' . $account->image) }}" alt="{{ $account->brand }}"></p>
        </div>
    </div>
    <button><a href="{{route('accounts.view')}}">GO BACK</a></button>
</body>
</html>