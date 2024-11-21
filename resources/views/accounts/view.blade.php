<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bike Co's Store</title>
    <style>
        /* General reset and styling */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    padding: 20px;
}

/* Main container */
div {
    margin-bottom: 20px;
}

/* Heading style */
h1 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

/* Success message style */
div[style="color: green;"] {
    font-size: 1.2rem;
    color: green;
    text-align: center;
    margin-bottom: 20px;
}

/* Table styling */
table {
    width: 100%;
    margin-bottom: 20px;
    border-collapse: collapse;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #0056b3;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

/* Table column header style */
th {
    font-weight: bold;
}

/* Links inside table cells */
a {
    text-decoration: none;
    color: #007bff;
    padding: 5px 10px;
    margin: 0 5px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: #007bff;
    color: white;
}

/* Button style */
button {
    background-color: #0056b3;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button a {
    color: white;
    text-decoration: none;
}

button:hover {
    background-color: #45a049;
}
.del_btn{
    background-color: red;
}

/* Responsiveness */
@media (max-width: 768px) {
    table {
        font-size: 14px;
    }

    th, td {
        padding: 8px;
    }

    button {
        width: 100%;
        padding: 12px 0;
    }
}

    </style>
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
                <th>Action</th>
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
                            <form action="{{ route('accounts.destroy', $accounts->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="del_btn" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div><button><a href="{{route('accounts.index')}}">BACK HOME</a></button></div>
</body>
</html>