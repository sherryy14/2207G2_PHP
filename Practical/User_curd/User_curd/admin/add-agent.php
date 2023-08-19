<?php 
include 'config.php';



if(isset($_POST['add_user'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $location = $_POST['location'];

  $check = "SELECT * FROM `users` WHERE email = '$email'";
  $checkResult = mysqli_query($conn, $check);
  if(mysqli_num_rows($checkResult)>0){
	$user = "User is already exist";
  }else{

	  
	  $query = "INSERT INTO `users` ( `name`, `email`, `password`, `location`) VALUES ( '$name', '$email', '$pass', '$location')";
	  $result = mysqli_query($conn,$query);
	  if($result){
		  header("Location: agents.php");
		}
	}
}
include 'header.php'
?>






    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Add New User</div>
           <hr>
            <form method="post">
           <div class="form-group">
            <label for="input-1">Name</label>
            <input type="text" name="name" class="form-control" id="input-1" placeholder="Enter Your Name" >
           </div>
           <div class="form-group">
            <label for="input-2">Email</label>
            <input type="email" name="email" class="form-control" id="input-2" placeholder="Enter Your Email Address">
           </div>
           <div class="form-group">
            <label for="input-4">Password</label>
            <input type="password" class="form-control" name="pass" id="input-4" placeholder="Enter Password" >
           </div>
           <div class="form-group">
            <label for="input-5">Location</label>
            <input type="text" name="location" class="form-control" id="input-5" placeholder="Enter Location">
           </div>
           <div class="form-group">
            <button type="submit" name="add_user" class="btn btn-light px-5"><i class="icon-lock"></i> Save User</button>
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
