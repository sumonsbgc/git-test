<?php
include_once('../vendor/autoload.php');
use App\Model\Model;

if ( "POST" == $_SERVER['REQUEST_METHOD']){
    if( isset($_POST['submit']) ){
        if ( !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']))
        {
            function validateAddress($value){
                return trim(ucwords($value));
            }

            if ( TRUE == filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
            {
                $filters = array(
                    'fname' => array(
                        "filter"=>FILTER_CALLBACK,
                        "options"=>"ucwords"
                    ),
                    "lname" => array(
                        "filter"=>FILTER_CALLBACK,
                        "options"=>"ucwords"
                    ),

                    "email" => FILTER_VALIDATE_EMAIL,
                    "bdate" => FILTER_DEFAULT,

                    'address' => array(
                        "filter"=>FILTER_CALLBACK,
                        "options" => "validateAddress"
                    )
                );

                $data = filter_var_array($_POST, $filters);
                $model = new Model();
                $model->assignValue($data)->update($_POST['id']);
                header("Location: index.php");
            }
        }
    }
}