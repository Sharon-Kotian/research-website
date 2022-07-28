
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Profile:: Publication-Book/Book Chapter</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="http://localhost:8000/assets/css/my-task.style.min.css">
</head>
<body>

<div id="mytask-layout" class="theme-indigo">
<?php $user = Auth::guard('admin')->user(); ?>

    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="{{url('user/dashboard')}}" class="mb-0 brand-icon">
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
                    <a class="m-link" href="{{url('/user/profile')}}/{{$user->id}}"><i
                            class="icofont-user-male"></i> <span>My Profile</span> </a></li>
                            <li><a class="m-link" href="{{url('/user/education')}}"><i class="icofont-book-alt"></i> <span>Education</span></a></li>

                            
                        
                        

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

                        
                   
                    <!-- Menu: Sub menu ul -->
                    
                    <li><a class="m-link" href="{{url('/user/project')}}"><i class="icofont-atom"></i> <span>Projects</span></a></li>
                        <li><a class="m-link" href="{{url('/user/consultancy')}}"><i class="icofont-users-alt-2"></i> <span>Consultancy</span></a></li>
                        <li><a class="m-link" href="{{url('/user/membership')}}"><i class="icofont-company"></i> <span>Membership</span></a></li>
                        <li><a class="m-link" href="{{url('/user/fdp')}}"><i class="icofont-education"></i> <span>FDP</span></a></li>
                        <li><a class="m-link" href="{{url('/user/mdp')}}"><i class="icofont-university"></i> <span>MDP</span></a></li>
                        <li><a class="m-link" href="{{url('/user/certification')}}"><i class="icofont-certificate-alt-2"></i> <span>Certification</span></a></li>
                        <li><a class="m-link" href="{{url('/user/conferenceProceeding')}}"><i class="icofont-lawyer-alt-2"></i> <span>Conference Proceeding</span></a></li>
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
                                <h3 class=" fw-bold flex-fill mb-0 mt-sm-0">Book/Book Chapter</h3>
                                <button type="button" class="btn btn-dark me-1 mt-1 w-sm-100" data-bs-toggle="modal" data-bs-target="#createemp"><i class="icofont-plus-circle me-2 fs-6"></i>Add Book/Book Chapter
                            </button>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">
                
                <?php
                    $edus=\App\Models\Book::where("user_id",$user->id)->get();
                ?>
                
                @foreach($edus as $edu)
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
                                    <h6 class="mb-0 mt-2  fw-bold d-block" style="font-size:20px">{{$edu->book_title}}</h6>
                                    
                                    
                                    <span class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">{{$edu->publication_name}}</span>
                                    
                                    <div class="video-setting-icon mt-3 pt-3 border-top">
                                        
                                        <p><b>Category of Book/Book Chapter :</b> {{$edu->category_of_book}}</p>
                                        <p><b>Type :</b> {{$edu->type}}</p>
                                        <p><b>Authors/Co-Authors :</b> {{$edu->authors_co_authors}}</p>
                                        <p><b>Status :</b> {{$edu->status}}</p>
                                        <p><b>Volume/Chapter :</b> {{$edu->volume}}</p>
                                        <!--<p><b>Page Number :</b> {{$edu->page_number}}</p>-->
                                        <p><b>Link :</b> <a href="{{$edu->book_link}}">{{$edu->book_link}}</a></p>

                                        <!--<p><b>From :</b> {{$edu->start_date}} &nbsp&nbsp  <b>To :</b> {{$edu->end_date}}</p>-->
                                        <p>{{$edu->description}}</p>
                                    </div>
                                    <a href="{{url('/user/editBook')}}/{{$edu->id}}" class="btn btn-dark btn-sm mt-1"><i class="icofont-edit-alt me-2 fs-6"></i>Edit Book/Book Chapter</a>
                                    <a href="{{url('/user/deleteBook')}}/{{$edu->id}}" class="btn btn-dark btn-sm mt-1"><i class="icofont-delete-alt me-2 fs-6"></i>Delete Book/Book Chapter</a>
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
                    
                        <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Add Book/Book Chapter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="{{ url('user/addBook')}}/{{$user->id}}">
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
                            <label for="exampleFormControlInput977" class="form-label">Type</label>
                            <!--<label for="exampleFormControlInput977" class="form-label">Funded</label>-->
                            <input name="type" type="radio" style="width:30px" id="exampleFormControlInput977" value="Book">Book
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="type" type="radio" style="width:30px" id="exampleFormControlInput277" value="Book Chapter">Book Chapter
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput977" class="form-label">Book Category</label>
                            <!--<label for="exampleFormControlInput977" class="form-label">Funded</label>-->
                            <input name="category_of_book" type="radio" style="width:30px" id="exampleFormControlInput977" value="National">National
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="category_of_book" type="radio" style="width:30px" id="exampleFormControlInput277" value="International">International
                            <input name="category_of_book" type="radio" style="width:30px" id="exampleFormControlInput277" value="Indexing">Indexing
                            <input name="category_of_book" type="radio" style="width:30px" id="exampleFormControlInput277" value="ABDC Listed">ABDC Listed
                            <input name="category_of_book" type="radio" style="width:30px" id="exampleFormControlInput277" value="UGC Listed">UGC Listed
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput977" class="form-label">Book Status</label>
                            <!--<label for="exampleFormControlInput977" class="form-label">Funded</label>-->
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput977" value="Published">Published
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput277" value="Accepted">Accepted
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput277" value="Under Review">Under Review
                            
                        </div>
                  <div class="mb-3">     
                            <label for="exampleFormControlInput877" class="form-label">Book/Book Chapter Title</label>
                            <input name="book_title" type="text" class="form-control" id="exampleFormControlInput877" placeholder="Enter Book/Book Chapter Title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput977" class="form-label">Publisher Name</label>
                            <input name="publication_name" type="text" class="form-control" id="exampleFormControlInput977" placeholder="Enter Publisher Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput977" class="form-label">Authors/Co-Authors</label>
                            <input name="authors_co_authors" type="text" class="form-control" id="exampleFormControlInput977" placeholder="Enter Authors/Co-Authors">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput677" class="form-label">Volume/Book Chapter</label>
                            <input name="volume" type="text" class="form-control" id="exampleFormControlInput677" placeholder="Enter Volume/Book Chapter">
                        </div>
                        
                        
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput677" class="form-label">Year of Publication</label>
                            <input name="year_of_publication" type="number" min="1900" max="2099" class="form-control" id="exampleFormControlInput677" placeholder="Enter Year of Publication" required>
                        </div>
                        <div class="deadline-form">
                            
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                        <label for="exampleFormControlInput3778" class="form-label">Page Number From</label>
                                        <input name="page_number_from" type="number" class="form-control" id="exampleFormControlInput3778">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="exampleFormControlInput2778" class="form-label">Page Number To</label>
                                        <input name="page_number_to" type="number" class="form-control" id="exampleFormControlInput2778">
                                    </div>
                                </div>                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput677" class="form-label">book Link</label>
                            <input name="book_link" type="text" class="form-control" id="exampleFormControlInput677" placeholder="Enter Book Link">
                        </div>
                        
                        <div class="mb-3">          
                            <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details"></textarea>
                        </div> 
                        <div>
                    <!-- <label for="exampleFormControlInput877" class="form-label">Conference Proceeding Information</label>
                    <div class="mb-3">     
                            <label for="exampleFormControlInput877" class="form-label">Name</label>
                            <input name="conference_name" type="text" class="form-control" id="exampleFormControlInput877" placeholder="Enter Conference Name">
                        </div>
                        <div class="mb-3">     
                            <label for="exampleFormControlInput877" class="form-label">Date</label>
                            <input name="conference_date" type="date" class="form-control" id="exampleFormControlInput877" placeholder="Enter Conference Date">
                        </div>
                        <div class="mb-3">     
                            <label for="exampleFormControlInput877" class="form-label">Venue</label>
                            <input name="conference_venue" type="text" class="form-control" id="exampleFormControlInput877" placeholder="Enter Conference Venue">
                        </div>
                        <div class="mb-3">     
                            <label for="exampleFormControlInput877" class="form-label">Organization Name</label>
                            <input name="conference_organization_name" type="text" class="form-control" id="exampleFormControlInput877" placeholder="Enter Conference Organization Name">
                        </div>
                        <div class="mb-3">     
                            <label for="exampleFormControlInput877" class="form-label">Title</label>
                            <input name="conference_title" type="text" class="form-control" id="exampleFormControlInput877" placeholder="Enter Conference Title">
                        </div>
                        <div class="mb-3">     
                            <label for="exampleFormControlInput877" class="form-label">Title of Paper Presented</label>
                            <input name="title_of_paper" type="text" class="form-control" id="exampleFormControlInput877" placeholder="Enter Title of Paper Presented">
                        </div>
                    </div> -->

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