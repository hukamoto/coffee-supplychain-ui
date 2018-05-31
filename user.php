<?php include('templates/_header.php'); ?>
        

            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white" id="userName">User Name</h4>
                                        <h5 class="text-white" id="userAddress">0xab0874cb61d83f6b67dc08141568868102233bef</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="fa fa-mobile"></i> Contact No</p>
                                    <h1 id="userContact">9876543210</h1>
                                </div>

                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="fa fa-user"></i> Role</p>
                                    <h1 id="userRole">Exporter</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="fa fa-gears"></i> Settings</p>
                                    <a class="btn btn-info m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light popup-with-form" id="updateUser" href="#updateUserForm" >Edit</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <!-- /.row -->
                

                               <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Batches Overview</h3> 
                            <div class="table-responsive">
                                <table class="table product-overview">
                                    <thead>
                                        <tr>
                                            <th>Batch ID</th>
                                            <th>Farm Inspactor</th>
                                            <th>Harvester</th>
                                            <th>Exporter</th>
                                            <th>Importer</th>
                                            <th>Processor</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#85457898as234ca3fsafa3444234223first</td>
                                            <td>
                                                <a href="view-batch.php"><span class="label label-success font-weight-100">View</span></a>&nbsp;
                                                <a class="popup-with-form" href="#farmInspectionForm" ><span class="label label-success font-weight-100">Update</span></a>
                                            </td>
                                            <td>
                                                <a  href="view-batch.php"><span class="label label-success font-weight-100">View</span></a>&nbsp;
                                                <a class="popup-with-form" href="#harvesterForm"><span class="label label-success font-weight-100">Update</span></a>
                                            </td>
                                            <td>
                                                <a  href="view-batch.php"><span class="label label-success font-weight-100">View</span></a>&nbsp;
                                                <a class="popup-with-form" href="#exporterForm" ><span class="label label-success font-weight-100">Update</span></a>     
                                            </td>
                                            <td>
                                                <a  href="view-batch.php"><span class="label label-success font-weight-100">View</span></a>&nbsp;
                                                <a class="popup-with-form" href="#importerForm" ><span class="label label-success font-weight-100">Update</span></a>                                      
                                            </td>
                                            <td>
                                                <a  href="view-batch.php"><span class="label label-success font-weight-100">View</span></a>&nbsp;
                                                <a class="popup-with-form" href="#processingForm" ><span class="label label-success font-weight-100">Update</span></a> 
                                            </td>
                                        </tr>
                                         <tr>
                                            <td>#8545735sf32as234ca3fsafa3444234223</td>
                                            <td><span class="label label-success font-weight-100">Compilited</span></td>
                                            <td><span class="label label-success font-weight-100">Compilited</span> </td>
                                            <td><span class="label label-warning font-weight-100">Processing</span>  </td>
                                            <td><span class="label label-danger font-weight-100">Not Available</span> </td>
                                            <td><span class="label label-danger font-weight-100">Not Available</span> </td>                
                                        </tr>
                                        <tr>
                                            <td>#8545735sf32as234ca3fs54asf2444234223</td>
                                            <td><span class="label label-success font-weight-100">Compilited</span></td>
                                            <td><span class="label label-success font-weight-100">Compilited</span> </td>
                                            <td><span class="label label-success font-weight-100">Compilited</span>  </td>
                                            <td><span class="label label-success font-weight-100">Compilited</span> </td>
                                            <td><span class="label label-success font-weight-100">Compilited</span> </td>
                                        </tr>
                                    </tbody>
                                </table>

                            <!-- Update User Form -->
                            <form id="updateUserForm" class="mfp-hide white-popup-block">
                                <h1>Update User Profile</h1><br>
                                <fieldset style="border:0;">
                                    <div class="form-group">
                                        <label class="control-label" for="fullname">Fullname</label>
                                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="fullname" data-parsley-required="true">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="contactNumber">Contact Number</label>
                                        <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="contact number" data-parsley-required="true" data-parsley-type="digits" data-parsley-length="[10, 15]" maxlength="15">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="role">User Role</label>
                                       <!--  <input type="text" class="form-control" id="role" name="role" placeholder="Select User Role" required=""> -->
                                       <select class="form-control" id="role" name="role" data-parsley-required="true">
                                           <option value="" disabled selected>Select User Role</option>
                                           <option value="SUPER_ADMIN">SUPER_ADMIN</option>
                                           <option value="FARM_INSPECTION">FARM_INSPECTION</option>
                                           <option value="HARVESTER">HARVESTER</option>
                                           <option value="EXPORTER">EXPORTER</option>
                                           <option value="IMPORTER">IMPORTER</option>
                                           <option value="PROCESSOR">PROCESSOR</option>
                                       </select>

                                    </div>
                                     <div class="form-group">
                                        <label class="control-label" for="role">User Status</label>
                                       <!--  <input type="text" class="form-control" id="role" name="role" placeholder="Select User Role" required=""> -->&nbsp;&nbsp;&nbsp;
                                       <input type="radio" name="status" value="true" data-parsley-required="true" 
                                       /> TRUE &nbsp;&nbsp;
                                       <input type="radio" name="status" value="false"/> FALSE
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="profileHash">Profile Hash</label>
                                        <input type="file" onchange="handleFileUpload(event)" />
                                        <p id="hash"></p>
                                        <input type="hidden" id="profileHash" value=""/>

                                       <!--  <input type="text" class="form-control" id="profileHash" name="profileHash" placeholder="Profile Hash" data-parsley-required="true"> -->
                                    </div>
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect">Reset</button>
                                            <button type="button" id="submitProfile" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>

                            <!-- Farm Inspection Form -->
                            <form id="farmInspectionForm" class="mfp-hide white-popup-block">
                                <h1>Farm Inspection</h1><br>
                                <fieldset style="border:0;">
                                    <div class="form-group">
                                        <label class="control-label" for="InspectorId">Inspector ID Number</label>
                                        <input type="text" class="form-control" id="InspectorId" name="inspectorId" placeholder="inspector id number" data-parsley-required="true">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="typeOfSeed">Type of Seed</label>
                                        <input type="text" class="form-control" id="typeOfSeed" name="typeOfSeed" placeholder="type of seed" data-parsley-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="coffeeFamily">Coffee Family</label>
                                        <input type="text" class="form-control" id="coffeeFamily" name="coffeeFamily" placeholder="coffee family" data-parsley-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="fertilizer">Fertilizer Used</label>
                                        <input type="text" class="form-control" id="fertilizer" name="fertilizer" placeholder="fertilizer used" data-parsley-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="farmAddress">Farm Address</label>
                                        <br>
                                        <textarea class="form-control" id="farmAddress" name="farmAddress" placeholder="farm address" data-parsley-required="true"></textarea>
                                    </div>
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect" >Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>

                             <!-- Harvesting Form -->
                            <form id="harvesterForm" class="mfp-hide white-popup-block ">
                                <h1>Harvesting</h1><br>
                                <fieldset style="border:0;">
                                    <div class="form-group">
                                        <label class="control-label" for="registratoinNo">Registration No</label>
                                        <input type="text" class="form-control" id="registratoinNo" name="registratoinNo" placeholder="registration number" data-parsley-required="true">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="farmerName">Farmer Name</label>
                                        <input type="text" class="form-control" id="farmerName" name="farmerName" placeholder="farmer name" data-parsley-required="true">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="coffeeVeriety">Coffee Variety</label>
                                        <input type="text" class="form-control" id="coffeeVeriety" name="coffeeVeriety" placeholder="coffee variety" data-parsley-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="temperature">Temperature</label>
                                        <input type="text" class="form-control" id="temperature" name="temperature" placeholder="temperature" data-parsley-required="true">
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label" for="humidity">Humidity</label>
                                        <input type="text" class="form-control" id="humidity" name="humidity" placeholder="humidity" data-parsley-required="true">
                                    </div>                                
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>

                            <!-- Exporter Form -->
                            <form id="exporterForm" class="mfp-hide white-popup-block">
                                <h1>Exporting</h1><br>
                                <fieldset style="border:0;">
                                    <div class="form-group">
                                        <label class="control-label" for="departureTime">Time of Departure</label>
                                        <input type="text" class="form-control" id="departureTime" name="departureTime" placeholder="time of departure" data-parsley-required="true">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="estimateArrival">Estimate Time of Arrival</label>
                                        <input type="text" class="form-control" id="estimateArrival" name="estimateArrival" placeholder="estimate arrival" data-parsley-required="true">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="dispatchDetails">Dispatch Details</label>
                                        <input type="text" class="form-control" id="dispatchDetails" name="dispatchDetails" placeholder="dispatch details" data-parsley-required="true">
                                    </div>
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>

                            <!-- Importer Form -->
                            <form id="importerForm" class="mfp-hide white-popup-block">
                                <h1>Importing</h1><br>
                                <fieldset style="border:0;">
                                    <div class="form-group">
                                        <label class="control-label" for="warehouse">Warehouse Information</label>
                                        <input type="text" class="form-control" id="warehouse" name="warehouse" placeholder="warehouse information" data-parsley-required="true">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="processDispatch">Processing & Dispatch</label>
                                        <input type="text" class="form-control" id="processDispatch" name="processDispatch" placeholder="processing & dispatch" data-parsley-required="true" >
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="payment">Payment Confirmation</label>
                                        <input type="text" class="form-control" id="payment" name="payment" placeholder="payment confirmation" data-parsley-required="true" >
                                    </div>
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>

                            <!-- Processor Form -->
                            <form id="processingForm" class="mfp-hide white-popup-block">
                                <h1>Processing</h1><br>
                                <fieldset style="border:0;">
                                    <h4>Roast Coffee</h4><br>
                                    <div class="form-group">
                                        <label class="control-label" for="quantity">Quantity</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity" data-parsley-required="true">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="temperature">Temperature </label>
                                        <input type="text" class="form-control" id="temperature" name="temperature" placeholder="temperature" data-parsley-required="true">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="time">Time for Roasting</label>
                                        <input type="text" class="form-control" id="time" name="time" placeholder="time for roasting" data-parsley-required="true" >
                                    </div>
                               
                                    <h4>Grinding</h4><br>
                                     <div class="form-group">
                                        <label class="control-label" for="quantity">Grinding</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity" data-parsley-required="true">
                                    </div>
                           
                                    <h4>Packaging</h4><br>
                                    <div class="form-group">
                                        <label class="control-label" for="quantity">Date</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity" data-parsley-required="true">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="temperature">Time</label>
                                        <input type="text" class="form-control" id="temperature" name="temperature" placeholder="temperature" data-parsley-required="true">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="time">Place</label>
                                        <input type="text" class="form-control" id="time" name="time" placeholder="time for roasting" data-parsley-required="true">
                                    </div>
                                     <div class="form-group float-right">
                                       <button type="reset" class="btn btn-default waves-effect">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </fieldset>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <!-- /.container-fluid -->

        <script type="text/javascript">
            var userForm;      

            $(document).ready(function(){
              
              userForm =  $("#updateUserForm").parsley();

              $("#farmInspectionForm,#harvesterForm,#exporterForm,#importerForm,#processingForm").parsley();

            });
        </script>
        
<?php include('templates/_footer.php');?>   