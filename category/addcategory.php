<?php
require_once "../layout/header.php";

require_once "../database/database.php";


?>


    <div class="card" style="font-size 20px; width: 15rem;">
        <div class="card-header"> Add new Categories</div>


    </div>


    <form method="post" action="">
        <div class="card-body">

            <table class="table table-bordered table-hover table-sm" cellspacing="0"
                   width="100%">

                <thead>
                <tr>
                    <td>Code</td>
                    <td><input type="text" name="code" placeholder="code dat vao day"></td>
                </tr>
                <tr>
                    <td>CategoryName</td>
                    <td><input type="text" name="category" placeholder="dat ten category o day"></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th style="text-align: center" colspan="3"><input type="submit" name="btn" value="Submit"></th>
                </tr>
                </tbody>
            </table>

            <?php
            if (!empty($_POST['code']) && !empty($_POST['category'])) {
                $code = $_POST['code'];
                $category = $_POST['category'];
                $sql = "INSERT INTO Category (CategoryNumber, CategoryName) VALUES ('" . $code . "', '" . $category . "')";
                Database::getInstance()->exec($sql);
                echo "added new category {$_POST['category']}.";
            }
            ?>

        </div>
    </form>


</div>


<?php


require_once "../layout/footer.php";

?>
