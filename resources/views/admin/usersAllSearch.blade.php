
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Profile:: Dashboard</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="http://localhost:8000/assets/css/my-task.style.min.css">
    <style>
        table,th,td{
            border:1px solid black;
            padding:10px;
        }
    </style>
</head>
<body>

<div id="mytask-layout" class="theme-indigo">
<?php $user = Auth::guard('admin')->user(); ?>

    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="{{url('admin/basicSearchDashboard')}}" class="mb-0 brand-icon">
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
                    <a class="m-link" href="{{url('/admin/usersAllSearch')}}"><i
                            class="icofont-user-male"></i> <span>Users</span> </a></li>
                            <li><a class="m-link" href="{{url('/admin/nameWiseSearch')}}"><i class="icofont-book-alt"></i> <span>Name</span></a></li>
                            <li><a class="m-link" href="{{url('/admin/educationWiseSearch')}}"><i class="icofont-book-alt"></i> <span>Education</span></a></li>

                            
                        
                        

                        <li class="collapsed">
                            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components1" href="#"><i
                            class="icofont-law-book"></i> <span>Publications</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                                <ul class="sub-menu collapse" id="client-Components1">
                                    <li><a class="ms-link" href="{{url('/admin/paperWiseSearch')}}"> <span>Paper</span></a></li>
                                    <li><a class="ms-link" href="{{url('/admin/bookWiseSearch')}}"> <span>Book/Book Chapter</span></a></li>
                                    <li><a class="ms-link" href="{{url('/admin/patentWiseSearch')}}"> <span>Patent</span></a></li>
                                </ul>
                        </li>

                        
                   
                    <!-- Menu: Sub menu ul -->
                    
                    <li><a class="m-link" href="{{url('/admin/projectWiseSearch')}}"><i class="icofont-atom"></i> <span>Projects</span></a></li>
                        <li><a class="m-link" href="{{url('/admin/consultancyWiseSearch')}}"><i class="icofont-users-alt-2"></i> <span>Consultancy</span></a></li>
                        <li><a class="m-link" href="{{url('/admin/membershipWiseSearch')}}"><i class="icofont-company"></i> <span>Membership</span></a></li>
                        <li><a class="m-link" href="{{url('/admin/fdpWiseSearch')}}"><i class="icofont-education"></i> <span>FDP</span></a></li>
                        <li><a class="m-link" href="{{url('/admin/mdpWiseSearch')}}"><i class="icofont-university"></i> <span>MDP</span></a></li>
                        <li><a class="m-link" href="{{url('/admin/certificationWiseSearch')}}"><i class="icofont-certificate-alt-2"></i> <span>Certification</span></a></li>
                        <li><a class="m-link" href="{{url('/admin/conferenceWiseSearch')}}"><i class="icofont-lawyer-alt-2"></i> <span>Conference Proceeding</span></a></li>
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
                                <h3 class=" fw-bold flex-fill mb-0 mt-sm-0">All Users</h3>
                                <!-- <button type="button" class="btn btn-dark me-1 mt-1 w-sm-100" data-bs-toggle="modal" data-bs-target="#createemp"><i class="icofont-plus-circle me-2 fs-6"></i>Add Education</button> -->
                                
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">
                
                <?php
                    $edus=\App\Models\Patent::where("user_id",$user->id)->count();
                    $edus1=\App\Models\Paper::where("user_id",$user->id)->count();
                    $edus2=\App\Models\Book::where("user_id",$user->id)->count();
                    $edus3=\App\Models\Book::where("user_id",$user->id)->count();
                ?>
                
                
                
                <table id="data_table" style="border:1px solid red;border-collapse:collapse;width:100%;font-size:15px;">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Employee ID</th>
                            <th>Designation</th>
                            <th>Date of Joining</th>
                            <th>Domain of Expertise</th>
                            <th>Papers</th>
                            <th>Patents</th>
                            <th>Books</th>
                            <th>Certifications</th>
                            <th>Projects</th>
                            <th>Memberships</th>
                            <th>Consultancy</th>
                            
                            <th>FDP</th>
                            <th>MDP</th>
                            <th>Conference Proceeding</th>
                           
                        </tr>
                        @if(isset($users))
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->firstName}}</td>
                                <td>{{$user->lastName}}</td>
                                <td>{{$user->email}}</td>
                                @if($user->gender==0)
                                <td>Male</td>
                                @else
                                <td>Female</td>
                                @endif
                                <td>{{$user->employee_id}}</td>
                                <td>{{$user->designation}}</td>
                                <td>{{$user->date_of_joining}}</td>
                                <td>{{$user->domain_of_expertise}}</td>
                                <?php
                                $edus=\App\Models\Patent::where("user_id",$user->id)->count();
                    $edus1=\App\Models\Paper::where("user_id",$user->id)->count();
                    $edus2=\App\Models\Book::where("user_id",$user->id)->count();
                    $edus3=\App\Models\Certification::where("user_id",$user->id)->count();
                    $edus4=\App\Models\Projects::where("user_id",$user->id)->count();
                    $edus5=\App\Models\Membership::where("user_id",$user->id)->count();
                    $edus6=\App\Models\Consultancy::where("user_id",$user->id)->count();
                    $edus7=\App\Models\FDP::where("user_id",$user->id)->count();
                    $edus8=\App\Models\MDP::where("user_id",$user->id)->count();
                    $edus9=\App\Models\ConferenceProceeding::where("user_id",$user->id)->count();
                    ?>
                                <td>{{$edus1}}</td>
                                <td>{{$edus}}</td>
                                <td>{{$edus2}}</td>
                                <td>{{$edus3}}</td>
                                <td>{{$edus4}}</td>
                                <td>{{$edus5}}</td>
                                <td>{{$edus6}}</td>
                                <td>{{$edus7}}</td>
                                <td>{{$edus8}}</td>
                                <td>{{$edus9}}</td>

                            </tr>
                        @endforeach
                        @endif

                    </table>


                
                        <!--</div>-->
                        </div>
            </div>
        </div>
        
       <!-- Modal Members-->
       

        <!-- Create Employee-->
        
    </div>
</div>

<!-- Jquery Core Js -->
<script src="http://localhost:8000/assets/bundles/libscripts.bundle.js"></script>

<!-- Jquery Page Js -->
<!--<script src="http://localhost:8000/js/template.js"></script>-->
</body>
</html>