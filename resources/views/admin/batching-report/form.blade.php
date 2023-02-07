@include('admin.common.header')
@include('admin.common.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Batching Report</h6>
                </div>
                <!--<div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Advanced Form</li>
                  </ol>
                </div>-->
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
            $redirect = isset($results) ? 'update/'.$results->id : 'save';
            ?>
            <form id="batching_form" name="batching_form"  method="POST" action="{{url('/admin/batching-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Operator Name</h5>
                                <select class="form-control select2" name="operater_id" style="width: 100%;">
                                    <option value="">Select</option>
                                    <?php foreach ($operator as $opr) { ?>
                                    <option value="<?=$opr->id?>" <?=isset($results) ? ($opr->id==$results->operater_id ? 'selected="selected"':''):'' ?>><?=$opr->name?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="col-md-6 col-xs-6">
                            <div class="form-group">
                                <h5 style="text-align: center;">Shift</h5>
                                <select class="form-control select2" name="shift" style="width: 100%;">
                                    <option value="">Select</option>
                                    <?php foreach (SHIFT as $key=>$value)
                                    {
                                    ?>
                                    <option value="<?=$key?>" <?=isset($results) ? ($key==$results->shift ? 'selected="selected"':''):'' ?>><?=$value?></option>
                                    <?php
                                    }?>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.card -->

            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 style="">Mould/Slide Plate</h5>
                                <input type="text" class="form-control"  name="slide_plate" value ="<?=isset($results) ? $results->slide_plate:'' ?>" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Flow/Height</h5>
                                <input type="text" class="form-control" name="flow_and_height" value ="<?=isset($results) ? $results->flow_and_height:'' ?>" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 >F. Slurry</h5>
                                <input type="text" class="form-control" name="f_slurry" value ="<?=isset($results) ? $results->f_slurry:'' ?>" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <h5>R. Slurry</h5>
                                <input type="text" class="form-control" name="r_slurry" value ="<?=isset($results) ? $results->r_slurry:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Cement</h5>
                                <input type="text" class="form-control" name="cement" value ="<?=isset($results) ? $results->cement:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Lime</h5>
                                <input type="text" class="form-control" name="lime" value ="<?=isset($results) ? $results->lime:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Gypsum</h5>
                                <input type="text" class="form-control" name="gypsum" value ="<?=isset($results) ? $results->gypsum:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Aluminium Powder</h5>
                                <input type="text" class="form-control" name="aluminium_powder" value ="<?=isset($results) ? $results->aluminium_powder:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Extra Water</h5>
                                <input type="text" class="form-control" name="extra_water" value ="<?=isset($results) ? $results->extra_water:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>S. Oil</h5>
                                <input type="text" class="form-control" name="s_oil" value ="<?=isset($results) ? $results->s_oil:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Discharge Temp.</h5>
                                <input type="text" class="form-control" name="discharge_temp" value ="<?=isset($results) ? $results->discharge_temp:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Discharge Time</h5>
                                <input type="text" class="form-control" name="discharge_time" value ="<?=isset($results) ? $results->discharge_time: date(DATE_FORMAT) ?>" placeholder="Enter ..." readonly>
                            </div>
                            <div class="form-group">
                                <h5>Mixing Time</h5>
                                <input type="text" class="form-control" name="mixing_time" value ="<?=isset($results) ? $results->mixing_time:'' ?>" placeholder="Enter ...">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;
                        <a href="{{url('/admin/batching-report')}}" class="btn btn-warning">Back</a>
                    </div>

                </div>


            </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('admin.common.footer')
<script>
    $(document).ready(function () {

        $('#batching_form').validate({
            rules: {
                operater_id: {
                    required: true,
                }, mixing_time: {
                    required: true,
                }, discharge_time: {
                    required: true,
                }, discharge_temp: {
                    required: true,
                }, s_oil: {
                    required: true,
                }, extra_water: {
                    required: true,
                }, aluminium_powder: {
                    required: true,
                }, gypsum: {
                    required: true,
                }, lime: {
                    required: true,
                }, cement: {
                    required: true,
                }, r_slurry: {
                    required: true,
                }, f_slurry: {
                    required: true,
                }, flow_and_height: {
                    required: true,
                }, slide_plate: {
                    required: true,
                }, shift: {
                    required: true,
                }, operater_id: {
                    required: true,
                }
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
