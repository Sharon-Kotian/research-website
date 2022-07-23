<!doctype html>
<html  lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: My-Profile:: Education</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="http://localhost:8000/assets/css/my-task.style.min.css">

    <style>
        table,th,td{
            border:1px solid black;
        }

        * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  /* font-size: 15px; */
  /* padding: 8px 12px; */
  /* position: absolute; */
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  /* position: absolute; */
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}







/* Slideshow container */
.slideshow-container1 {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev1, .next1 {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next1 {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev1:hover, .next1:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text1 {
  color: #f2f2f2;
  /* font-size: 15px; */
  /* padding: 8px 12px; */
  /* position: absolute; */
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext1 {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  /* position: absolute; */
  top: 0;
}

/* The dots/bullets/indicators */
.dot1 {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot1:hover {
  background-color: #717171;
}

/* Fading animation */
.fade1 {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade1 {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev1, .next1,.text1 {font-size: 11px}
}
    </style>
    <script type="text/javascript">
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
                column9 = row.cells[8].innerText;
        
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
                        column9
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
                link.setAttribute("download", "Data_Faculty.csv");
                document.body.appendChild(link);
                /* download the data file named "Stock_Price_Report.csv" */
                link.click();
        }
        function l(){
            document.getElementById('name_div').style.display="block";
                document.getElementById('year_div').style.display="none";
                document.getElementById('domain_div').style.display="none";
            // document.getElementById('name_div').style.visibility="visible";
            // document.getElementById('year_div').style.visibility="hidden";
            // document.getElementById('domain_div').style.visibility="hidden";
        }
        function change(){
            var status=document.getElementById("search_by");
            console.log("Hello"+status.value);
            if(status.value==="Name"){
                console.log("Name if");
                document.getElementById('name_div').style.display="block";
                document.getElementById('year_div').style.display="none";
                document.getElementById('domain_div').style.display="none";
            //     document.getElementById('name_div').style.visibility="visible";
            // document.getElementById('year_div').style.visibility="hidden";
            // document.getElementById('domain_div').style.visibility="hidden";
            }
            else if(status.value==="Domain"){
                console.log("Domain if");
                document.getElementById('name_div').style.display="none";
                document.getElementById('year_div').style.display="none";
                document.getElementById('domain_div').style.display="block";
            //     document.getElementById('name_div').style.visibility="hidden";
            // document.getElementById('year_div').style.visibility="hidden";
            // document.getElementById('domain_div').style.visibility="visible";
            }
            else if(status.value==="Year"){
                console.log("Year if");
                document.getElementById('name_div').style.display="none";
                document.getElementById('year_div').style.display="block";
                document.getElementById('domain_div').style.display="none";
            //     document.getElementById('name_div').style.visibility="hidden";
            // document.getElementById('year_div').style.visibility="visible";
            // document.getElementById('domain_div').style.visibility="hidden";
            }
            else{
            }
        }
        function myFunction(){
            document.getElementById("demo").innerHTML="Hello World";
        }
    </script>
    
</head>
<body onload="l()">


<div id="mytask-layout" class="theme-indigo">

    <!-- sidebar -->
    <!-- <div class="sidebar px-4 py-4 py-md-5 me-0" style="width:400px;">
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
             <div style="color:white">
                                
                        
                        
                                        
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


            
        <!--</div>
    </div> -->

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
        <?php
            //$edus=\App\Models\Patent::where("user_id",$user->id)->count();
            $edus=DB::select("SELECT user_id, count(*) as count FROM patents GROUP BY user_id ORDER BY COUNT(*) DESC limit 5");
            $rdus=DB::select("SELECT user_id, count(*) as count FROM papers GROUP BY user_id ORDER BY COUNT(*) DESC limit 5");
            $tdus=DB::select("SELECT user_id, count(*) as count FROM books GROUP BY user_id ORDER BY COUNT(*) DESC limit 5");
        
        ?>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card border-0 mb-4 no-bg">
                            <div class="card-header py-3 px-0 d-sm-flex align-items-center  justify-content-between border-bottom">

                            <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">
                            <div class="col">
                                <div class="card teacher-card" style="height:160px;background-image: linear-gradient(to bottom right, #581845, #FF5733)">
                                <h2>Top 5 Patent Holders</h2> 
                                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-800 h-800 " style="width:1400px;height:600px;">
                                
                                    @foreach($edus as $edu)
                                        <?php $user=\App\Models\User::find($edu->user_id);?>
                                        {{$user->firstName}} {{$user->lastName}}
                                        {{$edu->user_id}}  {{$edu->count}} <br>
                                    @endforeach                                   
                                    <!-- <i class="icofont-certificate-alt-1 icofont-10x"></i> -->
                                            <!-- <div style="margin-left:300px; margin-top:-100px;"><h6 class="mb-0 mt-2  fw-bold d-block" style="font-size:30px;">Papers</h6><h5 class="mb-0 mt-2  fw-bold d-block" style="font-size:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</h5></div>
                                             -->
                                            
                                            
                                        </div>

                                    </div>
                                </div>
                                <div class="col">
                                <div class="card teacher-card" style="height:160px;background-image:linear-gradient(to bottom right, #cc0066, #ff99cc);">
                                    
                                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-300 h-300 ">
                                        <!-- <i class="icofont-certificate-alt-1 icofont-10x"></i> -->
                                            <!-- <div style="margin-left:300px; margin-top:-100px;"><h6 class="mb-0 mt-2  fw-bold d-block" style="font-size:30px;">Papers</h6><h5 class="mb-0 mt-2  fw-bold d-block" style="font-size:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</h5></div>
                                             -->
                                             <div><h2>Top 5 Paper Holders</h2></div>
                                             @foreach($rdus as $rdu)
                                        <?php $user=\App\Models\User::find($rdu->user_id);?>
                                        <div class="mySlides1">

    <div style="margin-left:50px;margin-top:20px;">
    <img class="avatar xl rounded-circle" src="http://localhost:8000/assets/images/avatar2.jpg" alt="profile">
    </div>
  
  <div class="text" style="margin-top:-100px;margin-left:60px;color:white;font-size:17px;"> 
  Name : {{$user->firstName}} {{$user->lastName}}<br>
                    Total No. of Books : {{$rdu->count}}</div> 
</div>
@endforeach 


<a class="prev1" onclick="plusSlides1(-1)">❮</a>
<a class="next1" onclick="plusSlides1(1)">❯</a>
    </div>
    

<br>

<div style="text-align:center">
  <span class="dot1" onclick="currentSlide1(1)"></span> 
  <span class="dot1" onclick="currentSlide1(2)"></span> 
  <span class="dot1" onclick="currentSlide1(3)"></span> 
  <span class="dot1" onclick="currentSlide1(4)"></span> 
  <span class="dot1" onclick="currentSlide1(5)"></span> 
</div>

                                             
                                            
                                            
                                        
                                    
                               
                                

                                     
                                            
                                        
                                    </div>
                                </div>
                                <div class="col">
                                <div class="card teacher-card" style="height:250px;background-image: linear-gradient(to bottom right, #8E0E00,#1F1C18);">
                                    
                                <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100 h-100 ">
                                        <!-- <i class="icofont-certificate-alt-1 icofont-10x"></i> -->
                                            <!-- <div style="margin-left:300px; margin-top:-100px;"><h6 class="mb-0 mt-2  fw-bold d-block" style="font-size:30px;">Papers</h6><h5 class="mb-0 mt-2  fw-bold d-block" style="font-size:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</h5></div>
                                             -->
                                             <div><h2>Top 5 Book Authors</h2></div>
                                             

                                             @foreach($tdus as $tdu)
                                        <?php $user=\App\Models\User::find($tdu->user_id);?>
                                        <br>
                                    

<div class="mySlides">

    <div style="margin-left:50px;margin-top:20px;">
    <img class="avatar xl rounded-circle" src="http://localhost:8000/assets/images/avatar2.jpg" alt="profile">
    </div>
  
  <div class="text" style="margin-top:-100px;margin-left:60px;color:white;font-size:17px;"> 
  Name : {{$user->firstName}} {{$user->lastName}}<br>
                    Total No. of Books : {{$tdu->count}}</div> 
</div>
@endforeach 


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    

<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>

                                             
                                            
                                            
                                        
                                    </div>
                                </div>
                                
                                
                                
                                <!-- <h3 class=" fw-bold flex-fill mb-0 mt-sm-0">Search Results</h3> -->
                                <!-- <button type="button" class="btn btn-dark me-1 mt-1 w-sm-100" data-bs-toggle="modal" data-bs-target="#createemp"><i class="icofont-plus-circle me-2 fs-6"></i>Add Education</button> -->
                                
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
                <div>
                    <div>
                        Search By : 
                        <select id="search_by" onchange="change()">
                            <option value="Name">Name</option>
                            <option value="Year">Year</option>
                            <option value="Domain">Domain</option>
                        </select>
                    </div>
                    <div id="name_div">
                        <form method="post" enctype="multipart/form-data" action="{{ url('admin/searchName')}}">
                            @csrf
                            <input type="text" placeholder="Enter Name to Search" name="name_search">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    <div id="year_div">
                    <form method="post" enctype="multipart/form-data" action="{{ url('admin/searchYear')}}">
                    @csrf
                            <input type="number" min=1990 max=2200 placeholder="Enter Year to Search" name="year_search">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    <div id="domain_div">
                    <form method="post" enctype="multipart/form-data" action="{{ url('user/searchDomain')}}">
                    @csrf
                                @foreach($domains as $domain)
                                  <label class="d-block" for="{{$domain->domain_of_expertise}}">
                                    <input id="{{$domain->domain_of_expertise}}" type="checkbox" name="domain[]" value="{{$domain->domain_of_expertise}}"><span style="font-size:20px;color:black;">&nbsp;&nbsp;{{$domain->domain_of_expertise}}</span>
                                  </label>
                                  @endforeach
                            <input type="submit" value="Search">
                        </form>
                    </div>

                    <button onclick="exportData()">Click For Download</button>
                    <p id="demo"></p>
                    
                </div>

                <div>
                    <table id="data_table" style="border:1px solid red;border-collapse:collapse;width:100%;">
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
                            </tr>
                        @endforeach
                        @endif

                    </table>
                </div>
                <!-- <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">
                
                <?php
                    $edus=\App\Models\Education::where("user_id",$user->id)->count();
                ?>
                
                 -->

                
                
                       
    </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";

}



let slideIndex1 = 1;
showSlides1(slideIndex1);

function plusSlides1(n) {
  showSlides1(slideIndex1 += n);
}

function currentSlide1(n) {
  showSlides1(slideIndex1 = n);
}

function showSlides1(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides1");
  let dots = document.getElementsByClassName("dot1");
  if (n > slides.length) {slideIndex1 = 1}    
  if (n < 1) {slideIndex1 = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex1-1].style.display = "block";  
  dots[slideIndex1-1].className += " active";
}




  

</script>


<!-- Jquery Core Js -->
<!-- <script src="http://localhost:8000/assets/bundles/libscripts.bundle.js"></script> -->

<!-- Jquery Page Js -->
<!--<script src="http://localhost:8000/js/template.js"></script>-->
</body>


</html>