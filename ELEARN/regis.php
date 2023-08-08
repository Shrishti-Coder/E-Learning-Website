<!DOCTYPE html>
<html>
<head>
  <title>User Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      box-sizing: border-box;
      padding: 2.4%;
      background: linear-gradient(135deg,rgb(25, 25, 25),rgb(8, 101, 5));
    }
    
    .container {
      width: 400px;
      height: 420px;
      margin: 0 auto; 
      padding: 20px;
      padding-top:0px;
      padding-bottom: 40px;
      border: 1px solid #ccc;
      border-radius: 10px;
     background-color: aliceblue;
    }
    input[type="submit"]:hover {
      background-color: #17d5ea;
    color: rgb(5, 5, 5);
    
}
    a:hover{
        background: #17d5ea;
        color: rgb(65, 65, 65);
        border-color: transparent;
     }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .form-group input,
    .form-group input[type="file"]
     {
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
     
    
    a
    {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 3px;
      margin-left:100px;
      margin-bottom: 20px;
      border: 1px solid black;
      background-color: white;
      color: black;
      cursor: pointer;
    }
    h1
    {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      /* padding-bottom: 25px; */
      padding-left: 140px 

    }
    form
    {
      padding-bottom:20px ;
    }
  
  </style>

</head>
<body>
  

  <div   class="container">

    <h1>Register</h1>

    <form action="connect.php" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name ="name" id="name" required>
    </div>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" name="email"  required>
    </div>
   
    <div class="form-group">
      <label for="contact">Contact No:</label>
      <input type="number" name="contact"  required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password"required>
    </div>
    
  <input type="submit" value="SUBMIT">
  

    </form>

 
  <a href="log.php">Already have an account?</a>
  
  </div>

  


 
</body>
</html>
<script>
  
</script>
