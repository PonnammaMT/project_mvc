<link rel="stylesheet" href="<?php echo URLROOT ; ?>/css/styles1.css">
<body class="data1">
<form action="<?php echo URLROOT . 'pages/display' ?>" method="post" enctype="multipart/form-data">
 <div class="container3">
     <h3>WELCOME TO EMPLOYEE DETAILS:</h3>
      <input type="text" name="id" placeholder="Enter your ID"><br><br>
      <input type="text" name="fname" placeholder="Enter your First Name "><br><br>
      <input type="text" name="lname" placeholder="Enter your Last Name"><br><br>
	  <input type="email" name="email" placeholder="Enter your Email"><br><br>
      <input type="number" name="pnumber"placeholder="Enter your Phone Number" ><br><br>
      <input type="text" name="street" placeholder="Enter your Street"><br><br>
      <input type="text" name="city" placeholder="Enter your City" ><br><br>
      <input type="text" name="state" placeholder="Enter your State"><br><br>
      <input type="text" name="country" placeholder="Enter your Country"><br><br>
      <input type="file" name="Photo"  placeholder="choose a file" class="file"><br><br>
     <button type="submit" name="save" class="btn">Submit</button>
</div> 
</form>
</div>
    


