<?php
//echo "sidebar.php";
?>
<!-- Sidebar -->
<!-- <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul> -->


<ul class="sidebar navbar-nav">
<?PHP 
            $sql ="SELECT * FROM `sb_admin_sidebar`;";
            $res = $conn->query($sql);
            if($res->num_rows > 0)
            {
              while($rows = $res ->fetch_object())
              {
                if($rows->status == 1 && $rows->diff == 1)
                {
        ?>
                  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="<?php echo $rows->label_symbol;?>"></i>
            <span><?php echo $rows->main_label;?></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header"><?php echo $rows->sub_heading1;?></h6>
            <a class="dropdown-item" href="login.html"><?php echo $rows->sub_label1;?></a>
            <a class="dropdown-item" href="register.html"><?php echo $rows->sub_label2;?></a>
            <a class="dropdown-item" href="forgot-password.html"><?php echo $rows->sub_label3;?></a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header"><?php echo $rows->sub_heading2;?></h6>
            <a class="dropdown-item" href="404.html"><?php echo $rows->sub_label4;?></a>
            <a class="dropdown-item" href="blank.html"><?php echo $rows->sub_label5;?></a>
          </div>
        </li>

        <?php
                }
                elseif($rows->status == 1 && $rows->diff == 0)
                {
        ?>
                  <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class=<?php echo $rows->label_symbol;?>></i>
            <span><?php echo $rows->main_label;?></span>
          </a>
        </li> 
        <?php
                }
              }
            }
        ?>
        </ul>