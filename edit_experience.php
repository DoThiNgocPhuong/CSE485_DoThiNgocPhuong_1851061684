<?php
require('dbconfig.php');

$id = $_POST['id'];
if($id){
    $sql = "SELECT * FROM experience where id='$id'";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($query);
}

?>

<form method="POST" action="">
    <div class="row">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Name</label>
                <input class="form-control" value="<?php echo $row['name']?>" name="experience_name" required="" placeholder="Name" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Title</label>
                <input class="form-control" name="experience_title" value="<?php echo $row['title']?>" required="" placeholder="Title" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Time</label>
                <input class="form-control" name="experience_time" value="<?php echo $row['time']?>" required="" placeholder="Time" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Description</label>
                <textarea class="form-control" name="experience_description" rows="4" cols="50"><?php echo $row['description']?></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" value="Lưu" name="btnExperienceEdit" class="btn btn-info">
            </div>
        </div>

    </div>
</form>