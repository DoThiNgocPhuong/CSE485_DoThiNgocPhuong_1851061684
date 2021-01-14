<?php
require('dbconfig.php');

$sql = "SELECT * FROM social_network LIMIT 1";
$query = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($query);

?>

<form method="POST" action="">
    <div class="row">
        <input type="hidden" name="id" value="1">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Facebook</label>
                <input class="form-control" name="fb" value="<?php echo $row['fb']?>" required="" placeholder="Facebook" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Google</label>
                <input class="form-control" name="google" value="<?php echo $row['google']?>" required="" placeholder="Google" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Twitter</label>
                <input class="form-control" name="twitter" value="<?php echo $row['twitter']?>" required="" placeholder="Twitter" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Instagram</label>
                <input class="form-control" name="instagram" value="<?php echo $row['instagram']?>" required="" placeholder="Instagram" type="text">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
		        <input type="submit" value="Sửa" name="btnSocialEdit" class="btn btn-info">
            </div>
        </div>
    </div>
</form>