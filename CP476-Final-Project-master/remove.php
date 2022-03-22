
<?php
    include("connectToTheDB.php");
    $getTheMovieName = $_GET['Movie_Name'];
    $data = "delete from MovieTB where Movie_Name = '$getTheMovieName'";
    if (mysqli_query($connect, $data)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: ". mysqli_error($connect);
    }
    header("location:index.php")
?>
