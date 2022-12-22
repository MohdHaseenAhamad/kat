@include('common.header')
@include('common.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Raising & Tilting Report</h6>
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
            $redirect = isset($results) ? 'update/'.$results['rr_id']: 'save';
            ?>
            <form method="post" action="{{url('/admin/raising-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Operator Name</h5>
                                <select class="form-control select2" name="rr_operator_name" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option value="1">Ramesh</option>
                                    <option value="2">shyam</option>
                                    <option value="3">mohan</option>
                                    <option value="4">tender</option>

                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-xm-6">
                         <div class="form-group " >
                           <h5 style="text-align: center;">Helpers Name</h5>
                           <select class="form-control select2" style="width: 100%;">
                             <option selected="selected">Select</option>
                             <option>Ramesh</option>
                             <option>shyam</option>
                             <option>mohan</option>
                             <option>tender</option>

                           </select>
                         </div>
                         </div>-->
                        <!-- /.form-group -->
                        <div class="col-md-6 col-xs-6">
                            <div class="form-group">
                                <h5 style="text-align: center;">Shift</h5>
                                <select class="form-control select2" name="rr_shift" style="width: 100%;">
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
                            <div class="form-group">
                                <h5 style="">Batch Number</h5>
                                <input type="text" class="form-control" name="rr_batch_number" value="<?=isset($results['rr_batch_number']) ? $results['rr_batch_number']: ''?>" placeholder="AUTO">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Mould No.</h5>
                                <input type="text" class="form-control" name="rr_mould_no" value="<?=isset($results['rr_mould_no']) ? $results['rr_mould_no']: ''?>" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 >Discharge Time</h5>
                                <input type="text" class="form-control" name="rr_discharge_time" value="<?=isset($results['rr_discharge_time']) ? $results['rr_discharge_time']: ''?>" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <h5>Hardness (MM)</h5>
                                <input type="text" class="form-control" name="rr_hardness" value="<?=isset($results['rr_hardness']) ? $results['rr_hardness']: ''?>" placeholder="AUTO">
                            </div>
                            <div class="form-group">
                                <h5>Cutting Time</h5>
                                <input type="text" class="form-control" name="rr_cutting_time" value="<?=isset($results['rr_cutting_time']) ? $results['rr_cutting_time']: ''?>" placeholder="Auto">
                            </div>
                            <!-- <div class="form-group">
                              <h5>Empty Height</h5>
                              <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                             <div class="form-group">
                              <h5>Temprator</h5>
                              <input type="text" class="form-control" placeholder="Enter ...">
                            </div>-->
                            <div class="form-group">
                                <h5>Remark</h5>
                                <textarea class="form-control" rows="3" name="rr_remark"  placeholder="Enter ..."><?=isset($results['rr_remark']) ? $results['rr_remark']: ''?></textarea>
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
