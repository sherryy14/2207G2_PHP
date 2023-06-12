<?php 

$conn = mysqli_connect('localhost','root','','sdtData');

$filter = $_POST['filter'];

if($filter >=20){
    
$query = "SELECT * FROM `stdtable` WHERE age >= '{$filter}'";
}elseif($filter <20){
    $query = "SELECT * FROM `stdtable` WHERE age < '{$filter}'";
}

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