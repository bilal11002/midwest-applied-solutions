<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Syndash - Bootstrap4 Admin Template</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}" type="image/png" />
    <!-- loader-->
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body class="bg-login">
<!-- wrapper -->
<div class="wrapper">
    <div class="section-authentication-register d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="card radius-15 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-xl-6">
                            <div class="card-body p-md-5">
                                <div class="text-center">
                                    <img src="{{ asset('images/logo-icon.png') }}" width="80" alt="">
                                    <h3 class="mt-4 font-weight-bold">Create an Account</h3>
                                </div>
                                <div class="">
                                    <div class="form-body">
                                        @include('flash-messages')
                                        <form class="row g-3" action="{{ route('register.post') }}" method="POST">
                                            @csrf
                                            <div class="col-sm-12">
                                                <label for="inputName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="Full Name">
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Enter Password">
                                                    <a href="javascript:;" class="input-group-text bg-transparent">
                                                        <i class="bx bx-hide"></i>
                                                    </a>
                                                </div>
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bx-user me-1"></i>Sign up</button>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center">
                                                <p>Do you have an account? <a href="{{url('/login')}}">Login here</a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/login-images/register-frent-img.jpg') }}" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end wrapper -->
</body>

<!--plugins-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>

</html>
