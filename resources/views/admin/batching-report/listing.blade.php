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
                                <button type="button" id="add_id" data-action="{{url('/admin/batching-report/add')}}" class="btn btn-block btn-success add_id">Add Batching</button>
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
                                if(isset($results))
                                    {
                                foreach ($results as $value)
                                {
                                ?>
                                <tr>
                                    <td><?=$i?>.</td>
                                    <td><?=$value->operater_id?></td>
                                    <td><?=$value->shift?></td>
                                    <td><?=$value->slide_plate?></td>
                                    <td><?=$value->flow_and_height?></td>
                                    <td><?=$value->f_slurry?></td>
                                    <td><?=$value->r_slurry?></td>
                                    <td><?=$value->cement?></td>
                                    <td><?=$value->lime?></td>
                                    <td><?=$value->gypsum?></td>
                                    <td><?=$value->aluminium_powder?></td>
                                    <td><?=$value->extra_water?></td>
                                    <td><?=$value->s_oil?></td>
                                    <td><?=$value->discharge_temp?></td>
                                    <td><?=$value->discharge_time?></td>
                                    <td><?=$value->mixing_time?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/batching-report/edit/'.$value->id)}}"  class="btn btn-info btn-sm">Edit</a>&nbsp;&nbsp;<a href="javascript:void(0);" onclick="return deleteIt(this,<?=$i?>)" data-href="{{url('/admin/batching-report/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Delete</a></div>
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
