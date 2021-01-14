<?php
require('dbconfig.php');

$id = $_POST['id'];
if($id){
    $sql = "SELECT * FROM education where id='$id'";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($query);
}

?>

<form method="POST" action="">
    <div class="row">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Title</label>
                <input class="form-control" name="education_title" value="<?php echo $row['title']?>" required="" placeholder="Title" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">School</label>
                <input class="form-control" value="<?php echo $row['schools']?>" name="education_schools" required="" placeholder="Schools" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Diploma</label>
                <input class="form-control" value="<?php echo $row['diploma']?>" name="education_diploma" required="" placeholder="Diploma" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Time</label>
                <input class="form-control" name="education_time" value="<?php echo $row['created_time']?>" required="" placeholder="Time" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Description</label>
                <textarea class="form-control" name="education_description" rows="4" cols="50"><?php echo $row['description']?></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" value="Lưu" name="btnEducationEdit" class="btn btn-info">
            </div>
        </div>

    </div>
</form>