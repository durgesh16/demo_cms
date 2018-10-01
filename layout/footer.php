<?php 
//echo "footer";
?>
<!-- Footer -->
<footer class="footer text-center">

      <div class="container">
        <div class="row">
        <?php 
        // $footertabs= array(
        //                 array(
        //                     'title'=>"Location",
        //                     'content1'=>"2215 John Daniel Drive",
        //                     'content2'=>"Clark, MO 65243"
        //                 ),
        //                 array(
        //                     'title'=>"Around the Web",
        //                     'multi'=>TRUE,
        //                     'content1'=>array(
        //                         array(
        //                             'i'=>"fab fa-fw fa-facebook-f"
        //                         ),
        //                         array(
        //                             'i'=>"fab fa-fw fa-google-plus-g"
        //                         ),
        //                         array(
        //                             'i'=>"fab fa-fw fa-twitter"
        //                         ),
        //                         array(
        //                             'i'=>"fab fa-fw fa-linkedin-in"
        //                         ),
        //                         array(
        //                             'i'=>"fab fa-fw fa-dribbble"
        //                             )
        
        //                         ) ,
        //                     'content2'=>""                           
        //                 ),
        //                 array(
        //                     'title'=>"About Freelancer",
        //                     'content1'=>"Freelance is a free to use, open source Bootstrap theme created by",
        //                     'content2'=>"<a href='http://startbootstrap.com'>Start Bootstrap</a>"                            
        //                 ),

        //             );
        // foreach($footertabs as $keys=>$values)
        // {
            $sql = "SELECT * FROM `cms_sitefooter`;";
                    $res = $conn->query($sql);
                    if ($res->num_rows > 0) 
                    {   
                        while($row = $res->fetch_object()) 
                        {
                            if($row->status == 1)
                                {
            ?>

          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4"><?php echo $row->label;?></h4>
        <?php if(isset($row->multi) && $row->multi == 1)
                {
                    $social = explode(",",$row->content1);
                    foreach($social as $keys=>$values1)
                    {
                        // echo $values1['i'];
                        ?>
                        <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="<?php echo $values1;?>"></i>
                </a>
              </li>
                    <?php
                    }
                }
                else{                  
        ?>
            <p class="lead mb-0">
                <?php echo $row->content1; ?>
                <?php } ?>
                <br>
                <?php 
                    if(!empty($row->content2))
                    {
                        echo $row->content2;
                    }                                 
                  ?></p>
          </div>
        <?php }}}?>
          
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

   
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
    <?php echo "end of folder";?>
  </body>

</html>