@include('backend/layouts/partials/header')
<body>


    <!-- Left Panel -->

    
    @include('backend/layouts/partials/sidebar')
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
    
    @include('backend/layouts/partials/header-top')

       
        <!-- Header-->

            
            @yield('content')


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="add-new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-file"></i> Create New File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="formGroupExampleInput">Title <span class="text text-primary text-lg">*</span></label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter file title">
                  </div>
                 <div class="form-group">
                <label for="formGroupExampleInput">Choose File <span class="text text-primary text-lg">*</span></label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
      </div>
    </div>
  </div>
</div>


    @include('backend/layouts/partials/footer')
    
   

<style type="text/css">

</style>
</body>

</html>
