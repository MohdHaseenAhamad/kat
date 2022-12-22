@include('common.header')
@include('common.sidebar')
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
            $redirect = isset($results) ? 'update/'.$results['cr_id']: 'save';
            ?>
            <form method="POST" action="{{url('/admin/cutting-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Operator Name</h5>
                                <select class="form-control select2" name="cr_operater_name" style="width: 100%;">
                                    <option selected="selected" value="0">Select</option>
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
                                <select class="form-control select2" name="cr_shift" style="width: 100%;">
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


            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 style="">Batch Number</h5>
                                <input type="text" name="cr_batch_number" value="<?=isset($results['cr_batch_number'])?$results['cr_batch_number'] :''?>"  class="form-control" placeholder="AUTO">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Side Plate No.</h5>
                                <input type="text" name="cr_side_plate_no" value="<?=isset($results['cr_side_plate_no'])?$results['cr_side_plate_no'] :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 >Timing</h5>
                                <input type="text" name="cr_timing" value="<?=isset($results['cr_timing'])?$results['cr_timing'] :''?>" class="form-control" placeholder="AUTO">
                            </div>

                            <div class="form-group">
                                <h5>Size</h5>
                                <input type="text" name="cr_size" value="<?=isset($results['cr_size'])?$results['cr_size'] :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Cracks</h5>
                                <input type="text" name="cr_cracks" value="<?=isset($results['cr_cracks'])?$results['cr_cracks'] :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Chipping</h5>
                                <input type="text" name="cr_chipping" value="<?=isset($results['cr_chipping'])?$results['cr_chipping'] :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Heavy Line</h5>
                                <input type="text" name="cr_heavy_line" value="<?=isset($results['cr_heavy_line'])?$results['cr_heavy_line'] :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Corner Damage</h5>
                                <input type="text" name="cr_corner_damage" value="<?=isset($results['cr_corner_damage'])?$results['cr_corner_damage'] :''?>" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Top Layer</h5>
                                <input type="text" class="form-control" name="cr_top_layer" value="<?=isset($results['cr_top_layer'])?$results['cr_top_layer'] :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Tilting Damage</h5>
                                <input type="text" class="form-control" name="cr_tilting_damage" value="<?=isset($results['cr_tilting_damage'])?$results['cr_tilting_damage'] :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Less Raising</h5>
                                <input type="text" class="form-control" name="cr_less_raising" value="<?=isset($results['cr_less_raising'])?$results['cr_less_raising'] :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Scrap Layer</h5>
                                <input type="text" class="form-control" name="cr_scrap_layer" value="<?=isset($results['cr_scrap_layer'])?$results['cr_scrap_layer'] :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>UnCutt Blocks</h5>
                                <input type="text" class="form-control" name="cr_uncutt_blocks" value="<?=isset($results['cr_uncutt_blocks'])?$results['cr_uncutt_blocks'] :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Total Reject Block</h5>
                                <input type="text" class="form-control" name="cr_total_reject_block" value="<?=isset($results['cr_total_reject_block'])?$results['cr_total_reject_block'] :''?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Other</h5>
                                <input type="text" class="form-control" name="cr_other" value="<?=isset($results['cr_other'])?$results['cr_other'] :''?>" placeholder="Enter ...">
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
@include('common.footer')
