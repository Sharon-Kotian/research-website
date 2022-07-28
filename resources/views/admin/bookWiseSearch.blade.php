<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Profile:: Book Wise Search</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<link rel="icon" href="favicon.ico" type="image/x-icon">
    
<link rel="stylesheet" href="http://localhost:8000/assets/css/my-task.style.min.css"> <!-- Favicon-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" defer></script>
<script src="http://localhost:8000/assets/bundles/libscripts.bundle.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $("#nameSearch").select2();
            $("#domains").select2();
            $("#status_search").select2();
            $("#category_search").select2();
            $("#type_search").select2();
});

function abstract_view(id){
    if(document.getElementById('abstract'+id).style.display==="none"){
        document.getElementById('abstract'+id).style.display="block";
        //document.getElementById('abstract_para').style.display="none";
        //flag=1;
    }
    else{
        document.getElementById('abstract'+id).style.display="none";
        //document.getElementById('abstract_para').style.display="block";
        //flag=0;
    }
}


function exportData(){
            /* Get the HTML data using Element by Id */
            var table = document.getElementById("data_table");
        
            /* Declaring array variable */
            var rows =[];
        
            //iterate through rows of table
            for(var i=0,row; row = table.rows[i];i++){
                //rows would be accessed using the "row" variable assigned in the for loop
                //Get each cell value/column from the row
                column1 = row.cells[0].innerText;
                column2 = row.cells[1].innerText;
                column3 = row.cells[2].innerText;
                column4 = row.cells[3].innerText;
                column5 = row.cells[4].innerText;
                column6 = row.cells[5].innerText;
                column7 = row.cells[6].innerText;
                column8 = row.cells[7].innerText;
                //column9 = row.cells[8].innerText;
        
            /* add a new records in the array */
                rows.push(
                    [
                        column1,
                        column2,
                        column3,
                        column4,
                        column5,
                        column6,
                        column7,
                        column8,
                        //column9
                    ]
                );
        
                }
                csvContent = "data:text/csv;charset=utf-8,";
                /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
                rows.forEach(function(rowArray){
                    row = rowArray.join(",");
                    csvContent += row + "\r\n";
                });
        
                /* create a hidden <a> DOM node and set its download attribute */
                var encodedUri = encodeURI(csvContent);
                var link = document.createElement("a");
                link.setAttribute("href", encodedUri);
                link.setAttribute("download", "Data_Faculty_Education.csv");
                document.body.appendChild(link);
                /* download the data file named "Stock_Price_Report.csv" */
                link.click();
        }

    </script>





    <!-- project css file  -->
    
    
    
