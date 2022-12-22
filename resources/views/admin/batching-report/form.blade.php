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
            <!-- SELECT2 EXAMPLE -->
            <?php
            $redirect = isset($results) ? 'update/'.$results['br_id']: 'save';
            ?>
            <form  method="POST" action="{{url('/admin/batching-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Operator Name</h5>
                                <select class="form-control select2" name="br_opreator_name" style="width: 100%;">
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
                                <select class="form-control select2" name="br_shift" style="width: 100%;">
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
            <!-- /.card -->

            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 style="">Mould/Slide Plate</h5>
                                <input type="text" class="form-control"  name="br_mould_plate" value ="<?=isset($results['br_mould_plate']) ? $results['br_mould_plate']:'' ?>" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Flow/Height</h5>
                                <input type="text" class="form-control" name="br_flow" value ="<?=isset($results['br_flow']) ? $results['br_flow']:'' ?>" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 >F. Slurry</h5>
                                <input type="text" class="form-control" name="br_f_slurry" value ="<?=isset($results['br_f_slurry']) ? $results['br_f_slurry']:'' ?>" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <h5>R. Slurry</h5>
                                <input type="text" class="form-control" name="br_r_slurry" value ="<?=isset($results['br_r_slurry']) ? $results['br_r_slurry']:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Cement</h5>
                                <input type="text" class="form-control" name="br_cement" value ="<?=isset($results['br_cement']) ? $results['br_cement']:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Lime</h5>
                                <input type="text" class="form-control" name="br_lime" value ="<?=isset($results['br_lime']) ? $results['br_lime']:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Gypsum</h5>
                                <input type="text" class="form-control" name="br_gypsum" value ="<?=isset($results['br_gypsum']) ? $results['br_gypsum']:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Aluminium Powder</h5>
                                <input type="text" class="form-control" name="br_aluminium_powder" value ="<?=isset($results['br_aluminium_powder']) ? $results['br_aluminium_powder']:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Extra Water</h5>
                                <input type="text" class="form-control" name="br_extra_water" value ="<?=isset($results['br_extra_water']) ? $results['br_extra_water']:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>S. Oil</h5>
                                <input type="text" class="form-control" name="br_s_oil" value ="<?=isset($results['br_s_oil']) ? $results['br_s_oil']:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Discharge Temp.</h5>
                                <input type="text" class="form-control" name="br_discharge_temp" value ="<?=isset($results['br_discharge_temp']) ? $results['br_discharge_temp']:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Discharge Time</h5>
                                <input type="text" class="form-control" name="br_discharge_time" value ="<?=isset($results['br_discharge_time']) ? $results['br_discharge_time']:'' ?>" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <h5>Mixing Time</h5>
                                <input type="text" class="form-control" name="br_mixing_time" value ="<?=isset($results['br_mixing_time']) ? $results['br_mixing_time']:'' ?>" placeholder="Enter ...">
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
