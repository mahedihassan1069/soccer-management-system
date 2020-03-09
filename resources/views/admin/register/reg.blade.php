<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="/css/reg.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <h4><a class="nav-link active" id="home-tab" data-toggle="tab" href="/logout" role="tab" aria-controls="home" aria-selected="true" style="color:red">Login</a></h4>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="{{url('/reg/player')}}" role="tab" aria-controls="profile" aria-selected="true">Team</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Admin</h3>
                                <div class="row register-form">
                                    {!! Form::open(['url'=>'/reg/save',]) !!}
                                    <div class="col-md-20">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fname" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="position" placeholder="position *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="dept_name" placeholder="Dept Name *" value="" />
                                        
                                        </div>
                                    
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />

                                        </div>
                                         <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="11" maxlength="11" name="phone_number" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <input  type="submit" class="btn btn-primary" value="Register"/>
                                    </div>
                                    {!! Form::close()!!}
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>

            </div>
