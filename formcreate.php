<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
   font-family: Arial;
   font-size: 17px;
   padding: 8px;
}
* {
   box-sizing: border-box;
}
.Fields {
   display: flex;
   flex-wrap: wrap;
   padding: 20px;
   justify-content: space-around;
}
.Fields div {
   margin-right: 10px;
}
label {
   margin: 15px;
}
.formContainer {
   margin: 10px;
   background-color: #efffc9;
   padding: 5px 20px 15px 20px;
   border: 1px solid rgb(191, 246, 250);
   border-radius: 3px;
}
input[type="text"] {
   display: inline-block;
   width: 100%;
   margin-bottom: 20px;
   padding: 12px;
   border: 1px solid #ccc;
   border-radius: 3px;
}
label {
   margin-left: 20px;
   display: block;
}
.icon-formContainer {
   margin-bottom: 20px;
   padding: 7px 0;
   font-size: 24px;
}
.checkout {
   background-color: #4caf50;
   color: white;
   padding: 12px;
   margin: 10px 0;
   border: none;
   width: 100%;
   border-radius: 3px;
   cursor: pointer;
   font-size: 17px;
}
.checkout:hover {
   background-color: #45a049;
}
a {
   color: black;
}
span.price {
   float: right;
   color: grey;
}
@media (max-width: 657px) {
   .Fields {
      flex-direction: column-reverse;
   }
}
</style>
</head>

<!--body-->
<body>
 
    <h1 style="text-align: center;">Responsive Form Example</h1>
<div class="Fields">
<div>
<div class="formContainer">
<form>
<div class="Fields">
<div>
<h3>Register</h3>
<label for="fname">FirstName</label>
<input type="text" id="fname" name="firstname" />
<label for="email"> Email</label>
<input type="email" class="form-group" class="form-control"id="sname" name="email" />
<label for="adr"> Address</label>
<input type="text" id="adr" name="address" />
</div>
<div>
<h3>Account Details</h3>
<label for="lastname">lastname</label>
<input type="text"  class="form-control" id="lastn" name="lastname" />
<label for="pass">Password</label>
<input type="text"  class="form-control" id="pass" name="cardnumber" />
<div class="Fields">
<div>
<label for="accountAge">Account Age</label>
<input type="text" id="accountAge" name="accountAge" />
</div>
<div>
<label for="cvv">Security Question</label>
<input type="text" id="cvv" name="cvv" />
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>