<style>
        table,th,td{
            /* border:1px solid black; */
            cell-padding:5px;
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
                                <h3 class=" fw-bold flex-fill mb-0 mt-sm-0">Book Wise Search</h3>
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
                    //$us=\App\Models\User::get();
                ?>

<div id="name_div">
<?php $domains= \App\Models\Education::all()->unique('field_of_study'); ?>
                        <form method="post" enctype="multipart/form-data" action="{{ url('admin/searchBook')}}">
                            @csrf

                            <table style="width:1200px;border:none;">
                                <tr>
                                    <td>
                                    <label for="nameSearch" class="form-label">Name</label>
                <select class="form-control" id="nameSearch" name="name_search">
                    <option value="all" selected>--SELECT ALL--</option>
                    @foreach($us as $u)
                        <option value="{{$u->id}}">{{$u->firstName}} {{$u->lastName}}</option>
                    @endforeach
                </select>
                                    </td>
                                    <td>
                                    <label for="year_search" class="form-label">Year</label>
                <select name="year_search">
                <option value="null" selected>--SELECT ALL--</option>

                    <option>	1980	</option>
                    <option>	1981	</option>
                    <option>	1982	</option>
                    <option>	1983	</option>
                    <option>	1984	</option>
                    <option>	1985	</option>
                    <option>	1986	</option>
                    <option>	1987	</option>
                    <option>	1988	</option>
                    <option>	1989	</option>
                    <option>	1990	</option>
                    <option>	1991	</option>
                    <option>	1992	</option>
                    <option>	1993	</option>
                    <option>	1994	</option>
                    <option>	1995	</option>
                    <option>	1996	</option>
                    <option>	1997	</option>
                    <option>	1998	</option>
                    <option>	1999	</option>
                    <option>	2000	</option>
                    <option>	2001	</option>
                    <option>	2002	</option>
                    <option>	2003	</option>
                    <option>	2004	</option>
                    <option>	2005	</option>
                    <option>	2006	</option>
                    <option>	2007	</option>
                    <option>	2008	</option>
                    <option>	2009	</option>
                    <option>	2010	</option>
                    <option>	2011	</option>
                    <option>	2012	</option>
                    <option>	2013	</option>
                    <option>	2014	</option>
                    <option>	2015	</option>
                    <option>	2016	</option>
                    <option>	2017	</option>
                    <option>	2018	</option>
                    <option>	2019	</option>
                    <option>	2020	</option>
                    <option>	2021	</option>
                    <option>	2022	</option>
                    <option>	2023	</option>
                    <option>	2024	</option>
                    <option>	2025	</option>
                    <option>	2026	</option>
                    <option>	2027	</option>
                    <option>	2028	</option>
                    <option>	2029	</option>
                    <option>	2030	</option>







                    
                </select> 
                                    </td>
                                    <td>
                                    <label for="category_search" class="form-label">Categoy of Book</label>
                <select name="category_search[]" id="category_search" multiple="multiple">
                    
                    <option>National</option>
                    <option>International</option>
                    <option>Indexing</option>
                    <option>ABDC Listed</option>
                    <option>UGC Listed</option>
                    <option>Scopus</option>
                </select>
                                    </td>
                                    <td>
                                    <label for="status_search" class="form-label">Status</label>
                <select name="status_search[]" id="status_search" multiple="multiple">
                    
                    <option>Published</option>
                    <option>Accepted</option>
                    <option>Under Review</option>
                </select>
                                    </td>
                                    <td>
                                    <label for="type_search" class="form-label">Type</label>
                <select name="type_search[]" id="type_search" multiple="multiple">
                    
                    <option>Book</option>
                    <option>Book Chapter</option>
                </select>
                                    </td>
                                </tr>
                            </table>
                
                <br><br>


                <br><br>



                
                
                <!-- <input type="checkbox" name="domain_search[]" value="all" checked>--SELECT ALL--<br> -->
                <!-- @foreach($domains as $domain)
                <input type="checkbox" name="domain_search[]" value="{{$domain->field_of_study}}">{{$domain->field_of_study}}<br>
                @endforeach

                @foreach($domains as $domain)
                                  <label for="{{$domain->field_of_study}}">
                                    <input id="{{$domain->field_of_study}}" type="checkbox" name="domain[]" value="{{$domain->field_of_study}}"><span style="font-size:20px;color:black;">&nbsp;&nbsp;{{$domain->field_of_study}}</span>
                                  </label>
                                  @endforeach -->


                <!-- <select name="domain_search[]" id="domains" multiple="multiple">
                    @foreach($domains as $domain)
                        <option>{{$domain->field_of_study}}</option>
                    @endforeach
                </select> -->
                
                
                <br><br>

                <input class="btn-primary" type="submit" value="Search">
                
                        
                
                
                
                <!-- <input type="checkbox" name="domain_search[]" value="all" checked><span style="font-size:20px;color:black;">--SELECT ALL--</span>
                <input type="checkbox" name="domain_search[]" value="AI"><span style="font-size:20px;color:black;">AI</span>
            
            @foreach($domains as $domain)
                <input id="{{$domain->field_of_study}}" type="checkbox" name="domain_search[]" value="{{$domain->field_of_study}}"><span style="font-size:20px;color:black;">&nbsp;&nbsp;{{$domain->field_of_study}}</span>
                @endforeach -->
                
                
                <!-- <input class="btn-primary" type="submit" value="Search"> -->
            
            
                
    </form>
    </div>
    <br><br><br><br>


           <div style="margin-left:-600px;margin-top:250px;">     
        @if(isset($users))
                @foreach($users as $user)
                    
                    <div>
                        <br>
                        <h6>
                        {{$user->book_title}}
                        </h6>
                        {{$user->firstName}} {{$user->lastName}}&nbsp;|&nbsp;{{$user->category_of_book}}&nbsp;|&nbsp;{{$user->type}}<br>
                        {{$user->authors_co_authors}}&nbsp;|&nbsp;{{$user->publication_name}}&nbsp;|&nbsp;{{$user->year_of_publication}}<br>
                        {{$user->book_link}}&nbsp;|&nbsp;{{$user->status}}&nbsp;|&nbsp;Volume:{{$user->volume}}<br>
                        <a href="javascript:abstract_view({{$user->id}})"><i class="icofont-bubble-down"></i>Abstract</a>

                        <!-- Book Title : <br>
                        Category of Book : <br>
                        Type : <br>
                        Authiors/Co-Authors : <br>
                        Publication Name : <br>
                        Year of Publication : <br>
                        Status : <br>
                       Book Link : <br>
                        Volume : <br> -->
                        <div id="abstract{{$user->id}}" style="display:none;">
                            <div id="abstract_para">
                            <p>
                                {{$user->description}}
                            </p>
    </div>
                        </div>
                        <!-- Abstract : {{$user->description}}<br> -->


                        
                    </div><br><br>
                @endforeach
        @endif
    </div> 

    <!--<div style="margin-top:200px;margin-left:-600px;">            
        <button onclick="exportData()" width="10px" height="10px">Click For Download</button> 
    </div><br><br>
    <div style="margin-left:-600px;margin-top:300px;width:100%"> 
               <table id="data_table" style="border:1px solid red;border-collapse:collapse;width:100%;font-size:15px;">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>University Name</th>
                            <th>Degree</th>
                            <th>Field of Study</th>
                            <th>Grade</th>
                            <th>Description</th>-->
                            <!-- <th>Domain of Expertise</th>
                            <th>Papers</th>
                            <th>Patents</th>
                            <th>Books</th>
                            <th>Certifications</th>
                            <th>Projects</th>
                            <th>Memberships</th>
                            <th>Consultancy</th>
                            
                            <th>FDP</th>
                            <th>MDP</th>
                            <th>Conference Proceeding</th> -->
                           
                        <!--</tr>
                        @if(isset($users))
                        @foreach($users as $user)
                            
                        @endforeach
                        @endif

    </table>
    </div>-->

                
                        <!--</div>-->
                        </div>
            </div>
        </div>


        
       <!-- Modal Members-->
       

        <!-- Create Employee-->
        
    </div>
</div>

<!-- Jquery Core Js -->


<!-- Jquery Page Js -->
<!--<script src="http://localhost:8000/js/template.js"></script>-->
</body>

</html>