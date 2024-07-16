<?php
class AdminBack
{
    private $conn;

    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "database1";
        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if ($this->conn) {
            //echo "Connected successfully";

        } else {
            die("DB connection error");
        }
    }
    public function add_category($data)
    {
        $ctg_name = $data['ctg_name'];
        $ctg_des = $data['ctg_des'];

        $sql = "INSERT INTO category(ctg_name,ctg_des) VALUES ('$ctg_name', '$ctg_des')";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            $mgs = "Data inserted succesfully";

            return $mgs;
        } else {
            $mgs = "Data has not inserted !";

            return $mgs;
        }
    }
    public function display_category()
    {
        $sql = "SELECT*FROM category";
        $result = mysqli_query($this->conn, $sql);

        if ($result) {

            return $result;
        }
    }


    public function delete_category($id)
    {
        $query = "DELETE FROM category WHERE id=$id";
        mysqli_query($this->conn, $query);
    }
}
$obj = new AdminBack();

if (isset($_POST['ctg_btn'])) {
    $returnmgs = $obj->add_category($_POST);
}



if (isset($_GET['status'])) {
    $get_id = $_GET['id'];
    if ($_GET['status'] = 'delete') {
        $data = $obj->delete_category($get_id);
    }
}

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <table class="table caption-top">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category_name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = $obj->display_category();
            while ($row = mysqli_fetch_assoc($data)) {

            ?>

                <tr>
                    <th scope="row"><?php echo $row['ID']; ?></th>
                    <td><?php echo $row['ctg_name']; ?></td>
                    <td><?php echo $row['ctg_des']; ?></td>
                    <td>
                        <div class="btn-group">

                            <a href="" class="btn btn-danger">Delete</a>
                            <a href="" class=" btn btn-info">Edit</a>
                        </div>
                    </td>


                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>