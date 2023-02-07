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
                                    <td><?=isset($value->employee_name) ? $value->employee_name: ''?></td>
                                    <td><?=isset($value->shift) ?SHIFT[$value->shift]: ''?></td>
                                    <td><?=isset($value->slide_plate) ?$value->slide_plate: ''?></td>
                                    <td><?=isset($value->flow_and_height) ?$value->flow_and_height: ''?></td>
                                    <td><?=isset($value->f_slurry) ?$value->f_slurry: ''?></td>
                                    <td><?=isset($value->r_slurry) ?$value->r_slurry: ''?></td>
                                    <td><?=isset($value->cement) ?$value->cement: ''?></td>
                                    <td><?=isset($value->lime) ?$value->lime: ''?></td>
                                    <td><?=isset($value->gypsum) ?$value->gypsum: ''?></td>
                                    <td><?=isset($value->aluminium_powder) ?$value->aluminium_powder: ''?></td>
                                    <td><?=isset($value->extra_water) ?$value->extra_water: ''?></td>
                                    <td><?=isset($value->s_oil) ?$value->s_oil: ''?></td>
                                    <td><?=isset($value->discharge_temp) ?$value->discharge_temp: ''?></td>
                                    <td><?=isset($value->discharge_time) ?$value->discharge_time: ''?></td>
                                    <td><?=isset($value->mixing_time) ?$value->mixing_time : ''?></td>
                                    <?php if (session()->has('superadmin')) {
                                    ?>
                                    <td><?=isset($value->created_at) ? $value->created_at : ''?></td>
                                    <td><?=isset($value->updated_at) ? $value->updated_at : ''?></td>
                                    <?php } ?>

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
