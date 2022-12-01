<!--Creating a submit using php-->
<?php
    include './database.php';
    $weddingObj = new database();
    //Insert
    if (isset($_POST['submit'])){
        $weddingObj->dataInsert($_POST);
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
<!--Getting header using php-->
        <?php
            require './header.php';
        ?>
<!--Creating divs to have my form. One div is for layout size, one is for background color-->
        <div class="formbackground d-flex justify-content-center">
            <div class="form-size opacity-75 bg-dark">
<!--       Main form         -->
                <form action="index.php" method="post" class="form-containers">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="t1" class="form-label text-white fw-bold">First Name</label>
                            <input type="text" class="form-control" id="t1" name="f_name" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="t2" class="form-label text-white fw-bold">Last Name</label>
                            <input type="text" class="form-control" id="t2" name="l_name" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="d1" class="form-label text-white fw-bold">Your Birthdate</label>
                            <input type="date" class="form-control" name="b_date" id="d1" required>
                        </div>

                        <div class="col-6">
                            <label for="r1" class="form-label text-white fw-bold">Birth Place</label>
                            <input type="text" class="form-control" name="b_place" id="r1" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="a1" class="form-label text-white fw-bold">Age</label>
                            <input type="number" class="form-control" name="age" id="a1" required>
                        </div>
                        <div class="col-6">
                            <label for="c3" class="form-label text-white fw-bold">Blood Group</label>
                            <input type="text" class="form-control" name="blood_group" id="c3" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="c1" class="form-label text-white fw-bold">Caste</label>
                            <input type="text" class="form-control" name="caste" id="c1" required>
                        </div>
                        <div class="col-6">
                            <label for="c2" class="form-label text-white fw-bold">Religion</label>
                            <input type="text" class="form-control" name="religion" id="c2" required>
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="e1" class="form-label text-white fw-bold">Education</label>
                            <input type="text" class="form-control" name="education" id="e1" required>
                        </div>
                        <div class="col-6">
                            <label for="e2" class="form-label text-white fw-bold">Occupation</label>
                            <input type="text" class="form-control" name="occupation" id="e2" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="add" class="form-label text-white fw-bold">Address</label>
                            <input type="text" class="form-control col-12" id="add" name="address" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="cont" class="form-label text-white fw-bold">Contact Number</label>
                            <input type="number" class="form-control col-6 " id="cont" name="contact" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="d-flex justify-content-center mt-3">
                            <input type="submit" name="submit" value="UPLOAD" class="btn bg-light col-4 text-dark fw-bold">
                        </div>
                    </div>


                </form>
            </div>
        </div>
<!--    Getting footer using php    -->
    <?php
        require './footer.php';
    ?>
    </body>
</html>
