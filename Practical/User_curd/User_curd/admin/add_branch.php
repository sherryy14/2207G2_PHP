<?php 
include 'config.php';



if(isset($_POST['add_user_task'])){
  $due_date = $_POST['due_date'];
  $description = $_POST['description'];
  $task_name = $_POST['task_name'];

	  
	  $query = "INSERT INTO `tasks` ( `name`, `description`, `due_date`) VALUES ( '$task_name', '$description', '$due_date')";
	  $result = mysqli_query($conn,$query);
	  if($result){
		  header("Location: tasks_list.php");
		}
	
}
include 'header.php'
?>






    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Add User Tasks</div>
           <hr>
            <form method="post">
           <div class="form-group">
            <label for="input-1">Tasks Name</label>
            <input type="text" name="task_name" class="form-control" id="input-1" placeholder="Enter Task Name" >
           </div>
           <div class="form-group">
            <label for="input-2">Task Description</label>
            <input type="text" name="description" class="form-control" id="input-2" placeholder="Enter description">
           </div>
           <div class="form-group">
            <label for="input-4">Zip Code</label>
            <input type="text" class="form-control" name="due_date" id="input-4" placeholder="Enter due date" >
           </div>
           <div class="form-group">
            <button type="submit" name="add_user_task" class="btn btn-light px-5"><i class="icon-lock"></i> Save Task</button>
          </div>
          </form>
         </div>
         </div>
      </div>

      
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © Aptech
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
