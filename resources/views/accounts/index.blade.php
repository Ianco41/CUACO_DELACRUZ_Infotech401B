<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CD_LAHLAHVEL</title>
    <style>
        .navstyle{
            display: flex;
            justify-content: flex-end;
        }
         /* Basic styling for the grid layout */
         .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        .item {
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .item img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        .item h3 {
            margin-top: 10px;
            font-size: 1.2em;
            color: #333;
        }
        /* Style for the modal background */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
        }

        /* Modal content */
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
        }

        /* The close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .foot{
            text-align: center;
            margin-top: 10%;
        }
    </style>
</head>
<body>
    
    <header>
        <h1 class="webname">BIKE CO's STORE</h1>
        <nav class="navstyle">
            <button id="adminBtn">ADMIN</button>
        </nav>
        
    </header>

    <main>

        <div class="container">
            @foreach ($account as $accounts)
                <div class="item">
                    <!-- Display image with the asset() function to generate the correct URL -->
                    <img src="{{ asset('storage/' . $accounts->image) }}" alt="{{ $accounts->brand }}">
                    <h3>{{ $accounts->brand }}</h3>
                </div>
            @endforeach
        </div>
    </main>
    
    <div id="adminModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Admin Settings</h2>
            <p>Welcome, Admin! Here you can manage the website settings.</p>
            <!-- Add your admin content here -->
            <button><a href="{{route('accounts.create')}}">ADD ITEM</a></button>
            <button><a href="{{route('accounts.view')}}">SHOW ITEM LIST</a></button>
        </div>
    </div>

    <footer>
        <p class="foot">Created by [CUACO, Mark Ian. DELA CRUZ, Vryle Chester]</p>
    </footer>
    <script>
        // Get modal element
        var modal = document.getElementById("adminModal");

        // Get button that opens the modal
        var btn = document.getElementById("adminBtn");

        // Get the <span> element to close the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>