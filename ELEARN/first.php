<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        header
{
  width: 99%;
    height: 50px;
    background: white;
    /* padding-top: 10px; */
  padding-left: 10px;
    /* position: fixed; */
    display: flex;
    justify-content: space-between;
}
header img{
  height: 50px;
  width: 50px;
}
header h2{
  font-size: 25px;
  margin-top: 10px;
}
.lo{
  display: flex;
}

nav{
  /* margin-top: 10px; */
  
}

nav ul {
list-style-type: none;
margin: 0;
display: flex;
}

nav ul li {
  display: flex;

margin-right: 10px;
}

nav ul li a {
font-size: 14px;
font-family: system-ui;
color: #000000;
text-decoration: none;
padding-top:16px;
padding-bottom: 16px;
}
nav ul li a:hover{
color: rgb(255, 255, 255);
background: rgb(42, 141, 68);
border-radius: 1px;
padding-top:16px;
padding-left: 5px;
padding-right: 5px;
padding-bottom: 16px;
}
header button{
  width: 93px;
    border-radius: 25px;
    margin-right: 5px;
    margin-bottom: 5px;
    margin-top: 10px;
    position: relative;
    z-index: 5;
    border-color: rgba(245, 245, 220, 0);

}
header button:hover
{
  color: rgb(255, 255, 255);
background: rgb(42, 141, 68);
}
.boo 
{
        background:lightblue;
        border-radius: 0;
        padding-top: 10px;
        border:0;
  margin-bottom: 20px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 5px;
  font-size: 20px;
  width: auto;
  height:auto;
}
.boo h2 
{
 font-size: 20px;
 width: 50px;
 height:auto;
 margin-left: 10px;
  margin-bottom: 10px;
    }
    .boo hr
    {
      margin:0;
      border-color:black;
      border-bottom-width: 0px;
      
    }
    .boo p {
      font-size: 14px;
      color: #888;
      width: 300px;
      height:auto;
      margin-left: 10px;
      margin-bottom: 10px;
    }
    <?php
    $border= "2px solid";
    $borderr= "5px";
    
    ?>
    .boo a
{
  
  width: 20px;
      height:15px;
      padding: 5px;
      font-size: 10px;
      border-radius: 1px;
      margin-left: 280px;
      border: 1px solid black;
      background-color: white;
      color: black;
      cursor: pointer;
}
section {
  display: flex;
    flex-direction: column;
    align-items: center;
 
}
/* div
{
   border: <?php echo $border; ?>;
   border-radius: <?php echo $borderr; ?>;
  
} */

    </style>
</head>
<body>
<header>
    <div class="lo">
    <img src="lo.jpg" class="logo" alt="">
    <h2>XYZ Technology</h2>

  </div>
    <div class="lo">
    <nav>
      <ul>
      <li><a href="quiz.php">Take A Quiz</a></li>
        <li><a href="logout.php">Logout</a></li>
        
      </ul>
    </nav>
  </div>
    
  </header>
    <section>
      <h1>Student Portal</h1>
      <div class="boo">
        <?php
        // Assuming you have established the database connection
        mysql_connect("localhost","root","");
        mysql_select_db("elearn");
        $query1="SELECT * FROM post";
        $result1=mysql_query($query1);
        $book=mysql_num_rows($result1);
        $query="SELECT * FROM post";
            $result=mysql_query($query);
            while($book=mysql_fetch_array($result))
          {
           echo"<div>";
           
           echo"<h2>".$book['name']."</h2><hr>";
           echo"<p>".$book['pub']."</p>";
           
           echo"</div>";
          }
          ?>
          </div>
        
    </section>
</body>
</html>