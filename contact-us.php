<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TEDx | Contact</title>
    <!-- core CSS -->
    <?php include('css.php');?> <!--including common css -->
</head><!--/head-->

<body>
    <?php include('header.php');?> <!--including header -->

    <br/><br/>
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead">Got some query/feedback? Drop us a message.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label><strong>Name </strong>*</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Email </strong>*</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Phone</strong></label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label><strong>Company Name</strong></label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><strong>Subject </strong>*</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><strong>Message </strong>*</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Send Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
    <?php include('bottom.php');?> <!--including bottom -->

    <?php include('footer.php');?> <!--including footer -->
    
    <?php include('scripts.php');?> <!--including common scripts -->

</body>
</html>