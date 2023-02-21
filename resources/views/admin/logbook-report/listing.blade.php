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
                    <h6>LogBook List</h6>
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
                                <button type="button" id="add_id" data-action="{{url('/admin/logbook-report/add')}}"
                                        class="btn btn-block btn-success add_id">Add LogBook
                                </button>
                            </h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Sr no.</th>
                                    <th>Staff Deployed</th>
                                    <th>Status</th>
                                    <th>Remark</th>
                                    <th>Work Description</th>
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
                                if(isset($results))
                                {

                                $counter = $results->firstItem();
                                foreach ($results as $value)
                                {

                                ?>
                                <tr>
                                    <td><?=$counter?>.</td>
                                    <td><?=isset($value->employee_name) ? $value->employee_name : ''?></td>
                                    <td><?=isset($value->status) ? STATUS[$value->status] : ''?></td>
                                    <td><?=isset($value->remark) ? $value->remark : ''?></td>
                                    <td><?=isset($value->work_description) ? $value->work_description : ''?></td>

                                    <?php if (session()->has('superadmin')) {
                                    ?>
                                    <td><?=isset($value->created_at) ? $value->created_at : ''?></td>
                                    <td><?=isset($value->updated_at) ? $value->updated_at : ''?></td>
                                    <?php } ?>

                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/logbook-report/edit/'.$value->id)}}"
                                               class="btn btn-info btn-sm">Edit</a>&nbsp;&nbsp;<a
                                                href="javascript:void(0)" onclick="return deleteIt(this,<?=$counter?>)"
                                                data-href="{{url('/admin/logbook-report/delete/'.$value->id)}}"
                                                class="btn btn-sm btn-danger">Delete</a></div>
                                    </td>
                                </tr>
                                <?php
                                $counter++;
                                }
                                }

                                ?>


                                </tbody>
                            </table>

                        </div>

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
