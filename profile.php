<?php

// php code to search data in mysql database and set it in input text

if(isset($_GET['id']))
{
    // id to search
    $id = $_GET['id']; 
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","pollachi");
    
    // mysql search query
    $query = "SELECT `fname`, `sname`, `aname`, `anum`, `pnum`, `zon`, 'imgu' FROM `users` WHERE `id` = $id LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $fname = $row['fname'];
        $sname = $row['sname'];
        $aname = $row['aname'];
        $pnum = $row['pnum'];
        $anum = $row['anum'];
        $zon = $row['zon'];
        $img = $row['imgu'];
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
        $fname = "";
        $sname = "";
        $aname = "";
        $pnum = "";
        $anum = "";
        $zon = "";
        $img = "";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $fname = "";
    $sname = "";
    $aname = "";
    $pnum = "";
    $anum = "";
    $zon = "";
    $img = "";
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="D:/Pollachi/Retaier/govlog.png" type="image/png sizes="16x16">
<style>
.phonelink{
    position: fixed; /* Lock location always on the scree */
    bottom: 0; /* Set to the bottom */
    right: 0; /* Set to the right */
    margin: 30px; /* Add space around background */
}
.phoneicon{
    width: 60px; /* Set width of icon */
    height: 60px; /* Set height of icon */
}
@media screen and (max-width: 480px){
    .lgscreenphone{
        display: none; 
    }
    .mbscreenphone{
        display: block;
    }
}
@media screen and (min-width: 481px){
    .mbscreenphone{
        display: none;
    }
    .lgscreenphone{
        display: block; 
    }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  max-height: 700px;                                                                                
  margin: auto;
  text-align: Left;
  font-family: arial;
}

.title {
  color: black;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.footer {
   position: static;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #f1f1f1;
   color: rgb(7, 0, 0);
   text-align: center;
   z-index: -1;
   padding-bottom: 0px;
  
}
.checkfoo{
    z-index: 0;

}
</style>
</head>
<body>
    <div class="header">
        <a href="#default" class="logo"><img src="govlogm.png" alt="Tamilnadu"/></a>
      </div>
<h2 style="text-align:center">Pollachi Retailer Shop Card</h2>

<div class="card">
  <img src="<?php echo $imgu;?>" alt="John" style="width:100%">
                                                     <center><h1><?php echo $fname;?></h1></center><br>
                                                    <div class="title">&nbsp;&nbsp<strong>Name of the shop : </strong><?php echo $sname;?><br><br>
                                                                       &nbsp;&nbsp<strong>Address : </strong><?php echo $aname;?><br><br>
                                                                       &nbsp;&nbsp<strong>Zone : </strong><?php echo $zon;?><br><br>
                                                                       &nbsp;&nbsp<strong>Aadhar Number : </strong><?php echo $anum;?><br><br>
                                                                       &nbsp;&nbsp<strong>Contact : </strong>+91 <?php echo $pnum;?> </script><br><br><br>
  
</div>
</div><br><br><br><br><br><br><br>
<a class="lgscreenphone phonelink" href="https://www.youtube.com/channel/UCQQ9KdZl80R78hZjb8Q_3NQ"><img class="phoneicon" src="https://freeiconshop.com/wp-content/uploads/edd/phone-flat.png"></a> 
    <a class="mbscreenphone phonelink" href="tel:<?php echo $pnum;?>"><img class="phoneicon" src="https://freeiconshop.com/wp-content/uploads/edd/phone-flat.png"></a>
    <div class="footer">
        <p class="checkfoo"><br>Ⓒ Tamilnadu Government 2020.</p></p>
      </div>
</body>
</html>
 
