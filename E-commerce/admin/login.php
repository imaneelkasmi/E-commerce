<?php include 'db.php'; ?>
<?php 
    require 'session.php';
    Session::start();
    /**Traitement du formulaire */
     
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {   
        try{
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $db->quote($_POST['username']);
                $password = $db->quote($_POST['password']);
                $select = $db->query("select * from users where username = $username and password = $password");
                
                if($select->rowCount() > 0){
                    Session::set('auth',$select->fetch());
                    header('Location:index.php');
                    die;
                }
            }
        }catch(Exception $e){
            // echo('Exception');
        }
       
    }  
    else{
        // echo('Erreur GET');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">


    <style>
    /* login page */
    
    #logo {
        width: 3rem;
        height: 3rem;
    }

    
    .login {
        position: relative;
        animation-name: down;
        animation-duration: 2s;
        text-align: center;
        border-radius: 15px;
    }

    @keyframes down {
        0% {
            top: -400px;
        }

        100% {
            top: 0rem;
        }
    }

    input {
        width: 50vh;
        height: 7vh;
        border: none;
        border-radius: 10px;
        border-bottom: solid 2px #28abe3;
    padding-left: 22px;
    }

    input::placeholder {
        color: rgba(211, 211, 211, 0.582);
        padding-left: 5px;
      }

    .login button {
        width: 25vh;
        height: 9vh;
        background-color: #28abe3;
        color: #fff;
        border: none;
        border-radius: 20px;
        margin-top: 8vh;
        font-size: 2rem;
    }

    .login button:hover {
        background-color: #28abe3;
    }
    </style>
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
                            <a class="nav-item nav-link" href="#home">HOME <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="#HTML">HTML</a>
                            <a class="nav-item nav-link" href="#CSS">CSS</a>
                            <a class="nav-item nav-link" href="#PHP">PHP</a>
                            <a class="nav-item nav-link" href="#BOOTSTRAP">BOOTSTRAP</a>
                            <a class="nav-item nav-link" href="#contact">CONTACT</a>
                            <a class="nav-item nav-link" href="admin/login.php">LOGIN</a>
                        </div>
                    </div>
            </div>
        </nav>
    <!-- / login setion / -->
    <section class="log">
        <form action="index.php" method="POST" class="login shadow-lg p-5 mb-5">
            <div class="swd-title my-5">
                <h1>Welcome</h1>
            </div>
            <input type="text" name="username" placeholder="Username"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button type="submit"><strong>Login</strong></button>
        </form>


    </section>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>