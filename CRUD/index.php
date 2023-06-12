<?php 
include 'header.php';
include 'config.php';

$query = "SELECT * FROM `students` inner join `class` on `sclass` = `cid` ";
$result = mysqli_query($conn, $query);

?>

        <table class="table text-center table-stripted">
            <thead class="bg-dark text-white table-active">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Class</td>
                    <td>Phone</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody >
                <?php 
                    if(mysqli_num_rows($result) > 0){
   
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td> <?php echo $row['sid']?> </td>
                    <td><?php echo $row['sname']?></td>
                    <td><?php echo $row['saddress']?></td>
                    <td><?php echo $row['cname']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['sid']?>" class="btn btn-warning text-white">Edit</a>
                        <a href="" class="btn btn-danger text-white">Delete</a>
                    </td>
                </tr>

                <?php } }else{
                    echo "<script>alert('Data doesnt exist')</script>";
                }
                
                ?>
                
             
            </tbody>
        </table>

        
    </div>
</body>
</html>