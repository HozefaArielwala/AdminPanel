<?php
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email1 = $_POST['email'];
    $mobileno = $_POST['phone_no'];
    $address1 = $_POST['address'];
    $link = $_POST['url'];
    $cityname = $_POST['city'];
    $countryname = $_POST['country'];
    $statename = $_POST['state'];
    $industryname = $_POST['industry'];


    if(!empty($firstname) || !empty($lastname) || !empty($email1) || !empty($mobileno) || !empty($address1) || !empty($link) || !empty($cityname) || !empty($countryname) || !empty($statename) || !empty($industryname))
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "registrationdetails";

        // create connection
        $connect = new mysqli($host,$username,$password,$dbname);
        if(mysqli_connect_error()){
            die('Connection Error'.mysqli_connect_error());
        }
        else{
          $SELECT = "SELECT email From details Where email = ? Limit 1";
          $INSERT = "INSERT Into details (fname,lname,email,phoneno,address1,website,city,country,state,industry) values(?,?,?,?,?,?,?,?,?,?)";
          
          //Prepare statement
          $stmt = $connect->prepare($SELECT);
          $stmt->bind_param("s",$email1);
          $stmt->execute();
          $stmt->bind_result($email1);
          $stmt->store_result();
          $rnum = $stmt->num_rows;

          if($rnum==0){
              $stmt->close();

              $stmt=$connect->prepare($INSERT);
              $stmt->bind_param("ssssssssss",$firstname,$lastname,$email1,$mobileno,$address1,$link,$cityname,$countryname,$statename,$industryname);
              $stmt->execute();
              echo "Your Successfully Registered !";
          }
          else{
              echo "Someone Already Registered Using The Email.Please Try Again With New Email id.";
          }
          $stmt->close();
          $connect->close();
        }
    }
    else{
        echo "All field are Required !";
        die();
    }

?>