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
            $redirect = isset($results) ? 'update/'.$results['ar_id']: 'save';
            ?>
            <form method="POST" action="{{url('admin/autoclave-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Autoclave Number</h5>
                                <select class="form-control select2" name="ar_autoclave_number" style="width: 100%;">
                                    <option selected="selected" value="0">Select</option>
                                    <option value="1" <?=isset($results['ar_autoclave_number']) ? (($results['ar_autoclave_number'] ==1)?'selected="selected"':'' ):''
                                    ?>>123</option>
                                    <option value="2" <?=isset($results['ar_autoclave_number']) ? (($results['ar_autoclave_number'] ==2)?'selected="selected"':'' ):''
                                        ?>>485</option>
                                    <option value="3" <?=isset($results['ar_autoclave_number']) ? (($results['ar_autoclave_number'] ==3)?'selected="selected"':'' ):''
                                        ?>>987</option>
                                    <option value="4" <?=isset($results['ar_autoclave_number']) ? (($results['ar_autoclave_number'] ==4)?'selected="selected"':'' ):''
                                        ?>>647</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Opt Name</h5>
                                <select class="form-control select2" name="ar_opt_name" style="width: 100%;">
                                    <option selected="selected" value="0">Select</option>
                                    <option value="1" <?=isset($results['ar_opt_name']) ? (($results['ar_autoclave_number'] ==1)?'selected="selected"':'' ):''
                                        ?>>Mahesh</option>
                                    <option value="2" <?=isset($results['ar_opt_name']) ? (($results['ar_autoclave_number'] ==2)?'selected="selected"':'' ):''
                                        ?>>Shohan</option>
                                    <option value="3" <?=isset($results['ar_opt_name']) ? (($results['ar_autoclave_number'] ==3)?'selected="selected"':'' ):''
                                        ?>>Dheerendra</option>
                                    <option value="4" <?=isset($results['ar_opt_namerf_id']) ? (($results['ar_autoclave_number'] ==4)?'selected="selected"':'' ):''
                                        ?>>Shyam</option>

                                </select>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="col-md-6 col-xs-6">
                            <div class="form-group">
                                <h5 style="text-align: center;">Shift</h5>
                                <select class="form-control select2" name="ar_shift" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option>8:00 AM to 4:00 PM</option>
                                    <option>9:00 AM to 6:00 PM</option>
                                    <option>10:00 AM to 7:00 PM</option>
                                    <option>12:00 AM to 9:00 PM</option>

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
                                <select class="form-control select2" name="ar_casting_number" style="width: 100%;">
                                    <option selected="selected" value="0">Select</option>
                                    <option value="1">123</option>
                                    <option value="2">485</option>
                                    <option value="3">987</option>
                                    <option value="4">647</option>

                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Material Receipt</h5>
                                <input type="text" class="form-control" name="ar_material_receipt" value="<?=isset($results['ar_material_receipt']) ? $results['ar_material_receipt']:''?>" placeholder="Auto Time">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 >Door Closing</h5>
                                <input type="text" class="form-control" name="ar_door_closing" value="<?=isset($results['ar_door_closing']) ? $results['ar_door_closing']:''?>" placeholder="AUTO TiME">
                            </div>

                            <div class="form-group">
                                <h5>Vacuum Time </h5>
                                <input type="text" class="form-control" name="ar_vacuum_time" value="<?=isset($results['ar_vacuum_time']) ? $results['ar_vacuum_time']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Rising Time </h5>
                                <input type="text" class="form-control" name="ar_rising_time" value="<?=isset($results['ar_rising_time']) ? $results['ar_rising_time']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Pressure (Kg/Cm2)</h5>
                                <input type="text" class="form-control" name="ar_pressure" value="<?=isset($results['ar_pressure']) ? $results['ar_pressure']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Temp(*c)</h5>
                                <input type="text" class="form-control" name="ar_temp" value="<?=isset($results['ar_temp']) ? $results['ar_temp']:''?>" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <h5>Door Opening</h5>
                                <input type="text" name="ar_door_opening" class="form-control" value="<?=isset($results['ar_door_opening']) ? $results['ar_door_opening']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5 style="text-align: center;">Stream Transfer</h5>
                                <select class="form-control select2" name="ar_stream_transfer" style="width: 100%;">
                                    <option selected="selected" value="0">Select</option>
                                    <option value="1">123</option>
                                    <option value="2">485</option>
                                    <option value="3">987</option>
                                    <option value="4">647</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <h5 style="text-align: center;">Transfer To</h5>
                                <select class="form-control select2" name="ar_transfer_to" style="width: 100%;">
                                    <option selected="selected" value="0">Select</option>
                                    <option value="1">123</option>
                                    <option value="2">485</option>
                                    <option value="3">987</option>
                                    <option value="4">647</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <h5>Time Stream Transfer</h5>
                                <input type="text" class="form-control" name="ar_time_stream_transfer" value="<?=isset($results['ar_time_stream_transfer']) ? $results['ar_time_stream_transfer']:''?>" placeholder="Enter ...">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <input class="form-check-input" type="checkbox">
                        I/We herby Confirm that I have properly maintained & cleaned the machines & area under my operation at the end of shift...
                    </div>
                    <button type="submit" class="btn btn-block btn-secondary btn-sm">Submit</button>
                </div>

            </div>
            </form>

        </div>
    </section>

        <!-- /.row -->
</div>
@include('admin.common.footer')
