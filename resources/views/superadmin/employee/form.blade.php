@include('superadmin.common.header')
@include('superadmin.common.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Department</a></li>
                        <li class="breadcrumb-item active"><?=$mode?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <?php
            $url = isset($result) ? url('superadmin/employee/update/'.$result->id):url('superadmin/employee/save')
            ?>
            <form method="POST" name="emp_form" id="emp_form" action="<?=$url?>">
                @csrf
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 col-xm-6">
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="form-group">
                                    <h5 style="">Employee Type</h5>
                                    <select class="form-control select2" name="emp_type">
                                        <option value="">Select Employee Type</option>
                                        <?php foreach ($department as $dep)
                                            {
                                                ?>
                                        <option value="<?=$dep->id?>" <?=isset($result) ? (($result->dep_id == $dep->id) ? 'selected=selected':'') :'' ?>><?=$dep->name?></option>
<?php
                                            }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 style="">Employee Name</h5>
                                    <input type="text" class="form-control" name="name"
                                           value="<?=isset($result) ? $result->name:''?>"
                                           placeholder="Enter Employee Name...">
                                </div>
                                <div class="form-group">
                                    <h5 style="">Employee Phone Number</h5>
                                    <input type="text" class="form-control" name="phone"
                                           value="<?=isset($result) ? $result->phone:''?>"
                                           placeholder="Enter Employee Phone Number...">
                                </div>
                                <div class="form-group">
                                    <h5 style="">Employee Email</h5>
                                    <input type="text" class="form-control" name="email"
                                           value="<?=isset($result) ? $result->email:''?>"
                                           placeholder="Enter Employee email...">
                                </div>
                                <div class="form-group">
                                    <h5 style="">Employee Addrees</h5>
                                    <input type="text" class="form-control" name="address"
                                           value="<?=isset($result) ? $result->address:''?>"
                                           placeholder="Enter Employee address...">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success submit_btn">Submit</button>
                                <a href="{{url('superadmin/employee')}}" class="btn btn-warning">Back</a>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-md-3"></div>
                <!-- /.card -->

                <!-- SELECT2 EXAMPLE -->

            </form>

        </div>
    </section>

    <!-- /.row -->
</div>
@include('superadmin.common.footer')
<script>
    $(document).ready(function () {
        $('#emp_form').validate({
            rules: {
                name:{
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                phone:
                    {
                        required: true,
                        digits:true,
                        maxlength:function () {
                            return '10';
                        },
                        minlength: function () {
                            return '10'
                        }
                    },
                address:{
                    required:true,
                },
                emp_type:{
                    required:true,
                }
            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a vaild email address"
                },
                phone: {
                    required: "Please enter a phone address",
                    minlength: "Your phone must be at least 10 characters long",
                    maxlength: "Your phone max limit length 10"
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
                $('.submit_btn').attr('disabled', 'disabled');
                form.submit();
            }
        });
    });

</script>
