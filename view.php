<?php
    //Inserting the database file here
    include './database.php';
    $weddingObj = new database();
    //Adding delete function
    if (isset($_GET['deletedID']) && !empty($_GET['deletedID'])){
        echo 'delete works';
        $deletedID = $_GET['deletedID'];
        $weddingObj->deleteRecord($deletedID);
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shaddi.com</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="./css/style1.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f12V8Qbsw3" crossorigin="anonymous"></script>
<!--  Adding header using php  -->
        <?php
        require './header.php';
        ?>

        <main class="container">
            <!--     Adding php to get the action done message       -->
            <?php
                if (isset($_GET['msg1']) == "insert"){
                    echo "<div class='alert alert-success alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>X</button>
                             Your record was added.
                          </div>";
                }
                if (isset($_GET['msg2']) == "update"){
                    echo "<div class='alert alert-success alert-dismissible'>
                             <button type='button' class='close' data-dismiss='alert'>X</button>
                             Your record was updated.
                          </div>";
                }
                if (isset($_GET['msg3']) == "delete"){
                    echo "<div class='alert alert-success alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>X</button>
                            Your record was deleted.
                          </div>";
                }
            ?>
            <section>
                <h1 class="d-flex justify-content-evenly">
                    View Records
                    <a href="./index.php"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
                </h1>
        <!--      Creating table for data representation          -->
                <table class="table table-hover table-dark table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>F_Name</th>
                            <th>L_Name</th>
                            <th>Birth_Date</th>
                            <th>Birth_Place</th>
                            <th>Age</th>
                            <th>Blood_group</th>
                            <th>Caste</th>
                            <th>Religion</th>
                            <th>Education</th>
                            <th>Occupation</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                    </thead>
<!--        Fetching data using php and displaying it in table            -->
                    <tbody>
                        <?php
                            $weddings = $weddingObj->displayData();
                            foreach ($weddings as $wedding){
                                ?>
                                <tr>
                                    <td><?php echo $wedding['id']; ?></td>
                                    <td><?php echo $wedding['f_name']; ?></td>
                                    <td><?php echo $wedding['l_name']; ?></td>
                                    <td><?php echo $wedding['b_date']; ?></td>
                                    <td><?php echo $wedding['b_place']; ?></td>
                                    <td><?php echo $wedding['age']; ?></td>
                                    <td><?php echo $wedding['blood_group']; ?></td>
                                    <td><?php echo $wedding['caste']; ?></td>
                                    <td><?php echo $wedding['religion']; ?></td>
                                    <td><?php echo $wedding['education']; ?></td>
                                    <td><?php echo $wedding['occupation']; ?></td>
                                    <td><?php echo $wedding['address']; ?></td>
                                    <td><?php echo $wedding['contact']; ?></td>
                                    <td>
                                        <button class="btn btn-primary m-2">
                                            <a href="./edit.php?editId=<?php echo $wedding['id']; ?>">
                                                <i class="fa-solid fa-pencil text-white"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-primary m-2">
                                            <a href="./view.php?deleteId=<?php echo $wedding['id']; ?>">
                                                <i class="fa fa-trash text-white"></i>
                                            </a>
                                        </button>
                                    </td>
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </section>
        </main>
<!--  Getting footer using php  -->
        <?php
        require './footer.php';
        ?>
    </body>
</html>