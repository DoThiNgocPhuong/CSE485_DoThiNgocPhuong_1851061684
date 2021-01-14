<?php

require "dbconfig.php";

// About
$sql_about = "SELECT * FROM about LIMIT 1";
$query_about = mysqli_query($connect,$sql_about);
$row_about = mysqli_fetch_array($query_about);

// Skill
$sql_skill = "SELECT * FROM skill ORDER BY id DESC";
$result_skill = mysqli_query($connect, $sql_skill);

// Experience
$sql_experience = "SELECT * FROM experience ORDER BY id DESC";
$result_experience = mysqli_query($connect, $sql_experience);

// Social Network
$sql_social = "SELECT * FROM social_network LIMIT 1";
$query_social = mysqli_query($connect,$sql_social);
$row_social = mysqli_fetch_array($query_social);

// Education
$sql_education = "SELECT * FROM education ORDER BY id DESC";
$result_education = mysqli_query($connect, $sql_education);

// Portfolio
$sql_portfolio_web = "SELECT * FROM portfolio Where category_id = 1";
$result_portfolio_web = mysqli_query($connect, $sql_portfolio_web);

$sql_portfolio_design = "SELECT * FROM portfolio Where category_id=2";
$result_portfolio_design = mysqli_query($connect, $sql_portfolio_design);

$sql_portfolio_photography = "SELECT * FROM portfolio Where category_id=3";
$result_portfolio_photography = mysqli_query($connect, $sql_portfolio_photography);

// Reference
$sql_reference = "SELECT * FROM reference";
$result_reference = mysqli_query($connect, $sql_reference);
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience." />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <link href="https://www.cssscript.com/demo/beautiful-native-javascript-alert-replacement-sweet-alert/lib/sweet-alert.css" rel="stylesheet">

</head>

