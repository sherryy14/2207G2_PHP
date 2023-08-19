<?php 
include 'config.php';



if(isset($_POST['add_shippment'])){
  $courier_id = $_POST['courier_id'];
  $customer_id_sender = $_POST['customer_id_sender'];
  $customer_id_receiver = $_POST['customer_id_receiver'];
  $agent_id = $_POST['agent_id'];
  $delivery_date = $_POST['delivery_date'];
  $status = $_POST['status'];

  $delivery_date_format = date("Y-m-d", strtotime($delivery_date));
 
	$query = "INSERT INTO `shipment` ( `courier_id`, `sender_id`, `receiver_id`, `agent_id`, `delivery_date`, `status`) VALUES ( '$courier_id', '$customer_id_sender', '$customer_id_receiver', '$agent_id', '{$delivery_date_format}', '$status')";
	$result = mysqli_query($conn,$query);
	if($result){
		header("Location: add_shipment.php");
	}
}
include 'header.php'
?>


<?php
include 'config.php';
$sql_query = "SELECT * FROM `courier`";
$courier_data = mysqli_query($conn, $sql_query);

$sql_query2 = "SELECT * FROM `users`";
$agent_data = mysqli_query($conn, $sql_query2);

$sql_query3 = "SELECT * FROM `customer`";
$customer_data = mysqli_query($conn, $sql_query3);

$sql_query4 = "SELECT * FROM `customer`";
$customer_data2 = mysqli_query($conn, $sql_query4);
?>



    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Add Shipment</div>
           <hr>
            <form method="post">
           <div class="form-group">
            <label for="input-1">Select Courier</label>
            <select name="courier_id"  class="form-control customize-alt" id="exampleFormControlSelect1">
            <option value=''>Please Select</option>
              <?php
              if ($courier_data->num_rows > 0) {
                  while ($row = $courier_data->fetch_assoc()) {
                      $courier_name = $row['name'];
                      $courier_id = $row['courier_id'];
                      echo "<option value='$courier_id'>$courier_name</option>";
                  }
              }
              ?>
            </select>
           </div>
           <div class="form-group">
            <label for="input-1">Select Sender</label>
            <select name="customer_id_sender"  class="form-control customize-alt" id="exampleFormControlSelect1">
            <option value='' 4>Please Select</option>
              <?php
              if ($customer_data->num_rows > 0) {
                  while ($row = $customer_data->fetch_assoc()) {
                      $customer_name = $row['name'];
                      $customer_id = $row['customer_id'];
                      echo "<option value='$customer_id'>$customer_name</option>";
                  }
              }
              ?>
            </select>
           </div>
           <div class="form-group">
            <label for="input-1">Select Receiver</label>
            <select name="customer_id_receiver"  class="form-control customize-alt" id="exampleFormControlSelect1">
            <option value='' 4>Please Select</option>
              <?php
              if ($customer_data2->num_rows > 0) {
                  while ($row = $customer_data2->fetch_assoc()) {
                      $customer_name = $row['name'];
                      $customer_id = $row['customer_id'];
                      echo "<option value='$customer_id'>$customer_name</option>";
                  }
              }
              ?>
            </select>
           </div>
           <div class="form-group">
            <label for="input-1">Select Agent</label>
            <select name="agent_id"  class="form-control customize-alt" id="exampleFormControlSelect1">
            <option value=''>Please Select</option>
              <?php
              if ($agent_data->num_rows > 0) {
                  while ($row = $agent_data->fetch_assoc()) {
                      $agent_name = $row['name'];
                      $agent_id = $row['agent_id'];
                      echo "<option value='$agent_id'>$agent_name</option>";
                  }
              }
              ?>
            </select>
           </div>
           <div class="form-group">
            <label for="input-2">Delivery Date</label>
            <input type="date" min="<?php echo date('Y-m-d')?>" value="<?php echo date('Y-m-d')?>" name="delivery_date" class="form-control" id="input-2" placeholder="Enter Delivery Date">
           </div>
           <div class="form-group">
            <label for="input-4">Status</label>
            <select name="status"  class="form-control customize-alt" id="exampleFormControlSelect1">
            <option value=''>Please Select</option>
            <option value='packed'>Packed</option>
            <option value='shipped'>Shipped</option>
            <option value='received'>Received</option>
            </select>
           </div>
           <div class="form-group">
            <button type="submit" name="add_shippment" class="btn btn-light px-5"><i class="icon-lock"></i> Save Shippment</button>
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
