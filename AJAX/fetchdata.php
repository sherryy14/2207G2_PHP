<?php 
$conn = mysqli_connect('localhost','root','','sdtData');

$query = "SELECT * FROM `stdtable`";
$res = mysqli_query($conn, $query);

$output ='';

if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_array($res)){
        $output .= "
        <tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['class']}</td>
        <td>{$row['age']}</td>
        </tr>
        ";
    }
}

echo $output;
?>