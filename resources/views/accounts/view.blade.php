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
        <h1>LIST OF ITEMS</h1>
        <br><br>
        @if(session('success'))
            <div style="color: green;">
               {{ session('success') }}
            </div>
        @endif
        
        <table>
            <thead>
                <th>Brand</th>
                <th>Frame Size</th>
                <th>Material</th>
                <th>Ratio</th>
                <th>Price</th>
                <th>Quantity</th>
            </thead>

            <tbody>
                @foreach ($account as $accounts)
                    <tr>
                        <td>{{$accounts->brand}}</td>
                        <td>{{$accounts->framesize}}</td>
                        <td>{{$accounts->material}}</td>
                        <td>{{$accounts->ratio}}</td>
                        <td>{{$accounts->price}}</td>
                        <td>{{$accounts->quantity}}</td>
                        <td>
                            <a href="{{route('accounts.show', $accounts->id) }}">View</a>
                            <a href="{{route('accounts.edit', $accounts->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div><button><a href="{{route('accounts.index')}}">BACK HOME</a></button></div>
</body>
</html>