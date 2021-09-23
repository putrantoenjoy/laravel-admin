@extends('admin.layout.master')

@section('content')
    <link rel="stylesheet" href="{{asset('public/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".mul-select").select2({
                placeholder: "Pilih permission",
                tags: true,
                tokenSeparators: ['/',',',';',' '],
                width: "100%"
            })
        })
    </script>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Create Role</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">{{$pagename}}</strong> Elements
                            </div>
                            <div class="card-body card-block">

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <div class="list-group">
                                        @foreach($errors->all() as $error)
                                            <li class="list-group-item">
                                                {{$error}}
                                            </li>
                                        @endforeach
                                        </div>
                                    </div>
                                @endif
                                <form action="{{route('role.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">nama role</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtnama_role" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">permission</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="optionid_permission[]" id="select" class="mul-select" multiple="true">
                                                @foreach($allPermission as $permission)
                                                    <option value={{$permission->id}}>
                                                    {{$permission->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Simpan
                                        </button>
                                        <!-- <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button> -->
                                        
                                        
                                </form>
                            </div>
                        </div>


                        
                        <script src="{{asset('public/admin/vendors/jquery/dist/jquery.min.js')}}"></script>
                        <script src="{{asset('public/admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>

                        <script src="{{asset('public/admin/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
                        <script src="{{asset('public/admin/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')}}"></script>

                        <script src="{{asset('public/admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                        <script src="{{asset('public/admin/assets/js/main.js')}}"></script>
@endsection