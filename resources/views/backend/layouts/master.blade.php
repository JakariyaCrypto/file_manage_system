@include('backend/layouts/partials/header')
<body>


    <!-- Left Panel -->

    
 
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





    @include('backend/layouts/partials/footer')

    @yield('script')
    
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

body{
    font-family: 'Poppins', sans-serif !important;
}


.file-icon-blue i.fa.fa-folder {
    color: blue;
    font-size: 100px;
}
        

.file-item {
    margin: 20px;
}

.file-title h6 {
    font-size: 15px;
    padding-top: 8px;
    color: #939393;
}


.file-icon-green i.fa.fa-folder {
    font-size: 100px;
    color: green;
        border-radius: .5rem;
    }

    .col-sm-2 {
        max-width: 13.667% !important;
    }

.custom-card {
    border-top: 3px solid orange;
    border-radius: .8rem;
}
    .custom-modal {
        border: ;
        border-top: 5px solid orange;
        border-radius: .5rem;
        background: #ffffff;

    }

.custom-modal-title {
    font-size: 21px;
    font-weight: 300;
    color: #666464;
}

#formGroupExampleInput {
    font-size: 16px;
    text-transform: capitalize;
    height: 45px;
}

#inputGroupFile01 {
    font-size: 16px;
    text-transform: capitalize;
    height: 45px;
}

label {
    color: #606060 !important;
}

</style>
</body>

</html>
