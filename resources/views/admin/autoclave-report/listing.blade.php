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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{url('/admin/autoclave-report/add')}}" class="btn btn-block btn-success">Add Autoclave</a>
                            </h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Sr no.</th>
                                    <th>Autoclave Name</th>
                                    <th>Shift</th>
                                    <th>Opt Name</th>
                                    <th>Casting Number</th>
                                    <th>Material Receipt</th>
                                    <th>Door Closing</th>
                                    <th>Vacuum Time</th>
                                    <th>Raising Time</th>
                                    <th>Pressure (Kg/Cm2)</th>
                                    <th>Temp(*c)</th>
                                    <th>Door Opening</th>
                                    <th>Stream </th>
                                    <th>Transfer To</th>
                                    <th>Time Stream Transfer</th>
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
                                $i =1;
                                if(isset($results))
                                    {
                                foreach ($results as $value)
                                {
                                ?>
                                <tr>
                                    <td><?=$i?>.</td>
                                    <td><?=isset($value->autoclave_number) ? AUTOCLAVE_NUMBER[$value->autoclave_number] :''?></td>
                                    <td><?=isset($value->shift) ? SHIFT[$value->shift] :''?></td>
                                    <td><?=isset($value->employee_name) ?$value->employee_name :''?></td>
                                    <td><?=isset($value->casting_number) ?CASTING_NUMBER[$value->casting_number] :''?></td>
                                    <td><?=isset($value->material_receipt) ?$value->material_receipt :''?></td>
                                    <td><?=isset($value->door_closing) ?$value->door_closing :''?></td>
                                    <td><?=isset($value->vacuum_time) ?$value->vacuum_time :''?></td>
                                    <td><?=isset($value->rising_time) ?$value->rising_time :''?></td>
                                    <td><?=isset($value->pressure) ?$value->pressure :''?></td>
                                    <td><?=isset($value->temp) ?$value->temp :''?></td>
                                    <td><?=isset($value->door_opening) ?$value->door_opening :''?></td>
                                    <td><?=isset($value->stream_transfer) ?$value->stream_transfer :''?></td>
                                    <td><?=isset($value->transfer_to) ?$value->transfer_to :''?></td>
                                    <td><?=isset($value->time_stream_transfer) ?$value->time_stream_transfer :''?></td>
                                    <?php if (session()->has('superadmin')) {
                                    ?>
                                    <td><?=isset($value->created_at) ? $value->created_at : ''?></td>
                                    <td><?=isset($value->updated_at) ? $value->updated_at : ''?></td>
                                    <?php } ?>
                                    <td>
                                        <div class="btn-group">
                                            <a  href="{{url('/admin/autoclave-report/edit/'.$value->id)}}"  class="btn btn-info btn-sm">Edit</a>&nbsp&nbsp;
                                            <a href="javascript:void(0)" onclick="return deleteIt(this,<?=$value->autoclave_number?>)" href="{{url('/admin/autoclave-report/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Delete</a>
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
