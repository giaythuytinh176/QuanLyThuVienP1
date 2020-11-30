<?php
require_once "../layout/header.php";

require_once "../database/database.php";


?>


    <div class="card" style="font-size 20px; width: 15rem;">
        <div class="card-header"> Edit Categories</div>


    </div>

    <form method="post" action="">
        <div class="card-body">
            <table class="table table-bordered table-hover table-sm" cellspacing="0"
                   width="100%">

                <thead>
                <tr>
                    <td>Category Name</td>
                    <td><input type="text" name="category" placeholder="edit category here"></td>
                </tr>
                </thead>
                <tbody>

                <?php
                $sout = '';
                $sout .= '<tr>';
                $sout .= '<th style="text-align: center" colspan="2"><input type="submit" name="btn" value="Update"></th>';
                $sout .= '<tr>';
                echo $sout;
                ?>
                </tbody>
            </table>
            <?php
            if (!empty($_GET['id']) && !empty($_POST['category'])) {
                $sql = "UPDATE Category SET CategoryName='" . $_POST['category'] . "' WHERE CategoryNumber='" . $_GET['id'] . "'";
                Database::getInstance()->exec($sql);
                echo "Updated category successfully.";
            }
            ?>
        </div>
    </form>

</div>


<?php


require_once "../layout/footer.php";

?>
