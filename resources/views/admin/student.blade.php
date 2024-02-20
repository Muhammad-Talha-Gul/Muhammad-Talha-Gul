
@extends('layouts.backend')
@section('customStyles')
<link href="{{asset('/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('plugins/bootstrap-sweetalert/sweet-alert.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<style type="text/css">
    .loader {
        float: right;
        margin-left: 10px;
    }
</style>
@if(check_access(Auth::user()->id,'student','_show')==1)
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Student </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="{{url('/admin/home')}}">Admin</a>
                    </li>
                    <li class="active">
                        Student
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card-box table-responsive">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    <p>{{Session::get('success')}}</p>
                </div>
                @elseif(Session::has('error'))
                <div class="alert alert-danger">
                    <p>{{Session::get('error')}}</p>
                </div>
                @endif
                <div class="form-group pull-right" style="margin-bottom: 10px;">
                    {{-- <form action="#" method="POST" id="del_form" form="del_form">{{csrf_field()}}</form>
                    <a class="btn btn-danger btn-sm" id="deleteAll">Delete (<span id="checkCount">0</span>)</a> --}}
                    @if(check_access(Auth::user()->id,'student','_create')==1)
                    {{-- <a href="{{route('student.create')}}" class="btn btn-primary btn-sm">New Page</a> --}}
                    @endif
                </div>
                <h4 class="m-t-0 header-title"><b>Student List</b>
            
                <a style="margin-left: 30px;" class="btn btn-success" onclick="download_to_excel()">Export Excel</a>
            </h4>   
            
            <table id="datatableall" style="display: none;" class="table hover">
                    <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Emails</th>
                        <th>Mobile</th>
                        <th>Nationality</th>
                        <th>Created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $value)
                    <tr>
                    	{{-- {{dd($value)}} --}}
                        <td>{{($value->students->name)??''}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->country}}</td>
                        <td>{{date('dS M, Y h:i a',strtotime($value->created_at))}}</td>
                    </tr>
                    @endforeach


                    </tbody>
                </table>

                <table id="datatable" class="table hover">
                    <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Emails</th>
                        <th>Mobile</th>
                        <th>Nationality</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $value)
                    <tr>
                    	{{-- {{dd($value)}} --}}
                        <td>{{($value->students->name)??''}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->country}}</td>
                        <td>{{date('dS M, Y h:i a',strtotime($value->created_at))}}</td>
                        <td>
                            @if(check_access(Auth::user()->id,'student','_show')==1)<a href="{{route('student.show',($value->students->id)??'')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                            @endif
                            
                        </td>
                    </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@else
@component('admin.access-denied') @endcomponent
@endif
@endsection
@section('customScripts')
<script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/plugins/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('plugins/bootstrap-sweetalert/sweet-alert.min.js')}}"></script>
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
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
        var data = { '_token':"{{csrf_token()}}", 'id':$(this).data('id') };
        jQuery.ajax({
            url:'{{route("ajaxPopularUniversity")}}',
            type: 'post',
            dataType: 'html',
            data: data,
            success: function( data ){
                $loader.html("");
            }
        });
    });
</script>

<script>

function download_to_excel()
{ 

var tab_text="<table><tr>";
var textRange = ''; 
var j=0;
var tab = document.getElementById('datatableall'); // id of table

for(j = 0 ; j < tab.rows.length ; j++) 
{     
    tab_text += tab.rows[j].innerHTML+"</tr>";
}

tab_text +="</table>";

var a = document.createElement('a');
var data_type = 'data:application/vnd.ms-excel';
a.href = data_type + ', ' + encodeURIComponent(tab_text);
//setting the file name
a.download = 'export.xls';
//triggering the function
a.click();
//just in case, prevent default behaviour
e.preventDefault();

}

</script>

@endsection