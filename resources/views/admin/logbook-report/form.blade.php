@include('admin.common.header')
@include('admin.common.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Daily Log Book Maintenance</h6>
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


            <!-- SELECT2 EXAMPLE --> <!-- SELECT2 EXAMPLE -->
            <?php
            $redirect = isset($results) ? 'update/'.$results['lbr_id']: 'save';
            ?>
            <form method="post" action="{{url('/admin/logbook-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 style="">Work Description</h5>
                                <textarea class="form-control" rows="3" name="lbr_work_desc"  placeholder="Enter ..."><?=isset($results['lbr_work_desc']) ? $results['lbr_work_desc'] :''?></textarea>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <h5 style="text-align: center;">Status</h5>
                                <select class="form-control select2" name="lbr_status" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option>Vinod</option>
                                    <option>Monu</option>
                                    <option>Abhishek</option>
                                    <option>Lal Singh</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <h5 style="text-align: center;">Staff Deployed</h5>
                                <select class="form-control select2" name="lbr_staff_deployed" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option>Shohan</option>
                                    <option>Deep</option>
                                    <option>Babu</option>
                                    <option>Khare</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <h5>Remark</h5>
                                <textarea class="form-control" rows="3" name="lbr_remark" placeholder="Enter ..."><?=isset($results['lbr_remark']) ? $results['lbr_remark'] :''?></textarea>
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
