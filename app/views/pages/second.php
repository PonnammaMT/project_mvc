<link rel="stylesheet" href="<?php echo URLROOT ; ?>/css/styles1.css">
<?php
if(isset($data['error']))
{
   print_r($data['error']);
}
?>
   <table > 
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
      </div>
      <?php
      
       foreach ($data['posts'] as $post): ?>
    
    <tr>
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
        <img src=" <?= '../public/img/'.$post->Photo ?>" width="80px" height="80px"> 
        </td>
        <?php endforeach ?>
      </table>