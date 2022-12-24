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
            $redirect = isset($results) ? 'update/' . $results->id : 'save';
            ?>
            <form method="post" action="{{url('/admin/labour-report/'.$redirect)}}">
                @csrf
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row">
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
                                        }?>

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
                                    <h5 style="text-align: center;">Name Of Labour</h5>
                                    <select class="form-control select2" name="labour_id" style="width: 100%;">
                                        <option value="0">Select</option>
                                        <?php foreach ($labour as $opr) { ?>
                                        <option value="<?=$opr->id?>" <?=isset($results) ? ($opr->id == $results->labour_id ? 'selected="selected"' : '') : '' ?>><?=$opr->name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Area Of Work</h5>
                                    <input type="text" name="area_of_work"
                                           value="<?=isset($results) ? $results->area_of_work : ''?>"
                                           class="form-control" placeholder="Enter...">
                                </div>

                                <div class="form-group">
                                    <h5 style="text-align: center;">Contractor Name</h5>
                                    <select class="form-control select2" name="contractor_id" style="width: 100%;">
                                        <option value="0">Select</option>
                                        <?php foreach ($contractor as $opr) { ?>
                                        <option
                                            value="<?=$opr->id?>" <?=isset($results) ? ($opr->id == $results->contractor_id ? 'selected="selected"' : '') : '' ?>><?=$opr->name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 style="text-align: center;">Reporting Operator Name</h5>
                                    <select class="form-control select2" name="operater_id" style="width: 100%;">
                                        <option selected="selected">Select</option>
                                        <?php foreach ($operator as $opr) { ?>
                                        <option
                                            value="<?=$opr->id?>" <?=isset($results) ? ($opr->id == $results->operater_id ? 'selected="selected"' : '') : '' ?>><?=$opr->name?></option>
                                        <?php } ?>

                                    </select>
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
