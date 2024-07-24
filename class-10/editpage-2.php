<?php

class AdminBack{
    private $conn;
  
    public function __construct(){
    $dbhost = "localhost" ;
      $dbuser = "root"; 
      $dbpass = "";
      $dbname = "database1";
      $this->conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  
      if ($this->conn) {
  //echo "Connected successfully";
       
       } 
  
     else {
      die("DB connection error");
     }
  
    }
  public function add_category($data) {
 $ctg_name=$data['ctg_name'];
 $ctg_des=$data['ctg_des'];

$sql="INSERT INTO category(ctg_name,ctg_des) VALUES ('$ctg_name', '$ctg_des')";
$result=mysqli_query($this->conn,$sql);
if ($result){
  $mgs="Data inserted succesfully" ; 

  return $mgs;
}

else{
    $mgs="Data has not inserted !" ; 

    return $mgs;

}

  }

public function read_category_for_edit($id) {
   $sql="SELECT* FROM category WHERE id=$id";
    $cat_info=mysqli_query($this->conn,$sql);
    $ct_info=mysqli_fetch_assoc( $cat_info);
    return $ct_info;

}


public function update_category($received_data){
    $id=$received_data['id'];
    $name=$received_data['ctg_name'];
    $des=$received_data['ctg_des'];
    $query="UPDATE category SET ctg_name='$name' , ctg_des='$des' WHERE id=$id";
    $result=mysqli_query($this->conn,$query);
    if($result){

        $message="Updated category Successfully";
        return $message;

    }

}


    
  
  }
  $obj=new AdminBack();

  if(isset($_POST['ctg_btn'])) {
   $returnmgs=$obj->add_category($_POST);
  }
if(isset($_GET['status'])){
    $get_id=$_GET['id'];
    if($_GET['status']='edit'){
       $data=$obj->read_category_for_edit($get_id);
        
    }

}


if(isset($_POST['uctg_btn'])) {
    $mgs=$obj->update_category($_POST);
   }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Update Category</title>
  </head>
  <body>
    
 <div class="container">
    <div class="row">

    <div class="card shadow mb-4">
	<div class="card-header py-3">
		<h4 class="m-0 font-weight-bold text-primary">Update Catagory</h4>
	</div>
	<div class="card-body">
		
		<form action="" method="POST">
			<div class="form-group">
				<label>Catagory Name</label>
                <!-- <input hidden type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>" required autocomplete="off"> -->
				<input type="text" class="form-control" name="ctg_name" value="<?php echo $data['ctg_name'] ?>" required autocomplete="off">
			</div>

			<div class="form-group">
				<label>Catagory Description</label>
				<input type="text" class="form-control" name="ctg_des" value="<?php echo $data['ctg_des'] ?>" required autocomplete="off">
			</div>

			
			<div class="form-group">
				
				<input type="submit"  name="uctg_btn" value=" Update Catagory" class="btn btn-primary">
			</div>
		</form>

		<?php 
	 	if (isset($mgs)) {
	 	 	echo $mgs;
	  } 
		 ?>
	</div>
</div>
    </div>
 </div>


    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    
  </body>
</html>