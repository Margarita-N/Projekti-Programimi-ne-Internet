<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        session_start();

        require("db/dbconfig.php");
        require("user-class.php");
        $conn=new mysqli(serverName,username,password,dbname);

        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];
        $gender=$_POST['gender'];
        $state=$_POST['state'];

        $passwordLength=strlen($password);
    
        if($username=="" || $email=="" || $password=="" || $confirmPassword==""){
            echo '<span class="red">All fields must be filled!</span>';
        }
        else{
            $stmt=$conn->prepare("SELECT * FROM perdoruesit WHERE email=?");
            $stmt->bind_param("s",$email);
            $stmt->execute();

            $result = $stmt->get_result();
            $resultset=$result->fetch_all(MYSQLI_ASSOC);
            if(sizeof($resultset)>0){
                echo '<span class="red">Email i dhene eshte i regjistruar ne nje account!</span>';
            }
            elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo '<span class="red">Email is not valid!</span>';
            }
            elseif($password!=$confirmPassword){
                echo '<span class="red">Password dhe confirm password nuk jane te njejta!</span>';
            }
            elseif($passwordLength<8){
                echo '<span class="red">Password must be at least 8 characters long!<br></span>';
            }
            elseif(!preg_match('@[A-Z]@',$password) || !preg_match('@[a-z]@',$password) || !preg_match('@[0-9]@',$password)){
                echo '<span class="red">Password should contain a uppercase letter,lowercase letter and a digit!';
            }
            else{
                $driver = new mysqli_driver();
                $driver->report_mode = MYSQLI_REPORT_STRICT;

                try{
                //Duhet me kriju nje pjese per me shiku a osht student email edhe me permisu
                $emailArray=explode('.',$email);
                $status=$emailArray[sizeof($emailArray)-1]=='edu';
                


                $md5Password=md5($password);
                $insertQuery=$conn->prepare("INSERT INTO perdoruesit(username,passwordi,email,gjinia,shteti,ditelindja,statusi) values(?,?,?,?,?,?)");
                $insertQuery->bind_param("ssssss",$username,$md5Password,$email,$gender,$state,$status);
                $insertQuery->execute();

                $selectQuery='SELECT * FROM perdoruesit WHERE email="'.$email.'"';
                $resultArray=mysqli_query($conn,$selectQuery);
                    
                while($result=$resultArray->fetch_assoc()){
                    $id=$result['userID'];
                }

                $logedInUser=new user($id,$username,$password);
                $_SESSION['user']=$logedInUser;

                echo 'Thank you for signing up.<br>You are now logged in!';
                }catch(mysqli_sql_exception $e){
                    echo $e->getMessage();//'<span class="red">Registration failed!<br>Refresh and try again</span>';
                }
                
                
                $conn->close();
            }
        }
    }
    // /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/
?>

