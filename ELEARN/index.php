<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
   body
{
    margin: 0;
    font-family: system-ui;
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
.sec1{
  background: black;
  height: 560px;
  width: 100%;
}
.sec4 
      {
        background: rgb(5, 7, 18);
    height: 400px;
    width: 100%;
    color: #ffffff;
    display: flex;
    align-items: center;
    flex-direction: column;
    padding-top: 40px;
      }
      .sec4 h1{
        font-size: 30px;
        padding-bottom: 8px;
        
        border-color: white;
            border-bottom-style: solid;
            border-bottom-width: 3.1px;
            width: fit-content;
      }
      .sec4 a{
        text-decoration-line: blink;
    margin-top: 20px;
    margin-bottom: 20px;
    color: rgb(42, 141, 68);
      }
      .sec4 a:hover{
        color: #c90404;
      }
      form
      {
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column; 
      }
      input
      {
        background-color: rgb(39, 38, 38);
        height: 25px;
    width: 383px;
    margin: 4px;
      }
     .sec4 button
      {
        margin-left: 292px;
    border-width: 0.5px;
    margin-top: 2px;
        border: #ffffff solid;
        background: black;
        width: 90px;
        color: #fff;
        height: 35px;
      }
      button:hover
      {
        background: rgb(42, 141, 68);
      }
      .fa-linkedin {
  background: #3c3b3b;
  color: white;
  font-size: 20px;
}
.fa-facebook {
  background: #3c3b3b;
  color: white;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
  background: rgb(42, 141, 68);
  color: #ffffff;
   
}
.fa-instagram {
  background: #3c3b3b;
  color: white;
}
.fa-github {
  background: #3c3b3b;
  color: white;
}
.lg
{
  display:flex ;
  align-items: center;
  justify-content: center;
  height: 70px;
}
.sec1 {
  background: rgb(255, 255, 255);
    background-size: cover;
    height: 550px;
    width: 100%;
    color: #000000;
    display: flex;
    flex-direction: column;
    
    align-items: center;

      }
      
      .sec1-d {
        width: 700px;
        height: 330px;
        border-radius: 10px;
        background-color: rgb(0, 0, 0);
        text-align: center;
        margin-top: 70px;
      }
      .sec1-dd
      {
        display: flex;
    flex-direction: column;
    align-items: center;
        
      }
      
      .sec1-d h2 {
        
        font-size: 38px;
        margin-bottom: 20px;
        color: #ffffff;
      }
      
      .sec1-d p {
        width: 500px;
        font-size: 10px;
        color: #ffffff;
        margin-bottom: 30px;
      }
      .btn {
        cursor: pointer;
        display: inline-block;
        padding: 10px 20px;
        background-color:rgb(255, 255, 255);
        color: #000000;
        text-decoration: none;
        border-radius: 4px;
        margin: 10px;
      }
      .btn:hover
      {
        background: rgb(42, 141, 68);
        color: rgb(255, 255, 255);
      }
      
.sec3
{
display: flex;
width: 100%;
height: 250px;
background: linear-gradient(135deg,rgb(78, 78, 77),rgb(8, 101, 5));
align-items: center;
justify-content: center;
flex-direction: column;
}
.sec3 h1{
font-size: 30px;
color: #ffffff;
padding-bottom: 30px;
}
.sec3 h4{
font-size: 20px;
font-family: fantasy;
}
.sec3 .fa
{
font-size: 10px;
width: 10px;
height: 10px;

text-align: center;
text-decoration: none;  
}
.fa-rocket
{
padding:5px ;
background: transparent;
color: white;
border:3px solid #fff;
border-radius: 100%;
display: flex;
font-size: 20px;
}
.fa-headphones
{
padding:5px ;
background: transparent;
color: white;
border:3px solid #fff;
border-radius: 100%;
display: flex;
font-size: 20px;
}
.fa-clock-o
{
padding:5px ;
background: transparent;
color: white;
border:3px solid #fff;
border-radius: 100%;
display: flex;
font-size: 20px;
}
.sec3 h4
{
letter-spacing: 0px;
color: #ffffff;
margin-left: 10px;
margin-top: 0;
margin-bottom: 0;
font-size: 15px;
font-family: system-ui;
}
.ser
{
  display: flex;
  flex-direction: row;
}
.sp
{
margin-top: 0;
width: 200px;
margin-left: 35px;
color:white;
font-size: 10px;
}
.c
{
width: 200px;
display: flex;
}
footer
{
  background:rgb(1, 2, 8) ;
  height: 100px;
  padding: 10px;
}
footer p{
  
  display: flex;
  justify-content: center;
  align-items: center;
  font-size:12px;
  color: rgb(171, 66, 66);
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
  </style>
</head>
<body>
  <header>
    <div class="lo">
    <img src="lo.jpg" class="logo" alt="">
    <h2>XYZ Technology</h1>
  </div>
    <div class="lo">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#sec3">Services</a></li>
        <li><a href="#">Exercises</a></li>
       
        <li><a href="#sec4">Contact</a></li>
        
      </ul>
    </nav>
  </div>
    
  </header>
  <section class="sec1" id="sec1">
    <div class="sec1-d">
      <div class="sec1-dd">
      <h2>Discover the Joy of Reading</h2>
      <p>Explore our extensive collection of books and enrich your knowledge. 
        Lorem ipsum dolor, sit amet consectetur  Lorem ipsum dolor sit amet consectet, vero reiciendis ullam nostrum dolor tempore quisquam! Ab exercitationem cum fugit magnam!
      </p></div>
      <a href="regis.php" class="btn">Sign Up</a>
      <a href="log.php" class="btn">Log In</a>
      <br>
      <a href="alo.php" class="btn">Login As Admin</a>
    </div>
    
    <hr>
  </section>
  <section class="sec3" id="sec3">
    <div>
      <h1>Our Services</h1>
    </div>
    <div class="ser">
          <div style="width: 200;">
<div class="c">
<a class="fa fa-rocket"></a><h4>LAUNCH YOUR IDEAS</h4>
</div>
<p class="sp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, aliquid debitis.</p>
</div>
<div style="width: 200;">
<div class="c">
    <a class="fa fa-headphones"></a><h4>ONLINE SUPPORT TEAM</h4>
</div>
<p class="sp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, aliquid debitis.</p>
</div>
<div style="width: 200;">
        <div class="c">
    <a class="fa fa-clock-o"></a><h4>FREE LEARNING</h4>
</div>
<p class="sp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, aliquid debitis.</p>
</div>
</div>

</section>
  <section class="sec4" id="sec4">
    <h1>Contact</h1>
    <a href="#">Have a question or want to work together?</a>
    <form action="">
    <input type="text" placeholder="Name">
    <input type="text" placeholder="Your E-Mail">
    <textarea name="" id="" cols="50" rows="8" placeholder="Your Message..." style="background:rgb(39, 38, 38) ;"></textarea>
    </form>
    <button value="Submit">SUBMIT</button>
    </section>
    <footer>
    <div class="lg">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-github"></a>
    </div>
    
    <p> XYZ COMPANY &copy;2003 </p>
    </footer> 
    </section>  
    </body>
    </html>
</body>
</html>