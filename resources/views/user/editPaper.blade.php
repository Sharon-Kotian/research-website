
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Profile:: Book/Book Chapter</title>
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
                                <h3 class=" fw-bold flex-fill mb-0 mt-sm-0">Books/Book Chapters</h3>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                        <!--</div>-->
            </div>
            
            
                
            <form method="post" enctype="multipart/form-data" action="{{ url('user/editPaper')}}/{{$PaperDetails->id}}">
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
                            <label for="exampleFormControlInput877" class="form-label">Paper Title</label>
                            <input name="paper_topic" type="text" class="form-control" id="exampleFormControlInput877" value="{{$PaperDetails->paper_topic}}" placeholder="Enter Paper Topic">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput977" class="form-label">Journal Name</label>
                            <input name="publication_name" type="text" class="form-control" id="exampleFormControlInput977" value="{{$PaperDetails->publication_name}}" placeholder="Enter Publication Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput977" class="form-label">Journal Category</label>
                            <!--<label for="exampleFormControlInput977" class="form-label">Funded</label>-->
                            @if($PaperDetails->category_of_journal=="National")
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput977" value="National" checked>National
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="International">International
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="Indexing">Indexing
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="ABDC Listed">ABDC Listed
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="UGC Listed">UGC Listed
                            @elseif($PaperDetails->category_of_journal=="International")
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput977" value="National">National
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="International" checked>International
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="Indexing">Indexing
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="ABDC Listed">ABDC Listed
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="UGC Listed">UGC Listed
                            @elseif($PaperDetails->category_of_journal=="Indexing")
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput977" value="National">National
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="International">International
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="Indexing" checked>Indexing
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="ABDC Listed">ABDC Listed
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="UGC Listed">UGC Listed
                            @elseif($PaperDetails->category_of_journal=="ABDC Listed")
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput977" value="National">National
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="International">International
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="Indexing">Indexing
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="ABDC Listed" checked>ABDC Listed
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="UGC Listed">UGC Listed
                            @else
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput977" value="National">National
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="International">International
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="Indexing">Indexing
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="ABDC Listed">ABDC Listed
                            <input name="category_of_journal" type="radio" style="width:30px" id="exampleFormControlInput277" value="UGC Listed" checked>UGC Listed
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput977" class="form-label">Paper Status</label>
                            <!--<label for="exampleFormControlInput977" class="form-label">Funded</label>-->
                            @if($PaperDetails->status=="Published")
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput977" value="Published" checked>Published
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput277" value="Accepted">Accepted
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput277" value="Under Review">Under Review
                            @elseif($PaperDetails->status=="Accepted")
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput977" value="Published">Published
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput277" value="Accepted" checked>Accepted
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput277" value="Under Review">Under Review
                            @else
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput977" value="Published">Published
                            <!--<label for="exampleFormControlInput277" class="form-label">Non-Funded</label>-->
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput277" value="Accepted">Accepted
                            <input name="status" type="radio" style="width:30px" id="exampleFormControlInput277" value="Under Review" checked>Under Review
                            @endif
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput977" class="form-label">Authors/Co-Authors</label>
                            <input name="authors_co_authors" type="text" class="form-control" id="exampleFormControlInput977" value="{{$PaperDetails->authors_co_authors}}" placeholder="Enter Authors/Co-Authors">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput677" class="form-label">Volume</label>
                            <input name="volume" type="text" class="form-control" id="exampleFormControlInput677" value="{{$PaperDetails->volume}}" placeholder="Enter Volume">
                        </div>
                        
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput677" class="form-label">Page Number</label>
                            <input name="page_number" type="text" class="form-control" id="exampleFormControlInput677" value="{{$PaperDetails->page_number}}" placeholder="Enter Page Number">
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput3778" class="form-label">Date of Publication</label>
                            <input name="start_date" type="date" class="form-control" id="exampleFormControlInput3778">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput677" class="form-label">Paper Link</label>
                            <input name="paper_link" type="text" class="form-control" id="exampleFormControlInput677" value="{{$PaperDetails->paper_link}}" placeholder="Enter Paper Link">
                        </div>
                        
                        <div class="mb-3">          
                            <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details"> {{$PaperDetails->description}}</textarea>
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

<!-- Jquery Core Js -->
<script src="http://localhost:8000/assets/bundles/libscripts.bundle.js"></script>

<!-- Jquery Page Js -->
<!--<script src="http://localhost:8000/js/template.js"></script>-->
</body>
</html>