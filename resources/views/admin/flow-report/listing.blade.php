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
                    <h6>Flow Report List</h6>
                </div>
            </div>
        </div>
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
                                <button type="button" id="add_id" data-action="{{url('/admin/flow-report/add')}}" class="btn btn-block btn-success add_id">Add Flow</button>
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
                                    <th>Helpers Name</th>
                                    <th>Mould No.</th>
                                    <th>Side Plate No.</th>
                                    <th>Discharge Time</th>
                                    <th>Flow</th>
                                    <th>Empty Height</th>
                                    <th>Temprator</th>
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
                                    <td><?=$value->helper_id?></td>
                                    <td><?=$value->mould_no?></td>
                                    <td><?=$value->side_plate_no?></td>
                                    <td><?=$value->discharge_time?></td>
                                    <td><?=$value->flow?></td>
                                    <td><?=$value->empty_height?></td>
                                    <td><?=$value->temprator?></td>
                                    <td><?=$value->remark?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/flow-report/edit/'.$value->id)}}"  class="btn btn-info btn-sm">Edit</a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="return deleteIt(this,<?=$i?>)" data-href="{{url('/admin/flow-report/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Delete</a></div>
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
