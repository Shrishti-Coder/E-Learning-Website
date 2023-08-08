<!DOCTYPE html>
<html>
<head>
  <title>User Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      box-sizing: border-box;
      height: 512px;
      padding: 7.5%;
      background: linear-gradient(135deg,rgb(29, 29, 29),rgb(8, 101, 5));
    }    
    .container {
      width: 400px;
      height:auto;
      margin: 0 auto; 
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
     background-color: aliceblue;
    }
    
    .form-group {      
      padding-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .form-group input,
    .form-group input[type="file"],
    .form-group button {
      width: 100%;
      padding: 5px;
      font-size: 16px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
input[type="submit"] {
      background-color: #008539;
    font-size: 15px;
    padding: 8px;
    border-radius: 5px;
    border-color: transparent;
    color: white;
    cursor: pointer;
}
input[type="submit"]:hover {
      background-color: #17d5ea;
    color: rgb(5, 5, 5);
}    
     a
    {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 3px;
      margin-left:130px;
      border: 1px solid black;
      background-color: white;
      color: black;
      cursor: pointer;
    }
     a:hover{
        background: #17d5ea;
        color: rgb(50, 50, 50);
        border-color: transparent;
     }
    .pp
    {
      width: 400px;
      margin: 0 auto;
      margin-top: 10px;
      padding: 20px;
      padding-bottom: 30px ;
      border: 1px solid #ccc;
      border-radius: 10px;
     background-color: aliceblue;     
    }
    h1{
      margin-left:150px;
    }
    .box
    {     
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
     background-color: aliceblue;
      display: flex;
      justify-content: space-evenly;
    }

  </style>

</head>
<body>
  

  
  <div class="pp">

<h1>Log In</h1>
<form action="login.php" method="POST">


  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name ="email"  required>
  </div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" id="password" name="password"required>
</div>

<input type="submit" value="SUBMIT">

</form>

<a href="regis.html">Create new account</a>
</div>
 


 
</body>
</html>
<script>
  
</script>

