<?php 
$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="productsheet.css">
</head>
</head>
<body>
<nav class="navbar navbar-fixed-top">
<div class="na">Lifestyle stores</div>
<?php
                  session_start();
                  if(isset($_SESSION['emaile']))
                {?>
                    <h5 style="color:white;text-align:center;margin-top:1.70%;margin-right:800px;font-family: sans-serif;font-size:18px;
    font-weight: 50;">WELCOME, <?php echo $_SESSION['emaile'];?></h5>

                <?php };
                ?>
<ul id ="menu">
<li><a href="index.php">Home</span></a></li>
<li><a href="cart.php">Cart</span></a></li>
<li><a href="settings.php">Settings</span></a></li>
<li><a href="logout.php">Logout</span></a></li>
</ul>
</nav>   
<div class="container">
   <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                	<form method="post" action="cartvalidation.php">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="1">Add to cart</button></p>
                        </div></form>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                	<form method="post" action="cartvalidation.php">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon EOS </h3>
                            <p>Price: Rs. 40,000.00 </p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="2">Add to cart</button></p>
                        </div>
                    </div></form>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <form method="post" action="cartvalidation.php">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="3">Add to cart</button></p>
                        </div>
                    </div></form>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <form method="post" action="cartvalidation.php">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="4">Add to cart</button></p>
                        </div>
                    </div>
                </div></form>
            </div>

            <div class="row text-center" id="watches">
                <form method="post" action="cartvalidation.php">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price: Rs. 13000.00 </p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="5">Add to cart</button></p>
                        </div>
                    </div></form>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <form method="post" action="cartvalidation.php">
                    <div class="thumbnail">
                        <img src="img/6.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="6">Add to cart</button></p>
                        </div>
                    </div></form>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <form method="post" action="cartvalidation.php">
                    <div class="thumbnail">
                        <img src="img/7.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00 </p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="7">Add to cart</button></p>
                        </div>
                    </div></form>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <form method="post" action="cartvalidation.php">
                    <div class="thumbnail">
                        <img src="img/8.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111 </h3>
                            <p>Price: Rs. 18000.00 </p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="8">Add to cart</button></p>
                        </div>
                    </div></form>
                </div>

            <div class="row text-center" id="shirts">
                <form method="post" action="cartvalidation.php">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/9.jpg" alt="">
                        <div class="caption">
                            <h3>H&W </h3>
                            <p>Price: Rs. 800.00 </p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="9">Add to cart</button></p>
                        </div>
                    </div></form>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <form method="post" action="cartvalidation.php">
                    <div class="thumbnail">
                        <img src="img/10.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00</p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="10">Add to cart</button></p>
                        </div>
                    </div></form>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <form method="post" action="cartvalidation.php">
                    <div class="thumbnail">
                        <img src="img/11.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="11">Add to cart</button></p>
                        </div>
                    </div></form>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <form method="post" action="cartvalidation.php">
                    <div class="thumbnail">
                        <img src="img/12.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price Rs. 1300.00</p>
                            <p><button type="submit" class="btn btn-primary" name="cart" value="12">Add to cart</button></p>
                        </div>
                    </div>
                </form></div>
            <hr>
        
</div>
 
</body>
</html>
