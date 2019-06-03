<?php 
include 'db.php';
require 'session.php';
Session::start();

if($_SERVER['REQUEST_METHOD'] == "POST"){ 

    /** Traitement Table Work */
        try{
            if(isset($_POST['title']) && isset($_POST['des']) && isset($_POST['catg']) && isset($_POST['price']) && isset($_POST['img'])){
                $title = $db->quote($_POST['title']);
                $des = $db->quote($_POST['des']);
                $catg = $db->quote($_POST['catg']);
                $price = (int)$_POST['price'];
                $img = $db->quote($_POST['img']);
                $query = "INSERT INTO items (`title`, `des`, `catg`, `price`, `img`) VALUES ($title,$des,$catg,$price,$img)";
                $select = $db->query($query);
                if(!empty($select)){
                    header('Location:index.php');                
                } else {
                    $msg="Error Work";
                }
            }
        }catch(Exception $e){
            $msg ='Exception Work';
        }
        /***************** */

        
       
}else{
    $msg ='Erreur POST';
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <section id="home">
        <nav class="navbar navbar-light border-bottom border-info bg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../img/book-logo.jpg" id="logo"></a>
                <nav class="navbar navbar-expand-lg navbar-light bg">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
            </div>
        </nav>
    </section>


    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-card" id="Sidebar" style="width:190px;">
        <a href="index.php" class="w3-bar-item w3-button py-5"><i class="fa fa-th-list"></i> All articles</a>
        <a href="#" class="w3-bar-item w3-button py-5"><i class="fa fa-plus-circle"></i> Add article</a>
        <a href="delet.php" class="w3-bar-item w3-button py-5"><i class="fa fa-trash"></i> Delet article</a>
        <a href="update.php" class="w3-bar-item w3-button py-5"><i class="fa fa-cogs"></i> Edit article</a>
    </div>  

      <!-- Page Content -->
    <div class="w3-container page-content" style="margin-left:220px; margin-top: 4rem; padding-top: 3rem">
        <div class="title">
            <h1>ADD ARTICLE</h1>
        </div>
        <!-- / insert items form / -->
        <form method="POST" action="" class="add-form container">
            <div class="form-group">
                <label>Article title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="des" class="form-control" id="" cols="50" rows="5"></textarea>
            </div>
            <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="catg">
                            <option value=""> Choose a category </option>
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="PHP">PHP</option>
                            <option value="BOOTSTRAP">BOOTSTRAP</option>

                    </select>
            </div>
            <div class="form-group">
                <label>Price</label>
                <select class="form-control" name="price">
                        <option value=""> Choose a price </option>
                        <option value="200">200 DH</option>
                        <option value="250">250 DH</option>
                        <option value="300">300 DH</option>
                        <option value="350">350 DH</option>
                        <option value="400">400 DH</option>
                        <option value="450">450 DH</option>
                        <option value="500">500 DH</option>
                        <option value="550">550 DH</option>
                        <option value="600">600 DH</option>
                </select>
            </div>
            <div class="form-group">
                    <p>Image</p>
                    <input type="file" id="import" name="img" placeholder="Import an image">
            </div>
            
            <button type="submit" class="btn">Save</button>

        </form>
    </div>    


          
      

           
</body>
</html> 

    <!-- <script src="../js/admin.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>