<?php $__env->startSection('customStyles'); ?>
<link href="<?php echo e(asset('/plugins/datatables/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(asset('/plugins/datatables/dataTables.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(asset('plugins/bootstrap-sweetalert/sweet-alert.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(asset('plugins/toastr/toastr.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    .loader {
        float: right;
        margin-left: 10px;
    }
</style>
<?php if(check_access(Auth::user()->id,'student','_show')==1): ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Consultant </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="<?php echo e(url('/admin/home')); ?>">Admin</a>
                    </li>
                    <li class="active">
                        Consultant
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card-box table-responsive">
                <?php if(Session::has('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e(Session::get('success')); ?></p>
                </div>
                <?php elseif(Session::has('error')): ?>
                <div class="alert alert-danger">
                    <p><?php echo e(Session::get('error')); ?></p>
                </div>
                <?php endif; ?>
                <div class="form-group pull-right" style="margin-bottom: 10px;">
                    
                    <?php if(check_access(Auth::user()->id,'student','_create')==1): ?>
                    
                    <?php endif; ?>
                </div>
                <h4 class="m-t-0 header-title"><b>Consultant List</b></h4>                
                <table id="datatable" class="table hover">
                    <thead>
                    <tr>
                        <th>Consultant Name</th>
                        <th>Emails</th>
                        <th>Mobile</th>
                        <th>Nationality</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    	
                        <td><?php echo e(($value->first_name)??''); ?> <?php echo e(($value->last_name)??''); ?></td>
                        <td><?php echo e($value->email); ?></td>
                        <td><?php echo e($value->phone); ?></td>
                        <td><?php echo e($value->country); ?></td>
                        <td><?php echo e(date('dS M, Y h:i a',strtotime($value->created_at))); ?></td>
                        <td>
                            <?php if(check_access(Auth::user()->id,'student','_show')==1): ?><a href="<?php echo e(route('show_consultant',($value->id)??'')); ?>" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                            <?php endif; ?>
                            <?php if(check_access(Auth::user()->id,'student','_show')==1): ?><a href="<?php echo e(route('show_consultant_student',($value->id)??'')); ?>" class="btn btn-info btn-xs"><i class="fa fa-user"> Students</i></a>
                            <?php endif; ?>
                            
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?php else: ?>
<?php $__env->startComponent('admin.access-denied'); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customScripts'); ?>
<script src="<?php echo e(asset('/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('/plugins/datatables/dataTables.bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/bootstrap-sweetalert/sweet-alert.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/toastr/toastr.min.js')); ?>"></script>
<script type="text/javascript">
    $('#datatable').dataTable({
        sort:false,
    });
    function deleteit(id) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this!",
            type: "error",
            showCancelButton: true,
            cancelButtonClass: 'btn-default btn-md waves-effect',
            confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
            confirmButtonText: 'Delete!',
        },function() {
              $("#delete-form-"+id).submit();
        });
    }
    $(document).on('change','.mark_featured',function(){
        var $loader = $(this).parent().find('.loader');
        $loader.html("<i class='fa fa-refresh fa-spin'></i>");
        var data = { '_token':"<?php echo e(csrf_token()); ?>", 'id':$(this).data('id') };
        jQuery.ajax({
            url:'<?php echo e(route("ajaxPopularUniversity")); ?>',
            type: 'post',
            dataType: 'html',
            data: data,
            success: function( data ){
                $loader.html("");
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>