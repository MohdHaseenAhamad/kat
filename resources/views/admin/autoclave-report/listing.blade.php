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
                                <button type="button" id="add_id" data-action="{{url('/admin/autoclave-report/add')}}" class="btn btn-block btn-success add_id">Add RF Feding</button>
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
                                    <td><?=$value['ar_autoclave_number']?></td>
                                    <td><?=$value['ar_shift']?></td>
                                    <td><?=$value['ar_opt_name']?></td>
                                    <td><?=$value['ar_casting_number']?></td>
                                    <td><?=$value['ar_material_receipt']?></td>
                                    <td><?=$value['ar_door_closing']?></td>
                                    <td><?=$value['ar_vacuum_time']?></td>
                                    <td><?=$value['ar_rising_time']?></td>
                                    <td><?=$value['ar_pressure']?></td>
                                    <td><?=$value['ar_temp']?></td>
                                    <td><?=$value['ar_door_opening']?></td>
                                    <td><?=$value['ar_stream_transfer']?></td>
                                    <td><?=$value['ar_transfer_to']?></td>
                                    <td><?=$value['ar_time_stream_transfer']?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/autoclave-report/edit/'.$value['ar_id'])}}"  class="btn btn-info btn-sm">Edit</a>&nbsp&nbsp;
                                            <a href="{{url('/admin/autoclave-report/delete/'.$value['ar_id'])}}" class="btn btn-sm btn-danger">Delete</a>
                                        </div>
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
