<?php
require('dbconfig.php');

$id = $_POST['id'];
if($id){
    $sql = "SELECT * FROM portfolio where id='$id'";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($query);
}

?>

<form method="POST" action="">
    <div class="row">
        <input type="hidden" name="portfolio_id" value="<?php echo $id;?>">
        <input type="hidden" name="portfolio_last_img" value="<?php echo $row['img'];?>">
        <div class="col-md-6">
            <div class="thumb thumb-slide" style="border: 1px solid #ccc;">
                <img id="avatar2" style="width: 92%; margin: 10px auto 0 auto;" src="images/portfolio/<?php echo $row['img']?>" onerror="this.src='images/user.jpg';" class="img-responsive">
                <div class="button-wrapper">
                    <span class="label">Thay avatar</span>
                    <div class="form-group field-upload">
                        <input type="hidden" name="portfolio_img" value="">
                        <input type="file" id="upload2" class="upload-box" name="portfolio_img" maxlength="255" onchange="readURL2(this);" placeholder="Upload File">
                        <div class="help-block"></div>
                    </div>
                </div>
            </div>               
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Category</label>
                <select class="form-control" name="portfolio_category_id">
                    <option value="1" <?php if ($row['category_id'] == '1') { echo 'selected'; }?>>Web Development</option>
                    <option value="2" <?php if ($row['category_id'] == '2') { echo 'selected'; }?>>Graphic Design</option>
                    <option value="3" <?php if ($row['category_id'] == '3') { echo 'selected'; }?>>Photography</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">Name</label>
                <input class="form-control" name="portfolio_name" value="<?php echo $row['name']?>" required="" placeholder="Name" type="text">
            </div>
            <div class="form-group">
                <input type="submit" value="Lưu" name="btnPortfolioEdit" class="btn btn-info">
            </div>                                  
        </div>
        
    </div>
</form>