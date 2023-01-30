@include('admin.common.header')
@include('admin.common.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Labour Deployment Sheet</h6>
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
            $redirect = isset($results) ? 'update/' . $results->id : 'save';
            ?>
            <form id="labour_dep_form" method="post" action="{{url('/admin/labour-report/'.$redirect)}}">
                @csrf
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row">
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
                                        }?>

                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->
                        </div>

                    </div>

                </div>

                <div class="card card-default">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 style="text-align: center;">Name Of Labour</h5>
                                    <select class="form-control select2" name="labour_id" style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php foreach ($labour as $opr) { ?>
                                        <option value="<?=$opr->id?>" <?=isset($results) ? ($opr->id == $results->labour_id ? 'selected="selected"' : '') : '' ?>><?=$opr->name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Area Of Work</h5>
                                    <input type="text" name="area_of_work"
                                           value="<?=isset($results) ? $results->area_of_work : ''?>"
                                           class="form-control" placeholder="Enter...">
                                </div>

                                <div class="form-group">
                                    <h5 style="text-align: center;">Contractor Name</h5>
                                    <select class="form-control select2" name="contractor_id" style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php foreach ($contractor as $opr) { ?>
                                        <option
                                            value="<?=$opr->id?>" <?=isset($results) ? ($opr->id == $results->contractor_id ? 'selected="selected"' : '') : '' ?>><?=$opr->name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 style="text-align: center;">Reporting Operator Name</h5>
                                    <select class="form-control select2" name="operater_id" style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php foreach ($operator as $opr) { ?>
                                        <option
                                            value="<?=$opr->id?>" <?=isset($results) ? ($opr->id == $results->operater_id ? 'selected="selected"' : '') : '' ?>><?=$opr->name?></option>
                                        <?php } ?>

                                    </select>
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;
                        <a href="{{url('/admin/labour-report')}}" class="btn btn-warning">Back</a>
                    </div>

                </div>
            </form>

        </div>
    </section>

</div>
@include('admin.common.footer')
<script>
    $(document).ready(function () {

        $('#labour_dep_form').validate({
            rules: {
                operater_id: {
                    required: true,
                }, contractor_id: {
                    required: true,
                }, area_of_work: {
                    required: true,
                }, labour_id: {
                    required: true,
                }, shift: {
                    required: true,
                }
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
