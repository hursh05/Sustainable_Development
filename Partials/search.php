
<?php
session_start();
include ("../Actions/functions.php");
//$search = $_POST['search'];
// calling search function from the function file
$doctor = searchQuery();
?>




<?php if ($doctor){


?>
<!--    --><?php //echo count($result); ?>

<div class="property-group">
<?php
for($i=0;$i<count($doctor);$i++){
    ?>
    <!-- <div class="property-group"> -->
        <div class="property-card">
            <div class="doctor-image">
                <img src="../Images/Doctor.jpg" class="property-thumb" alt="img">
                <div class="card-btn">

                    <div class="description">

                            <h3 class="doctor-name"><?php echo $doctor[$i][1] ?></h3>
                            <p class="doctor-specialization"><?php echo $doctor[$i][2] ?></p>
                            

                            <form action="../Partials/description.php" method="post">
                            <input type="submit" name="view" value="View">
                            <input type="hidden" name="id" value="
                            <?php echo $doctor[$i][0]?>
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

