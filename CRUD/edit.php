<?php
include 'header.php';
include 'config.php';

// gettting id from link 
$id = $_GET['id'];

// query for student data 
$query = "SELECT * FROM `students` WHERE `sid` = '{$id}'";
$result = mysqli_query($conn, $query);

// query for class data 

$class = "SELECT * FROM `class`";
$classResult = mysqli_query($conn, $class);

// update data query

if(isset($_POST['update'])){
    $user = $_POST['hidden'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];

    $updateQuery = "UPDATE `students` SET sname = '{$name}', saddress = '{$address}', sclass = '{$class}', phone = '{$phone}' WHERE sid = '{$user}' ";
    $updateResult = mysqli_query($conn, $updateQuery);
    header("Location: index.php");
}

?>



<div class="container bg-body-tertiary py-3">
    <h2>Update Records</h2>
    <form action="" method="post" class="d-flex justify-content-center flex-column align-items-center">

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {


        ?>
                <input type="hidden" class="form-control" name="hidden" value='<?php echo $row['sid'] ?>'>

                <div class="form-floating mb-3 w-50">
                    <input type="text" class="form-control" name="name" value='<?php echo $row['sname'] ?>' id="floatingInput" placeholder="Your full name" autocomplete="off">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3 w-50">
                    <input type="text" class="form-control" name="address" value='<?php echo $row['saddress'] ?>' id="floatingPassword" placeholder="Your complete address" autocomplete="off">
                    <label for="floatingPassword">Address</label>
                </div>
                <select class="form-select mb-3 w-50" name="class" aria-label="Default select example" required>
                    <option disabled>Class</option>
                    <?php
                    while ($classRow = mysqli_fetch_assoc($classResult)) {
                        // 1 = 1
                        if ($row['sclass'] == $classRow['cid']) {
                            $select = "selected";
                           
                        } else {
                           
                            $select = "";


                        }

                        echo "<option {$select}  value='{$classRow['cid']}'> {$classRow['cname']}</option>"

                    ?>



                    <?php } ?>
                </select>


                <div class="form-floating mb-3 w-50">
                    <input type="tel" class="form-control" name="phone" value='<?php echo $row['phone'] ?>' id="floatingPhone" placeholder="Your phone number" autocomplete="off">
                    <label for="floatingPhone">Phone</label>
                </div>


                <input type="submit" value="Update" name='update' class="btn btn-dark">

        <?php
            }
        }
        ?>
    </form>
</div>


</div>
</body>

</html>