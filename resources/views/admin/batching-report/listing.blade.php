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
                                <button type="button" id="add_id" data-action="{{url('/admin/batching-report/add')}}" class="btn btn-block btn-success add_id">Add RF Feding</button>
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
                                    <th>Mould/Slide Plate</th>
                                    <th>Flow/Height</th>
                                    <th>F. Slurry</th>
                                    <th>R. Slurry</th>
                                    <th>Cement</th>
                                    <th>Lime</th>
                                    <th>Gypsum</th>
                                    <th>Aluminium Powder</th>
                                    <th>Extra Water</th>
                                    <th>S. Oil</th>
                                    <th>Discharge Temp.</th>
                                    <th>Discharge Time</th>
                                    <th>Mixing Time.</th>
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
                                    <td><?=$value['br_opreator_name']?></td>
                                    <td><?=$value['br_shift']?></td>
                                    <td><?=$value['br_mould_plate']?></td>
                                    <td><?=$value['br_flow']?></td>
                                    <td><?=$value['br_f_slurry']?></td>
                                    <td><?=$value['br_r_slurry']?></td>
                                    <td><?=$value['br_coment']?></td>
                                    <td><?=$value['br_lime']?></td>
                                    <td><?=$value['br_gypsum']?></td>
                                    <td><?=$value['br_aluminium_powder']?></td>
                                    <td><?=$value['br_extra_water']?></td>
                                    <td><?=$value['br_s_oil']?></td>
                                    <td><?=$value['br_discharge_temp']?></td>
                                    <td><?=$value['br_discharge_time']?></td>
                                    <td><?=$value['br_mixing_time']?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/batching-report/edit/'.$value['br_id'])}}"  class="btn btn-info btn-sm">Edit</a>&nbsp;&nbsp;<a href="{{url('/admin/batching-report/delete/'.$value['br_id'])}}" class="btn btn-sm btn-danger">Delete</a></div>
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
