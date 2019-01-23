
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form class="contact-form" action="add_info.php" enctype="multipart/form-data" method="get">
        <div class="row" id="contatti">
            <div class="container mt-5" >

                <div class="row" style="height:550px;">
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-uppercase mt-3 font-weight-bold text-white">Online Application Form</h2>
                       
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" name="first_name" placeholder="First Name *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" name="last_name" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" name="father_name" placeholder="Father's Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" name="mother_name" placeholder="Mother's Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" name="number" placeholder="Number/WhatApp *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mt-2" name="email" placeholder="Email *" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" name="address" placeholder="Address " required>
                                    </div>
                                </div>
                                 
                                 </div>
                            <hr>
                            <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                        <h6>Passing Year</h6>
                                    </div>
                                </div>
                             <div class="col-lg-6">
                                    <div class="form-group">
                                         <h6>10th*</h6>
                                         <select class="form-control" name="ten_pass" id="exampleFormControlSelect1">
                                    <option>Select Year</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                  </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                         <h6>12th*</h6>
                                         <select class="form-control" name="twelve_pass" id="exampleFormControlSelect1">
                                    <option>Select Year</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                  </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    
                                        <h6>Obtain Mark's</h6>
                                  
                                </div>
                                 <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="physics" class="form-control mt-2" placeholder="Physics " required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="chemistry" class="form-control mt-2" placeholder="Chemistry " required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="biology" class="form-control mt-2" placeholder="Biology " required>
                                    </div>
                                </div>
                            </div>
                               <hr>
                               <div class="row">
                                   <div class="col-lg-12">
                                    <div class="form-group">
                                        <h6>Collage List</h6>
                                    </div>
                                </div>
                               
                                
                               
                               <div class="col-lg-10">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <select class="form-control" name="college" id="exampleFormControlSelect1">
                                    <option>Select Collage Here</option>
                                    <option>Diabetic Association Medical College</option>
                                    <option>Mark's Medical College</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                  </select>
                                    </div>
                                    </div>
                                </div>
                                   <div class="col-lg-1">
                                       <a href="#" data-toggle="modal" data-target="#myModal">
                                           <img height="40px" width="80px" src="img/icon.png">
                                       </a>
                                   </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="note" placeholder="Note" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <h6>Attachment Files</h6>
                                        <input type="file" name="file" class="form-control mt-2"  required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn">
                                            <button class="btn btn-light" type="submit">SUBMIT</button>
                                     </div>
                                </div>
                             


<!-- The Modal -->

                               </div>
                            </div>
                        
                  
                    </div>
                   

                </div>
            </div>
        </div>

       </form>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Collage</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="add_college.php" method="get">
          <!-- Modal body -->
      <div class="modal-body">
           <div class="form-group">
               <input type="text" name="college" class="form-control mt-2"  required>
         </div>
      </div>
            <!-- Modal footer -->
      <div class="modal-footer">
        <button class="btn btn-success" type="submit">add</button>
      </div>
      </form>
      

    

    </div>
  </div>
</div>
    </body>
</html>