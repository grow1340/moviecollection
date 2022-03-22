<html>

    <head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h1>Add Movie</h1>
        <hr>
        <form action="base.php" method="POST">
            <div class="form-group" id="Movie_Name">
                <label>Movie name</label>
                <input type="text" class="form-control" placeholder="Movie name" name="Movie_Name" />
            </div>

            <div class="form-group">
                <label>Director</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Director" 
                    name=Director />
            </div>
            <div class="form-group" id="Genre">
                <label>Movie Genre</label>
                <select class="form-control"
                    name="Movie_Genre">
                    <option value="0">
                        Action
                    </option>
                    <option value="1">
                        Drama
                    </option>
                    <option value="2">
                        Comedy
                    </option>
                    <option value="3">
                        Thriller
                    </option>

                </select>
            </div>
            <div class="form-group" id="Release_date">
                <label>Release Date</label>
                <input type="Release_date"
                    class="form-control"
                    placeholder="Release_date"
                    name="Release_date">
                   
            </div>

            <div class="row">

            <div class="col-md-3">

             </div>

                <div class="col-md-6">
                    
                    <input type="submit"
                    value="Add Movie"
                    class="btn btn-dark btn-block"
                    name="btn">
                </div>



            </div>
        </form>
    </div>

    <?php  
        if (isset($_POST["btn"])){
            include("connectToTheDB.php");
            $Movie_name=$_POST['Movie_Name'];
            $Director=$_POST['Director'];
            $Genre=$_POST['Movie_Genre'];
            $Release_date=$_POST['Release_date'];

            $data = "insert into MovieTB(Movie_Name, Director, Movie_Genre, Release_Date)
                     values('$Movie_name', '$Director', '$Genre', '$Release_date')";
            mysqli_query($connect, $data);
            header("location:index.php");
        }

        /*
         if(!mysqli_query($connect, $data)){
            // echo "No Value";
         }
         else{
            // echo "Value has been Inserted";}
         */
    
    ?>
</body>

</html>