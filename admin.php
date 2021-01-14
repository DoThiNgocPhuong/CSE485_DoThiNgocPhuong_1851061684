<?php

require "dbconfig.php";

// About
$sql_about = "SELECT * FROM about LIMIT 1";
$query_about = mysqli_query($connect,$sql_about);
$row_about = mysqli_fetch_array($query_about);

if (isset($_POST['btnAbout'])) {
    $last_img = $row_about['img'];
    if($_FILES['img']['name'] != ''){
        $img = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
    }else{
        $img = $last_img;
    }
    $full_name = $_POST["full_name"];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $skill = $_POST['skill'];
    $language = $_POST['language'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $update_about = "UPDATE about SET full_name = '$full_name', email = '$email', phone = '$phone', age='$age', skill='$skill', 
       `language`='$language', `address`='$address', `description`='$description', img='$img' where id = '1'";
    mysqli_query($connect, $update_about);
    echo 'Cập nhật thành công';
}

// Skill

$sql_skill = "SELECT * FROM skill ORDER BY id DESC";
$result_skill = mysqli_query($connect, $sql_skill);

if (isset($_POST['btnSkillAdd'])) {
    $skill_name = $_POST['skill_name'];
    $skill_value = $_POST['skill_value'];
    $sql_skill = "INSERT INTO skill (`name`, `value`) VALUES('$skill_name', '$skill_value')";
    mysqli_query($connect,$sql_skill);
    header("Refresh: 0; url=admin.php");
}

if (isset($_POST['btnSkillEdit'])) {
    $id = $_POST['id'];
    $skill_name = $_POST['skill_name'];
    $skill_value = $_POST['skill_value'];
    $qr_skill = "UPDATE skill SET name = '$skill_name', value = '$skill_value' where id = '$id'";
	mysqli_query($connect,$qr_skill);
	header("Refresh: 0; url=admin.php");
}

// Contact
$sql_contact = "SELECT * FROM contact ORDER BY id DESC";
$result_contact = mysqli_query($connect, $sql_contact);

// Experience
$sql_experience = "SELECT * FROM experience ORDER BY id DESC";
$result_experience = mysqli_query($connect, $sql_experience);


if (isset($_POST['btnExperienceAdd'])) {
    $experience_name = $_POST['experience_name'];
    $experience_title = $_POST['experience_title'];
    $experience_time = $_POST['experience_time'];
    $experience_description = $_POST['experience_description'];
    $sql_experience = "INSERT INTO experience (`name`, `title`, `time`, `description`) VALUES('$experience_name', '$experience_title', '$experience_time', '$experience_description')";
    mysqli_query($connect,$sql_experience);
    header("Refresh: 0; url=admin.php");
}

if (isset($_POST['btnExperienceEdit'])) {
    $id = $_POST['id'];
    $experience_name = $_POST['experience_name'];
    $experience_title = $_POST['experience_title'];
    $experience_time = $_POST['experience_time'];
    $experience_description = $_POST['experience_description'];
    $qr_experience = "UPDATE experience SET `name` = '$experience_name', title = '$experience_title', `time` = '$experience_time', `description` = '$experience_description' where id = '$id'";
	mysqli_query($connect,$qr_experience);
	header("Refresh: 0; url=admin.php");
}


// Social Network
$sql_social = "SELECT * FROM social_network LIMIT 1";
$query_social = mysqli_query($connect,$sql_social);
$row_social = mysqli_fetch_array($query_social);

if (isset($_POST['btnSocialEdit'])) {
    $fb = $_POST['fb'];
    $google = $_POST['google'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $qr_social = "UPDATE social_network SET `fb` = '$fb', google = '$google', `twitter` = '$twitter', `instagram` = '$instagram' where id = '1'";
	mysqli_query($connect,$qr_social);
	header("Refresh: 0; url=admin.php");
}

// Education
$sql_education = "SELECT * FROM education ORDER BY id DESC";
$result_education = mysqli_query($connect, $sql_education);


if (isset($_POST['btnEducationAdd'])) {
    $education_title = $_POST['education_title'];
    $education_schools = $_POST['education_schools'];
    $education_diploma = $_POST['education_diploma'];
    $education_time = $_POST['education_time'];
    $education_description = $_POST['education_description'];
    $query_education_add = "INSERT INTO education (title, schools, diploma, created_time, description) VALUES ('$education_title', '$education_schools', '$education_diploma', '$education_time', '1')";
    mysqli_query($connect,$query_education_add);
    header("Refresh: 0; url=admin.php");
}


if (isset($_POST['btnEducationEdit'])) {
    $id = $_POST['id'];
    $education_title = $_POST['education_title'];
    $education_schools = $_POST['education_schools'];
    $education_diploma = $_POST['education_diploma'];
    $education_time = $_POST['education_time'];
    $education_description = $_POST['education_description'];
    $qr_education = "UPDATE education SET `title` = '$education_title', `schools` = '$education_schools', `diploma` = '$education_diploma', `created_time` = '$education_time', `description` = '$education_description' where id = '$id'";
    mysqli_query($connect,$qr_education);
    header("Refresh: 0; url=admin.php");
}

// Portfolio
$sql_portfolio = "SELECT * FROM portfolio ORDER BY id DESC";
$result_portfolio = mysqli_query($connect, $sql_portfolio);


if (isset($_POST['btnPortfolio'])) {
    if($_FILES['portfolio_img']['name'] != ''){
        $portfolio_img = $_FILES['portfolio_img']['name'];
        move_uploaded_file($_FILES['portfolio_img']['tmp_name'], 'images/portfolio/' . $_FILES['portfolio_img']['name']);
    }
    $portfolio_category_id = $_POST['portfolio_category_id'];
    $portfolio_name = $_POST['portfolio_name'];
    $sql_portfolio = "INSERT INTO portfolio (`name`, `img`, `category_id`) VALUES('$portfolio_name', '$portfolio_img', '$portfolio_category_id')";
    mysqli_query($connect,$sql_portfolio);
    header("Refresh: 0; url=admin.php");
    
}

if (isset($_POST['btnPortfolioEdit'])) {
    $id = $_POST['portfolio_id'];
    
    if($_FILES['portfolio_img']['name'] != ''){
        $portfolio_img = $_FILES['portfolio_img']['name'];
        move_uploaded_file($_FILES['portfolio_img']['tmp_name'], 'images/portfolio/' . $_FILES['portfolio_img']['name']);
    }else{
        $portfolio_img = $_POST['portfolio_last_img'];
    }
    $portfolio_category_id = $_POST['portfolio_category_id'];
    $portfolio_name = $_POST['portfolio_name'];
    $qr_portfolio = "UPDATE portfolio SET `name` = '$portfolio_name', `category_id` = '$portfolio_category_id' where id = '$id'";
    mysqli_query($connect,$qr_portfolio);
    header("Refresh: 0; url=admin.php");
}


// Reference
$sql_reference = "SELECT * FROM reference";
$result_reference = mysqli_query($connect, $sql_reference);


if (isset($_POST['btnReference'])) {
    if($_FILES['reference_img']['name'] != ''){
        $reference_img = $_FILES['reference_img']['name'];
        move_uploaded_file($_FILES['reference_img']['tmp_name'], 'images/reference/' . $_FILES['reference_img']['name']);
    }
    
    $reference_name = $_POST['reference_name'];
    $reference_position = $_POST['reference_position'];
    $reference_description = $_POST['reference_description'];
    $sql_reference = "INSERT INTO reference (`name`, `img`, `position`, `description`) VALUES('$reference_name', '$reference_img', '$reference_position', '$reference_description')";
    mysqli_query($connect,$sql_reference);
    header("Refresh: 0; url=admin.php");
    
}


if (isset($_POST['btnReferenceEdit'])) {
    $id = $_POST['reference_id'];
    
    if($_FILES['reference_img']['name'] != ''){
        $reference_img = $_FILES['reference_img']['name'];
        move_uploaded_file($_FILES['reference_img']['tmp_name'], 'images/reference/' . $_FILES['reference_img']['name']);
    }else{
        $reference_img = $_POST['reference_last_img'];
    }
    $reference_name = $_POST['reference_name'];
    $reference_position = $_POST['reference_position'];
    $reference_description = $_POST['reference_description'];
    $qr_reference = "UPDATE reference SET `name` = '$reference_name', `img` = '$reference_img', `position` = '$reference_position', `description` = '$reference_description' where id = '$id'";
    mysqli_query($connect,$qr_reference);
    header("Refresh: 0; url=admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="css/cv.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="" data-toggle="modal" data-target="#myModalAbout">About</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Skill
                            <a class="btn btn-info pull-right" data-toggle="modal" data-target="#myModalSkikkAdd" style="margin-top: -7px;">Add</a> 
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>VALUE</th>
                                    <th>Action</th>
                                </tr>
                                <?php  
                                if(mysqli_num_rows($result_skill) > 0){
                                    while($row_skill = mysqli_fetch_array($result_skill)){  
                                ?>
                                <tr>
                                    <td><?php echo $row_skill['id']?></td>
                                    <td><?php echo $row_skill['name']?></td>
                                    <td><?php echo $row_skill['value']?></td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="editSkill(<?php echo $row_skill['id']?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="delete_skill.php?id=<?php echo $row_skill['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php }}?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Social Network
                            <a class="btn btn-info pull-right" onclick="social()" style="margin-top: -7px;">Sửa</a> 
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Value</th>
                                    
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    <td><?php echo $row_social['fb']?></td>
                                </tr>
                                <tr>
                                    <td>Google</td>
                                    <td><?php echo $row_social['google']?></td>
                                </tr>
                                <tr>
                                    <td>Twitter</td>
                                    <td><?php echo $row_social['twitter']?></td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td><?php echo $row_social['instagram']?></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Contact</div>
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                <?php  
                                if(mysqli_num_rows($result_contact) > 0){
                                    while($row_contact = mysqli_fetch_array($result_contact)){  
                                ?>
                                <tr>
                                    <td><?php echo $row_contact['id']?></td>
                                    <td><?php echo $row_contact['name']?></td>
                                    <td><?php echo $row_contact['email']?></td>
                                    <td><?php echo $row_contact['subject']?></td>
                                    <td><?php echo $row_contact['message']?></td>
                                    <td>
                                        <a href="delete_contact.php?id=<?php echo $row_contact['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php }}?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Experience
                            <a class="btn btn-info pull-right" data-toggle="modal" data-target="#myModalExperience" style="margin-top: -7px;">Add</a> 
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>Title</th>
                                    <th>Time</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                <?php  
                                if(mysqli_num_rows($result_experience) > 0){
                                    while($row_experience = mysqli_fetch_array($result_experience)){  
                                ?>
                                <tr>
                                    <td><?php echo $row_experience['id']?></td>
                                    <td><?php echo $row_experience['name']?></td>
                                    <td><?php echo $row_experience['title']?></td>
                                    <td><?php echo $row_experience['time']?></td>
                                    <td><?php echo $row_experience['description']?></td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="editExperience(<?php echo $row_experience['id']?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="delete_experience.php?id=<?php echo $row_experience['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php }}?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Education
                            <a class="btn btn-info pull-right" data-toggle="modal" data-target="#myModalEducation" style="margin-top: -7px;">Add</a> 
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    
                                    <th>Title</th>
                                    <th>School</th>
                                    <th>Time</th>
                                    <th>Diploma</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                <?php  
                                if(mysqli_num_rows($result_education) > 0){
                                    while($row_education = mysqli_fetch_array($result_education)){  
                                ?>
                                <tr>
                                    <td><?php echo $row_education['id']?></td>
                                    
                                    <td><?php echo $row_education['title']?></td>
                                    <td><?php echo $row_education['schools']?></td>
                                    <td><?php echo $row_education['created_time']?></td>
                                    <td><?php echo $row_education['diploma']?></td>
                                    <td><?php echo $row_education['description']?></td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="editEducation(<?php echo $row_education['id']?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="delete_education.php?id=<?php echo $row_education['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php }}?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Portfolio
                            <a class="btn btn-info pull-right" data-toggle="modal" data-target="#myModalPortfolio" style="margin-top: -7px;">Add</a> 
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Img</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                                <?php  
                                if(mysqli_num_rows($result_portfolio) > 0){
                                    while($row_portfolio = mysqli_fetch_array($result_portfolio)){  
                                ?>
                                <tr>
                                    <td><?php echo $row_portfolio['id']?></td>
                                    <td><img style="width: 80px;" src="images/portfolio/<?php echo $row_portfolio['img']?>"></td>
                                    <td><?php echo $row_portfolio['name']?></td>
                                    <td><?php if($row_portfolio['category_id'] == 1){echo 'Web Development';}else if($row_portfolio['category_id'] == 2){echo 'Graphic Design';}else{echo 'Photography';}?></td>
                                    
                                    <td>
                                        <a href="javascript:void(0)" onclick="editPortfolio(<?php echo $row_portfolio['id']?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="delete_portfolio.php?id=<?php echo $row_portfolio['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php }}?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Reference
                            <a class="btn btn-info pull-right" data-toggle="modal" data-target="#myModalReference" style="margin-top: -7px;">Add</a> 
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Img</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                <?php  
                                if(mysqli_num_rows($result_reference) > 0){
                                    while($row_reference = mysqli_fetch_array($result_reference)){  
                                ?>
                                <tr>
                                    <td><?php echo $row_reference['id']?></td>
                                    <td><img style="width: 80px;" src="images/reference/<?php echo $row_reference['img']?>"></td>
                                    <td><?php echo $row_reference['name']?></td>
                                    <td><?php echo $row_reference['position']?></td>
                                    <td><?php echo $row_reference['description']?></td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="editReference(<?php echo $row_reference['id']?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="delete_reference.php?id=<?php echo $row_reference['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <?php }}?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="myModalSkikkAdd" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Skill</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input class="form-control" name="skill_name" required="" placeholder="Skill" type="text">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Value</label>
                                        <input class="form-control" name="skill_value" required="" value="10" placeholder="Value" type="number">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
		                                <input type="submit" value="Lưu" style="margin-top: 25px;" name="btnSkillAdd" class="btn btn-info">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="myModalEditSkill" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">About</h4>
                    </div>
                    <div class="modal-body" id="show_edit_skill_kq"></div>
                </div>
            </div>
        </div>

        <div id="myModalEditExperience" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Experience</h4>
                    </div>
                    <div class="modal-body" id="show_edit_experience_kq"></div>
                </div>
            </div>
        </div>

        <div id="myModalSocialEdit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Social Network</h4>
                    </div>
                    <div class="modal-body" id="show_edit_social_kq"></div>
                </div>
            </div>
        </div>

        <div id="myModalExperience" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Experience</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input class="form-control" name="experience_name" required="" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input class="form-control" name="experience_title" required="" placeholder="Title" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Time</label>
                                        <input class="form-control" name="experience_time" required="" placeholder="Time" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea class="form-control" name="experience_description" rows="4" cols="50"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
		                                <input type="submit" value="Lưu" name="btnExperienceAdd" class="btn btn-info">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="myModalEducation" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Education</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input class="form-control" name="education_title" required="" placeholder="Title" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Schools</label>
                                        <input class="form-control" name="education_schools" required="" placeholder="Schools" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Diploma</label>
                                        <input class="form-control" name="education_diploma" required="" placeholder="Diploma" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Time</label>
                                        <input class="form-control" name="education_time" required="" placeholder="Time" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea class="form-control" name="education_description" rows="4" cols="50"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Add" name="btnEducationAdd" class="btn btn-info">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
        <div id="myModalPortfolio" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Portfolio</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="thumb thumb-slide" style="border: 1px solid #ccc;">
                                        <img id="avatar1" style="width: 92%; margin: 10px auto 0 auto;" src="images/user.jpg" onerror="this.src='images/user.jpg';" class="img-responsive">
                                        <div class="button-wrapper">
                                            <span class="label">Thay avatar</span>
                                            <div class="form-group field-upload">
                                                <input type="hidden" name="portfolio_img" value="">
                                                <input type="file" id="upload1" class="upload-box" name="portfolio_img" maxlength="255" onchange="readURL1(this);" placeholder="Upload File">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="form-control" name="portfolio_category_id">
                                            <option value="1">Web Development</option>
                                            <option value="2">Graphic Design</option>
                                            <option value="3">Photography</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input class="form-control" name="portfolio_name" required="" placeholder="Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Add" name="btnPortfolio" class="btn btn-info">
                                    </div>                               
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="myModalPortfolioEdit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Portfolio</h4>
                    </div>
                    <div class="modal-body" id="show_edit_portfolio_kq"></div>
                </div>
            </div>
        </div>

        <div id="myModalReference" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Reference</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="thumb thumb-slide" style="border: 1px solid #ccc;">
                                        <img id="avatar3" style="width: 92%; margin: 10px auto 0 auto;" src="images/user.jpg" onerror="this.src='images/user.jpg';" class="img-responsive">
                                        <div class="button-wrapper">
                                            <span class="label">Thay avatar</span>
                                            <div class="form-group field-upload">
                                                <input type="hidden" name="reference_img" value="">
                                                <input type="file" id="upload3" class="upload-box" name="reference_img" maxlength="255" onchange="readURL3(this);" placeholder="Upload File">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input class="form-control" name="reference_name" required="" placeholder="Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Position</label>
                                        <input class="form-control" name="reference_position" required="" placeholder="Position" type="text">
                                    </div>                                    
                                </div>
                                
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea class="form-control" name="reference_description" rows="4" cols="50"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Add" name="btnReference" class="btn btn-info">
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>

            </div>
        </div>
        

        <div id="myModalEducationEdit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Education</h4>
                    </div>
                    <div class="modal-body" id="show_edit_education_kq"></div>
                </div>
            </div>
        </div>

        <div id="myModalReferenceEdit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Reference</h4>
                    </div>
                    <div class="modal-body" id="show_edit_reference_kq"></div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="myModalAbout" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">About</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="thumb thumb-slide" style="border: 1px solid #ccc;">
                                        <img id="avatar" style="width: 92%; margin: 10px auto 0 auto;" src="images/<?php echo $row_about['img']?>" onerror="this.src='images/user.jpg';" class="img-responsive">
                                        <div class="button-wrapper">
                                            <span class="label">Thay avatar</span>
                                            <div class="form-group field-upload">
                                                <input type="hidden" name="img" value="">
                                                <input type="file" id="upload" class="upload-box" name="img" maxlength="255" onchange="readURL(this);" placeholder="Upload File">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Họ tên</label>
                                        <input class="form-control" name="full_name" value="<?php echo $row_about['full_name']?>" required="" placeholder="Họ tên" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Số điện thoại</label>
                                        <input class="form-control" name="phone" value="<?php echo $row_about['phone']?>" required="" placeholder="Phone" type="text">
                                    </div>
                                
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input class="form-control" name="email" value="<?php echo $row_about['email']?>" required="" placeholder="Email" type="email">
                                    </div>
                                
                                    <div class="form-group">
                                        <label class="control-label">Tuổi</label>
                                        <input class="form-control" name="age" value="<?php echo $row_about['age']?>" required="" placeholder="Age" type="number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Skill</label>
                                        <input class="form-control" name="skill" value="<?php echo $row_about['skill']?>" required="" placeholder="Skill" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Language</label>
                                        <input class="form-control" name="language" value="<?php echo $row_about['language']?>" required="" placeholder="Language" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <input class="form-control" name="address" value="<?php echo $row_about['address']?>" required="" placeholder="Address" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea class="form-control" name="description" rows="4" cols="50"><?= $row_about['description']?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
		                                <input type="submit" value="Sửa" name="btnAbout" class="btn btn-info">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>

            </div>
        </div>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#avatar').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };

            function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#avatar1').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };

            function readURL2(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#avatar2').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };

            function readURL3(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#avatar3').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };

            function readURL4(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#avatar4').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };

            function social(){
                
                $.ajax({
                    url: 'edit_social.php',
                    type: 'POST',
                    data: {},
                    success: function(data) {
                        $('#show_edit_social_kq').html(data);
                        $('#myModalSocialEdit').modal('show');
                    },
                    error: function() {
                        alert('Lỗi');
                    }
                });
            }

            function editExperience(id){
                $.ajax({
                    url: 'edit_experience.php',
                    type: 'POST',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        $('#show_edit_experience_kq').html(data);
                        $('#myModalEditExperience').modal('show');
                    },
                    error: function() {
                        alert('Lỗi');
                    }
                });
            }

            function editSkill(id){
                $.ajax({
                    url: 'edit_skill.php',
                    type: 'POST',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        $('#show_edit_skill_kq').html(data);
                        $('#myModalEditSkill').modal('show');
                    },
                    error: function() {
                        alert('Lỗi');
                    }
                });
            }

            function editPortfolio(id){
                $.ajax({
                    url: 'edit_portfolio.php',
                    type: 'POST',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        $('#show_edit_portfolio_kq').html(data);
                        $('#myModalPortfolioEdit').modal('show');
                    },
                    error: function() {
                        alert('Lỗi');
                    }
                });
            }

            function editEducation(id){
                $.ajax({
                    url: 'edit_education.php',
                    type: 'POST',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        $('#show_edit_education_kq').html(data);
                        $('#myModalEducationEdit').modal('show');
                    },
                    error: function() {
                        alert('Lỗi');
                    }
                });
            }

            function editReference(id){
                $.ajax({
                    url: 'edit_reference.php',
                    type: 'POST',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        $('#show_edit_reference_kq').html(data);
                        $('#myModalReferenceEdit').modal('show');
                    },
                    error: function() {
                        alert('Lỗi');
                    }
                });
            }
        </script>
    </body>
</html>