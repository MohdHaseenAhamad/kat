@include('admin.common.header')
@include('admin.common.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Raising & Tilting Report</h6>
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
            <!-- SELECT2 EXAMPLE -->
            <?php
            $redirect = isset($results) ? 'update/' . $results->id : 'save';
            ?>
            <form id="raising_form" name="raising_form" method="post"
                  action="{{url('/admin/raising-report/'.$redirect)}}">
                @csrf
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xm-6">
                                <div class="form-group ">
                                    <h5 style="text-align: center;">Operator Name</h5>
                                    <select class="form-control select2" name="operater_id" style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php foreach ($operator as $opr) { ?>
                                        <option
                                            value="<?=$opr->id?>" <?=isset($results) ? ($opr->id == $results->operater_id ? 'selected="selected"' : '') : '' ?>><?=$opr->name?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-6">
                                <div class="form-group">
                                    <h5 style="text-align: center;">Shift</h5>
                                    <select class="form-control select2" name="shift" style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php foreach (SHIFT as $key=>$value)
                                        {
                                        ?>
                                        <option
                                            value="<?=$key?>" <?=isset($results) ? ($key == $results->shift ? 'selected="selected"' : '') : '' ?>><?=$value?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->
                        </div>

                    </div>

                </div>
                <!-- /.card -->

                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 style="">Batch Number</h5>
                                    <input type="text" class="form-control" name="batch_number"
                                           value="<?=isset($results) ? $results->batch_number : ''?>"
                                           placeholder="AUTO">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <h5 style="">Mould No.</h5>
                                    <input type="text" class="form-control" name="mould_no"
                                           value="<?=isset($results) ? $results->mould_no : ''?>"
                                           placeholder="Enter ...">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Discharge Time</h5>
                                    <input type="text" class="form-control" name="discharge_time"
                                           value="<?=isset($results) ? $results->discharge_time : date(DATE_FORMAT)?>"
                                           placeholder="Enter ..." readonly>
                                </div>

                                <div class="form-group">
                                    <h5>Hardness (MM)</h5>
                                    <input type="text" class="form-control" name="hardness"
                                           value="<?=isset($results) ? $results->hardness : ''?>" placeholder="AUTO">
                                </div>
                                <div class="form-group">
                                    <h5>Cutting Time</h5>
                                    <input type="text" class="form-control" name="cutting_time"
                                           value="<?=isset($results) ? $results->cutting_time : ''?>"
                                           placeholder="Auto">
                                </div>
                                <div class="form-group">
                                    <h5>Remark</h5>
                                    <textarea class="form-control" rows="3" name="remark"
                                              placeholder="Enter ..."><?=isset($results) ? $results->remark : ''?></textarea>
                                </div>


                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;
                            <a href="{{url('/admin/raising-report')}}" class="btn btn-warning">Back</a>
                        </div>

                    </div>


                </div>
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('admin.common.footer')
<script>
    $(document).ready(function () {

        $('#raising_form').validate({
            rules: {
                cutting_time: {
                    required: true,
                }, hardness: {
                    required: true,
                }, discharge_time: {
                    required: true,
                }, mould_no: {
                    required: true,
                }, batch_number: {
                    required: true,
                }, shift: {
                    required: true,
                }, operater_id: {
                    required: true,
                },
            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a vaild email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
            submitHandler: function () {
                form.submit();
            }
        });
    });
</script>
