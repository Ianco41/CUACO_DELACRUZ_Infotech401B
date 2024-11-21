<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bike Co's Store</title>
</head>
<body>
    <header><h1>EDIT ITEM INFORMATION</h1></header>
    <div>
        
        <form action="{{route('accounts.update', $account->id)}}" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="brand">Brand Name</label>
                <input type="text" name="brand" id="brand" value="{{$account->name}}" required>
            </div>
            <div>
                <label for="frame_size">Frame Size</label>
                <input type="text" name="framesize" id="frame_size" value="{{$account->name}}" required>
            </div>
            <div>
                <label for="material">Material</label>
                <input type="text" name="material" id="material" value="{{$account->name}}" required>
            </div>
            <div>
                <label for="speed">Gear Ratio/Speed</label>
                <input type="text" name="ratio" id="speed" value="{{$account->name}}" required>
            </div>
            <div>
                <label for="token">Price</label>
                <input type="text" name="price" id="token" value="{{$account->name}}" required>
            </div>
            <div>
                <label for="qty">Quantity</label>
                <input type="text" name="quantity" id="qty" value="{{$account->name}}" required>
            </div>
            <div>
                <label for="imaged">Insert Image</label>
                <input type="file" name="image" id="imaged" accept="image/*" value="{{$account->name}}" required>
            </div>
            <div>
                <button type="submit">SUBMIT</button>
                <a href="{{route('accounts.view')}}">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>