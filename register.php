<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TEDx | Register</title>
    <!-- core CSS -->
    <?php include('css.php');?> <!--including common css -->
</head><!--/head-->
<body>
    <?php include('header.php');?> <!--including header -->
    
    <section id="register-page">
        <div class="container">
            <div class="center">        
                <h2>Register Yourself To Get Event Pass</h2>
                <p class="lead"><strong>Info</strong>: Attendees need to pay fee.</p>
            </div>
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label><strong>First Name </strong>*</label>
                            <input type="text" name="first_name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Last Name </strong>*</label>
                            <input type="text" name="last_name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Email </strong>*</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Phone</strong>*</label>
                            <input type="number" class="form-control" required="required" name="phone">
                        </div>
                                            
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><strong>Company Name</strong>*</label>
                            <input type="text" class="form-control" required="required" name="company_name">
                        </div> 
                        <div class="form-group">
                            <label><strong>Designation </strong>*</label>
                            <input type="text" name="designation" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>About Yourself</strong></label>
                            <textarea rows="5" name="about_yourself" id="about_yourself"  class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="register" class="btn btn-primary btn-lg" required="required">Register</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div> <!-- container -->
    </section>
    
    
    <?php include('bottom.php');?> <!--including bottom -->

    <?php include('footer.php');?> <!--including footer -->
    
    <?php include('scripts.php');?> <!--including common scripts -->
    
</body>
</html>