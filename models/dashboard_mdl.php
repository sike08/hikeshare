<?php

class Dashboard_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserDetails($id)
    {
        $query = 'CALL uspGetUserDetails(:userid)';
        $params = array(':userid' => $id);
        return Database::GetRow($query, $params);
    }


    public function getCars($driverid)
    {
        $query = 'CALL uspGetCars(:driverid)';
        $params = array(':driverid'=>$driverid);
        return Database::GetAll($query, $params);
    }

    public function getNumCars($driverid)
    {
        $query = 'CALL uspGetNumCars(:driverid)';
        $params = array(':driverid'=>$driverid);
        return Database::GetRow($query,$params);
    }

    public function addCar() 
    {
        $carid = Util::generate_id();
        $blob = file_get_contents($_FILES['inputGroupFile01']['tmp_name']);
        $query = 'CALL uspAddCar(:carid, :driverid, :reg_num, 
                :make, :model, :model_year, :color, :seats, :car_image)';
        $params = array(
                ':carid' => $carid,
                ':driverid' =>$_POST['driverid'],
                ':reg_num' =>$_POST['registration_number'],
                ':make' =>$_POST['make'],
                ':model' =>$_POST['model'],
                ':model_year' =>$_POST['model_year'],
                ':color' =>$_POST['color'],
                ':seats' =>$_POST['number_of_seats'],
                ':car_image' =>$blob
            );
        $result = Database::Execute($query,$params);
        if ($result)
        {
            header('location:' . URL . 'dashboard/viewCars');
        }
        else
        {
            header('location:' . URL . 'error/index');
        }
    }

    public function updateCar()
    { }

    public function removeCar()
    { }
}
