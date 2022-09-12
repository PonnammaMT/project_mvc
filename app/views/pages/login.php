

<link rel="stylesheet" href="<?php echo URLROOT ; ?>/css/styles1.css">
<body class="section3">
<div class="container">
  <h1 class="admin-login">Admin Login</h1>
  <form action="<?php echo URLROOT . 'pages/adminLogin' ?>" method="post">
    <div class="submit">
      <h3>Name:</h3> 
        <input type="text" name="name" required>
      <h3>Password:</h3>
        <input type="password" name="password" required><br><br>
        
      <button type="submit" class="sub">Login</button>
   </div>
  </form>
  </div>
</body>