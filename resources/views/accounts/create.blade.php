<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bike Co's Store</title>
</head>
<body>
    <header><h1>ADDING ITEM</h1></header>
    <div>
        <form action="{{route('accounts.store')}}" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="brand">Brand Name</label>
                <input type="text" name="brand" id="brand">
            </div>
            <div>
                <label for="frame_size">Frame Size</label>
                <input type="text" name="framesize" id="frame_size">
            </div>
            <div>
                <label for="material">Material</label>
                <input type="text" name="material" id="material">
            </div>
            <div>
                <label for="speed">Gear Ratio/Speed</label>
                <input type="text" name="ratio" id="speed">
            </div>
            <div>
                <label for="token">Price</label>
                <input type="text" name="price" id="token">
            </div>
            <div>
                <label for="qty">Quantity</label>
                <input type="text" name="quantity" id="qty">
            </div>
            <div>
                <label for="imaged">Insert Image</label>
                <input type="file" name="image" id="imaged" accept="image/*" required>
            </div>
            <div>
                <button type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
</body>
</html>