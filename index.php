<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Pizza Order Form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<section class="navbar-custom">
        <nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
            <a class="navbar-brand navbar-custom" href="#">PizzaShop.ca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse avbar-custom" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar-custom">
                <a class="nav-link active " style="color: antiquewhite;" aria-current="page" href="#">Home</a>
                <a class="nav-link navbar-custom" href="#">orders</a>
                <a class="nav-link navbar-custom" href="#">New Pricing</a>
                <a class="nav-link navbar-custom" href="#">About us</a>
                <a class="nav-link navbar-custom" href="#">Contact us</a>
                
            </div>
            </div>
        </div>
        </nav>
</section>
<div class="container">
    <h1 id="h1tag">Pizza Order Form</h1>

            <form action="order.php" method="post">

                <div class="cus">
                    <input type="text" name="fname" placeholder="First name" class="input">
                    <input type="text" name="lname" placeholder="Last name"  class="input"><br>
                    <div class="line">
                        <input type="email" name="email" placeholder="email" class="input"><br>

                    </div>
                    <div class="line">
                        <input type="text" name="address1" placeholder="Address line 1" class="input"><br>

                    </div>
                    <div class="line">
                        <input type="text" name="address2" placeholder="Address line 2" class="input"><br>

                    </div >
                    <div class="line">
                        <input type="text" name="pcode" placeholder="Postalcode" class="input">

                    </div>
                </div>


                <div class="form">
                    <label for="pizza_type">Select Pizza Type:</label>
                <select name="pizza_type" id="pizza_type">
                    <option value="pepperoni">Pepperoni</option>
                    <option value="margherita">Margherita</option>
                    <option value="vegetarian">Vegetarian</option>
                </select>
                <br>
                <label for="pizza_size">Select Size:</label>
                <input type="radio" name="pizza_size" value="small" id="small"> <label for="small">Small</label><br>
                <input type="radio" name="pizza_size" value="medium" id="medium"> <label for="medium">Medium</label><br>
                <input type="radio" name="pizza_size" value="large" id="large"> <label for="large">Large</label><br>
                <label for="toppings"> Layer one Toppings</label><br>
                <select name="toppingone" id="toppings">
                    <option value="cheese">Extra Cheese</option>
                    <option value="mushrooms">Mushrooms</option>
                    <option value="peppers">Bell Peppers</option>
                    <option value="onions">Onions</option>
                </select><br>
                <label for="toppings"> Layer two Toppings</label><br>
                <select name="toppingone" id="toppings">
                    <option value="cheese">Mushrooms</option>
                    <option value="mushrooms">cheese</option>j
                    <option value="peppers">Bell Peppers</option>
                    <option value="onions">Onions</option>
                </select>
                
                <br>
                <label for="payment_type">Payment type</label><br>
                <input type="radio" name="payment_type" value="Debit" id="debit"> <label for="debit">Debit</label><br>
                <input type="radio" name="payment_type" value="Credit" id="credit"> <label for="credit">Credit</label><br>
                <input type="radio" name="payment_type" value="Interac" id="interac"> <label for="interac">Interac</label><br>
                <input class="button" type="submit" value="Continue"><br>
                </div>
            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


