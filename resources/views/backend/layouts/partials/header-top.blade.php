 <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-1">
                    <div class="user-area dropdown float-left">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('backend/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            

                            <a class="nav-link" href="{{ route('logout') }}"
                            	onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            >

                            	<i class="fa fa-power-off"></i> 
                            	Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </div>


                </div>
                 <div class="col-sm-11">
                <div class="page-header float-right">
                    <div class="page-title">
                       <a href="create-file.html" class="btn btn-outline-primary rounded" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i> Create Folder</a>
                    </div>
                </div>
            </div>

            </div>

        </header><!-- /header -->