@include('superadmin.common.header')
@include('superadmin.common.sidebar')
<style>
    .btn-size {

    }
</style>
<div class="content-wrapper" style="min-height: 498px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                {{--<div class="col-sm-6">--}}
                {{--<h6>Department</h6>--}}
                {{--</div>--}}
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Department</a></li>

                    </ol>
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
                                <a href="{{url('superadmin/department/add')}}" class="btn btn-block btn-success add_id">Add Employee </a>
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
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                if(isset($results))
                                {
                                foreach($results as $res){
                                ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$res->name?></td>
                                    <td><?=$res->status == 1 ? 'Active' : 'UnActive'?></td>
                                    <td>
                                        <a href="{{url('superadmin/department/edit/'.$res->id)}}"
                                           class="btn btn-primary">Edit</a>
                                        <a href="javascript:void(0)" onclick="return deleteIt(this,'<?=$res->name?>')"
                                           data-href="{{url('superadmin/department/delete/'.$res->id)}}"
                                           data-msg="Are you sure? <br> You want to delete <?=$res->name?>"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                                }
                                }else
                                    {
                                        echo '<div class="card-footer">There are no records.</div>';
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

@include('superadmin.common.footer')
