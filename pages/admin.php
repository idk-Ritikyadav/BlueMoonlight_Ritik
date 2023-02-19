<?php
include('../scripts/connection.php');
$sql = "SELECT * FROM userdetails";
$result = mysqli_query($conn, $sql);
$total_user = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <!-- font awasome   -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

    <style>
        .sidebar {
            margin-top: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            height: auto;
            width: 100%;
            background-color: #5789;
            font-size: 1.5rem;
            font-weight: 600;
            padding: 1rem;
            border-radius: 1rem;
        }

        .sidebar a {
            text-align: center;
            background-color: #007bff;
            margin: 1rem;
            color: white;
            border-radius: 0.3rem;
            width: 90%;
        }

        .fa-trash-alt {
            color: red;
            font-size: 1.3rem;
        }

        .fa-edit {
            color: green;
            font-size: 1.3rem;
        }

        .alpha {
            background-color: aquamarine;
        }
    </style>
    <title>Ritik</title>
</head>

<body>


    <section>

        <div class="alpha common">
            <h1>
                Admin Panel
            </h1>


            <hr>

            <div class="sidebar">
                <a href="#dashboard">Dashboard</a>
                <a href="../pages/register.php">Add new User</a>
                <a href="#view">Show Users Data</a>
                <a href="../scripts/logout.php">Logout</a>

                <img src="../assets/okk.jpg" alt="" srcset="" style="border-radius:1rem;">
            </div>
        </div>
        <div class="beta common">


            <div class="dashboard " id="dashboard">
                <h1 style="margin-bottom: 3rem; margin-top: 2rem;">
                    Dashboard
                </h1>
                <div class="card">

                    <div class="card1 cards">
                        <h2>
                            Total Users
                        </h2>
                        <p>
                            <?php echo $total_user; ?>
                        </p>
                    </div>
                    <div class="card2 cards">
                        <h2>
                            Blocked Users
                        </h2>
                        <p>
                        🏗️
                        </p>
                    </div>
                    <div class="card3 cards">
                        <h2>
                            Total Traffics
                        </h2>
                        <p>
                            <?php echo $new_count; ?>🏗️
                        </p>
                    </div>
                    <div class="card4 cards">
                        <h2>Server Status</h2>
                        <p>
                        🏗️
                        </p>
                    </div>
                </div>

                <div class="dash">

                    <div class="sendnotice">
                        <h3>
                            Send Notice🏗️
                        </h3>
                        <form action="">
                            <input id="titleofnotice" type="text" placeholder="Enter Title" class="fg">
                            <textarea draggable="false" name="" class="fg" id="message" cols="30" rows="4" placeholder="Enter Notice"></textarea>
                            <input id="submit" type="submit" value="Send" class="fg">
                    </div>
                    <div class="sendnotice">
                        <h3>
                            Post on Feeds🏗️
                        </h3>
                        <form action="">
                            <input id="titleofnotice" type="text" placeholder="Enter Title" class="fg">
                            <textarea draggable="false" name="" class="fg" id="message" cols="30" rows="4" placeholder="What is in your mind?"></textarea>
                            <input id="submit" type="submit" value="Send" class="fg">
                    </div>
                </div>
            </div>





            <div id="view">
                <h1 style="margin-bottom: 5rem;  margin-top: 2rem;">
                    View Users Data
                </h1>


                <div class="dash" style="overflow:scroll;">

                    <div class="">
                        <table>
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Stream</th>
                                    <th>Shift</th>
                                    <th>Phone</th>
                                    <th>Year</th>
                                    <th>Address</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <?php


                            // Fetch the data from the users table
                            $sql = "SELECT * FROM userdetails";
                            $result = mysqli_query($conn, $sql);
                            $total_user = mysqli_num_rows($result);
                            if (
                                mysqli_num_rows($result) >
                                0
                            ) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "
                <tr>
                  ";
                                    echo "
                  <td>" . $row["username"] . "</td>
                  ";
                                    echo "
                  <td>" . $row["name"] . "</td>
                  ";
                                    echo "
                  <td>" . $row["stream"] . "</td>
                  ";
                                    echo "
                  <td>" . $row["shift"] . "</td>
                  ";
                                    echo "
                  <td>" . $row["phone"] . "</td>
                  ";
                                    echo "
                  <td>" . $row["year"] . "</td>
                  ";
                                    echo "
                  <td>" . $row["address"] . "</td>
                  ";
                                    echo "
                  <td>
          
                    <a href='modify.php?id=" . $row["id"] . "'><i class='fas fa-edit'></i></a>
                  </td>
          
                  <td>
                    <a href='../scripts/delete-script.php?id=" . $row["id"] . "'><i class='fas fa-trash-alt'></i></a>
                  </td>
          
                  ";
                                    echo " 
                </tr>
               
                ";
                                }
                            } else {
                                echo "<tr><td colspan='9'>No records found</td></tr>";
                            }
                            mysqli_close($conn); ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>