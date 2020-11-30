<?php

require_once "./database/database.php";

$stmt = Database::getInstance()->query("SELECT * FROM Category");
$data = $stmt->fetchAll(Database::getInstance()::FETCH_ASSOC);
?>

<table class="table table-bordered table-hover table-sm" cellspacing="0"
       width="100%">

    <thead>
    <tr>
        <td>Code</td>
        <td>Category Name</td>
        <td></td>
    </tr>
    </thead>
    <tbody>

    <?php
    $sout = '';
    foreach ($data as $key => $item) {
        $sout .= '<tr>';
        $sout .= '<th>' . ($key + 1) . '</th>';
        $sout .= '<th>' . $item['CategoryName'] . '</th>';
        $sout .= '<th><a href="category/editcategory.php?id=' . $item['CategoryNumber'] . '">Update</a> | <a href="category/deletecategory.php?id=' . $item['CategoryNumber'] . '" onclick="confirm(\'Ban co muon xoa ko\')">Delete</a></th>';
        $sout .= '<tr>';
    }
    echo $sout;

    ?>


    </tbody>
</table>
<div><a href="category/addcategory.php">Add new category</a></div>


