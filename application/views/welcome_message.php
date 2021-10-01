<html>

<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style type="text/css">
    .register{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        margin-top: 3%;
        padding: 3%;
    }
    .register-left{
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }
    .register-left input{
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }
    .register-right{
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }
    .register-left img{
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite  alternate;
        animation: mover 1s infinite  alternate;
    }
    @-webkit-keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    .register-left p{
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }
    .register .register-form{
        padding: 10%;
        margin-top: 10%;
    }
    .btnRegister{
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #0062cc;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }
    .register .nav-tabs{
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }
    .register .nav-tabs .nav-link{
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }
    .register .nav-tabs .nav-link:hover{
        border: none;
    }
    .register .nav-tabs .nav-link.active{
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }
    .register-heading{
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }
</style>
</head>

<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Assignment</h3>
                        <p>for mplus</p>
                        <a href="<?= site_url() ?>/Welcome/user_login" class="text-white bg-dark p-2">Login</a>
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Signup as a User or Admin</h3>
                                <form method="POST" id="signupform" >
                                
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name *" value="" name="name" id="name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" id="phone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address *" value="" name="address" id="address"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" id="email" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="designation" value="Admin" checked>
                                                    <span> Admin </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="designation" value="User">
                                                    <span>User </span> 
                                                </label>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                        
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password" id="password" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="conpassword" id="conpassword"/>
                                        </div>
                                        <div class="form-group">
                                            <button name="submit" type="submit" class="form-control">Signup</button>
                                        </div>

                        
                                    </div>
                                </div>
                                </form>

                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

</body>

<script type="text/javascript">
			$(document).ready(function () {
				$('#signupform').bootstrapValidator({
					message: 'This value is not valid',
					fields: {
						name: {
                               validators: {
                                    notEmpty: {
                                         message: 'Name is required'
                                    },
                                    stringLength: {
                                    min: 6,
                                    max: 30,
                                    message: 'The name must be more than 6 and less than 40 characters</br>'
                                    },
                                    regexp: {
                                    regexp: /^[a-zA-Z ]+$/,
                                    message: 'The name can only consist of alphabetical'
                                    }
                               }
                          },
                        email: {
                               validators: {
                                    notEmpty: {
                                         message: 'Email is required'
                                    },
                                    regexp: {
                                         regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                                         message: 'Enter valid an email address'
                                    }
                               }
                          },
                        address: {
                               validators: {
                                  notEmpty: {
                                    message: 'Address is required'
                                    },
                                    stringLength: {
                                      min: 20,
                                        message: 'Address is too short'
                                    }
                                   
                              }
                          },
                        phone: {
                               validators: {
                                    notEmpty: {
                                         message: 'Mobile number is required'
                                    },
                                    stringLength:{
                                      min: 10,
                                        message: 'Phone number must be 10 digits'
                                    },
                                    regexp: {
                                    regexp: /^[0-9]+$/,
                                    message: 'characters not allowed'
                                    }
                               }
                          },
                        password: {
                              validators: {
                                   notEmpty: {
                                        message: 'Password is required'
                                   },
                                   identical: {
                                        field: 'conpassword',
                                        message: 'Your password does not match </br>'
                                   },
                                   stringLength:{
                                    min: 6,
                                  
                                    message: 'Password too short'
                                   }
                               }
                          },
                        conpassword: {
                               validators: {
                                   notEmpty: {
                                        message: 'Confirm Password is required'
                                   },
                                   identical: {
                                        field: 'password',
                                        message: 'Your password does not match </br>'
                                   },
                                   stringLength:{
                                    min: 6,
                                   
                                    message: 'Password too short'
                                   }
                               }
                          },
					}
				});
			});

		</script>

<script type="text/javascript">
         $(document).ready(function(e) {
               $("#signupform").on('submit', (function(e) {
                    //e.preventDefault();
                    if (e.isDefaultPrevented()) {
                         //alert('invalid');
                    } else {
                         $("#preview3").html('<img src="<?= base_url() ?>assets/images/default.gif" style="height:30px;width:30px;" alt="Uploading data...."/>');
                         $("#preview3").show();
                         $.ajax({
                              url: "<?php echo site_url('welcome/signup'); ?>",
                              type: "POST",
                              data: new FormData(this),
                              contentType: false,
                              cache: false,
                              processData: false,
                              success: function(data) {
                                  
                                   
                                   setTimeout(function() {
                                        window.location = "<?php echo site_url('Welcome/user_login') ?>";
                                   }, 2000);
                              },
                              error: function() {
                                   alert('fail');
                              }
                         });
                    }
                    return false;
               }));  
          });  
</script>
</html>