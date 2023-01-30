@include('admin.common.header')
@include('admin.common.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Cutting Report</h6>
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
            <form id="cutting_form" name="cutting_form" method="POST" action="{{url('/admin/cutting-report/'.$redirect)}}">
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
                        <!-- /.form-group -->
                    </div>

                </div>

            </div>


            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 style="">Batch Number</h5>
                                <input type="text" name="batch_number" value="<?=isset($results)?$results->batch_number :''?>"  class="form-control" placeholder="AUTO">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Side Plate No.</h5>
                                <input type="text" name="side_plate_no" value="<?=isset($results)?$results->side_plate_no :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 >Timing</h5>
                                <input type="text" name="timing" value="<?=isset($results)?$results->timing :''?>" class="form-control" placeholder="AUTO">
                            </div>

                            <div class="form-group">
                                <h5>Size</h5>
                                <input type="text" name="size" value="<?=isset($results)?$results->size :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Cracks</h5>
                                <input type="text" name="cracks" value="<?=isset($results)?$results->cracks :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Chipping</h5>
                                <input type="text" name="chipping" value="<?=isset($results)?$results->chipping :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Heavy Line</h5>
                                <input type="text" name="heavy_line" value="<?=isset($results)?$results->heavy_line :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Corner Damage</h5>
                                <input type="text" name="corner_damage" value="<?=isset($results)?$results->corner_damage :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Top Layer</h5>
                                <input type="text" class="form-control" name="top_layer" value="<?=isset($results)?$results->top_layer :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Tilting Damage</h5>
                                <input type="text" class="form-control" name="tilting_damage" value="<?=isset($results)?$results->tilting_damage :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Less Raising</h5>
                                <input type="text" class="form-control" name="less_raising" value="<?=isset($results)?$results->less_raising :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Scrap Layer</h5>
                                <input type="text" class="form-control" name="scrap_layer" value="<?=isset($results)?$results->scrap_layer :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>UnCutt Blocks</h5>
                                <input type="text" class="form-control" name="uncutt_blocks" value="<?=isset($results)?$results->uncutt_blocks :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Total Reject Block</h5>
                                <input type="text" class="form-control" name="total_reject_block" value="<?=isset($results)?$results->total_reject_block :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Other</h5>
                                <input type="text" class="form-control" name="other" value="<?=isset($results)?$results->other :''?>" placeholder="Enter ...">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;
                        <a href="{{url('/admin/cutting-report')}}" class="btn btn-warning">Back</a>
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

        $('#cutting_form').validate({
            rules: {
                other: {
                    required: true,
                }, total_reject_block: {
                    required: true,
                }, uncutt_blocks: {
                    required: true,
                }, scrap_layer: {
                    required: true,
                }, less_raising: {
                    required: true,
                }, tilting_damage: {
                    required: true,
                }, top_layer: {
                    required: true,
                }, corner_damage: {
                    required: true,
                }, heavy_line: {
                    required: true,
                }, chipping: {
                    required: true,
                }, cracks: {
                    required: true,
                }, size: {
                    required: true,
                }, timing: {
                    required: true,
                }, side_plate_no: {
                    required: true,
                }, batch_number: {
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
