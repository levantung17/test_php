<?php
include('connect.php');
class data_user{
    public function select_user($user){
        global $conn;
        $select="select * from user where username='$user'"; echo $select;
        $run=mysqli_query($conn,$select);
        return $run;
    }
    public function register($name,$add,$ava,$gen,$hob,$email){
        global $conn;
        $insert="insert into user(username,password,address,avatar,gender,hobby,email)
            values('$name','add','ava','gen','hob','email')";
            $run=mysqli_query($conn,$insert);
            return $run;
    }
}
?>