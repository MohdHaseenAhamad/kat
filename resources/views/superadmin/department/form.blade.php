@include('superadmin.common.header')
@include('superadmin.common.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Department</a></li>
                        <li class="breadcrumb-item active"><?=$mode?></li>
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
            <!-- SELECT2 EXAMPLE -->
            <?php
            $url = isset($result) ? url('superadmin/department/update/'.$result->id):url('superadmin/department/save')
            ?>
            <form method="POST" action="<?=$url?>">
                @csrf
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 col-xm-6">
                        <div class="card card-default">
                            <div class="card-body">
                                <div class="form-group">
                                    <h5 style="">Department Name</h5>
                                    <input type="text" class="form-control" name="name"
                                           value="<?=isset($result) ? $result->name:''?>"
                                           placeholder="Enter Department Name...">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="{{url('superadmin/department')}}" class="btn btn-warning">Back</a>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-md-3"></div>
                <!-- /.card -->

                <!-- SELECT2 EXAMPLE -->

            </form>

        </div>
    </section>

    <!-- /.row -->
</div>
@include('superadmin.common.footer')
