<?php
    require('./inc/header.php'); 
    require('./inc/connect.php');
    require('./inc/functions.php'); 
 
 ?>
    
    <section class="section1 d-flex">
        <div class="col-sm-10 d-flex flex-column align-items-left">
            <?php displayNews(); ?>
        </div>
        <?php include './inc/nav.php'; ?>
    </section>



<?php require './inc/footer.php'; ?>
    
