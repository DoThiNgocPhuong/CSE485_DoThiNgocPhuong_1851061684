<?php
require('dbconfig.php');

$id = $_POST['id'];
if($id){
    $sql = "SELECT * FROM reference where id='$id'";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($query);
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="reference_id" value="<?php echo $id;?>">
    <input type="hidden" name="reference_last_img" value="<?php echo $row['img'];?>">
    <div class="row">
        <div class="col-md-6">
            <div class="thumb thumb-slide" style="border: 1px solid #ccc;">
                <img id="avatar4" style="width: 92%; margin: 10px auto 0 auto;" src="images/reference/<?php echo $row['img']?>" onerror="this.src='images/user.jpg';" class="img-responsive">
                <div class="button-wrapper">
                    <span class="label">Thay avatar</span>
                    <div class="form-group field-upload">
                        <input type="hidden" name="reference_img" value="">
                        <input type="file" id="upload4" class="upload-box" name="reference_img" maxlength="255" onchange="readURL3(this);" placeholder="Upload File">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>     
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Name</label>
                <input class="form-control" name="reference_name" value="<?php echo $row['name']?>" required="" placeholder="Name" type="text">
            </div>
            <div class="form-group">
                <label class="control-label">Position</label>
                <input class="form-control" name="reference_position" value="<?php echo $row['position']?>" required="" placeholder="Position" type="text">
            </div>                                    
        </div>        
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Description</label>
                <textarea class="form-control" name="reference_description" rows="4" cols="50">value="<?php echo $row['description']?>"</textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" value="Add" name="btnReferenceEdit" class="btn btn-info">
            </div>
        </div>
    </div>                  
</form>