<body id="top">
    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">CV</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content">
        <div>
            <div class="profile-page">
                <div class="wrapper">
                    <div class="page-header page-header-small" filter-color="green">
                        <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
                        <div class="container">
                            <div class="content-center">
                                <div class="cc-profile-image">
                                    <a href="#">
                                        <img src="images/<?php echo $row_about['img']?>" onerror="this.src='images/user.jpg';" alt="<?php echo $row_about['full_name']?>" />
                                    </a>
                                </div>
                                <div class="h2 title"><?php echo $row_about['full_name']?></div>
                                <p class="category text-white"><?php echo $row_about['skill']?></p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="#" data-aos="zoom-in"
                                    data-aos-anchor="data-aos-anchor">Download CV</a>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="button-container">
                                    <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $row_social['fb']?>" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $row_social['twitter']?>" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $row_social['google']?>" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a>
                                    <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $row_social['instagram']?>" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="about">
                <div class="container">
                    <div class="card" data-aos="fade-up" data-aos-offset="10">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card-body">
                                    <div class="h4 mt-0 title">About</div>
                                    <p><?php echo $row_about['description']?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card-body">
                                    <div class="h4 mt-0 title">Basic Information</div>
                                    <div class="row">
                                        <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                                        <div class="col-sm-8"><?php echo $row_about['age']?></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                        <div class="col-sm-8"><?php echo $row_about['email']?></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                                        <div class="col-sm-8"><?php echo $row_about['phone']?></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                                        <div class="col-sm-8"><?php echo $row_about['address']?></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
                                        <div class="col-sm-8"><?php echo $row_about['language']?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="skill">
                <div class="container">
                    <div class="h4 text-center mb-4 title">Professional Skills</div>
                    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="card-body">
                            <div class="row">
                                <?php  
                                if(mysqli_num_rows($result_skill) > 0){
                                    while($row_skill = mysqli_fetch_array($result_skill)){  
                                ?>
                                <div class="col-md-6">
                                    <div class="progress-container progress-primary"><span class="progress-badge"><?php echo $row_skill['name']?></span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="<?php echo $row_skill['value']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row_skill['value']?>%;"></div><span class="progress-value"><?php echo $row_skill['value']?>%</span>
                                        </div>
                                    </div>
                                </div>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="h4 text-center mb-4 title">Portfolio</div>
                            <div class="nav-align-center">
                                <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-development" role="tablist"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photography" role="tablist"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content gallery mt-5">
                        <div class="tab-pane active" id="web-development">
                            <div class="ml-auto mr-auto">
                                <div class="row">
                                    <?php  
                                        if(mysqli_num_rows($result_portfolio_web) > 0){
                                            while($row_portfolio_web = mysqli_fetch_array($result_portfolio_web)){   
                                    ?>
                                    <div class="col-md-6">
                                        <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                            <a href="#web-development">
                                                <figure class="cc-effect"><img src="images/portfolio/<?php echo $row_portfolio_web['img']?>" alt="Image" />
                                                    <figcaption>
                                                        <div class="h4"><?php echo $row_portfolio_web['name']?></div>
                                                        <p>Web Development</p>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <?php }}?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="graphic-design" role="tabpanel">
                            <div class="ml-auto mr-auto">
                                <div class="row">
                                    <?php  
                                        if(mysqli_num_rows($result_portfolio_design) > 0){
                                            while($row_portfolio_design = mysqli_fetch_array($result_portfolio_design)){   
                                    ?>
                                    <div class="col-md-6">
                                        <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                            <a href="#graphic-design">
                                                <figure class="cc-effect"><img src="images/portfolio/<?php echo $row_portfolio_design['img']?>" alt="Image" />
                                                    <figcaption>
                                                        <div class="h4"><?php echo $row_portfolio_design['name']?></div>
                                                        <p>Graphic Design</p>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <?php }}?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Photography" role="tabpanel">
                            <div class="ml-auto mr-auto">
                                <div class="row">
                                    <?php  
                                        if(mysqli_num_rows($result_portfolio_photography) > 0){
                                            while($row_portfolio_photography = mysqli_fetch_array($result_portfolio_photography)){   
                                    ?>
                                    <div class="col-md-6">
                                        <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                            <a href="#Photography">
                                                <figure class="cc-effect"><img src="images/portfolio/<?php echo $row_portfolio_photography['img']?>" alt="Image" />
                                                    <figcaption>
                                                        <div class="h4"><?php echo $row_portfolio_photography['name']?></div>
                                                        <p>Photography</p>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <?php }} ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="experience">
                <div class="container cc-experience">
                    <div class="h4 text-center mb-4 title">Work Experience</div>
                    <?php  
                        if(mysqli_num_rows($result_experience) > 0){
                            while($row_experience = mysqli_fetch_array($result_experience)){  
                    ?>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body cc-experience-header">
                                    <p><?php echo $row_experience['time']?></p>
                                    <div class="h5"><?php echo $row_experience['name']?></div>
                                </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body">
                                    <div class="h5"><?php echo $row_experience['title']?></div>
                                    <p><?php echo $row_experience['description']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
            <div class="section">
                <div class="container cc-education">
                    <div class="h4 text-center mb-4 title">Education</div>
                    <?php  
                        if(mysqli_num_rows($result_education) > 0){
                            while($row_education = mysqli_fetch_array($result_education)){  
                    ?>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body cc-education-header">
                                    <p><?php echo $row_education['created_time']?></p>
                                    <div class="h5"><?php echo $row_education['diploma']?></div>
                                </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body">
                                    <div class="h5"><?php echo $row_education['title']?></div>
                                    <p class="category"><?php echo $row_education['schools']?></p>
                                    <p><?php echo $row_education['description']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <div class="section" id="reference">
                <div class="container cc-reference">
                    <div class="h4 mb-4 text-center title">References</div>
                    <div class="card" data-aos="zoom-in">
                        <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#cc-Indicators" data-slide-to="0"></li>
                                <li data-target="#cc-Indicators" data-slide-to="1"></li>
                                <li data-target="#cc-Indicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                
                                <div class="carousel-inner">
                                    <?php  
                                    if(mysqli_num_rows($result_reference) > 0){
                                        $i=0;
                                        while($row_reference = mysqli_fetch_array($result_reference)){  
                                            $i++;
                                    ?>
                                    <div class="carousel-item <?php if($i == 1){echo 'active';}?>">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference/<?php echo $row_reference['img']?>" alt="Image" />
                                                <div class="h5 pt-2"><?php echo $row_reference['name']?></div>
                                                <p class="category"><?php echo $row_reference['position']?></p>
                                            </div>
                                            <div class="col-lg-10 col-md-9">
                                                <p><?php echo $row_reference['description']?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }} ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="contact">
                <div class="cc-contact-information" style="background-image: url('images/staticmap.png');">
                    <div class="container">
                        <div class="cc-contact">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="card mb-0" data-aos="zoom-in">
                                        <div class="h4 text-center title">Contact Me</div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <form action="" id="frm_contact" method="POST">
                                                        <div class="p pb-3"><strong>Feel free to contact me </strong></div>
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                                                    <input class="form-control" type="text" name="name" placeholder="Name" required="required" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                                                                    <input class="form-control" type="text" name="subject" placeholder="Subject" required="required" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                    <input class="form-control" type="email" name="email" placeholder="E-mail" required="required" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <a class="btn btn-primary" onclick="submitContact()" type="submit">Send</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <p class="mb-0"><strong>Address </strong></p>
                                                    <p class="pb-2"><?php echo $row_about['address']?></p>
                                                    <p class="mb-0"><strong>Phone</strong></p>
                                                    <p class="pb-2"><?php echo $row_about['phone']?></p>
                                                    <p class="mb-0"><strong>Email</strong></p>
                                                    <p><?php echo $row_about['email']?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container text-center">
            <a class="cc-facebook btn btn-link" href="<?php echo $row_social['fb']?>"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
            <a class="cc-twitter btn btn-link " href="<?php echo $row_social['twitter']?>"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a>
            <a class="cc-google-plus btn btn-link" href="<?php echo $row_social['google']?>"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
            <a class="cc-instagram btn btn-link" href="<?php echo $row_social['instagram']?>"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a>
        </div>
        <div class="h4 title text-center"><?php echo $row_about['full_name']?></div>
        
    </footer>
    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
    <script type="text/javascript" src="https://www.cssscript.com/demo/beautiful-native-javascript-alert-replacement-sweet-alert/lib/sweet-alert.js"></script>
    <script>
        function submitContact(){
            $.ajax({
                url: 'contact.php',
                type: 'POST',
                data: $("#frm_contact").serializeArray(),
                success: function(data) {
                    swal("OK", "Đã gửi thành công", "success");
                }
            });
        }
    </script>
</body>

</html>