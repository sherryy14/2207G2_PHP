<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">Student Data</h1>

    <div class="container">
        <form id="form">
            <input type="text" class="form-control w-50" placeholder="Enter Name" id="name">
            <input type="text" placeholder="Enter Class" class="form-control w-50"id="class">
            <input type="text" placeholder="Enter Age" class="form-control w-50"id="age">
            <button id="btn" class='btn btn-primary'>Submit</button>
        </form>
    </div>

    <div class="container my-5">
        <select name="" id="filter" class='form-control w-25'>
            <option selected disabled>Select age...</option>
            <option value="20">20 Or Above</option>
            <option value="19">Less than 20</option>
        </select>
    </div>


    <table class="table table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody id='tdata'>
        
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            function render(){
                $.ajax({
                    url: "fetchdata.php",
                    type: "POST",
                    success :function(data){
                        $("#tdata").html(data)
                    }
                })
            }
            render();
            $("#btn").click(function(e) {
                e.preventDefault();

                let stdname = $('#name').val();
                let stdclass = $('#class').val();
                let stdage = $('#age').val();

               if(stdname !=='' && stdclass !=='' && stdage !==''){
                $.ajax({
                    url : "senddata.php",
                    type: "POST",
                    data: {sName: stdname, sClass: stdclass, sAge: stdage}
                   
                })
                // $('#name').val('');
                // $('#class').val('');
                $("#form").trigger('reset');
                // $("#form")[0].get();
                render();
               }else{
                alert("Insert data")
               }


            })

            $("#filter").change(function(){
                let filterval = $("#filter").val();
                // console.log(filterval);
                $.ajax({
                    url:"filter.php",
                    type:"POST",
                    data : {filter: filterval},
                    success:function(filtereddata){
                        $("#tdata").html(filtereddata)

                    }
                })
            })
        })
    </script>

</body>

</html>