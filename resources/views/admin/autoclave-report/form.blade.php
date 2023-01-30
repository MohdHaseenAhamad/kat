@include('admin.common.header')
@include('admin.common.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Autoclave Report</h6>
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
            $redirect = isset($results) ? 'update/'.$results->id: 'save';
            ?>
            <form id="autoclave_form" name="autoclave_form" method="POST" action="{{url('admin/autoclave-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Autoclave Number</h5>
                                <select class="form-control select2" name="autoclave_number" style="width: 100%;">
                                    <option value="">Select</option>
                                    <?php foreach (AUTOCLAVE_NUMBER as $key=>$value)
                                        {
                                            ?>
                                    <option value="<?=$key?>" <?=isset($results) ? ($key==$results->autoclave_number ? 'selected="selected"':''):'' ?> ><?=$value?></option>
<?php
                                        }
                                        ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Opt Name</h5>
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
                        <!-- /.form-group -->
                    </div>

                </div>
            </div>
            <!-- /.card -->

            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Casting Number</h5>
                                <select class="form-control select2" name="casting_number" style="width: 100%;">
                                    <option value="">Select</option>
                                    <?php foreach (CASTING_NUMBER as $key=>$value)
                                    {
                                    ?>
                                    <option value="<?=$key?>" <?=isset($results) ? ($key==$results->casting_number ? 'selected="selected"':''):'' ?>><?=$value?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Material Receipt</h5>
                                <input type="text" class="form-control" name="material_receipt" value="<?=isset($results) ? $results->material_receipt:''?>" placeholder="Auto Time">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 >Door Closing</h5>
                                <input type="text" class="form-control" name="door_closing" value="<?=isset($results) ? $results->door_closing:''?>" placeholder="AUTO TiME">
                            </div>

                            <div class="form-group">
                                <h5>Vacuum Time </h5>
                                <input type="text" class="form-control" name="vacuum_time" value="<?=isset($results) ? $results->vacuum_time:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Rising Time </h5>
                                <input type="text" class="form-control" name="rising_time" value="<?=isset($results) ? $results->rising_time:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Pressure (Kg/Cm2)</h5>
                                <input type="text" class="form-control" name="pressure" value="<?=isset($results) ? $results->pressure:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Temp(*c)</h5>
                                <input type="text" class="form-control" name="temp" value="<?=isset($results) ? $results->temp:''?>" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <h5>Door Opening</h5>
                                <input type="text" name="door_opening" class="form-control" value="<?=isset($results) ? $results->door_opening:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5 style="text-align: center;">Stream Transfer</h5>
                                <select class="form-control select2" name="stream_transfer" style="width: 100%;">
                                    <option value="">Select</option>
                                    <?php foreach (STREET_TRANSFER as $key=>$value)
                                    {
                                    ?>
                                    <option value="<?=$key?>" <?=isset($results) ? ($results->stream_transfer ==$key ? 'selected="selected"':''):''?>><?=$value?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <h5 style="text-align: center;">Transfer To</h5>
                                <select class="form-control select2" name="transfer_to" style="width: 100%;">
                                    <option value="">Select</option>
                                    <?php foreach (TRANSFER_TO as $key=>$value)
                                    {
                                    ?>
                                    <option value="<?=$key?>" <?=isset($results) ? ($key==$results->transfer_to ? 'selected="selected"':''):'' ?>><?=$value?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <h5>Time Stream Transfer</h5>
                                <input type="text" class="form-control" name="time_stream_transfer" value="<?=isset($results) ? $results->time_stream_transfer:''?>" placeholder="Enter ...">
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;
                    <a href="{{url('/admin/autoclave-report')}}" class="btn btn-warning">Back</a>
                </div>

            </div>
            </form>

        </div>
    </section>

        <!-- /.row -->
</div>
@include('admin.common.footer')
<script>
    $(document).ready(function () {

        $('#autoclave_form').validate({
            rules: {
                autoclave_number: {
                    required: true,
                }, operater_id: {
                    required: true,
                }, shift: {
                    required: true,
                }, casting_number: {
                    required: true,
                }, material_receipt: {
                    required: true,
                }, door_closing: {
                    required: true,
                }, vacuum_time: {
                    required: true,
                }, rising_time: {
                    required: true,
                }, pressure: {
                    required: true,
                }, temp: {
                    required: true,
                }, door_opening: {
                    required: true,
                }, stream_transfer: {
                    required: true,
                }, flow_and_height: {
                    required: true,
                }, slide_plate: {
                    required: true,
                }, shift: {
                    required: true,
                }, operater_id: {
                    required: true,
                }, transfer_to: {
                    required: true,
                }, time_stream_transfer: {
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
