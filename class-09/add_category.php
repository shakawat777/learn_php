<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";
// create database connection.
$conn = mysqli_connect($servername,$username,$password,$dbname);
// check connection.
if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
//echo "connection successful";
// close connection.

//mysqli_close($conn);
*/

class AdminBack
{
    private $conn;
    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "database1";
       $this->conn = mysqli_connect($dbhost, $dbuser,$dbpass ,$dbname);
       if($this->conn){
        //echo "Database connected successfully";
       }
       else{
        die("Database connection failed: ");
       }
    }
    public function display(){
        $sql = 'SELECT * FROM sales'; 
        $result = mysqli_query($this->conn, $sql); 
        if($result){
            return $result;
        }
    }
}
$obj = new AdminBack();
$data = $obj->display();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Hello</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <table class="table caption-top">
        <caption>List of users</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">customer_name</th>
                <th scope="col">product_name</th>
                <th scope="col">brand_name</th>
                <th scope="col">unit_price</th>
                <th scope="col">qty</th>
                <th scope="col">total_price</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>

            </tr>
        </thead>
        <tbody>


            <?php
           // $sql = 'SELECT * FROM sales';
            //$result = mysqli_query($conn, $sql);
            ?>

            <?php
            while ($row = mysqli_fetch_assoc($data)) {

            ?>

                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <th scope="row"><?php echo $row['customer_name']; ?></th>
                    <th scope="row"><?php echo $row['product_name']; ?></th>
                    <th scope="row"><?php echo $row['brand_name']; ?></th>
                    <th scope="row"><?php echo $row['unit_price']; ?></th>
                    <th scope="row"><?php echo $row['qty']; ?></th>
                    <th scope="row"><?php echo $row['total_price']; ?></th>
                    <th scope="row"><?php echo $row['created_at']; ?></th>
                    <th scope="row"><?php echo $row['updated_at']; ?></th>

                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>