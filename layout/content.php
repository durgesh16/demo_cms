<?php 
//echo "<br>content<br>";
?>
<header class="masthead bg-primary text-white text-center">
      <div class="container">
            <?php
            $sql = "SELECT * FROM `cms_pageheader`;";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) 
            {   
                while($row = $res->fetch_assoc()) 
                {
                    if($row['status'] == 1)
                    {
                ?>
                    <img class="img-fluid mb-5 d-block mx-auto" src=<?php echo $row['url'];?> alt="">
                    <h1 class="text-uppercase mb-0"><?php echo $row['label'];?></h1>
                    <hr class="star-light">
                    <h2 class="font-weight-light mb-0"><?php echo $row['content'];?></h2>
                <?php
                    }
                }
            }
            else
            {
                echo "null";
            }  
            ?>   
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
      <?php
        $sql = "SELECT * FROM `cms_container_title1`;";
        $res = $conn->query($sql);
        if ($res->num_rows > 0) 
        {   
            while($row = $res->fetch_object()) 
            {
                if($row->status == 1)
                {
      ?>
                    <h2 class="text-center text-uppercase text-secondary mb-0"><?php echo $row->label; ?></h2>
                <?php
                }
                ?>
                <hr class="star-dark mb-5">
            <?php
            }
        }
            ?>
      <div class="row">
      <!-- <div class="col-md-6 col-lg-4"> -->
      <?php
            $sql = "SELECT * FROM `cms_container1`;";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) 
            {   
                while($row = $res->fetch_object()) 
                {
                    if($row->status == 1)
                    {
       ?>               
                    <div class="col-md-6 col-lg-4">                 
                        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                        <i class="fas fa-search-plus fa-3x"></i>
                        </div>
                        </div>
                        <img class="img-fluid" src=<?php echo $row->url;?> alt="">
                        </a>
                        <?php
                    ?>
                    </div>
                    <?php
                    }
                }
            }
            else
            {
                echo "null";
            }  
            ?>  
          </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
      <?php
      $sql = "SELECT * FROM `cms_container_title2`;";
      $res = $conn->query($sql);
      if ($res->num_rows > 0) 
      {   
          while($row = $res->fetch_object()) 
          {
              if($row->status == 1)
              {
      ?>
        <h2 class="text-center text-uppercase text-white"><?php echo $row->label;?></h2>
      <?php
              }
          }
      }
      ?>
        <hr class="star-light mb-5">
        <div class="row">
        <?php 
      $sql = "SELECT * FROM `cms_container2`;";
      $res = $conn->query($sql);
      if ($res->num_rows > 0) 
      {   
          while($row = $res->fetch_object()) 
          {
              if($row->status == 1 && $row->id == 1)
              {
        ?>
          <div class="col-lg-4 ml-auto">
            <p class="lead"><?php echo $row->content;?></p>
              </div>
              <?php 
              }
              elseif($row->status == 1 && $row->id == 2)
              {
            ?>
          <div class="col-lg-4 mr-auto">
            <p class="lead"><?php echo $row->content;?></p>
          </div>
          <?php          
              }
           }
       }
          ?>
        </div>
      </div>
    </section>

      <section id="contact">
      <div class="container">
      <?php
      $sql = "SELECT * FROM `cms_pagefooter_title`;";
      $res = $conn->query($sql);
      if ($res->num_rows > 0) 
      {   
          while($row = $res->fetch_object()) 
          {
       ?>
        <h2 class="text-center text-uppercase text-secondary mb-0"><?php echo $row->label;?></h2>
          <?php 
         }
      } 
    ?>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <?php
                    $sql = "SELECT * FROM `cms_pagefooter`;";
                    $res = $conn->query($sql);
                    if ($res->num_rows > 0) 
                    {   
                        while($row = $res->fetch_object()) 
                        {
                            if($row->status == 1)
                                {
                ?>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label><?php echo $row->label;?></label>
                  <input class="form-control" id="<?php echo $row->name;?>" type="<?php echo $row->type;?>" placeholder="<?php echo $row->placeholder;?>" required="required" data-validation-required-message="<?php echo $row->message;?>">
                  <p class="help-block text-danger"></p> 
                </div>
              </div>

            <?php }}} ?>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

