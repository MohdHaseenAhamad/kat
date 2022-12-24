@include('admin.common.header')
@include('admin.common.sidebar')
<style>
    .btn-size {

    }
</style>
<div class="content-wrapper" style="min-height: 498px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Cutting Report List</h6>
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
                                <button type="button" id="add_id" data-action="{{url('/admin/cutting-report/add')}}"
                                        class="btn btn-block btn-success add_id">Add RF Feding
                                </button>
                            </h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                           placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i>
                                        </button>
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
                                    <th>Batch Number</th>
                                    <th>Side Plate No.</th>
                                    <th>Timing</th>
                                    <th>Size</th>
                                    <th>Cracks</th>
                                    <th>Chipping</th>
                                    <th>Heavy Line</th>
                                    <th>Corner Damage</th>
                                    <th>Top Layer</th>
                                    <th>Tilting Layer</th>
                                    <th>Less Raising</th>
                                    <th>Scrap Layer</th>
                                    <th>UnCutt Blocks</th>
                                    <th>Total Reject Block</th>
                                    <th>other</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
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
                                    <td><?=$value->side_plate_no?></td>
                                    <td><?=$value->timing?></td>
                                    <td><?=$value->size?></td>
                                    <td><?=$value->cracks?></td>
                                    <td><?=$value->chipping?></td>
                                    <td><?=$value->heavy_line?></td>
                                    <td><?=$value->corner_damage?></td>
                                    <td><?=$value->top_layer?></td>
                                    <td><?=$value->tilting_damage?></td>
                                    <td><?=$value->less_raising?></td>
                                    <td><?=$value->scrap_layer?></td>
                                    <td><?=$value->uncutt_blocks?></td>
                                    <td><?=$value->total_reject_block?></td>
                                    <td><?=$value->other?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/cutting-report/edit/'.$value->id)}}"
                                               class="btn btn-info btn-sm">Edit</a>&nbsp;&nbsp;<a
                                                href="{{url('/admin/cutting-report/delete/'.$value->id)}}"
                                                class="btn btn-sm btn-danger">Delete</a></div>
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
