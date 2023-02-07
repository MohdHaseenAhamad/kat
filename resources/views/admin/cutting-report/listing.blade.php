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
                                    <?php if (session()->has('superadmin')) {
                                    ?>
                                    <th><?=CREATE_DATE?></th>
                                    <th><?=MODIFIED_DATE?></th>
                                    <?php }?>

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
                                    <td><?=isset($value->employee_name) ?$value->employee_name: ''?></td>
                                    <td><?=isset($value->shift) ?SHIFT[$value->shift]: ''?></td>
                                    <td><?=isset($value->batch_number) ?$value->batch_number: ''?></td>
                                    <td><?=isset($value->side_plate_no) ?$value->side_plate_no: ''?></td>
                                    <td><?=isset($value->timing) ?$value->timing: ''?></td>
                                    <td><?=isset($value->size) ?$value->size: ''?></td>
                                    <td><?=isset($value->cracks) ?$value->cracks: ''?></td>
                                    <td><?=isset($value->chipping) ?$value->chipping: ''?></td>
                                    <td><?=isset($value->heavy_line) ?$value->heavy_line: ''?></td>
                                    <td><?=isset($value->corner_damage) ?$value->corner_damage: ''?></td>
                                    <td><?=isset($value->top_layer) ?$value->top_layer: ''?></td>
                                    <td><?=isset($value->tilting_damage) ?$value->tilting_damage: ''?></td>
                                    <td><?=isset($value->less_raising) ?$value->less_raising: ''?></td>
                                    <td><?=isset($value->scrap_layer) ?$value->scrap_layer: ''?></td>
                                    <td><?=isset($value->uncutt_blocks) ?$value->uncutt_blocks: ''?></td>
                                    <td><?=isset($value->total_reject_block) ?$value->total_reject_block: ''?></td>
                                    <td><?=isset($value->other) ? $value->other : ''?></td>
                                    <?php if (session()->has('superadmin')) {
                                    ?>
                                    <td><?=isset($value->created_at) ? $value->created_at : ''?></td>
                                    <td><?=isset($value->updated_at) ? $value->updated_at : ''?></td>
                                    <?php } ?>

                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/cutting-report/edit/'.$value->id)}}"
                                               class="btn btn-info btn-sm">Edit</a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="return deleteIt(this,<?=$i?>)"
                                                data-href="{{url('/admin/cutting-report/delete/'.$value->id)}}"
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
