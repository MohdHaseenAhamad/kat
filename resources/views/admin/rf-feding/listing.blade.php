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
                                <button type="submit" id="add_id" data-action="{{url('/admin/rf-feding/add')}}" class="btn btn-block btn-success add_id">Add RF Feding</button>
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
                                    <th>Fly Ash Bulker (Kg)</th>
                                    <th>Fly Ash Dumper (Kg)</th>
                                    <th>Cement Bulker (Kg)</th>
                                    <th>Cement Bag (Kg)</th>
                                    <th>Gypsum (Kg)</th>
                                    <th>Lime Bulker (Kg)</th>
                                    <th>Lime Bag (Kg)</th>
                                    <th>Aluminium (Kg)</th>
                                    <th>Husk (Kg)</th>
                                    <th>Soluble (Kg)</th>
                                    <th>moud Oil (litre)</th>
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
                                    <td><?=$value->store_incharge_id?></td>
                                    <td><?=$value->shift?></td>
                                    <td><?=$value->fly_ash_bulker?></td>
                                    <td><?=$value->fly_ash_dumper?></td>
                                    <td><?=$value->cement_bulker?></td>
                                    <td><?=$value->cement_bag?></td>
                                    <td><?=$value->gypsum?></td>
                                    <td><?=$value->lime_bulker?></td>
                                    <td><?=$value->lime_bag?></td>
                                    <td><?=$value->aluminium?></td>
                                    <td><?=$value->husk?></td>
                                    <td><?=$value->soluble?></td>
                                    <td><?=$value->moud_oil?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('/admin/rf-feding/edit/'.$value->id)}}"  class="btn btn-info btn-sm">Edit</a>&nbsp;&nbsp;<a href="{{url('/admin/rf-feding/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Delete</a></div>
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

@include('admin.common.footer')