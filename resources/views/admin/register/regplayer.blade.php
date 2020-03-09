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
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="{{url('/reg/save')}}" role="tab" aria-controls="home" aria-selected="true">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Team</a>
                            </li>
                        </ul>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Team</h3>
                                <div class="row register-form">
                                    <div class="col-md-20">
                                         {!! Form::open(['url'=>'/reg/player',]) !!}
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="t_n" placeholder="Team Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="e_c" placeholder="Event code *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="t_r" placeholder="Team reg *" value="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="t_e" class="form-control" placeholder="Team Email *" value="" />

                                        </div>
                                         <div class="form-group">
                                            <input type="password" name="t_p" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                   
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="c"placeholder="captain*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="p" placeholder="players *" value="" />
                                        </div>
                                        <input type="submit" class="btn btn-primary"  value="Register"/>
                                    </div>
                                    {!! Form::close()!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

