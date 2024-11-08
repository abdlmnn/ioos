<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style-type: none;
    font-family: "Poppins", sans-serif;
}
body{
    background-color: #f8f8f8;
}

/* Navbar */
.header{
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    width: 100%;
    padding: 0.9em 3.5em 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff;
}
.header .left-item{
    display: flex;
    align-items: center;
    flex: 1;
}
.header .left-item .company-name{
    color: #000;
    font-weight: 900;
    font-size: 2rem;
    cursor: pointer;
}
.header .left-item .company-name .a-link{
    color: #000;
    text-decoration: none;
}
.header .right-item{
    flex: 1;
    display: flex;
    justify-content: flex-end;
    position: relative;
}
.header .right-item .a-link{
    color: #000;
    transition: all .3s ease-in-out;
}
.header .right-item .a-link:hover{
    color: #fa6338;
}
.header .right-item .user-icon, .header .right-item .cart-icon, .header .right-item .notification-icon{
    position: absolute;
    font-size: 20px;
    top: -10px;
}
.header .right-item .notification-icon{
    right: 50px;
}
.header .mid-item {
    flex: 1;
    display: flex;
    justify-content: center;
}

.header .mid-item .navbar {
    display: flex;
    gap: 1.5em;
}
.header .mid-item .navbar .nav-link {
    cursor: pointer;
    transition: color 0.3s ease;
    position: relative;
}
.header .mid-item .navbar .nav-link:hover {
    color: #fa6338;
}

/* Categories Navbar on Hover */
.categories-bar {
    width: 100%;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    position: absolute;
    top: 60px;
    visibility: hidden;
    opacity: 0;
    transition: visibility 0.3s, opacity 0.3s;
}
.navbar .categories-link:hover .categories-bar {
    visibility: visible;
    opacity: 1;
}
.categories-bar .categories-nav {
    width: 100%;
    display: flex;
    justify-content: space-evenly;
}
.categories-bar .categories-nav .category-link{
    flex: 1;
    padding: 0.5em 1em;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
    color: #000;
    font-size: 15px;
}
.categories-bar .categories-nav .category-link:hover{
    background-color: #efeeee;
}

/* Item */
.item-container{
    width: 90%;
    max-width: 1200px;
    margin: auto;
    margin-top: 7em;
    margin-bottom: 2em;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
.item-container .card{
    width: 200px;
    height: 310px;
    padding: .5em;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px 3px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
}
.item-container .card .card-image{
    /* width: 200px; */
    height: 200px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
}
.item-container .card .card-image .image-item{
    width: 100%;
}
.item-container .card .description-container{
    display: flex;
    justify-content: space-between;
    align-items: end;
    margin-top: 1em;
}
.item-container .card .description-container .item-name{
    font-size: 1rem;
    margin-bottom: .3em;
}
.item-container .card .description-container .item-price{
    font-weight: 500;
    color: #fa6338;
}
.item-container .card .description-container .add-to-cart{
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.item-container .card .description-container .add-to-cart .cart-logo{
    font-size: 20px;
    cursor: pointer;
    transition: all .3s ease-in-out;
}
.item-container .card .description-container .add-to-cart .cart-logo:hover{
    color: #fa6338;
}
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="header">
        <div class="left-item">
            <div class="company-name">
                <a href="" class="a-link">STUART</a>
            </div>
        </div>

        <div class="mid-item">
            <nav class="navbar">
                <li class="nav-link">Home</li>
                <li class="nav-link">About</li>
                <li class="nav-link categories-link">Categories
                    <div class="categories-bar">
                        <nav class="categories-nav">
                            <a class="category-link">All</a>
                            <a class="category-link">Men Clothing</a>
                            <a class="category-link">Women Clothing</a>
                            <a class="category-link">Shoes</a>
                            <a class="category-link">Socks</a>
                            <a class="category-link">Accessories</a>
                        </nav>
                    </div>
                </li>
            </nav>
        </div>

        <div class="right-item">
            <a href="" class="a-link">
                <span class="total-notification">5</span>
                <ion-icon name="person-outline" class="user-icon"></ion-icon>
            </a>
            <a href="" class="a-link">
                <span class="total-notification">5</span>
                <ion-icon name="notifications-outline" class="notification-icon"></ion-icon>
            </a>
        </div>
    </div>

    <!-- Item Container -->
    <div class="item-container">
        <!-- Card structure remains the same as provided. Example below: -->
        <div class="card">
            <div class="card-image">
                <img src="image/shoes3.png" alt="Red Sneaker" class="image-item">
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h1 class="item-name">Red Sneaker</h1>
                    <p class="item-price">&#x20B1;999</p>
                </div>
                <div class="add-to-cart">
                    <ion-icon name="bag-add-outline" class="cart-logo"></ion-icon>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="image/shoes1.png" alt="Red Sneaker" class="image-item">
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h1 class="item-name">Red Sneaker</h1>
                    <p class="item-price">&#x20B1;999</p>
                </div>
                <div class="add-to-cart">
                    <ion-icon name="bag-add-outline" class="cart-logo"></ion-icon>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="image/shoes2.png" alt="Red Sneaker" class="image-item">
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h1 class="item-name">Red Sneaker</h1>
                    <p class="item-price">&#x20B1;999</p>
                </div>
                <div class="add-to-cart">
                    <ion-icon name="bag-add-outline" class="cart-logo"></ion-icon>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="image/heel1.png" alt="Red Sneaker" class="image-item">
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h1 class="item-name">Red Sneaker</h1>
                    <p class="item-price">&#x20B1;999</p>
                </div>
                <div class="add-to-cart">
                    <ion-icon name="bag-add-outline" class="cart-logo"></ion-icon>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="image/shirt1.png" alt="Red Sneaker" class="image-item">
            </div>
            <div class="description-container">
                <div class="item-description">
                    <h1 class="item-name">Red Sneaker</h1>
                    <p class="item-price">&#x20B1;999</p>
                </div>
                <div class="add-to-cart">
                    <ion-icon name="bag-add-outline" class="cart-logo"></ion-icon>
                </div>
            </div>
        </div>
        <!-- Additional cards go here -->
    </div>

</body>
</html>
