<?php
    include './database.php';
    $weddingObj = new database();
    if (isset($_GET['editId']) && !empty($_GET['editId'])){
        $editId = $_GET['editId'];
        $wedding = $weddingObj->displayRecordById($editId);
    }
    if (isset($_POST['update'])){
        $weddingObj->updateRecord($_POST);;
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

        <?php
        require './header.php';
        ?>

        <div class="formbackground d-flex justify-content-center">
            <div class="form-size opacity-75 bg-dark">
                <form action="edit.php" method="post" class="form-containers">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="t1" class="form-label text-white fw-bold">First Name</label>
                            <input type="text" class="form-control" id="t1" name="uf_name" value="<?php echo $wedding['f_name']; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="t2" class="form-label text-white fw-bold">Last Name</label>
                            <input type="text" class="form-control" id="t2" name="ul_name" value="<?php echo $wedding['l_name']; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="d1" class="form-label text-white fw-bold">Your Birthdate</label>
                            <input type="date" class="form-control" name="ub_date" value="<?php echo $wedding['b_date']; ?>" id="d1" required>
                        </div>

                        <div class="col-6">
                            <label for="r1" class="form-label text-white fw-bold">Birth Place</label>
                            <input type="text" class="form-control" name="ub_place" value="<?php echo $wedding['b_place']; ?>" id="r1" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="a1" class="form-label text-white fw-bold">Age</label>
                            <input type="number" class="form-control" name="uage" value="<?php echo $wedding['age']; ?>" id="a1" required>
                        </div>
                        <div class="col-6">
                            <label for="c3" class="form-label text-white fw-bold">Blood Group</label>
                            <input type="text" class="form-control" name="ublood_group" <?php echo $wedding['blood_group']; ?> id="c3" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="c1" class="form-label text-white fw-bold">Caste</label>
                            <input type="text" class="form-control" name="ucaste" value="<?php echo $wedding['caste']; ?>" id="c1" required>
                        </div>
                        <div class="col-6">
                            <label for="c2" class="form-label text-white fw-bold">Religion</label>
                            <input type="text" class="form-control" name="ureligion" value="<?php echo $wedding['religion']; ?>" id="c2" required>
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="e1" class="form-label text-white fw-bold">Education</label>
                            <input type="text" class="form-control" name="ueducation" value="<?php echo $wedding['education']; ?>" id="e1" required>
                        </div>
                        <div class="col-6">
                            <label for="e2" class="form-label text-white fw-bold">Occupation</label>
                            <input type="text" class="form-control" name="uoccupation" value="<?php echo $wedding['occupation']; ?>" id="e2" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="add" class="form-label text-white fw-bold">Address</label>
                            <input type="text" class="form-control col-12" id="add" name="uaddress" value="<?php echo $wedding['address']; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="cont" class="form-label text-white fw-bold">Contact Number</label>
                            <input type="number" class="form-control col-6 " id="cont" name="ucontact" value="<?php echo $wedding['contact']; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="d-flex justify-content-center mt-3">
                            <input type="hidden" name="id" value="<?php echo $wedding['id']; ?>">
                            <input type="submit" name="update" value="Update" class="btn btn-primary">
                        </div>
                    </div>


                </form>
            </div>
        </div>
        <?php
        require './footer.php';
        ?>
    </body>
</html>

