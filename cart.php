
<?php 
    include 'header.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Cart</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    
<div class="small-container cart-page">

    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Sub Total</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="image3/plaster1.jpg" alt="">
                    <div>
                        <p>Cavaliers SweatShirt by Nike</p>
                        <small>Rs.3695</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.3695</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="image3/plaster2.jpg" alt="">
                    <div>
                        <p>Harmon kardon Headphones</p>
                        <small>Rs.14990</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.14990</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="image3/axe oil.jpg" alt="">
                    <div>
                        <p>Fossil Smart Watch</p>
                        <small>Rs.14296</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.14296</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="image3/eyedrop1.jpg" alt="">
                    <div>
                        <p>Access Her Necklace</p>
                        <small>Rs.39500</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.39500</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="image3/samahan.jpg" alt="">
                    <div>
                        <p>The Light Lamp</p>
                        <small>Rs.21360</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.21360</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="image3/s_spirit.jpg" alt="">
                    <div>
                        <p>Steve Madden Heels</p>
                        <small>Rs.8999</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td> <input type="number" value="1"></td>
            <td>Rs.8999</td>
        </tr>
    </table>

<div class="total-price">
    <table>
        <tr>
            <td>Sub Total</td>
            <td>Rs.102840</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>Rs.5713.34</td>
        </tr>
        <tr>
            <td>Grand Total</td>
            <td>Rs.108553.34</td>
        </tr>
    </table>
</div>

</div>


   


</body>

</html>

<?php 
    include 'footer.php';
 ?>