<!DOCTYPE html> 
<html lang="en" class="no-js"> 
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta charset="UTF-8"> 
    <title>Merch Store - Register</title> 
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/bootstrap.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/main.css') }}"> 
</head> 
<body> 
    @include('sweetalert::alert') 

    <section class="login_box_area section_gap"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-lg-6"> 
                    <div class="login_box_img"> 
                        <img class="img-fluid" src="{{ asset('assets/templates/user/img/login.jpg') }}" alt="Login Image"> 
                    </div> 
                </div> 
                <div class="col-lg-6"> 
                    <div class="login_form_inner"> 
                        <h3>Register New Account</h3> 
                        <form class="row login_form" action="{{ route('post.register') }}" method="POST" id="contactForm" novalidate="novalidate"> 
                            @csrf 
                            <div class="col-md-12 form-group"> 
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"> 
                            </div> 
                            <div class="col-md-12 form-group"> 
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"> 
                            </div> 
                            <div class="col-md-12 form-group"> 
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password"> 
                            </div> 
                            <div class="col-md-12 form-group"> 
                                <button type="submit" value="submit" class="primary-btn">Create Account</button> 
                            </div> 
                        </form> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </section> 

    <script src="{{ asset('assets/templates/user/js/vendor/jquery-2.2.4.min.js') }}"></script> 
    <script src="{{ asset('assets/templates/user/js/vendor/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('assets/templates/user/js/main.js') }}"></script> 
</body> 
</html>
