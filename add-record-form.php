<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
</head>
<body>
<form action="insert.php" method="post">
<p>
    	<label for="id">id:</label>
        <input type="text" name="id" id="id">
    </p>
    <p>
    	<label for="Name">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
    	<label for="Shopname">Shop Name:</label>
        <input type="text" name="shop_name" id="shopName">
    </p>
    <p>
    	<label for="Address">Address:</label>
        <input type="textarea" name="address" id="address">
    </p>
    <p>
    	<label for="Shopname">Aadhar Number:</label>
        <input type="text" name="aadhar_num" id="aadhar">
    </p>
    <p>
    	<label for="Shopname">Phone Number:</label>
        <input type="text" name="phn_number" id="phone">
    </p>
    <p>
    	<label for="zone">zone:</label>
        <select type="text" name="zone_name" id="zone">
    <option value="South-Pollachi">South-Pollachi</option>
    <option value="North-Pollachi">North-Pollachi</option>
    <option value="West-Pollachi">West-Pollachi</option>
    <option value="East-Pollachi">East-Pollachi</option>
  </select>
    </p>
    <p>
    	<label for="userimage">Userimage:</label>
        <input type="file" name="user_img" id="userimg">
    </p>


    <input type="submit" value="Add Records">
</form>
</body>
</html>