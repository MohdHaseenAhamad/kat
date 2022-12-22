@include('admin.common.header')
@include('admin.common.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Labour Deployment Sheet</h6>
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
            $redirect = isset($results) ? 'update/'.$results['lr_id']: 'save';
            ?>
            <form method="post" action="{{url('/admin/labour-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="form-group">
                                <h5 style="text-align: center;">Shift</h5>
                                <select class="form-control select2" name="lr_shift" style="width: 100%;">
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

            <div class="card card-default">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <h5 style="">Name Of Labour</h5>
                                <input type="text" name="lr_name_of_labour" value="<?=isset($results['lr_name_of_labour']) ? $results['lr_name_of_labour']:''?>" class="form-control" placeholder="Enter...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 >Area Of Work</h5>
                                <input type="text" name="lr_area_of_work" value="<?=isset($results['lr_area_of_work']) ? $results['lr_area_of_work']:''?>" class="form-control" placeholder="Enter...">
                            </div>

                            <div class="form-group">
                                <h5 style="text-align: center;">Contractor Name</h5>
                                <select class="form-control select2" name="lr_contractor_name"  style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option value="1" <?=isset($results['lr_contractor_name']) ? (($results['lr_contractor_name'] ==1)?'selected="selected"':'' ):''
                                        ?>>Vinod</option>
                                    <option value="2" <?=isset($results['lr_contractor_name']) ? (($results['lr_contractor_name'] ==2)?'selected="selected"':'' ):''
                                        ?>>Monu</option>
                                    <option value="3" <?=isset($results['lr_contractor_name']) ? (($results['lr_contractor_name'] ==3)?'selected="selected"':'' ):''
                                        ?>>Abhishek</option>
                                    <option value="4" <?=isset($results['lr_contractor_name']) ? (($results['lr_contractor_name'] ==4)?'selected="selected"':'' ):''
                                        ?>>Lal Singh</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <h5 style="text-align: center;">Reporting Operator Name</h5>
                                <select class="form-control select2" name="lr_reporting_operator_name" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option value="1" <?=isset($results['lr_reporting_operator_name']) ? (($results['lr_reporting_operator_name'] ==1)?'selected="selected"':'' ):''
                                        ?>>Shohan</option>
                                    <option value="2" <?=isset($results['lr_reporting_operator_name']) ? (($results['lr_reporting_operator_name'] ==2)?'selected="selected"':'' ):''
                                        ?>>Deep</option>
                                    <option value="3" <?=isset($results['lr_reporting_operator_name']) ? (($results['lr_reporting_operator_name'] ==3)?'selected="selected"':'' ):''
                                        ?>>Babu</option>
                                    <option value="4" <?=isset($results['lr_reporting_operator_name']) ? (($results['lr_reporting_operator_name'] ==4)?'selected="selected"':'' ):''
                                        ?>>Khare</option>

                                </select>
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

</div>
@include('admin.common.footer')
