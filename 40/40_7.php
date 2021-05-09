<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url("nidhi.jpg");
  background-size: cover;
  font-family: Arial;
  font-size: 17px;
  padding: 5px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 10%; /* IE10 */
  flex: 10%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color:#009999;

  border: 3px solid grey;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 3px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 10px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color:#003333;
  color: white;
  padding: 12px;
  margin: 10px;
  border: 3px;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color:;
}

a {
  color: #003333;
}

hr {
  border: 1px #003333;
}

span.price {
  float: right;
  color: grey;
}


}
</style>
</head>
<body>


<div class="row">
<div class="col-75">
<div class="container">
      <form action="40_8.php">

          <div class="col-50">
            <h1>Payment......</h1>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="pay">Amount</label>
            <input type="text" id="pay" name="amount" placeholder="Amount">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="name">
            <label for="ccnum">card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Card number">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="EXP month">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="EXP year">
            
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="enter CVV number">
              </div>
            </div>
          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="PAYMANT" class="btn">
      </form>
    </div>
  </div>
  
  </div>

</body>
</html>
