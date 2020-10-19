<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function test1(){
        phpinfo();
    }
    public function test2(){
        echo "test2";
    }
    public function add(){
       $con = mysqli_connect("localhost",'root','','myDB');
       $sql = 'select * form mytable';
       $result = mysqli_query($con,$sql);
       if($row = mysqli_fetch_array($result)){
           echo $row['email'] . "<br>";
       }
    }
}
