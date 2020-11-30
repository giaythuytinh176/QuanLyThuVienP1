<?php
require_once "./layout/header.php";

require_once "./database/database.php";


?>


<div class="card" style="font-size 20px; width: 15rem;">
    <div class="card-header"> Categories List</div>


</div>


<div class="card-body">

    <?php
    require_once "./category/displaycategory.php";
    ?>


</div>


</div>


<?php


require_once "layout/footer.php";

?>
