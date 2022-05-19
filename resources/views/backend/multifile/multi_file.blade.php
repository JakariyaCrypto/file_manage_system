@extends('backend/layouts/master')
@section('title', 'Dashboard')
@section('content')


        <div class="content mt-3">
            <div class="animated fadeIn">
                       <div class="col-md-12">
                        <div class="card custom-card">
                            <div class="row">
                                 <form action="" method="post">
                                @csrf
                                <!--  For single file upload  -->
                                <input type="file" name="avatar" required/>
                                <p class="help-block">{{ $errors->first('avatar') }}</p>

                                <!--  For multiple file uploads  -->
                                <input type="file" name="gallery[]" multiple required/>
                                <p class="help-block">{{ $errors->first('gallery.*') }}</p>

                                <button type="submit">Submit</button>
                            </form>
                                
                            </div>
                        </div>
                    </div>
                
               



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



     


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