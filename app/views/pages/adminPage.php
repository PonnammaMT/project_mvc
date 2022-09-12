<link rel="stylesheet" href="<?php echo URLROOT ; ?>/css/styles1.css">
<div class="navbar">
        <div class="search">
            <form action="<?php echo URLROOT . 'pages/search' ?>" method="post">
                <input type="search" placeholder="Search" name="search" class="btn4">
                <button class="btn5"> Search </button>
            </form> <br>
        </div> 

 
        <div class="btn1"> 
           <form action="<?php echo URLROOT . 'pages/log' ?>" method="post">
               <button type="submit" name="save"  class="log-btn">logout</button> 
           </form>
        </div>
 
        <div class="btn2">    
             <form action="<?php echo URLROOT . 'pages/edit' ?>" method="post">
                <button type="submit" name="save" class="insert-btn" >Insert</button>
             </form>
        </div>

        <div class="btn3">    
              <form action="<?php echo URLROOT . 'pages/visibility' ?>" method="post" >
                    <button type="submit" name="save" class="view-btn" >view</button>
              </form>
        </div>
</div>

<div class="section1">
   <table  cellspacing="20%" class="table"> 
      <th>empid</th>
      <th>emp_fname</th>
      <th>emp_lname</th>
      <th>emp_Email</th>
      <th>emp_phone</th>
      <th>emp_street</th>
      <th>emp_city</th>
      <th>emp_state</th>
      <th>emp_country</th>
      <th>Photo</th>
      <th>Action</th> 
      
      
      <?php
      foreach ($data['post'] as $post): ?>
    
    <tr class="table1">
        <td><?= $post->id ?></p></td>
        <td><?= $post->fname ?></td>
        <td><?= $post->lname ?></td>  
        <td><?= $post->email ?> </td>
        <td><?= $post->pnumber ?> </td>
        <td><?= $post->street ?> </td>
        <td><?= $post->city ?> </td>
        <td><?= $post->state ?> </td>
        <td><?= $post->country ?> </td>
        
        <td>
        <img src=" <?= $post->Photo ?>" width="80px" height="80px"> 
        </td>
        
        <td> 
          <a href="http://localhost/mvc/pages/delete/<?php echo $post->id;?>">Delete</a>
          <a href="http://localhost/mvc/pages/reword/<?php echo $post->id;?>">Edit</a>
        </td>
    </tr>
      
    <?php endforeach ?>
      
    </table>
  </div>
  
    
<button onclick="exportReportToExcel(this)">EXPORT</button>
<script>
    function exportReportToExcel() {
       let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
       TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
          name: `export.xlsx`, // fileName you could use any name
          sheet: {
             name: 'Sheet 1' // sheetName
    }
  });
 
}
</script>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
 
 
 
 
 
 
 
 
 
 



     


 



