<?php
require('dbconfig.php');

$id = $_POST['id'];
if($id){
    $sql = "SELECT * FROM skill where id='$id'";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($query);
}

?>

<form method="POST" action="">
    <div class="row">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Name</label>
                <input class="form-control" name="skill_name" value="<?php echo $row['name']?>" required="" placeholder="Name" type="text">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Value</label>
                <input class="form-control" name="skill_value" value="<?php echo $row['value']?>" required="" placeholder="Value" type="number">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
		        <input type="submit" value="Sửa" style="margin-top: 25px;" name="btnSkillEdit" class="btn btn-info">
            </div>
        </div>
    </div>
</form>