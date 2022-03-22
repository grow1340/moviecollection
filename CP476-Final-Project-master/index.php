<?php
    include("connectToTheDB.php");   
    if (isset($_POST['btn'])) {
        $date=$_POST['idate'];
        $data = "select * from MovieTB where Date='$date'";
        $query = mysqli_query($connect, $data);
    } 
    else {
        $data = "select * from MovieTB";
        $query = mysqli_query($connect, $data);
    }
?>

<html>
    <head>
        <title>Movies</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>

    <body>

    
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Movie Collection</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="px-3"><a href="base.php">Add Movies</a></li>
                            <li class="px-3"><a href="index.php">View Movies</a></li>
                </ul>
                
             
            </div>
        </div>
    </nav>
    <br>


        <div class="container mt-5">

    
            <h1>Movie Data</h1>
            <hr>
  
            <div class="row mt-4">
                    <?php
                        while ($var = mysqli_fetch_array($query)){
                    ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                              Title: <?php echo $var['Movie_Name']; ?>
                            </h4>
                            <p>Director: <?php echo $var['Director']; ?></p>
                            <p>Genre: <?php echo $var['Movie_Genre']; ?></p>
                            <p>Release Date: <?php echo $var['Release_Date']; ?></p>
                           

                            <div class = "row mt-1">

                            
                            <div class = "col-lg-3">
                            <a href="update.php?Movie_Name=<?php echo $var['Movie_Name'];?>"
                            class="card-link"><button type="button" class="btn btn-outline-primary">Edit</button></a>
                            </div>


                            <div class = "col-lg-3">
                            <a href="remove.php?Movie_Name=<?php echo $var['Movie_Name'];?>"
                            class="card-link"><button type="button" class="btn btn-outline-danger">Delete</button></a>


                            </div>


           
                         

                            </div>

                        </div>
                    </div><br>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </body>
</html>