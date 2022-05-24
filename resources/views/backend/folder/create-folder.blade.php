@extends('backend/layouts/master')
@section('title', 'Dashboard')
@section('content')


        <div class="content mt-3 pb-5 ">
            <div class="animated fadeIn">
                <h4 class="file-heading"> <i class="fa fa-folder"></i> Create folder</h4>
                 <form action="{{route('filepond.upload')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="container custom-container">
                            <div class="col-sm-6">
                                <div class="file-form">

                                    <!--  For multiple file uploads  -->
                                    <input type="file" class="filepond" name="files" id="files">
                                    <p class="help-block">{{ $errors->first('image') }}</p>
                                    <div class="upload-icon">
                                        <i class="fa fa-arrow-up"></i>
                                    </div>
                                   
                                
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="formGroupExampleInput"> Name <span class="text text-primary text-lg">*</span></label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="name">
                                  </div>
                                  <div class="form-group">
                                    <label for="formGroupExampleInput"> E-mail <span class="text text-primary text-lg">*</span></label>
                                    <input type="email" class="form-control" id="formGroupExampleInput" name="email">
                                  </div>
                                  <div class="form-group">
                                    <label for="formGroupExampleInput"> Phone <span class="text text-primary text-lg">*</span></label>
                                    <input type="number" class="form-control" id="formGroupExampleInput" name="mobile">
                                  </div>
                                  <div class="form-group">
                                    <label for="formGroupExampleInput"> Address <span class="text text-primary text-lg">*</span></label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="address">
                                   
                                  </div>
                                </div>
                                 <button type="submit" class="custom-btn btn btn-outline-primary btn-md">Create Folder</button>
                            </div>

                        </div>
                    </div>

                </form>
               
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


/*.filepond--list-scroller {
    position: absolute;
    top: -70% !important;
    width: 500px;
    left: 56%;
}
*/

.filepond--drop-label {

    top: 0%;

}

.filepond--drop-label {
    width: 400px !important;
    height: 300px;
    margin: 11px;
}

.filepond--root.filepond--hopper {

    border-radius: .5rem;
}

.filepond--list-scroller {
    position: absolute;
    top: -105px;
}

.container.custom-container {
    background: white;
    margin-top: 50px;
    padding: 20px 10px;
}

.custom-btn {
    margin-top: 30px;
}


body {
    background: #f1f0ef;
}

</style>


@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.js"></script>
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>


  <script>


// Get a reference to the file input element
    const inputElement = document.querySelector('input[type="file"]');

    // Create a FilePond instance
    const pond = FilePond.create(inputElement);
FilePond.setOptions({
        server: {
        url: '/filepond/api',
        timeout: 7000,
        process: {
            url: '/process',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            onload: (response) => response.key,
            onerror: (response) => response.data,
            ondata: (formData) => {
                return formData;
            }
        },
    }
    });
            
        </script>

@endsection