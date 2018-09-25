<?php 
// echo "header";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <?php
        // print_r($conn);
        $sql ="SELECT `title` FROM `cms_title` ORDER BY `id_title` DESC LIMIT 1";
        
        $res = $conn->query($sql);
        // print_r($res);
        if ($res->num_rows > 0) 
        {   
            while($row = $res->fetch_assoc()) 
            {
                echo $row['title'];
            }
        }
        else
            echo "0 results";
        ?>
        </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">           
            <?php            
            $sql1 = "SELECT * FROM `cms_nav_menu`";
            $res1 = $conn->query($sql1);
           
            if($res1->num_rows > 0)
            {
                while($row1 = $res1->fetch_object())
                {
                    if($row1->status = 1)
                    {
                    ?>
                    <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo $row1->url; ?>">
                        <?php echo $row1->label; 
                        }
                        ?>
                    </a>
                    </li>

            <?php
               }
            }
           
            ?>
            </ul>
        </div>
      </div>
    </nav>

