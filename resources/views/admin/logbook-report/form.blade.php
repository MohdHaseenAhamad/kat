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
            $redirect = isset($results) ? 'update/'.$results->id: 'save';
            ?>
            <form method="post" action="{{url('/admin/logbook-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 style="">Work Description</h5>
                                <textarea class="form-control" rows="3" name="work_description"  placeholder="Enter ..."><?=isset($results) ? $results->work_description :''?></textarea>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <h5 style="text-align: center;">Status</h5>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option value="0">Select</option>
                                    <?php foreach (STATUS as $key=>$value)
                                        {
                                            ?>
                                    <option value="<?=$key?>" <?=isset($results) ? ($results->status==$key ? 'selected="selected"':''):''?>><?=$value?></option>
<?php
                                        }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <h5 style="text-align: center;">Staff Deployed</h5>
                                <select class="form-control select2" name="staff_deployed_id" style="width: 100%;">
                                    <option value="0">Select</option>
                                    <?php foreach ($employee as $value)
                                        {
                                            ?>
                                    <option value="<?=$value->id?>" <?=isset($results) ? ($results->staff_deployed_id==$value->id ? 'selected="selected"':''):''?>><?=$value->name?></option>
<?php
                                        }?>


                                </select>
                            </div>
                            <div class="form-group">
                                <h5>Remark</h5>
                                <textarea class="form-control" rows="3" name="remark" placeholder="Enter ..."><?=isset($results) ? $results->remark :''?></textarea>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </div>
            </form>

        </div>
    </section>

</div>
@include('admin.common.footer')
