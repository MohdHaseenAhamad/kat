<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Katari</b>Ecotech</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if ($message = Session::get('warning'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <form name="send_otp_form" id="send_otp_form" action="{{url('/send-otp')}}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input type="tel" class="form-control" name="usr_phone" id="usr_phone" maxlength="10" placeholder="Phone Number">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Send OTP</button>
                    </div>
                </div>
            </form>

            {{--<div class="social-auth-links text-center mb-3">--}}
                {{--<p>- OR -</p>--}}
                {{--<a href="#" class="btn btn-block btn-primary">--}}
                    {{--<i class="fab fa-facebook mr-2"></i> Sign in using Facebook--}}
                {{--</a>--}}
                {{--<a href="#" class="btn btn-block btn-danger">--}}
                    {{--<i class="fab fa-google-plus mr-2"></i> Sign in using Google+--}}
                {{--</a>--}}
            {{--</div>--}}
            <!-- /.social-auth-links -->

            {{--<p class="mb-1">--}}
                {{--<a href="forgot-password.html">I forgot my password</a>--}}
            {{--</p>--}}
            {{--<p class="mb-0">--}}
                {{--<a href="register.html" class="text-center">Register a new membership</a>--}}
            {{--</p>--}}
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#send_otp_form').validate({
            rules: {
                usr_phone: {
                    required: true,
                    digits:true,
                    {{--remote:{--}}
                        {{--url:'{{url("/check-phone-number")}}',--}}
                        {{--type:"POST",--}}
                        {{--data:{--}}
                            {{--usr_phone:function () {--}}
                             {{--return $("#usr_phone").val();--}}
                            {{--},--}}
                            {{--_token: '<?= csrf_token() ?>'--}}
                        {{--},--}}
                        {{--success:function (res) {--}}
                            {{--if(res)--}}
                            {{--{--}}
                                {{--return true;--}}
                            {{--}else--}}
                            {{--{--}}
                                {{--alert($("#usr_phone").val() + ' phone number not Register Please Connect with admin');--}}
                            {{--}--}}
                        {{--}--}}
                    {{--},--}}
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
            invalidHandler: function (form, validator) {
                if (!validator.numberOfInvalids())
                    return;

                jQuery('html, body').animate({
                    scrollTop: jQuery(validator.errorList[0].element).offset().top - 150
                }, "fast");
            },
            submitHandler: function (form) {
                $('#submit_btn').attr('disabled', 'disabled');
                form.submit();
            }
        });
    });
</script>
</body>
</html>
