<link rel="stylesheet" href="<?php echo URLROOT ; ?>/css/styles1.css">
<body class="modify">
<div  class="update">
    
  <form action="<?php echo URLROOT . 'pages/upgrade' ?>" method="post" enctype="multipart/form-data">
  <h1>Update Details</h1>
  <div class="revise">
    <p>ID:</p>
    <input type="text"  name="id"   value="<?php echo $data->id ?>"><br><br>
    <p>First Name:</p>
    <input type="text" name="fname" value="<?php echo $data->fname ?>"><br><br>
    <p>Last Name:</p>
    <input type="text" name="lname" value="<?php echo $data->lname ?>"><br><br>
    <p>Email:</p>
    <input type="email" name="email" value="<?php echo $data->email ?>"><br><br>
    <p>Phone Number:</p>
    <input type="tel"  maxlength="10" minlength="10" name="pnumber"  value="<?php echo $data->pnumber?>"><br><br>
  </div>

  <div class="rework">
    <p>Street:</p>
    <input type="text" name="street"  value="<?php echo $data->street ?>"><br><br>
    <p>City:</p>
    <input type="text" name="city"  value="<?php echo $data->city ?>"><br><br>
    <p>State:</p>
    <input type="text" name="state"  value="<?php echo $data-> state?>"><br><br>
    <p>Country:</p>
    <input type="text" name="country"  value="<?php echo $data->country ?>"><br><br>
     <p>File:</p>
     <input type="file" name="Photo" accept="image/jpg,image/jpeg,image/pneg" value=<img src="<? echo $data->Photo ?>"><br><br>
</div>
<button>Submit</button>
</div>
</form>
</div>
</body>