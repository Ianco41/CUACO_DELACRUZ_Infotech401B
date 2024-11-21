<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bike Co's Store</title>
    <style>
        /* Global Styles */
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f7fc;
    margin: 0;
    padding: 0;
    }

    /* Header Styles */
    header {
    background-color: #3a3a3a;
    color: white;
    text-align: center;
    padding: 20px;
}

h1 {
    margin: 0;
}

/* Form Container */
div {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Form Styling */
form {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
}

/* Input Fields */
div > div {
    margin-bottom: 15px;
}

label {
    display: block;
    font-size: 1rem;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

input[type="text"]:focus,
input[type="file"]:focus {
    border-color: #007bff;
    outline: none;
}

/* Submit Button */
button {
    background-color: #007bff;
    color: white;
    padding: 12px 20px;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 50%;
    margin-bottom: 10px
}
a{
    text-align: center;
    text-decoration: none;
    background-color: #007bff;
    color: white;
    padding: 12px 20px;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 30%;
}

button:hover {
    background-color: #0056b3;
}
a:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    form {
        padding: 15px;
    }

    label, input {
        font-size: 0.9rem;
    }

    button {
        padding: 10px 15px;
    }
}
    </style>
</head>
<body>
    <header><h1>EDIT ITEM INFORMATION</h1></header>
    <div>
        
        <form action="{{route('accounts.update', $account->id)}}" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="brand">Brand Name</label>
                <input type="text" name="brand" id="brand" value="{{$account->brand}}" required>
            </div>
            <div>
                <label for="frame_size">Frame Size</label>
                <input type="text" name="framesize" id="frame_size" value="{{$account->framesize}}" required>
            </div>
            <div>
                <label for="material">Material</label>
                <input type="text" name="material" id="material" value="{{$account->material}}" required>
            </div>
            <div>
                <label for="speed">Gear Ratio/Speed</label>
                <input type="text" name="ratio" id="speed" value="{{$account->ratio}}" required>
            </div>
            <div>
                <label for="token">Price</label>
                <input type="text" name="price" id="token" value="{{$account->price}}" required>
            </div>
            <div>
                <label for="qty">Quantity</label>
                <input type="text" name="quantity" id="qty" value="{{$account->quantity}}" required>
            </div>
            <div>
                <label for="imaged">Insert  (optionanl)</label>
                <input type="file" name="image" id="imaged" accept="image/*">
            </div>
            <div class="btns">
                <button type="submit">Submit</button>
            </div>
            <div><a href="{{route('accounts.view')}}">Cancel</a></div>
        </form>
    </div>
</body>
</html>