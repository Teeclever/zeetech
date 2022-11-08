 <?php
    $con = mysqli_connect("localhost", "root", "", "zeetech_records"); 
    if($con == false){
        die("error:could not connect".mysqli_conncet_error());
    }


    $option1 = $_GET['course'];
     

    if($option1 == 'Desktop Publishing') {
        
            $option1 = 'ZCGE/DP/2022/';
    }
    else if($option1 == 'Computer Engineering'){
        
        $option1 = 'ZCGE/ENG/2022/';
    }
    else if($option1 == 'Web Designing'){
        
        $option1 = 'ZCGE/WD/2022/';
    }
    else if($option1 == 'Secreteriat Studies'){
        
        $option1 = 'ZCGE/SS/2022/';
    }
    else if($option1 == 'Networking'){
        
        $option1 = 'ZCGE/NW/2022/';
    }
    else if($option1 == 'Graphics Design'){
        
        $option1 = 'ZCGE/GD/2022/';
    }




    
    $random_no = rand(0000, 9999);

    $app_id =  $option1 . $random_no ;
    
    echo $app_id; 

    









    $surname = mysqli_real_escape_string($con, $_REQUEST['surname']);
    $other_name = mysqli_real_escape_string($con, $_REQUEST['other_names']);
    $email = mysqli_real_escape_string($con, $_REQUEST['email']);
    $phone_no = mysqli_real_escape_string($con, $_REQUEST['phone_number']);
    $address = mysqli_real_escape_string($con, $_REQUEST['address']);
    $courses = mysqli_real_escape_string($con, $_REQUEST['course']);
    $date = mysqli_real_escape_string($con, $_REQUEST['Date_of_birth']);
    $religion = mysqli_real_escape_string($con, $_REQUEST['Religion']);
    $states = mysqli_real_escape_string($con, $_REQUEST['state']);
    $GuardianName = mysqli_real_escape_string($con, $_REQUEST['guardian_name']);
    $GuardianPhone = mysqli_real_escape_string($con, $_REQUEST['guardian_phone']);

    $sql = "INSERT INTO zeetech_students (applicant_id,  surname, Other_Names, Email, Phone_No, Addres, Course_Study, Date_of_birth, Religion,  States, Guardian_Name, Guardian_Phone  ) VALUES('$app_id', '$surname', '$other_name', '$email','$phone_no', '$address', '$courses', '$date', '$religion', '$states', '$GuardianName', '$GuardianPhone')";

    if(mysqli_query($con, $sql)){
        echo"<script>alert('Read submitted successfully');
        window.location.href='/zeetech/applications/apply.html';
        </script>";
  
        
    }
    else{
        echo "could not excute $sql " . mysqli_error($con);
        mysqli_close($con);
    }
 


?>










