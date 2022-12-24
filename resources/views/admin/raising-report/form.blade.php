@include('admin.common.header')
@include('admin.common.sidebar')
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
            $redirect = isset($results) ? 'update/'.$results->id: 'save';
            ?>
            <form method="post" action="{{url('/admin/raising-report/'.$redirect)}}">
                @csrf
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-xm-6">
                            <div class="form-group " >
                                <h5 style="text-align: center;">Operator Name</h5>
                                <select class="form-control select2" name="operater_id" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <?php foreach ($operator as $opr) { ?>
                                    <option
                                        value="<?=$opr->id?>" <?=isset($results) ? ($opr->id == $results->operater_id ? 'selected="selected"' : '') : '' ?>><?=$opr->name?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-6">
                            <div class="form-group">
                                <h5 style="text-align: center;">Shift</h5>
                                <select class="form-control select2" name="shift" style="width: 100%;">
                                    <option value="0">Select</option>
                                    <?php foreach (SHIFT as $key=>$value)
                                    {
                                    ?>
                                    <option
                                        value="<?=$key?>" <?=isset($results) ? ($key == $results->shift ? 'selected="selected"' : '') : '' ?>><?=$value?></option>
                                    <?php
                                    }
                                    ?>

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
                                <input type="text" class="form-control" name="batch_number" value="<?=isset($results) ? $results->batch_number: ''?>" placeholder="AUTO">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <h5 style="">Mould No.</h5>
                                <input type="text" class="form-control" name="mould_no" value="<?=isset($results) ? $results->mould_no: ''?>" placeholder="Enter ...">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 >Discharge Time</h5>
                                <input type="text" class="form-control" name="discharge_time" value="<?=isset($results) ? $results->discharge_time: ''?>" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <h5>Hardness (MM)</h5>
                                <input type="text" class="form-control" name="hardness" value="<?=isset($results) ? $results->hardness: ''?>" placeholder="AUTO">
                            </div>
                            <div class="form-group">
                                <h5>Cutting Time</h5>
                                <input type="text" class="form-control" name="cutting_time" value="<?=isset($results) ? $results->cutting_time: ''?>" placeholder="Auto">
                            </div>
                            <div class="form-group">
                                <h5>Remark</h5>
                                <textarea class="form-control" rows="3" name="remark"  placeholder="Enter ..."><?=isset($results) ? $results->remark: ''?></textarea>
                            </div>


                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>

                </div>


            </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('admin.common.footer')
