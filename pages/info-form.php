<?php
include ('../scripts/register-script.php');

?>

<?php include('../scripts/info-script.php');
include ('../scripts/register-script.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <!-- tailwind  -->


    <title>Document</title>
    <style>
      
        .form-group {
            margin: 0.3rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.3rem;
        }

        .form-control {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: 2px solid #ccc;


        }

        .form-control:focus {
            outline: none;
            border: 2px solid #007bff;
        }

        .formimg {
            padding: 1rem;
        }

        span{
          text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            color: #007bff;
        }

        .btn{
          margin-top: 1rem;
        }
    </style>
</head>

<body>
<?php include('../components/navbar.php'); ?>

    <!-- main container and one box at its middle show 100 in mobile but 1/3 in desktop -->
    <main>
        <div class="container">

            <!-- <img class="formimg" src="../assets/signupimage.svg" alt=""> -->
            
<form action="" method="post">
          <span>Please Fill Your Details Correctly</span>
  <div class="form-group ">
                    <label for="name" class="col-sm col-form-label">Name</label>
                    <div class="">
                      <input type="text" class="form-control border " name="name" id="name" placeholder="Enter name" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="">
                      <input type="tel" class="form-control border " name="phone" id="phone" placeholder="Enter phone number" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="">
                      <input type="text" class="form-control border " name="address" id="address" placeholder="Enter address" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="stream" class="col-sm-2 col-form-label">Stream</label>
                    <div class="">
                      <input type="text" class="form-control border " name="stream" id="stream" placeholder="Enter stream" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="shift" class="col-sm-2 col-form-label">Shift</label>
                    <div class="">
                      <input type="text" class="form-control border " name="shift" id="shift" placeholder="Enter shift" required>
                    </div>
                  </div>
          
                  <div class="form-group ">
                    <label for="year" class="col-sm-2 col-form-label">Year</label>
                    <div class="">
                      <input type="text" class="form-control border " name="year" id="year" placeholder="Enter your admission year" required>
                    </div>
                  </div>
          
                  <button type="submit" class="btn">Submit</button>
          
                </form>
        </div>
    </main>
</body>

</html>