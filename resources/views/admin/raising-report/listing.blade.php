@include('admin.common.header')
@include('admin.common.sidebar')
<style>
    .btn-size
    {

    }
</style>
<div class="content-wrapper" style="min-height: 498px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>RF Feding List</h6>
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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <button type="button" id="add_id" data-action="{{url('/admin/raising-report/add')}}" class="btn btn-block btn-success add_id">Add Raising Report</button>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Sr no.</th>
                                    <th>Operator Name</th>
                                    <th>Shift</th>
                                    <th>Batch Number</th>
                                    <th>Mould No.</th>
                                    <th>Discharge Time</th>
                                    <th>Hardness (MM)</th>
                                    <th>Cutting Time</th>
                                    <th>Remark</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i =1;
                                if(isset($results))
                                    {
                                foreach ($results as $value)
                                {
                                ?>
                                <tr>
                                    <td><?=$i?>.</td>
                                    <td><?=$value->operater_id?></td>
                                    <td><?=$value->shift?></td>
                                    <td><?=$value->batch_number?></td>
                                    <td><?=$value->mould_no?></td>
                                    <td><?=$value->discharge_time?></td>
                                    <td><?=$value->hardness?></td>
                                    <td><?=$value->cutting_time?></td>
                                    <td><?=$value->remark?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/raising-report/edit/'.$value->id)}}"  class="btn btn-success">Edit</a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="return deleteIt(this,<?=$i?>)" data-href="{{url('/admin/raising-report/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Delete</a></div>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                                }
                                    }

                                ?>


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>

@include('admin.common.footer')
