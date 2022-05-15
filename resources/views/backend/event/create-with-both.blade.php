@extends('backend/layouts/master')
@section('title', 'Create Event')
@section('content')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       
                        

                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <a href="{{route('event.index')}}" class="btn btn-outline-primary rounded"> <i class="fa fa-puzzle-piece"></i> View All Event</a>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <strong class="card-title"><i class="fa fa-laptop"></i> Create Event With Image and Text</strong>
                            </div> 
                            <div class="card-body">
                               <div class="form">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Title <span class="text text-primary text-lg">*</span></label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter file title" name="title">
                                      </div>
                                     <div class="form-group">
                                        <label for="formGroupExampleInput">Description <span class="text text-primary text-lg">*</span></label>
                                          
                                            <textarea class="form-control" type="text" class="custom-file-input" id="inputGroupFile01"></textarea>
                                        </div>
                                        <div class="form-group">
                                         <label for="formGroupExampleInput">Choose File <span class="text text-primary text-lg">*</span></label>
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="file">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                          </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-md rounded">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection