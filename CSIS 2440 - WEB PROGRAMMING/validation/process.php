<?php
    $e = "v2fBmTtpB";

    if(!empty($_POST['email']) && !empty($_POST['number'])){
        $pattern1 = '~^\([0-9]{3}\)[- ][0-9]{3}-[0-9]{4}$~';
        $pattern2 = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

            if(preg_match($pattern1, $_POST['number']) && preg_match($pattern2, $_POST['email'])){
                function displayInfo(){
                    $msg = "";
                    $msg .= "Email: $_POST[email]<br>";
                    $msg .= "Phone: $_POST[number]";
                
                    return $msg;
                }
            }
        
            else if(!preg_match($pattern1, $_POST['number']) && preg_match($pattern2, $_POST['email'])){
                $e = "euKFwpN4N";
            }
            else if(preg_match($pattern1, $_POST['number']) && !preg_match($pattern2, $_POST['email'])){
                $e = "Qn0tMjWzE";
            }
            else {
                header("Location: index.php?em=$_POST[email]&nm=$_POST[number]&er=$e");
            }
    }
    else if(!empty($_POST['email']) && empty($_POST['number'])){
        $e = "euKFwpN4N";
        header("Location: index.php?em=$_POST[email]&er=$e");
    }
    else if(empty($_POST['email']) && !empty($_POST['number'])){
        $e = "Qn0tMjWzE";
        header("Location: index.php?nm=$_POST[number]&er=$e");
    }
    else{
        header("Location: index.php?er=$e");
    }
?>

<?php include_once('../src/php/global_functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head> 
        <?php echo displayHead(); ?>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <!--NAV-->
    <nav class="navbar navbar-expand-md bg-nav">
            <a href="../index.php" class="navbar-brand"><img src="../src/img/iconfinder_icon_animal_cachorro_3316536.png"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CSIS 2440</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../happy-birthday/index.php">Happy Birthday</a>
                            <a class="dropdown-item" href="../music-database/index.php">Music Database</a>
                            <a class="dropdown-item" href="../validation/index.php">Validation</a>
                        </div>
                    </li>
                </ul>

                <div class="mr-3">
                    <form class="form-inline my-2 collapse navbar-collapse">
                        <input class="form-control mr-md-2" type="search" placeholder="Doesn't really search" aria-label="search">
                        <button class="btn btn-grey my-2" type="submit">Search</button>
                    </form>
                </div>   
            </div>
        </nav>
        <!--NAV END-->

        <div class="container">
            <div class="jumbotron">
                <h1>Thank You!</h1>
                <hr>
                <h3>Your Contact Info:</h3>
                <?php
                    echo displayInfo();
                ?>
            </div>
            
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
