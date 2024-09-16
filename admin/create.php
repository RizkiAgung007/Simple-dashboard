<?php 
    include("template/header.php")
?>

        <div class="create-form w-100 mx-auto p-4" style="max-width: 700px;">
            <form action="process.php" method="post">
                <div class="form-field mb-4">
                    <input type="text" name="title" id="" class="form-control" placeholder="Enter Title: ">
                </div>
                <div class="form-field mb-4">
                    <textarea name="summary" id="" class="form-control" cols="30" rows="10" placeholder="Enter Summary:"></textarea>
                </div>
                <div class="form-field mb-4">
                    <textarea name="content" id="" class="form-control" cols="30" rows="10" placeholder="Enter Post:"></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">
                
                <div class="form-field">
                    <input type="submit" name="create" value="submit" id="" class="btn btn-primary">
                </div>
            </form>
        </div>

<?php 
    include("template/footer.php")
?>