<?php
$id = $_GET["id"];
if($id) {
    include("../connect.php");
    $sqlDelete = "DELETE FROM posts WHERE id = $id";
    if(mysqli_query($conn, $sqlDelete)) {
        session_start();
        $_SESSION["delete"] = "Post deleted succes";
        header("Location:index.php");
    } else {
        echo "Data is not deleted";
    }
} else {
    echo "Post not found";
}
?>