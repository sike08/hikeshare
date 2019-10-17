<div class="section profile-content">
    <div class="container shadow-sm">
        <h4>Find a ride</h4>
        
        <?php if($_GET['role'] == 'p') { ?>

        <!--large screens view-->
        <div class="row">
            <!--user enter details-->
            <div class="col-sm-12 col-md-6 mt-1 border-right">
                <h6>Where are you heading?</h6>
                <form method="post" action="<?php echo URL;?>dashboard/">
                    <div class="form-row">
                        <div class="form-group col-sm-10 col-md-6 p-1">
                            <label for="origin-input">From</label>
                            <input type="text" class="form-control" id="origin-input" name="origin-input" placeholder="Enter your current city...">
                        </div>
                        <div class="form-group col-sm-10 col-md-6 p-1">
                            <label for="destination-input">To</label>
                            <input type="text" class="form-control" id="destination-input" name="destination-input" placeholder="Enter destination city...">
                        </div>
                    </div>
                    <div class="form-row" id="dv_lift_departure">
                        <div class="form-group col-sm-8 col-md-6 p-1">
                            <label id="lift_departure_date" for="departure_date">Departure Date</label>
                            <input type="text" class="form-control datepicker" name="departure_date" id="departure_date" placeholder="<?php echo date('Y-m-d');?>" onkeypress="return false;" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12 col-md-4 p-1">
                            <button class="btn btn-outline-warning btn-round" type="button">
                                find a ride
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!--results matches-->
            <div class="col-sm-12 col-md-6 mt-1">
                <h6>Matching Rides</h6>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tr class="border-bottom">
                            <td>Driver Name</td>
                            <td>Rating</td>
                            <td>Car</td>
                            <td>Action<td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                </div>
            </div>
        </div>




        <?php } else if($_GET['role'] == 'd') { ?>

            <div class="row">

            </div>


        <?php } ?>



    </div>
</div>