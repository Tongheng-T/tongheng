<?php require_once("../../resources/config.php");


if(isset($_GET['delete_slide_id'])){

    $query = query("DELETE FROM slides WHERE slide_id = " .escape_string($_GET['delete_slide_id']) . "");
    confirm($query);

    $target_path = "../../reasources/uploads/";

    unlink($target_path);

    redirect("index.php?slides");
    set_message("slide Deleted");

}else{
    redirect("index.php?slides");
}

?>​​ 