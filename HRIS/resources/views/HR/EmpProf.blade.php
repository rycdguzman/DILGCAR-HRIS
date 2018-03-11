<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Human Resource Information System</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexHR">Human Resource</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a   href="indexHR"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="PendingLeaves"><i class="fa fa-file-text fa-3x"></i> Pending Leaves</a>
                    </li>
                    <li>
                        <a  href="RandF"><i class="fa fa-qrcode fa-3x"></i> Reports and Forms </a>
                    </li>
                      <li  >
                        <a class="active-menu" href="Employees"><i class="fa  fa-users fa-3x"></i> Employees</a>
                    </li>		  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
            <div class="row">
        <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Personal Information -->
          <div id="self">
              <center><h3 class="name">Manilyn Monroe</h3></center>
              <br>
          </div>
            <div class="col-md-12">
				<div style="text-align: right">
				  <button class="btn btn-default" ><i class=" fa fa-file-text "></i> Generate</button>
				  <button class="btn btn-default" data-toggle="modal" data-target="#myModalAction"><i class=" fa fa-list "></i> Actions</button>
				  <button class="btn btn-default"><i class=" fa fa-file "></i> Service Record</button>
			  </div>
				<br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Personal Datasheet
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#page1" data-toggle="tab">Page 1</a>
                                </li>
                                <li class=""><a href="#page2" data-toggle="tab">Page 2</a>
                                </li>
                                <li class=""><a href="#page3" data-toggle="tab">Page 3</a>
                                </li>
                                <li class=""><a href="#page4" data-toggle="tab">Page 4</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="page1">
									<br>
									<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsePersonal" class="collapsed">Personal Information</a>
                                        </h4>
                                    </div>
                                    <div id="collapsePersonal" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            <table>
                                    <tr>
                                    <td class ="question">First Name:</td>
                                        <td>asd</td>
                                    <td class ="question">Date of Birth:</td>
                                        <td>dsadsad</td>
                                        </tr>
                                    <tr>
                                    <td class ="question">Middle Name:</td>
                                        <td></td>
                                    <td class ="question">Place of Birth:</td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td class ="question">Last Name:</td>
                                        <td></td>
                                    <td class ="question">Civil Status:</td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td class ="question">Extension Name:</td>
                                        <td></td>
                                    <td class ="question">Citizenship:</td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td class ="question">Age:</td>
                                        <td></td>
                                    <td class ="question">Height:</td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td class ="question">Gender:</td>
                                        <td></td>
                                    <td class ="question">Weight:</td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td class ="question">Mobile Number:</td>
                                        <td></td>
                                    <td class ="question">Email:</td>
                                        <td></td>
                                        </tr>
                                         <hr>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                                    
                                <hr />
									<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFamily" class="collapsed">Family Background</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFamily" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            <table>
                                    <tr>
                                         <td class ="question">Spouse's Name:</td>
                                        <td></td>
                                        <td class ="question">Occupation:</td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                     <td class ="question">Date of Birth:</td>
                                        <td></td>
                                    <td class ="question">Employer/BusinessName:</td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td class ="question">Business Address:</td>
                                                 <td></td>
                                        <td class ="question">Telephone Number:</td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                             <td class ="question">Father's Name:</td>
                                                 <td></td>
                                            <td class ="question">Mother's Name:</td>
                                             <td></td>
                                        </tr>
                                        
                                        <tr>
                                        <th>Name of Children</th>
                                        <th>Birthdate</th>
                                        </tr>
                                        <tr>
                                        <td>Norman</td>
                                        <td>04/23/2001</td>
                                        </tr>
                                        <tr>
                                        <td>Ampe</td>
                                        <td>09/06/2012</td>
                                        </tr>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                                    
                                    <hr />
									<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseEdu" class="collapsed">Educational Background</a>
                                        </h4>
                                    </div>
                                    <div id="collapseEdu" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            <table>
                                    <tr>
                                        <th>LEVEL</th>
                                        <th>NAME OF SCHOOL</th>
                                        <th>BASIC EDUCATION/DEGREE COURSE</th>
                                        <th>PERIOD OF ATTENDANCE</th>
                                        </tr>
                                        <tr>
                                        <td>Elementary</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td>Secondary</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <tr>
                                        <td>Vocational/Trade Course</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td>College</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td>Graduate Studies</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th>HIGHEST LEVEL/ UNITS EARNED</th>
                                        <th>YEAR GRADUATED</th>
                                        <th>SCHOLARSHIP/ACADEMIC HONORS RECEIVED</th>
                                        </tr>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                                    		<div style="text-align: right">
												<a href="#page2" data-toggle="tab" class="btn btn-default btn-sm">2</a>
												<a href="#page3" data-toggle="tab" class="btn btn-default btn-sm">3</a>
												<a href="#page4" data-toggle="tab" class="btn btn-default btn-sm">4</a>
											</div>
                                </div>
								
								<!---End Of Page1 -->
								
                                <div class="tab-pane fade" id="page2">
									<br>
									<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseCS" class="collapsed">Civil Service Eligibility</a>
                                        </h4>
                                    </div>
                                    <div id="collapseCS" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            <table>
                                        <tr>
                                        <th>CAREER SERVICE</th>
                                        <th>RATING</th>
                                        <th>DATE OF EXAMINATION</th>
                                        <th>PLACE OF EXAMINATION</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                        </tr>
                                        <tr>    
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                        <th>LICENSE IF APPLICABLE</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                        </div>
                                    </div>
                                </div>
									
                                    <hr>
									
									<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseWE" class="collapsed">Work Experience</a>
                                        </h4>
                                    </div>
                                    <div id="collapseWE" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            <table>
                                        <tr>
                                        <th>INCLUSIVE DATES</th>
                                        <th>POSITION TITLE</th>
                                        <th>DEPARTMENT/AGENCIES/OFFICE/COMPANY</th>
                                        <th>MONTHLY SALARY</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                   <tr>
                                        <th>SALARY JOB PAY GRADE</th>
                                        <th>STATUS OF APPOINTMENT</th>
                                        <th>GOVERNMENT SERVICE</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                        </div>
                                    </div>
                                </div>
									  
                                			<div style="text-align: right">
												<a href="#page1" data-toggle="tab" class="btn btn-default btn-sm">1</a>
												<a href="#page3" data-toggle="tab" class="btn btn-default btn-sm">3</a>
												<a href="#page4" data-toggle="tab" class="btn btn-default btn-sm">4</a>
											</div>
                                </div>
								
								<!---End Of Page2 -->
								
								
								
                                <div class="tab-pane fade" id="page3">
									<br>
									<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseVW" class="collapsed">Voluntary Work Or Involvement In Civic/ Non Government/People/Voluntary ORGANIZATION</a>
                                        </h4>
                                    </div>
                                    <div id="collapseVW" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table>
                                        <tr>
                                        <th>Name & Address of Organization</th>
                                        <th>Inclusive Dates</th>
                                        <th>Number of Hours</th>
                                        <th>Position</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                        
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                            <td></td>
                                     
                                          
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                           
                                        
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                  
                                
                                        </tr>
                                        <tr>
                                    <td></td>
                                        <td></td>
                                            <td></td>
                                            <td></td>
                                    
                                
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                                     
									
									<hr>
									<div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseLD" class="collapsed">Learning And Development(L&O) Interventions/Training Programs Attended</a>
                                        </h4>
                                    </div>
                                    <div id="collapseLD" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table>
                                        <tr>
                                        <th>Title Of Learning and Development Interventions/Training Programs</th>
                                        <th>Inclusive Dates Of Attendance</th>
                                        <th>Number of Hours</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td> 
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                           
                                        
                                        </tr>
                                   <tr>
                                        <th>Type of I.D</th>
                                        <th>Conducted/Sponsored by:</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
									<hr>
                                        </div>
                                    </div>
                                </div>
                                     <hr>
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOI" class="collapsed">Other Information</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOI" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table>
                                        <tr>
                                        <th>Special Skills and Hobbies</th>
                                        <th>Non-Academic Distinctions/Recognition</th>
                                        <th>Membership in association/organization</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                
                        
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                         
                                     
                                          
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                                   
                           
                                        
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                 
                                
                                        </tr>
                                        <tr>
                                    <td></td>
                                        <td></td>
                                            <td></td>
                                     
                                    
                                
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                
                                        </tr>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                                     
                                    		<div style="text-align: right">
												<a href="#page1" data-toggle="tab" class="btn btn-default btn-sm">1</a>
												<a href="#page2" data-toggle="tab" class="btn btn-default btn-sm">2</a>
												<a href="#page4" data-toggle="tab" class="btn btn-default btn-sm">4</a>
											</div>
                                </div>
								
									<!---End Of Page3 -->
								
                                <div class="tab-pane fade" id="page4">
                                    <h4>PDS Questionaire</h4>
                                    <table>
                                    <td>1.) Are you related by consanguinity or affinity to the appointing or recommending authority, or the chief of bureau or office to the person who has immediate supervision over you in the office Bureau or Department where you will be appointed,</td>
                                    <tr>
                                    <td>a.Within the third degree</td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>b.Within the fourth degree(for local government unit-Career Employees?)</td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                        </tr>
                                    <tr>
                                    <td>2.)   a.Have you ever found guilty of any administrative offense?</td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>b.Have you been criminally charged before any court?</td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                        </tr>
                                        <td>3.) Have you ever been convicted of any crime or violation of any law,decree, ordinance or regulation by any court or tribunal?</td>
                                    <tr>
                                    <td>a.Within the third degree</td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                    </tr>
                                        <td>4.) Have you ever been separated from the service in any of the following modes:resignation,retirement,dropped from the rolls, dismissal,termination,end of term,finished contract or phased out(abollition) in the public or private sector</td>
                                    <tr>
                                    <td></td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                    </tr>
                                         <tr>
                                    <td>5.)   a.Have you ever been a candidate in a national or local election hield within the last year(except barangay election)?</td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>b.Have you resigned from the government service during the 3 month period before the last election to promote/actively campaign for a national or local candidate?</td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                        </tr>
                                         <td>6.) Have you acquired the status of an immigrant or permanent resident of another country?</td>
                                    <tr>
                                    <td></td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                    </tr>
                                        
                                         <td>7.) Pursuant to:(a) Indigenous People's Act(RA 8371); (b) Magna Carta for Disabled Persons(RA 7277); and (c)Solo Parents Welfare Act of 2000(RA 8972), please answer the following items;</td>
                                    <tr>
                                    <td>a. Are you a member of any indigenous group?</td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>b. Are you a person with disability? </td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                        </tr>
                                    
                                     <tr>
                                    <td>c. Are you a solo parent? </td>
                                    <td><form action="Y/N">
                                        <input type="checkbox" name="check" value="Yes">Yes<br>
                                        </form>
                                        </td>
                                    <td>
                                        <form action="Y/N">
                                        <input type="checkbox" name="check" value="No">No 
                                        </form>
                                        </td>
                                        </tr>
                                        
                                    <table>
                                        <h4>References(Person not related by consanguinity or affinity to applicant/appointee</h4>
                                        <tr>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Tel.No.</th>
                                        </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td> 
                                        </tr>
                                        <tr>    
                                    <td></td>
                                            <td></td>
                                            <td></td>
                           
                                    </table>  
                                    </table>
											<div style="text-align: right">
												<a href="#page1" data-toggle="tab" class="btn btn-default btn-sm">1</a>
												<a href="#page2" data-toggle="tab" class="btn btn-default btn-sm">2</a>
												<a href="#page3" data-toggle="tab" class="btn btn-default btn-sm">3</a>
											</div>
                                </div>
                            </div>
                        </div>
                    </div>
				
				<!-- Action modal -->
											<div class="modal fade" id="myModalAction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h4 class="modal-title" id="myModalLabel">Actions</h4>
													</div>
													<div class="modal-body">
														<div class="panel panel-default">
                        
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Plantilla</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Employee Status</a>
                                </li>
                                
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home-pills">
                                    <h4>Home Tab</h4>
                                    <table>
                                    <tr>
                                    <td class ="question">Select a Division:</td>
                                        <td></td>
                                    <td class ="question">Select a Position:</td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td class ="question"></td>
                                        <td></td>
                                    <td class ="question"></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td class ="question"></td>
                                        <td></td>
                                    <td class ="question"></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td class ="question"></td>
                                        <td></td>
                                    <td class ="question"></td>
                                        <td></td>
                                        </tr>
                                     
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4>Profile Tab</h4>
                                    <table>
                                    <tr>
                                    <td class ="question">Select a Status:</td>
                                        <td></td>
                                    <td class ="question"></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td class ="question"></td>
                                        <td></td>
                                    <td class ="question"></td>
                                        <td></td>
                                        </tr>
                                    <tr>
                                    <td class ="question"></td>
                                        <td></td>
                                    <td class ="question"></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                    <td class ="question"></td>
                                        <td></td>
                                    <td class ="question"></td>
                                        <td></td>
                                        </tr>
                                     
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														
													</div>
												</div>
											</div>
										</div>
				
			
                </div>
          <!-- End Personal Information -->
        </div>
        </div>
      </div>
            
        </div>
	  </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
