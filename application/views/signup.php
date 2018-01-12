<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>
    <link href="<?php echo asset_url() ?>css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>css/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>css/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo asset_url() ?>css/build/custom.min.css" rel="stylesheet">

  </head>

  <body class="login">
    <div>
      
      <div class="login_wrapper">
        <div class="animate form login_form">
           <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-block alert-success">
                <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php }else if($this->session->flashdata('error')){  ?>
            <div class="alert alert-block alert-danger">
                <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>
          <section class="login_content">
            <form action="<?php echo base_url()?>index.php/signup/registeration" method="POST"  id="loginform">
              <h1><img src="<?php echo asset_url() ?>images/logo.png"></h1>
              <div>
                <input type="text" class="form-control" placeholder="Name" id="name" name="name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" id="username" name="username" />
              </div>
              <div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password"/>
              </div>

              <div>
                <input type="password" id="pin" name="pin" class="form-control" placeholder="6 Digit Pin" />
              </div>

              <div>
                <button type="submit"  onclick="return validateLogin();" class="btn btn-success">Submit</button>
                <button class="btn btn-primary" type="reset">Reset</button>
               <!--  <a class="btn btn-default submit" href="index.html">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already have account?
                  <a href="<?php echo base_url();?>" class="to_register"> Login Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i></h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      <!--   <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div> -->
      </div>
    </div>
  </body>
</html>
 <script src="<?php echo asset_url() ?>css/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">

function validateLogin()
{

    var username=$("#username").val();
    var password=$("#password").val();
    
    if(username=='')
    {
        $(".form-errors").fadeIn();
        $(".form-errors").html('Enter all data for all required fields.(marked with an astrick)');
        setTimeout(function() {
            $(".form-errors").fadeOut();
        }, 5000 );
        return false;
    }
    else if(password=='')
    {
        $(".form-errors").fadeIn();
        $(".form-errors").html('Enter all data for all required fields.(marked with an astrick)');
        setTimeout(function() {
            $(".form-errors").fadeOut();
        }, 5000 );
        return false;
    }
   
    else 
    {
        return true;
    }
}
</script>