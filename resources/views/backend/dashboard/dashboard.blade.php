@extends('backend/layouts/master')
@section('title', 'Dashboard')
@section('content')

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       
                       <ol class="breadcrumb text-right">
                        <a href="create-file.html" class="btn btn-outline-primary rounded"> <i class="fa fa-plus"></i> Create File</a>

                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="#"><i class="fa fa-puzzle-piece"></i> View All </a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-file"></i> All Files</strong>
                            </div> 
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>name</th>
                                            <th>Size</th>
                                            <th style="width:15%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-success rounded"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-sm btn-outline-danger rounded"><i class="fa fa-trash"></i></a>
                                                <a href="#" class="btn btn-sm btn-outline-warning rounded"><i class="fa fa-arrow-down"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection