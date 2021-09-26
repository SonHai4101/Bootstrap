<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/order.css">
</head>

<body>
    <div class="container-fuild">
        <div class="row clear">
            <div class="col-md-6 clear">
                <div class="logo">
                    <img src="images/logo.png" alt="">
                </div>
            </div>
            <div class="col-md-6 clear">
                <div class="info">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid mynav">
                            <a class="navbar-brand" href="http://localhost/project02/index.php">Home</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/project02/categories.php">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/project02/food-menu.php">Foods</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="cotainer-fuild">
        <div class="row clear">
            <div class="col clear">
                <div class="main-head">
                    <div class="container">
                        <h3>Fill this form to confirm your order.</h3>
                        <fieldset>
                            <legend>Selected Food</legend>
                            <img src="images/menu-pizza.jpg" class="img-fluid " alt="">
                            <div class="text-order">
                                <h5>Food Title</h5>
                                <p>$2.3<br><span style="font-weight: bold;">Quantity</span></p>
                                <input type="number" id="quantity" name="quantity" min="1" max="">
                            </div>
                        </fieldset>
                    </div>
                    <div class="container">
                        <form action="#">
                            <fieldset id="space-fix">
                                <legend>Delivery Details</legend>
                                <div class="form-content">
                                    <label for="FullName">Full Name</label><br>
                                    <input type="text" id="FullName" placeholder="Enter your full name"><br>
                                    <label for="PhoneNumber">Phone Number</label><br>
                                    <input type="text" id="PhoneNumber" placeholder="Enter your phone number"><br>
                                    <label for="Email">Email</label><br>
                                    <input type="text" id="Email" placeholder="Enter your email"><br>
                                    <label for="Address">Address</label><br>
                                    <textarea name="form-control" id="Address" cols="45" rows="3" placeholder="Enter your address"></textarea><br>
                                    <button type="button" class="btn btn-primary" id="btn-order">Confirm Order</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fuild">
        <div class="row clear">
            <div class="col clear">
                <div class="footer" style="height: 130px">
                    <div class="icons">
                        <a href=""><img src="images/facebook_icon.jpg" alt=""></a>
                        <a href=""><img src="images/instagram_icon.jpg" alt=""></a>
                        <a href=""><img src="images/twitter_icon.jpg" alt=""></a>
                    </div>
                    <div>
                        <p>All rights reserved. Designed By <span style="color: #f56b92;">CSE.TLU</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>