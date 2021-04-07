<!-- //bootstrap 4 login form responsive --Lernrn Tech -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
          *{margin: 0; padding: 0; box-sizing: border-box;}
            hr {
            margin-top: 0.8rem;
            margin-bottom: 0.9rem;
            border: 0;
            border-top: 1px solid rgba(0,0,0,.1);
          }
         .from{
            background: #fceabb; 
            padding: 50px 38px;
            /* border-radius: 10px 0px 10px 0px; */
            box-shadow: 0px 0px 15px 0px #000;
            position: absolute;
            top: 15vh;
            border-radius: 64px 0px 75px 0px;
            -moz-border-radius: 64px 0px 75px 0px;
            -webkit-border-radius: 64px 0px 75px 00px;
            border: 0px solid #000000;
         }
         .btn{
           margin-top: 1px;
         }
    </style>
</head>
<body>
    <section name="" id="" class="container bg">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form action="<?php echo site_url('regis');?>" method="post" class="from">
                    <div class="form-group">
                        <h2 class="text-center">Registration</h2>
                        <hr>
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control pr-5" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo set_value('eamil'); ?>" placeholder="Enter email">
                      <span style="color:red"><?php echo form_error("email");?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control pr-5" id="exampleInputPassword1" value="<?php echo set_value('password'); ?>" placeholder="Password">
                      <span style="color:red"><?php echo form_error("password");?></span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </form>
                </form>
            </section>
        </section>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>