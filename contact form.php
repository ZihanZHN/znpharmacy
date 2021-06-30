
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  


<center>
  <h2>Contact form</h2>
<form method="post" enctype="multipart/form-data" action="action.php">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Telephone Number: <input type="tel" value="+94 " name="phone" >
  <br><br>
  Address: <textarea name="address" rows="5" cols="40"></textarea>
  
  <br><br>
    <label for="District">District</label>
    <select id="District" name="District">
      <option value="Colombo">Colombo</option>
      <option value="Kalutara">Kalutara</option>
      <option value="Gampaha">Gampaha</option>
    </select>
  
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
   Upload priscription Image: <input type="file" name="file" />
    <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  
</form>

</center>



</body>
</html>
