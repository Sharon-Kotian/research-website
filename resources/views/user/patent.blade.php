
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Profile:: Patent</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="http://localhost:8000/assets/css/my-task.style.min.css">
</head>
<body>

<div id="mytask-layout" class="theme-indigo">

    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="index.html" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
                </span>
                <span class="logo-text">My-Dashboard</span>
            </a>
            <!-- Menu: main ul -->
            <ul class="menu-list flex-grow-1 mt-3">
                
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#"><i
                            class="icofont-user-male"></i> <span>My Profile</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="client-Components">
                        <li><a class="ms-link" href="{{url('/user/education')}}"> <span>Education</span></a></li>
                        

                        <li class="collapsed">
                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components1" href="#"><i
                            class="icofont-law-book"></i> <span>Publications</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                                <ul class="sub-menu collapse" id="client-Components1">
                                    <li><a class="ms-link" href="{{url('/user/paper')}}"> <span>Paper</span></a></li>
                                    <li><a class="ms-link" href="{{url('/user/book')}}"> <span>Book/Book Chapter</span></a></li>
                                    <li><a class="ms-link" href="{{url('/user/patent')}}"> <span>Patent</span></a></li>
                                </ul>
                        </li>

                        <li><a class="ms-link" href="{{url('/user/project')}}"> <span>Projects</span></a></li>
                        <li><a class="ms-link" href="{{url('/user/consultancy')}}"> <span>Consultancy</span></a></li>
                        <li><a class="ms-link" href="{{url('/user/membership')}}"> <span>Membership</span></a></li>
                    </ul>
                </li>
                
            </ul>


            
        </div>
    </div>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
    
                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">   
                        <?php $user = Auth::guard('admin')->user(); ?>
                                                      
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">{{$user->firstName}} {{$user->lastName}}</span></p>
                                <small>Admin Profile</small>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="http://localhost:8000/assets/images/avatar2.jpg" alt="profile">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="http://localhost:8000/assets/images/avatar2.jpg" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">{{$user->firstName}} {{$user->lastName}}</span></p>
                                                <small class="">{{$user->email}}</small>
                                            </div>
                                            <div style="display:flex;margin-left:-100px;text-align:left;">
                                            <a href="{{url('logout')}}">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>
    
                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                        </div>
                    </div>
    
                </div>
            </nav>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card border-0 mb-4 no-bg">
                            <div class="card-header py-3 px-0 d-sm-flex align-items-center  justify-content-between border-bottom">
                                <h3 class=" fw-bold flex-fill mb-0 mt-sm-0">Patents</h3>
                                <button type="button" class="btn btn-dark me-1 mt-1 w-sm-100" data-bs-toggle="modal" data-bs-target="#createemp"><i class="icofont-plus-circle me-2 fs-6"></i>Add Patent</button>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">
                
                <?php
                    $mems=\App\Models\Patent::where("user_id",$user->id)->get();
                ?>
                
                @foreach($mems as $mem)
                <div class="col">
                        <div class="card teacher-card">
                            <!--<div class="card-body d-flex">-->
                                <!--<div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                                    <img src="http://localhost:8000/employee/873068846.JPG" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                        <div class="followers me-2">
                                            <i class="icofont-tasks color-careys-pink fs-4"></i>
                                            <span class="">04</span>
                                        </div>
                                        <div class="star me-2">
                                            <i class="icofont-star text-warning fs-4"></i>
                                            <span class="">4.5</span>
                                        </div>
                                        <div class="own-video">
                                            <i class="icofont-data color-light-orange fs-4"></i>
                                            <span class="">04</span>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                                    <h6 class="mb-0 mt-2  fw-bold d-block" style="font-size:20px">{{$mem->patent_title}}</h6>
                                    
                                    <span class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">{{$mem->granting_agency}}</span>
                                    <div class="video-setting-icon mt-3 pt-3 border-top">
                                        <p><b>Year :</b> {{$mem->year}}</p>
                                        <p><b>Domain :</b> {{$mem->domain}}</p>
                                        <p><b>Name of Patent Holders :</b> {{$mem->patent_holders}}</p>
                                    </div>
                                    <a href="{{url('/user/editPatent')}}/{{$mem->id}}" class="btn btn-dark btn-sm mt-1"><i class="icofont-edit-alt me-2 fs-6"></i>Edit Patent</a>
                                    <a href="{{url('/user/deletePatent')}}/{{$mem->id}}" class="btn btn-dark btn-sm mt-1"><i class="icofont-delete-alt me-2 fs-6"></i>Delete Patent</a>
                                </div>
                            </div>
                        <!--</div>-->
                        </div>
                        @endforeach
            </div>
        </div>
        
       <!-- Modal Members-->
       

        <!-- Create Employee-->
        <div class="modal fade" id="createemp" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                
                    <div class="modal-header">
                    
                        <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Add Patent</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="{{ url('user/addPatent')}}/{{$user->id}}">
                    @csrf
                    @if(Session::has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="">Error: </span>
                        {!! session('loginError') !!}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                @endif
                @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="">Error: </span>
                        {!! $error!!}
                        <!--{!! session('loginError') !!}-->

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endforeach
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="">Success: </span>
                        {!! session('success') !!}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                  <div class="mb-3">     
                            <label for="exampleFormControlInput877" class="form-label">Title of Patent</label>
                            <input name="patent_title" type="text" class="form-control" id="exampleFormControlInput877" placeholder="Enter Title of Patent">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput677" class="form-label">Name of Granting Agency</label>
                            <input name="granting_agency" type="text" class="form-control" id="exampleFormControlInput677" placeholder="Enter Name of Granting Agency">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput677" class="form-label">Year</label>
                            <input name="year" type="number" min="1900" max="2099" class="form-control" id="exampleFormControlInput677" placeholder="Enter Year">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput677" class="form-label">Domain</label>
                            <input name="domain" type="text" class="form-control" id="exampleFormControlInput677" placeholder="Enter Domain">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput677" class="form-label">Name of Patent Holders</label>
                            <input name="patent_holders" type="text" class="form-control" id="exampleFormControlInput677" placeholder="Enter Name of Patent Holders">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput977" class="form-label">Status</label>
                            <!--<label for="exampleFormControlInput977" class="form-label">Funded</label>-->
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput977" value="Submitted">Submitted
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput277" value="Granted">Granted
                            
                        </div>
                        
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="submit()">Save</button>
                    </div> 
                    </form>

                </div>
                  
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="http://localhost:8000/assets/bundles/libscripts.bundle.js"></script>

<!-- Jquery Page Js -->
<!--<script src="http://localhost:8000/js/template.js"></script>-->
</body>
</html>