@extends('layouts.app') @section('content')
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Odontologia The angel</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body id="banner" class="banner">
    <div class="bg-color">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
                        <a class="navbar-brand" href="/"><img src="storage/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header">{{ __('Reset Password') }}</div>

                                            <div class="card-body">
                                                @if (session('status'))
                                                <div class="alert alert-success">
                                                    {{ session('status') }}
                                                </div>
                                                @endif

                                                <form method="POST" action="{{ route('password.email') }}">
                                                    @csrf

                                                    <div class="form-group row">
                                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endsection
                            <footer id="footer">
                                <div class="top-footer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 marb20">
                                                <div class="ftr-tle">
                                                    <h4 class="white no-padding">About Us</h4>
                                                </div>
                                                <div class="info-sec">
                                                    <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 marb20">
                                                <div class="ftr-tle">
                                                    <h4 class="white no-padding">Quick Links</h4>
                                                </div>
                                                <div class="info-sec">
                                                    <ul class="quick-info">
                                                        <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                                                        <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
                                                        <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 marb20">
                                                <div class="ftr-tle">
                                                    <h4 class="white no-padding">Follow us</h4>
                                                </div>
                                                <div class="info-sec">
                                                    <ul class="social-icon">
                                                        <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                                                        <li class="bgred"><i class="fa fa-google-plus"></i></li>
                                                        <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                                                        <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-line">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                © Copyright Medilab Theme. All Rights Reserved
                                                <div class="credits">
                                                    <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
              -->
                                                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                            <!--/ footer-->
                    </div>
                    <script src="../js/jquery.min.js"></script>
                    <script src="../js/jquery.easing.min.js"></script>
                    <script src="../js/bootstrap.min.js"></script>
                    <script src="../js/custom.js"></script>
                    <script src="../contactform/contactform.js"></script>

</body>

</html>
