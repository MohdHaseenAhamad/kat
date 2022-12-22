@include('common.header')
@include('common.sidebar')
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
                                <button type="button" id="add_id" data-action="{{url('/admin/flow-report/add')}}" class="btn btn-block btn-success add_id">Add RF Feding</button>
                            </h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
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
                                foreach ($results as $value)
                                {
                                ?>
                                <tr>
                                    <td><?=$i?>.</td>
                                    <td><?=$value['fr_operater_name']?></td>
                                    <td><?=$value['fr_shift']?></td>
                                    <td><?=$value['fr_helpers_name']?></td>
                                    <td><?=$value['fr_mould_no']?></td>
                                    <td><?=$value['fr_side_plate_no']?></td>
                                    <td><?=$value['fr_discharge_time']?></td>
                                    <td><?=$value['fr_flow']?></td>
                                    <td><?=$value['fr_empty_height']?></td>
                                    <td><?=$value['fr_temprator']?></td>
                                    <td><?=$value['fr_remark']?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/flow-report/edit/'.$value['fr_id'])}}"  class="btn btn-info btn-sm">Edit</a>&nbsp;&nbsp;<a href="{{url('/admin/flow-report/delete/'.$value['fr_id'])}}" class="btn btn-sm btn-danger">Delete</a></div>
                                    </td>
                                </tr>
                                <?php
                                $i++;
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

@include('common.footer')
