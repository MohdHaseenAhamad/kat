@include('admin.common.header')
@include('admin.common.sidebar')
<div class="content-wrapper" style="min-height: 498px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>RF Feding Form</h6>
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
            <?php
            $redirect = isset($results) ? 'update/' . $results->id : 'save';
            ?>
            <form id="rf_feding" name="rf_feding" method="POST" action="{{url('/admin/rf-feding/'.$redirect)}}">
            @csrf
            <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xm-6">
                                <div class="form-group ">
                                    <h5 style="text-align: center;">Store Incharge</h5>
                                    <select class="form-control select2 select2-hidden-accessible"
                                            name="store_incharge_id" style="width: 100%;" data-select2-id="1"
                                            tabindex="-1" aria-hidden="true">
                                        <option value="">Select</option>
                                        <?php foreach ($store_incharge as $si)
                                        {
                                        ?>
                                        <option value="<?=$si->id?>" <?=isset($results) ? ($results->store_incharge_id==$si->id ? 'selected="selected"':''):''?>><?=$si->name?></option>
                                        <?php
                                        }?>

                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <div class="col-md-6 col-xs-6">
                                <div class="form-group">
                                    <h5 style="text-align: center;">Shift</h5>
                                    <select class="form-control select2 select2-hidden-accessible" name="shift"
                                            id="shift" style="width: 100%;" data-select2-id="4" tabindex="-1"
                                            aria-hidden="true">
                                        <option value="">Select</option>
                                        <?php foreach (SHIFT as $key=>$value)
                                        {
                                        ?>
                                        <option value="<?=$key?>" <?=isset($results) ? ($results->shift==$key ? 'selected="selected"':''):''?>><?=$value?></option>
                                        <?php
                                        }?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->
                        </div>

                    </div>

                </div>
                <!-- /.card -->

                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 style="">Fly Ash Bulker (Kg)</h5>
                                    <input type="text" class="form-control" name="fly_ash_bulker"
                                           value="<?=isset($results) ? $results->fly_ash_bulker : ''?>"
                                           placeholder="Enter ...">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <h5 style="">Fly Ash Dumper (Kg)</h5>
                                    <input type="text" class="form-control" name="fly_ash_dumper"
                                           value="<?=isset($results) ? $results->fly_ash_dumper : ''?>"
                                           placeholder="Enter ...">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Cement Bulker (Kg)</h5>
                                    <input type="text" class="form-control" name="cement_bulker"
                                           value="<?=isset($results) ? $results->cement_bulker : ''?>"
                                           placeholder="Enter ...">
                                </div>

                                <div class="form-group">
                                    <h5>Cement Bag (Kg)</h5>
                                    <input type="text" class="form-control" name="cement_bag"
                                           value="<?=isset($results) ? $results->cement_bag : ''?>"
                                           placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <h5>Gypsum (Kg)</h5>
                                    <input type="text" class="form-control" name="gypsum"
                                           value="<?=isset($results) ? $results->gypsum : ''?>"
                                           placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <h5>Lime Bulker (Kg)</h5>
                                    <input type="text" class="form-control" name="lime_bulker"
                                           value="<?=isset($results) ? $results->lime_bulker : ''?>"
                                           placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <h5>Lime Bag (Kg)</h5>
                                    <input type="text" class="form-control" name="lime_bag"
                                           value="<?=isset($results) ? $results->lime_bag : ''?>"
                                           placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <h5>Aluminium (Kg)</h5>
                                    <input type="text" class="form-control" name="aluminium"
                                           value="<?=isset($results) ? $results->aluminium : ''?>"
                                           placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <h5>Husk (Kg)</h5>
                                    <input type="text" class="form-control" name="husk"
                                           value="<?=isset($results) ? $results->husk: ''?>"
                                           placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <h5>Soluble (Kg)</h5>
                                    <input type="text" class="form-control" name="soluble"
                                           value="<?=isset($results) ? $results->soluble : ''?>"
                                           placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <h5>moud Oil (litre)</h5>
                                    <input type="text" class="form-control" name="moud_oil"
                                           value="<?=isset($results) ? $results->moud_oil : ''?>"
                                           placeholder="Enter ...">
                                </div>

                            </div>
                            <button type="submit" id="form_submit" class="btn btn-success">Submit
                            </button>&nbsp;&nbsp;
                            <a href="{{url('/admin/rf-feding')}}" class="btn btn-warning">Back</a>
                        </div>

                    </div>


                </div>
            </form>

            <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->
</div>
@include('admin.common.footer')
<script>
    $(document).ready(function () {
        // $.validator.setDefaults({
        //     submitHandler: function () {
        //         alert( "Form successful submitted!" );
        //     }
        // });
        $('#rf_feding').validate({
            rules: {
                store_incharge_id: {
                    required: true,
                },fly_ash_bulker: {
                    required: true,
                },shift: {
                    required: true,
                }, fly_ash_dumper: {
                    required: true,
                }, cement_bulker: {
                    required: true,
                }, cement_bag: {
                    required: true,
                }, gypsum: {
                    required: true,
                }, lime_bulker: {
                    required: true,
                }, lime_bag: {
                    required: true,
                }, aluminium: {
                    required: true,
                }, husk: {
                    required: true,
                }, soluble: {
                    required: true,
                }, moud_oil: {
                    required: true,
                },
            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a vaild email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                terms: "Please accept our terms"
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
            submitHandler: function () {
                form.submit();
            }
        });
    });
</script>
{{--<script>--}}
{{--$(document).ready(function () {--}}
{{--$("#form_submit").on('click',function () {--}}
{{--var form_id = $("#rf_feding");--}}
{{--var targate_loaction = form_id.attr('action');--}}
{{--var form_type = form_id.attr('method');--}}
{{--var form_data = form_id.serialize();--}}
{{--SaveDataUsingAjax(targate_loaction,form_type,form_data);--}}

{{--});--}}
{{--});--}}
{{--</script>--}}
{{--<script src="{{asset('assets/common.js')}}"></script>--}}
