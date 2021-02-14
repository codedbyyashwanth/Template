<?php 
$dob="2001-01-01"; //yyyy-mm-dd;
$dbname="school_t";
$tablename="details";
$School="<h1>The national</h1>";
$use="use $dbname";

$sql_check_db="SHOW DATABASES LIKE '$dbname' " ;
$sql_db = "create database $dbname ";
$sql_check_table="SELECT * FROM information_schema.tables WHERE table_schema = '$dbname' AND table_name = '$tablename' LIMIT 1 ";
$sql_table="create table details(first_name varchar(40),last_name varchar(40),gender varchar(4),date_of_birth date);";
$sql_insert_record = "insert into $tablename (first_name,last_name,gender,date_of_birth) values (?,?,?,?)";
$conn=mysqli_connect("localhost","root","");
mysqli_query($conn,"use school_t");

if($conn)
{
        $res=mysqli_query($conn,$sql_check_db);
        if($res->num_rows) //check if db present
        {
            $res=mysqli_query($conn,$sql_check_table);
            if(!$res->num_rows)  //check if table exists
            {   
                $conn->query($use);
                $conn->query($sql_table);
                
            }
        }
   
        else 
          {    
             mysqli_query($conn,$sql_db); 
                  if(!$res->num_rows)
                         {
                            $conn->query($use);
                             $conn->query($sql_table);
                          }
                    else
                    {
                        echo "<h4>error in connecting ,contact shravan</h4>";
                    }
            }

}


?>
