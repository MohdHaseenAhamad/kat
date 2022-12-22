@include('admin.common.header')
@include('admin.common.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Flow Report</h6>
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
            <!-- SELECT2 EXAMPLE -->
            <?php
            $redirect = isset($results) ? 'update/'.$results['br_id']: 'save';
            ?>
            <form method="POST" action="{{url('/admin/flow-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Operator Name</h5>
                                <select class="form-control select2" name="fr_operater_name" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option value="1">Ramesh</option>
                                    <option value="2">shyam</option>
                                    <option value="3">mohan</option>
                                    <option value="4">tender</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Helpers Name</h5>
                                <select class="form-control select2"  name="fr_helper_name"  style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option value="1">Ramesh</option>
                                    <option value="2">shyam</option>
                                    <option value="3">mohan</option>
                                    <option value="4">tender</option>

                                </select>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="col-md-6 col-xs-6">
                            <div class="form-group">
                                <h5 style="text-align: center;">Shift</h5>
                                <select class="form-control select2" name="fr_shift" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option>8:00 AM to 4:00 PM</option>
                                    <option>9:00 AM to 6:00 PM</option>
                                    <option>10:00 AM to 7:00 PM</option>
                                    <option>12:00 AM to 9:00 PM</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 style="">Casting Number</h5>
                                <input type="text" class="form-control" name="fr_casting_number" value="<?=isset($results['fr_casting_number']) ? $results['fr_casting_number']:''?>" placeholder="AUTO">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Mould No.</h5>
                                <input type="text" class="form-control" name="fr_mould_no" value="<?=isset($results['fr_mould_no']) ? $results['fr_mould_no']:''?>" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 >Side Plate No.</h5>
                                <input type="text" class="form-control" name="fr_side_plate_no" value="<?=isset($results['fr_side_plate_no']) ? $results['fr_side_plate_no']:''?>" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <h5>Discharge Time</h5>
                                <input type="text" class="form-control" name="fr_discharge_time" value="<?=isset($results['fr_discharge_time']) ? $results['fr_discharge_time']:''?>" placeholder="AUTO">
                            </div>
                            <div class="form-group">
                                <h5>Flow</h5>
                                <input type="text" class="form-control" name="fr_flow" value="<?=isset($results['fr_flow']) ? $results['fr_flow']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Empty Height</h5>
                                <input type="text" class="form-control" name="fr_entry_height" value="<?=isset($results['fr_entry_height']) ? $results['fr_entry_height']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Temprator</h5>
                                <input type="text" class="form-control" name="fr_temprator" value="<?=isset($results['fr_temprator']) ? $results['fr_temprator']:''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Remark</h5>
                                <textarea class="form-control" rows="3" name="fr_remark" value="<?=isset($results['fr_remark']) ? $results['fr_remark']:''?>" placeholder="Enter ..."></textarea>
                            </div>


                        </div>
                        <div class="card-footer">
                            <input class="form-check-input" type="checkbox">
                            I/We herby Confirm that I have properly maintained & cleaned the machines & area under my operation at the end of shift...
                        </div>
                        <button type="submit" class="btn btn-block btn-secondary btn-sm">Submit</button>
                    </div>

                </div>


            </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('admin.common.footer')
