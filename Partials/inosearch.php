
<?php
session_start();
include ("../Actions/functions.php");

// calling search function from the function file
$innovator  = inosearchQuery();
?>




<?php if ($innovator){


?>
<!--    --><?php //echo count($result); ?>

<div class="property-group">
<?php
for($i=0;$i<count($innovator);$i++){
    ?>
    <!-- <div class="property-group"> -->
        <div class="property-card">
            <div class="doctor-image">
                <img src="../Images/Doctor.jpg" class="property-thumb" alt="img">
                <div class="card-btn">

                    <div class="description">

                            <h3 class="name"><?php echo $innovator[$i][1] ?></h3>
                            <p class="projectname"><?php echo $innovator[$i][2] ?></p>
                            

                            <form action="../Partials/inodescription.php" method="post">
                            <input type="submit" name="view" value="View">
                            <input type="hidden" name="id" value="
                            <?php echo $innovator[$i][0]?>
                            ">
                            </form>

                    </div>
                   

                  
                </div>

            </div>
            <hr>
        </div>
        
    <!-- </div> -->
    <?php
}
?>
<?php
}else{
?>
    <h1>No Result were found </h1>
    <a href="../"><button>HOME</button></a>
<?php
}
?>
</div>

