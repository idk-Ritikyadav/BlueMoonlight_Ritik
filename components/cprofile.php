
<?php
if(!isset($_SESSION['username'])){
  header('location: ../home/signin.php');
}
?>

 <div>

<link rel="stylesheet" href="style.css">
 <!-- bootstarp -->

 <table class="table table-bordered">
   <tbody>


     <td><strong>Name:</strong></td>
     <td><?php echo $_SESSION['name']; ?></td>
     </tr>
     <tr>
       <td><strong>Username:</strong></td>
       <td><?php echo $_SESSION['username']; ?></td>
     </tr>
     <tr>
       <td><strong>Address:</strong></td>
       <td><?php echo $_SESSION['address']; ?></td>
     </tr>
     <tr>
       <td><strong>Shift:</strong></td>
       <td><?php echo $_SESSION['shift']; ?></td>
     </tr>
     <tr>
       <td><strong>Stream:</strong></td>
       <td><?php echo $_SESSION['stream']; ?></td>
     </tr>
     <tr>
       <td><strong>Phone Number:</strong></td>
       <td><?php echo $_SESSION['phone']; ?></td>
     </tr>
     <tr>
       <td><strong>Year:</strong></td>
       <td><?php echo $_SESSION['year']; ?></td>
     </tr>
   </tbody>
 </table>

 <a href="../pages/edit.php?username=<?php echo $_SESSION['username']; ?>" class="btn"> Edit</a>
 <a href="../scripts/logout.php" class="btn">Logout</a>


</div>
