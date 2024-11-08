<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stuart Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/ionicons.min.css">
    
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /* Header styling */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 1em 2em;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .company-name {
            font-size: 1.8em;
            font-weight: bold;
            color: #333;
        }

        .company-name a {
            text-decoration: none;
            color: inherit;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            gap: 2em;
            list-style: none;
        }

        .navbar a {
            color: #333;
            text-decoration: none;
            font-size: 1em;
            transition: color 0.3s ease;
            position: relative;
        }

        .navbar a:hover {
            color: #fa6338;
        }

        /* Cart icon styling */
        .cart-icon {
            font-size: 1.5em;
            color: #333;
            cursor: pointer;
            position: relative;
        }

        .cart-icon::after {
            content: "0";
            position: absolute;
            top: -10px;
            right: -15px;
            background: #fa6338;
            color: white;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            font-size: 0.8em;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Dropdown for Categories */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1em;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: #333;
            padding: 0.5em 0;
            text-decoration: none;
            display: block;
            transition: color 0.3s ease;
        }

        .dropdown-content a:hover {
            color: #fa6338;
        }

        /* Categories Bar */
        .categories-bar {
            margin-top: 0px;
            background-color: #f8f8f8;
            padding: 1em 2em;
        }

        .categories-nav {
            display: flex;
            gap: 1.5em;
            justify-content: center;
        }

        .category-link {
            color: #333;
            text-decoration: none;
            font-size: 1em;
            transition: color 0.3s ease;
        }

        .category-link:hover {
            color: #fa6338;
        }

         /* General Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .modal-content {
            background-color: #fff;
            padding: 2em;
            width: 350px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .modal h2 {
            color: #333;
            margin-bottom: 1em;
            font-size: 1.5em;
        }
        .close-btn {
            cursor: pointer;
            color: #fa6338;
            font-weight: bold;
            font-size: 1.4em;
            position: absolute;
            top: 10px;
            right: 20px;
        }
        /* Input Field Styles */
        .modal input[type="text"],
        .modal input[type="email"],
        .modal input[type="password"],
        .modal input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 0.5em 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
            box-sizing: border-box;
        }
        .modal button {
            width: 100%;
            padding: 10px;
            margin-top: 1em;
            background-color: #fa6338;
            color: #fff;
            font-size: 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .modal button:hover {
            background-color: #e8592e;
        }

        /* Item Card Styling */
        .item-container {
            padding: 2em;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5em;
        }

        .card {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            position: relative;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        .card-image {
            width: 100%;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .description-container {
            padding: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .item-description {
            text-align: left;
        }

        .item-name {
            font-size: 1.1em;
            margin-bottom: 0.5em;
            color: #333;
        }

        .item-price {
            color: #fa6338;
            font-weight: bold;
        }

        /* Cart Icon in Card */
        .add-to-cart {
            color: #fa6338;
            font-size: 1.4em;
            cursor: pointer;
            transition: color 0.3s ease;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .add-to-cart:hover {
            color: #e65c2e;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="company-name">
            <a href="#">Stuart</a>
        </div>
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <div class="dropdown">
                <a href="#">Categories &#9662;</a>
                <div class="dropdown-content">
                    <a href="#">Clothing</a>
                    <a href="#">Shoes</a>
                    <a href="#">Accessories</a>
                </div>
            </div>
            <a href="#" onclick="openModal('signupModal')">Sign Up</a>
            <a href="#" onclick="openModal('signinModal')">Sign In</a>
        </nav>
        <div class="cart-icon">🛒</div>
    </div>

    <!-- Categories Bar -->
    <div class="categories-bar">
        <nav class="categories-nav">
            <a class="category-link" href="#">All</a>
            <a class="category-link" href="#">Men Clothing</a>
            <a class="category-link" href="#">Women Clothing</a>
            <a class="category-link" href="#">Shoes</a>
            <a class="category-link" href="#">Socks</a>
            <a class="category-link" href="#">Accessories</a>
        </nav>
    </div>

    <div class="modal" id="signupModal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('signupModal')">&times;</span>
            <h2>Create an Account</h2>
            <form>
                <input type="text" placeholder="Full Name" required>
                <input type="text" placeholder="Address" required>
                <input type="number" placeholder="Phone Number" required>
                <input type="text" placeholder="Postal Code" required>
                <input type="text" placeholder="Location" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <!-- Sign In Modal -->
    <div class="modal" id="signinModal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('signinModal')">&times;</span>
            <h2>Sign In</h2>
            <form>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
            </form>
        </div>
    </div>


    <div class="item-container">
        <div class="card">
            <div class="card-image">
                <img src="image/shirt1.png" alt="Red Sneaker">
                <ion-icon name="bag-add-outline" class="add-to-cart"></ion-icon>
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h3 class="item-name">Red Sneaker</h3>
                    <p class="item-price">&#x20B1;999</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="image/shoes1.png" alt="Red Sneaker">
                <ion-icon name="bag-add-outline" class="add-to-cart"></ion-icon>
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h3 class="item-name">Red Sneaker</h3>
                    <p class="item-price">&#x20B1;999</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="image/shirt2.png" alt="Red Sneaker">
                <ion-icon name="bag-add-outline" class="add-to-cart"></ion-icon>
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h3 class="item-name">Red Sneaker</h3>
                    <p class="item-price">&#x20B1;999</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="image/heel1.png" alt="Red Sneaker">
                <ion-icon name="bag-add-outline" class="add-to-cart"></ion-icon>
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h3 class="item-name">Red Sneaker</h3>
                    <p class="item-price">&#x20B1;999</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="image/shoes2.png" alt="Red Sneaker">
                <ion-icon name="bag-add-outline" class="add-to-cart"></ion-icon>
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h3 class="item-name">Red Sneaker</h3>
                    <p class="item-price">&#x20B1;999</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="image/shirt3.png" alt="Red Sneaker">
                <ion-icon name="bag-add-outline" class="add-to-cart"></ion-icon>
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h3 class="item-name">Red Sneaker</h3>
                    <p class="item-price">&#x20B1;999</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
