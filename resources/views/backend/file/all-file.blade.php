@extends('backend/layouts/master')
@section('title', 'Dashboard')
@section('content')


        <div class="content mt-3 pb-5">
            <div class="animated fadeIn">
                <h4 class="file-heading">file Upload</h4>
                       <div class="col-md-8 offset-sm-2">
                            <div class="file-form">
                                <form action="" method="post">
                                @csrf

                                <!--  For multiple file uploads  -->
                                <input type="file" name="gallery[]" multiple required/>
                                <p class="help-block">{{ $errors->first('gallery.*') }}</p>
                                <div class="upload-icon">
                                    <i class="fa fa-arrow-up"></i>
                                </div>
                                <button type="submit" class="custom-btn btn btn-outline-primary btn-md">Submit</button>
                            </form>
                            </div>
                        </div>
                
               



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



<style type="text/css">
.file-form {
    margin-top: 50px;
}

.filepond--root.filepond--hopper {
    height: 397px !important;
}

.custom-btn {
    position: absolute;
    bottom: -17px;
    z-index: 9999;
}



.upload-icon {
    position: absolute;
    top: 161px;
    z-index: 999999999;
    left: 200px;
    width: 43px;
    height: 42px;
    background: white;
    line-height: 45px;
    text-align: center;
    border: 1px solid orange;
    border-radius: .2rem;
}

.upload-icon i.fa.fa-arrow-up {
    font-size: 29px;
    color: #626262;
}

.file-heading {
    text-transform: capitalize;
    border-bottom: 2px solid #fff;
    padding-bottom: 6px;
}

.filepond--drop-label {

    width: 400px !important;

}


.filepond--list-scroller {
    position: absolute;
    top: -70% !important;
    width: 500px;
    left: 56%;
}


.filepond--drop-label {

    top: 0%;

}

.filepond--drop-label {
    width: 400px !important;
    border: 4px dashed wheat;
    height: 300px;
    margin: 11px;
}

.filepond--root.filepond--hopper {

    border-radius: .5rem;
}

body {
    background: #f1f0ef;
}

</style>


@endsection

@section('script')
<script>
    // Set default FilePond options
    FilePond.setOptions({
        server: {
            url: "{{ config('filepond.server.url') }}",
            headers: {
                'X-CSRF-TOKEN': "{{ @csrf_token() }}",
            }
        }
    });

    // Create the FilePond instance
    FilePond.create(document.querySelector('input[name="avatar"]'));
    FilePond.create(document.querySelector('input[name="gallery[]"]'), {chunkUploads: true});


</script>

@endsection