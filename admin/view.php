<?php
include("template/header.php");
?>

<div class="posts w-100 bg-light p-5">
    <?php
    $id = $_GET["id"];
    if($id) {
        include("../connect.php");
        $sqlSelectPosts = "SELECT * FROM posts WHERE id = $id";
        $result = mysqli_query($conn, $sqlSelectPosts);
        while($data = mysqli_fetch_array($result)) {
        ?>
        <h1><?php echo $data["title"]; ?></h1>
        <p><?php echo $data["date"]; ?></p>
        <p><?php echo $data["content"]; ?></p>
        <?php
        }
    } else {
        echo "No post found!";
    }
    ?>
</div>

<?php
include("template/footer.php");
?>