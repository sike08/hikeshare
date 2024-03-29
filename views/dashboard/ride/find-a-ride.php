<div class="section profile-content">
    <div class="container shadow-sm">
       
        <?php if($_GET['role'] == 'p') { ?>
            <h4>Find a driver</h4>
            <!--large screens view-->
            <div class="row">
                <!--user enter details-->
                <div class="col-sm-12 col-md-6 mt-1 border-right">
                    <h6>Where are you heading?</h6>
                    <form method="post" action="<?php echo URL;?>dashboard/find_Ride?role=p&action=search-ride">
                        <!--origin & destination input-->
                        <div class="form-row">
                            <div class="form-group col-sm-10 col-md-6 p-1">
                                <label for="origin-input">From</label>
                                <input type="text" class="form-control" id="origin-input" name="origin-input" 
                                <?php if(isset($_GET['from'])) {?>
                                    placeholder="<?php echo $_GET['origin-input'];?>"
                                <?php } else { ?>
                                    placeholder="Enter departure from..."
                                <?php } ?>
                                >
                            </div>
                            <div class="form-group col-sm-10 col-md-6 p-1">
                                <label for="destination-input">To</label>
                                <input type="text" class="form-control" id="destination-input" name="destination-input"
                                <?php if(isset($_GET['to'])) {?>
                                    placeholder="<?php echo $_GET['destination-input'];?>"
                                <?php } else { ?>
                                    placeholder="Enter your destination..."
                                <?php } ?>
                                >
                            </div>
                        </div>
                        
                        <!--filter-->
                        <!-- <div class="form-row">
                            <div class="form-group col-12">
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label" for="checkFilter">Filter</label>
                                    <input type="checkbox" class="custom-control-input" id="checkFilter">
                                    <input type="hidden" name="filter_data" value="N" id="filter_data">
                                </div>
                            </div>
                        </div> -->
                        
                        <!-- date -->
                        <!-- <div class="form-row">
                            <div class="form-group col-12">
                                <label for="any_date_switch">Any Date</label>
                                <input type="checkbox" data-toggle="switch"  data-on-color="danger" data-off-color="secondary" data-on-text="YES" data-off-text="NO"
                                id="any_date_switch">
                                <span class="toggle switch-toggler"></span>
                                <input type="hidden" value="N" name="any_date" id="any_date">
                            </div>

                            <div class="form-group col-sm-8 col-md-6">
                                <label id="lift_departure_date" for="departure_date">Departure Date</label>
                                <input type="text" class="form-control datepicker" name="departure_date" id="departure_date" placeholder="<?php echo date('Y-m-d');?>" onkeypress="return false;" />
                            </div>
                        </div> -->

                        <!-- regular/ schedule --> 
                        <!-- <div class="form-row">
                            <div class="form-group col-12">
                                <label for="once_regular_switch">Frequency</label>
                                <input type="checkbox" data-toggle="switch"  data-on-color="danger" data-off-color="secondary" data-on-text="Once" data-off-text="Regular"
                                id="once_regular_switch">
                                <span class="toggle switch-toggler"></span> -->
                                <!-- O = Once - off / R = Regular (lift club) -->
                                <!-- <input type="hidden" value="O" name="ride_type" id="ride_type">
                            </div>
                        </div> -->

                        
                        <!-- days of the week if regular trip --> 
                        <!-- <div class="form-row">
                            <div class="form-group col-sm-12 col-md-12 p-1">
                                <label>Schedule Days</label>
                                <br />
                                <?php foreach ($this->days as $day) { ?>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input days_check" id="<?php echo $day['dow']; ?>" name="days_checklist[]" value="<?php echo $day['dayid']; ?>">
                                        <label class="custom-control-label" for="<?php echo $day['dow']; ?>">
                                            <?php echo $day['dow']; ?></label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div> -->

                        <!-- return trip --> 
                        <!-- <div class="form-row">
                            <label for="returning_switch">Looking for driver that will be returning?</label>
                            <input type="checkbox" data-toggle="switch" data-on-color="danger" data-off-color="secondary" data-on-text="Yes" data-off-text="No" 
                            id="returning_switch">
                            <span class="toggle switch-toggler"></span> -->
                            <!-- Y = Return trips / N = One-way --> 
                            <!-- <input type="hidden" value="N" name="return_trip" id="return_trip">
                        </div> -->

                        
                        
                        
                        
                        <!-- submit-->
                        <div class="form-row">
                            <div class="form-group col-sm-12 col-md-4 p-1">
                                <button class="btn btn-outline-warning btn-round" type="submit">
                                    find a ride
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
                <!--results matches-->
                <div class="col-sm-12 col-md-6 mt-1">
                    <h6>Matching Rides</h6>
                    <?php if(isset($this->res_any) || !empty($this->res_any)) { 

                        $this->res_any = array_filter($this->res_any, function($input){
                            return $input['ride_as'] == 'D';
                        });

                    if(!empty($this->res_any) || count($this->res_any) > 0){
                    ?>  
                        <div class="table-responsive">
                            <table class="table table-borderless table-sm">
                                <thead class="border-bottom">
                                    <tr>
                                        <td>Driver Name</td>
                                        <td>Rating</td>
                                        <td>Car</td>
                                        <td>Action<td>
                                    </tr>
                                </thead>
                                <tbody>                     
                                    <?php foreach($this->res_any as $res) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $res['firstname'] . ' ' . $res['lastname'];?>
                                        </td>
                                        <td>
                                            {rating}
                                        </td>
                                        <td>
                                            {car_name}
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-round btn-outline-danger m-1"
                                                type="button" id="btnMessageUser" data-toggle="modal" data-target="#Message_User"
                                                data-id="<?php echo $res['userid'];?>" >
                                                Message
                                            </button>
                                            <button class="btn btn-sm btn-round btn-outline-danger  m-1"
                                                type="button" id="btnViewProfile" data-toggle="modal" data-target="#View_User"
                                                data-id="<?php echo $res['userid'];?>" >
                                                View profile
                                            </button>
                                        </td>
                                    </tr>
                                    <?php }  ?>
                                </tbody>
                                <tr>
                                </tr>
                            </table>
                        </div>

                    <?php }else { ?>

                        <p>No matching results.</p>
                        <a href="#">
                            Post a request 
                        </a>

                    <?php }

                        }
                    ?>
                </div>

            </div>




        <?php } else if($_GET['role'] == 'd') { ?>
            <h4>Find a passenger</h4>
            <div class="row">


                <!--user enter details-->
                <div class="col-sm-12 col-md-6 mt-1 border-right">
                    <h6>Where are you heading?</h6>
                    
                    
                    <form method="post" action="<?php echo URL;?>dashboard/find_Ride?role=d&action=search-ride">
                        <!--origin & destination input-->
                        <div class="form-row">
                            <div class="form-group col-sm-10 col-md-6 p-1">
                                <label for="origin-input">From</label>
                                <input type="text" class="form-control" id="origin-input" name="origin-input" 
                                <?php if(isset($_GET['from'])) {?>
                                    placeholder="<?php echo $_GET['origin-input'];?>"
                                <?php } else { ?>
                                    placeholder="Enter departure from..."
                                <?php } ?>
                                >
                            </div>
                            <div class="form-group col-sm-10 col-md-6 p-1">
                                <label for="destination-input">To</label>
                                <input type="text" class="form-control" id="destination-input" name="destination-input"
                                <?php if(isset($_GET['to'])) {?>
                                    placeholder="<?php echo $_GET['destination-input'];?>"
                                <?php } else { ?>
                                    placeholder="Enter your destination..."
                                <?php } ?>
                                >
                            </div>
                        </div>
                        
                        <!--filter-->
                        <!-- <div class="form-row">
                            <div class="form-group col-12">
                                <div class="custom-control custom-checkbox">
                                    <label class="custom-control-label" for="checkFilter">Filter</label>
                                    <input type="checkbox" class="custom-control-input" id="checkFilter">
                                    <input type="hidden" name="filter_data" value="N" id="filter_data">
                                </div>
                            </div>
                        </div> -->
                        
                        <!-- date -->
                        <!-- <div class="form-row">
                            <div class="form-group col-12">
                                <label for="any_date_switch">Any Date</label>
                                <input type="checkbox" data-toggle="switch"  data-on-color="danger" data-off-color="secondary" data-on-text="YES" data-off-text="NO"
                                id="any_date_switch">
                                <span class="toggle switch-toggler"></span>
                                <input type="hidden" value="N" name="any_date" id="any_date">
                            </div>

                            <div class="form-group col-sm-8 col-md-6">
                                <label id="lift_departure_date" for="departure_date">Departure Date</label>
                                <input type="text" class="form-control datepicker" name="departure_date" id="departure_date" placeholder="<?php echo date('Y-m-d');?>" onkeypress="return false;" />
                            </div>
                        </div> -->

                        <!-- regular/ schedule --> 
                        <!-- <div class="form-row">
                            <div class="form-group col-12">
                                <label for="once_regular_switch">Frequency</label>
                                <input type="checkbox" data-toggle="switch"  data-on-color="danger" data-off-color="secondary" data-on-text="Once" data-off-text="Regular"
                                id="once_regular_switch">
                                <span class="toggle switch-toggler"></span> -->
                                <!-- O = Once - off / R = Regular (lift club) -->
                                <!-- <input type="hidden" value="O" name="ride_type" id="ride_type">
                            </div>
                        </div> -->

                        
                        <!-- days of the week if regular trip --> 
                        <!-- <div class="form-row">
                            <div class="form-group col-sm-12 col-md-12 p-1">
                                <label>Schedule Days</label>
                                <br />
                                <?php foreach ($this->days as $day) { ?>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input days_check" id="<?php echo $day['dow']; ?>" name="days_checklist[]" value="<?php echo $day['dayid']; ?>">
                                        <label class="custom-control-label" for="<?php echo $day['dow']; ?>">
                                            <?php echo $day['dow']; ?></label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div> -->

                        <!-- return trip --> 
                        <!-- <div class="form-row">
                            <label for="returning_switch">Looking for driver that will be returning?</label>
                            <input type="checkbox" data-toggle="switch" data-on-color="danger" data-off-color="secondary" data-on-text="Yes" data-off-text="No" 
                            id="returning_switch">
                            <span class="toggle switch-toggler"></span> -->
                            <!-- Y = Return trips / N = One-way --> 
                            <!-- <input type="hidden" value="N" name="return_trip" id="return_trip">
                        </div> -->

                        
                        
                        
                        
                        <!-- submit-->
                        <div class="form-row">
                            <div class="form-group col-sm-12 col-md-4 p-1">
                                <button class="btn btn-outline-warning btn-round" type="submit">
                                    find a ride
                                </button>
                            </div>
                        </div>


                    </form>


                </div>



                <!--results matches-->
                <div class="col-sm-12 col-md-6 mt-1">
                    <h6>Matching Rides</h6>
                    <?php if(isset($this->res_any) || !empty($this->res_any)) { 

                        $this->res_any = array_filter($this->res_any, function($input){
                            return $input['ride_as'] == 'P';
                        });

                    if(!empty($this->res_any) || count($this->res_any) > 0){
                    ?>  
                        <div class="table-responsive">
                            <table class="table table-borderless table-sm">
                                <thead class="border-bottom">
                                    <tr>
                                        <td>Passenger</td>
                                        <td>Rating</td>
                                        <td>Car</td>
                                        <td>Action<td>
                                    </tr>
                                </thead>
                                <tbody>                     
                                    <?php foreach($this->res_any as $res) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $res['firstname'] . ' ' . $res['lastname'];?>
                                        </td>
                                        <td>
                                            {rating}
                                        </td>
                                        <td>
                                            {car_name}
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-round btn-outline-danger m-1"
                                                type="button" id="btnMessageUser" data-toggle="modal" data-target="#Message_User"
                                                data-id="<?php echo $res['userid'];?>" >
                                                Message
                                            </button>
                                            <button class="btn btn-sm btn-round btn-outline-danger  m-1"
                                                type="button" id="btnViewProfile" data-toggle="modal" data-target="#View_User"
                                                data-id="<?php echo $res['userid'];?>" >
                                                View profile
                                            </button>
                                        </td>
                                    </tr>
                                    <?php }  ?>
                                </tbody>
                                <tr>
                                </tr>
                            </table>
                        </div>

                    <?php }else { ?>

                        <p>No matching results.</p>
                        <a href="#">
                            Post a ride
                        </a>

                    <?php }

                        }
                    ?>
                </div>
            </div>


        <?php } ?>


        <!-- view user modal --> 
        <div class="modal fade" id="View_User" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-profile">
                <div class="modal-content">
                    <div class="modal-header no-border-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h6>View user details</h6>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="<?php echo URL;?>public/images/kaci-baum-2.jpg" class="img-circle img-no-padding img-responsive img-circle">
                                <p class="text-center" id="txtName"></p>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h6>User rating</h6>
                                <p>5.9</p>
                                <h6>Bio</h6>
                                <p id="txtBio"></p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <!-- message modal --> 
        <div class="modal fade" id="Message_User" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-message">
                <div class="modal-content">
                    <div class="modal-header no-border-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h6>Message User</h6>
                    </div>
                    <div class="modal-body">
                        <form id="msgForm" method="post" action="<?php echo URL;?>dashboard/xhrSendMessage/<?php echo $this->user['userid'];?>">
                            <div class="row">
                                <div class="col-12">
                                    <label data-error="wrong" data-success="right" for="msgText">Your message</label>
                                    <textarea type="text" id="msgText" name="msgText" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row p-1 m-1">
                                <div class="mx-auto">
                                    <button type="button" class="btn btn-sm btn-round btn-danger" id="btnSendMessage"> 
                                        Send message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>