<?php
include('../scripts/connection.php');

 session_start();

// Step 1: Process form and redirect
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    
    if (isset($_POST['message'])) {
      $message = $_POST['message'];
      $post_time = date("Y-m-d H:i:s");

        $user_name = $_SESSION['name'];
    

    
    
      $sql = "INSERT INTO posts (`message`, `post_time`, `user_name`)
       VALUES ('$message', '$post_time', '$user_name')";
      $result = mysqli_query($conn, $sql);
    
    
      if ($result) {
        echo '<script>alert("The record was inserted successfully")</script>';
      } else {
        echo "Error inserting record: " . mysqli_error($conn);
      }
    }
    mysqli_close($conn);
    header('Location: ./mobile.php', true, 303);
    exit;
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Social</title>
</head>

<body>



    <!-- three navbar button -->
    <!-- align them at bottom of screen -->
    <div class="navbar">
        <a href="#home"><i class="fa fa-fw fa-home"></i> </a>
        <a href="#profile"><i class="fa fa-fw fa-user"></i> </a>
        <a href="#notification"><i class="fa fa-fw fa-bell"></i> </a>

    </div>

    <!-- main content -->
    <section>
        <div id="home">
        <form action="" method="post">
          <!-- <input id="titleofnotice" type="text" placeholder="Enter Title" class="fg" name="title"> -->
          <textarea draggable="false" name="message" class="fg" id="message" required cols="50" rows="3" placeholder="What is in your mind?"></textarea>
          <input id="submit" type="submit" value="submit" class="fg">
        </form>
         <?php include('../components/posts.php'); ?>
        </div>
        <div id="profile">
        <img src="../assets/construct.webp" alt="" srcset="">
        <div class="profile-info">
            <h3><?php echo $_SESSION['name']; ?> </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, quibusdam.</p>
<div class="profiletable">
<?php include ('../components/cprofile.php'); ?>

</div>

        </div>
        </div>
        <div id="notification">

        <img src="https://i0.wp.com/www.adva.ie/wp-content/uploads/2020/07/CONSTRUCTION-SITE-KEEP-OUT.jpg" alt="" srcset="">
            </p>
        </div>
    </section>
</body>

</html>