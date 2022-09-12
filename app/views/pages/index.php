<?php require APPROOT . '/views/inc/header.php'; ?>
  <!-- <h1><?php echo $data['title']; ?></h1> -->
  <link rel="stylesheet" href="<?php echo URLROOT ; ?>/css/styles1.css">
<body class="index">
 <div class="section">
      <h2>Users</h2>
    <div class="buttons">
      <form  action="<?php echo URLROOT . 'pages/admin' ?>" method="post">
               <button type="submit" name="admin" class="btn">Admin</button>
      </form><br><br>
   
      <form  action="<?php echo URLROOT . 'pages/guest' ?>" method="post">
         <button type="submit" name="guest" class="admin">Guest</button>
      </form> 
</div>
  </div>
</body>

 
<?php require APPROOT . '/views/inc/footer.php'; ?>
