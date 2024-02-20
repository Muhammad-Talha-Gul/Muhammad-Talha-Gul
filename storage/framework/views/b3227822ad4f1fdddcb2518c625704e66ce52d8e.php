<?php $__env->startSection('customStyles'); ?>
<link href="<?php echo e(asset('/plugins/datatables/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo e(asset('/plugins/datatables/dataTables.bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    table{
      margin: 0 auto;
      width: 100%;
      clear: both;
      border-collapse: collapse;
      table-layout: fixed; 
      word-wrap:break-word;
    }
    .loader {
        float: right;
        margin-left: 10px;
    }
</style>
<?php if(check_access(Auth::user()->id,'guide','_show')==1): ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
                <h4 class="page-title">Guide </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="<?php echo e(url('/admin/home')); ?>">Admin</a>
                    </li>
                    <li class="active">
                        All Guides
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card-box table-responsive">
                <?php if(check_access(Auth::user()->id,'guide','_create')==1): ?>
                <a download href="https://universitiespage.com/guides_sitemap.xml" class="btn btn-success btn-md pull-right" style="margin-bottom: 10px;">Generate Site-map</a>
                <a href="<?php echo e(route('guide.create')); ?>" class="btn btn-primary btn-md pull-right" style="margin-bottom: 10px;margin-right:10px;">Add Guide</a>
                <?php endif; ?>
                <h4 class="m-t-0 header-title"><b>Guide List</b></h4>

                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Author</th>
                        <th>Active</th>
                        <th>Popular</th>
                        <th>Created at</th>
                        <?php if(check_access(Auth::user()->id,'guide','_edit')==1): ?>
                        <th>Action</th>
                        <?php endif; ?>
                    </tr>
                    </thead>


                    <tbody>
                	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                	<tr>
                        <td><?php echo e($value->title); ?>/ <a href="<?php echo e(url('guides/'.$value->slug)); ?>" target="_blank"><i class="fa fa-eye"></i></a></td>
                        <td><?php echo e($value->guide_type); ?></td>
                		<td><?php echo e(($value->user->first_name)??''); ?></td>
                		<td><?php echo e(($value->is_active==1)?'Yes':'No'); ?></td>
                        <td valign="middle">
                            <div class="form-group">
                                <input id="comment_Approvel<?php echo e($value->id); ?>" class="mark_featured" switch="primary" data-id="<?php echo e($value->id); ?>" type="checkbox" <?php if($value->is_featured == 1): ?> checked="checked" <?php endif; ?>>
                                <label for="comment_Approvel<?php echo e($value->id); ?>" data-on-label="Yes" data-off-label="No"></label>
                                <span class="loader"></span>
                            </div>
                        </td>
                        <td><?php echo e($value->created_at); ?></td>
                        <?php if(check_access(Auth::user()->id,'guide','_edit')==1): ?>
                		<td><a href="<?php echo e(route('guide.edit',$value->id)); ?>" class="btn btn-warning btn-md">Edit</a></td>
                        <?php endif; ?>
                	</tr>
                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
                <div> <!-- by sadam -->
                    
                    <?php 
                    if($data)
                    { 
                        $baseURL = "https://www.universitiespage.com/";
                        $string = '<?xml version="1.0" encoding="UTF-8"?> <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
                        
                        foreach($data as $slug)
                        { 
                            $string .= '<url>';
                            $string .= '<loc>'.$baseURL.'guides/'.(isset($slug->slug)? $slug->slug : '').'</loc>';
                            $string .= '<lastmod>'.date('Y-m-d').'</lastmod>';
                            $string .= '</url>';
                            
                        }
                        
                        $string .='</urlset>';
                        file_put_contents("guides_sitemap.xml", $string);
                    
                    }
                   ?>
                </div> <!-- end by sadam -->
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
<script type="text/javascript">
	$('#datatable').dataTable();
    $(document).on('change','.mark_featured',function(){
        var $loader = $(this).parent().find('.loader');
        $loader.html("<i class='fa fa-refresh fa-spin'></i>");
        var data = { '_token':"<?php echo e(csrf_token()); ?>", 'id':$(this).data('id') };
        jQuery.ajax({
            url:'<?php echo e(route("ajaxPopularGuide")); ?>',
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