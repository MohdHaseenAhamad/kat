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
                                <button type="button" id="add_id" data-action="{{url('/admin/raising-report/add')}}"
                                        class="btn btn-block btn-success add_id">Add Raising Report
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
                                    <th>Mould No.</th>
                                    <th>Discharge Time</th>
                                    <th>Hardness (MM)</th>
                                    <th>Cutting Time</th>
                                    <th>Remark</th>
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
                                    <td><?=isset($value->employee_name) ? $value->employee_name : ''?></td>
                                    <td><?=isset($value->shift) ? SHIFT[$value->shift] : ''?></td>
                                    <td><?=isset($value->batch_number) ? $value->batch_number : ''?></td>
                                    <td><?=isset($value->mould_no) ? $value->mould_no : ''?></td>
                                    <td><?=isset($value->discharge_time) ? $value->discharge_time : ''?></td>
                                    <td><?=isset($value->hardness) ? $value->hardness : ''?></td>
                                    <td><?=isset($value->cutting_time) ? $value->cutting_time : ''?></td>
                                    <td><?=isset($value->remark) ? $value->remark : ''?></td>

                                    <?php if (session()->has('superadmin')) {
                                    ?>
                                    <td><?=isset($value->created_at) ? $value->created_at : ''?></td>
                                    <td><?=isset($value->updated_at) ? $value->updated_at : ''?></td>
                                    <?php } ?>

                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/raising-report/edit/'.$value->id)}}"
                                               class="btn btn-success">Edit</a>&nbsp;&nbsp;<a href="javascript:void(0)"
                                                                                              onclick="return deleteIt(this,<?=$i?>)"
                                                                                              data-href="{{url('/admin/raising-report/delete/'.$value->id)}}"
                                                                                              class="btn btn-sm btn-danger">Delete</a>
                                        </div>
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
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex justify-content-start">
                                <b>({!! $results->firstItem().' to '.$results->lastItem()." Total Records ".$results->total()!!})</b>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                {!! $results->links() !!}
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>

@include('admin.common.footer')
