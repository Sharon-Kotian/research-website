
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Profile:: Education</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="http://localhost:8000/assets/css/my-task.style.min.css">
</head>
<body>

<div id="mytask-layout" class="theme-indigo">

    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0" style="width:400px;">
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
            </a><br>
            <?php $domains= \App\Models\User::all()->unique('domain_of_expertise'); ?>
            <ul class="menu-list flex-grow-1 mt-3">
            <span style="font-size:17px;color:white;">Name</span>
            <input id="name" type="text" name="name" style="font-size:17px;" class="form-control" placeholder="Name Wise Search"><br><br>
            <span style="font-size:17px;color:white;">Year</span>
            <input id="year" type="number" name="year" min=1970 max=2100 style="font-size:17px;" class="form-control" placeholder="Year Wise Search"><br><br>
            <span style="font-size:17px;color:white;">Domain</span>
            @foreach($domains as $domain)
                <label class="d-block" for="{{$domain->domain_of_expertise}}">
                <input id="{{$domain->domain_of_expertise}}" type="checkbox" name="domain[]" value="{{$domain->domain_of_expertise}}"><span style="font-size:17px;color:white;">&nbsp;&nbsp;{{$domain->domain_of_expertise}}</span>
                </label>
            @endforeach
            </ul>
            <!-- <div style="color:white">
                                
                        
                        
                                        
                                  <div><span style="font-size:20px;color:white;">Name</span></div>
                                  
                                  <label class="d-block" for="name">
                                    <input id="name" type="text" name="name" style="font-size:20px;" class="form-control" placeholder="Name Wise Search">
                                  </label>
                                 
                                  
                                </div><br><br>
                                <div><span style="font-size:20px;color:white;">Year</span></div>
                                  
                                  <label class="d-block" for="year">
                                    <input id="year" type="number" name="year" min=1970 max=2100 style="font-size:20px;" class="form-control" placeholder="Year Wise Search">
                                  </label>
                                 
                                  
                                </div><br><br>
                                <div><span style="font-size:20px;color:white;">Domain</span></div>
                                  @foreach($domains as $domain)
                                  <label class="d-block" for="{{$domain->domain_of_expertise}}">
                                    <input id="{{$domain->domain_of_expertise}}" type="checkbox" name="domain[]" value="{{$domain->domain_of_expertise}}"><span style="font-size:20px;color:white;">&nbsp;&nbsp;{{$domain->domain_of_expertise}}</span>
                                  </label>
                                  @endforeach
                                  
                                </div>
</div> -->
            <!-- Menu: main ul -->
            <!-- <ul class="menu-list flex-grow-1 mt-3">
                
                <li class="collapsed">
                    <a class="m-link" href="{{url('/user/profile')}}">
                        <i class="icofont-user-male"></i> <span><input type="checkbox">AI/ML</span></a></li>
                            <li><a class="m-link" href="{{url('/user/education')}}"><i class="icofont-book-alt"></i> <span>Faculty Wise Search</span></a></li>                       
                   
                     Menu: Sub menu ul 
                    
                    <li><a class="m-link" href="{{url('/user/project')}}"><i class="icofont-atom"></i> <span>Domain Wise Search</span></a></li>
                        <li><a class="m-link" href="{{url('/user/consultancy')}}"><i class="icofont-users-alt-2"></i> <span>Year Wise Search</span></a></li>                 
            </ul> -->


            
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

                                
                                <h3 class=" fw-bold flex-fill mb-0 mt-sm-0">Search Results</h3>
                                <!-- <button type="button" class="btn btn-dark me-1 mt-1 w-sm-100" data-bs-toggle="modal" data-bs-target="#createemp"><i class="icofont-plus-circle me-2 fs-6"></i>Add Education</button> -->
                                
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">
                
                <?php
                    $edus=\App\Models\Education::where("user_id",$user->id)->count();
                ?>
                
                
                       
    </div>
</div>

<!-- Jquery Core Js -->
<script src="http://localhost:8000/assets/bundles/libscripts.bundle.js"></script>

<!-- Jquery Page Js -->
<!--<script src="http://localhost:8000/js/template.js"></script>-->
</body>
</html>