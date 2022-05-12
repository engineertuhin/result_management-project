<?php
  
function namechack($name,$connect){
    $query="select * from admin where name='$name'";
    $connec=$connect -> query($query);
    $count=$connec -> num_rows;
    if($count>0){
        return ;
    }else{
        return true;
    }
     
}
function  emailchack($email,$connect){
    $query="select * from admin where email='$email'";
    $conn=$connect ->  query($query);
    $count = $conn -> num_rows;
    if($count>0){
        return false;
    }else{
        return true;
    }
}

function  marksubject($s1,$connect,$id){


$query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
$con=$connect -> query($query);
$data =$con -> fetch_assoc();
$d1= $data['Mark_1'];
$d2= $data['mark_2'];
$d3= $data['mark_3'];
$d4= $data['mark_4'];
$d5= $data['mark_5'];
$d6= $data['mark6'];
$d7= $data['mark_7'];
if($d1==90){
    if($s1 >=0 and $s1<=32){
        $greate= "F";
    }elseif($s1 >=33 and $s1<=44){
    
      $greate= "C";

    }elseif($s1 >=45 and $s1<=53){

       $greate= "B";

    }elseif($s1 >=54 and $s1<=62){

          $greate= "B+";

    }
    elseif($s1 >=63 and $s1<=71){

        $greate= "A";

  }elseif($s1 >=72 and $s1<=90){

    $greate= "A+";

}




}elseif($d1==60){
    if($s1 >=0 and $s1<=22){
        $greate="F";
    }elseif($s1 >=23 and $s1<=29){
    
      $greate= "C";

    }elseif($s1 >=30 and $s1<=35){

       $greate= "B";

    }elseif($s1 >=36 and $s1<=41){

          $greate= "B+";

    }
    elseif($s1 >=42 and $s1<=47){

        $greate= "A";

  }elseif($s1 >=48 and $s1<=60){

    $greate= "A+";

}



}elseif($d1==30){

    if($s1 >=0 and $s1<=11){
        $greate="F";
        }elseif($s1 >=12 and $s1<=14){
        $greate= "C";
        
        }elseif($s1 >=15 and $s1<=17){
        
        $greate= "B";
        
        }elseif($s1 >=18 and $s1<=20){
        
        $greate= "B+";
        
        }
        elseif($s1 >=21 and $s1<=23){
        
        $greate= "A";
        
        }elseif($s1 >=24 and $s1<=30){
        
        $greate= "A+";
        
        }
        





}

return $greate;


}
function  marksubjecte($s2,$connect,$id){


    $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
    $con=$connect -> query($query);
    $data =$con -> fetch_assoc();
    $d1= $data['Mark_1'];
    $d2= $data['mark_2'];
    $d3= $data['mark_3'];
    $d4= $data['mark_4'];
    $d5= $data['mark_5'];
    $d6= $data['mark6'];
    $d7= $data['mark_7'];
    if($d2==90){
        if($s2 >=0 and $s2<=32){
            $greate= "F";
        }elseif($s2 >=33 and $s2<=44){
        
          $greate= "C";
    
        }elseif($s2 >=45 and $s2<=53){
    
           $greate= "B";
    
        }elseif($s2 >=54 and $s2<=62){
    
              $greate= "B+";
    
        }
        elseif($s2 >=63 and $s2<=71){
    
            $greate= "A";
    
      }elseif($s2 >=72 and $s2<=90){
    
        $greate= "A+";
    
    }
    
    
    
    
    }elseif($d2==60){
        if($s2 >=0 and $s2<=22){
            $greate="F";
        }elseif($s2 >=23 and $s2<=29){
        
          $greate= "C";
    
        }elseif($s2 >=30 and $s2<=35){
    
           $greate= "B";
    
        }elseif($s2 >=36 and $s2<=41){
    
              $greate= "B+";
    
        }
        elseif($s2 >=42 and $s2<=47){
    
            $greate= "A";
    
      }elseif($s2 >=48 and $s2<=60){
    
        $greate= "A+";
    
    }
    
    
    
    }elseif($d2==30){
    
        if($s2 >=0 and $s2<=11){
            $greate="F";
            }elseif($s2 >=12 and $s2<=14){
            $greate= "C";
            
            }elseif($s2 >=15 and $s2<=17){
            
            $greate= "B";
            
            }elseif($s2 >=18 and $s2<=20){
            
            $greate= "B+";
            
            }
            elseif($s2 >=21 and $s2<=23){
            
            $greate= "A";
            
            }elseif($s2 >=24 and $s2<=30){
            
            $greate= "A+";
            
            }
            
    
    
    
    
    
    }
    
    return $greate;
    
    
    }
    function  marksubject3($s3,$connect,$id){


        $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
        $con=$connect -> query($query);
        $data =$con -> fetch_assoc();
        $d1= $data['Mark_1'];
        $d2= $data['mark_2'];
        $d3= $data['mark_3'];
        $d4= $data['mark_4'];
        $d5= $data['mark_5'];
        $d6= $data['mark6'];
        $d7= $data['mark_7'];
        if($d3==90){
            if($s3 >=0 and $s3<=32){
                $greate= "F";
            }elseif($s3 >=33 and $s3<=44){
            
              $greate= "C";
        
            }elseif($s3 >=45 and $s3<=53){
        
               $greate= "B";
        
            }elseif($s3 >=54 and $s3<=62){
        
                  $greate= "B+";
        
            }
            elseif($s3 >=63 and $s3<=71){
        
                $greate= "A";
        
          }elseif($s3 >=72 and $s3<=90){
        
            $greate= "A+";
        
        }
        
        
        
        
        }elseif($d3==60){
            if($s3 >=0 and $s3<=22){
                $greate="F";
            }elseif($s3 >=23 and $s3<=29){
            
              $greate= "C";
        
            }elseif($s3 >=30 and $s3<=35){
        
               $greate= "B";
        
            }elseif($s3 >=36 and $s3<=41){
        
                  $greate= "B+";
        
            }
            elseif($s3 >=42 and $s3<=47){
        
                $greate= "A";
        
          }elseif($s3 >=48 and $s3<=60){
        
            $greate= "A+";
        
        }
        
        
        
        }elseif($d3==30){
        
            if($s3 >=0 and $s3<=11){
                $greate="F";
                }elseif($s3 >=12 and $s3<=14){
                $greate= "C";
                
                }elseif($s3 >=15 and $s3<=17){
                
                $greate= "B";
                
                }elseif($s3 >=18 and $s3<=20){
                
                $greate= "B+";
                
                }
                elseif($s3 >=21 and $s3<=23){
                
                $greate= "A";
                
                }elseif($s3 >=24 and $s3<=30){
                
                $greate= "A+";
                
                }
                
        
        
        
        
        
        }
        
        return $greate;
        
        
        }
        function   marksubject4($s4,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d4==90){
                if($s4 >=0 and $s4<=32){
                    $greate= "F";
                }elseif($s4 >=33 and $s4<=44){
                
                  $greate= "C";
            
                }elseif($s4 >=45 and $s4<=53){
            
                   $greate= "B";
            
                }elseif($s4 >=54 and $s4<=62){
            
                      $greate= "B+";
            
                }
                elseif($s4 >=63 and $s4<=71){
            
                    $greate= "A";
            
              }elseif($s4 >=72 and $s4<=90){
            
                $greate= "A+";
            
            }
            
            
            
            
            }elseif($d4==60){
                if($s4 >=0 and $s4<=22){
                    $greate="F";
                }elseif($s4 >=23 and $s4<=29){
                
                  $greate= "C";
            
                }elseif($s4 >=30 and $s4<=35){
            
                   $greate= "B";
            
                }elseif($s4 >=36 and $s4<=41){
            
                      $greate= "B+";
            
                }
                elseif($s4 >=42 and $s4<=47){
            
                    $greate= "A";
            
              }elseif($s4 >=48 and $s4<=60){
            
                $greate= "A+";
            
            }
            
            
            
            }elseif($d4==30){
            
                if($s4 >=0 and $s4<=11){
                    $greate="F";
                    }elseif($s4 >=12 and $s4<=14){
                    $greate= "C";
                    
                    }elseif($s4 >=15 and $s4<=17){
                    
                    $greate= "B";
                    
                    }elseif($s4 >=18 and $s4<=20){
                    
                    $greate= "B+";
                    
                    }
                    elseif($s4 >=21 and $s4<=23){
                    
                    $greate= "A";
                    
                    }elseif($s4 >=24 and $s4<=30){
                    
                    $greate= "A+";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }
        function   marksubject5($s5,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d5==90){
                if($s5 >=0 and $s5<=32){
                    $greate= "F";
                }elseif($s5 >=33 and $s5<=44){
                
                  $greate= "C";
            
                }elseif($s5 >=45 and $s5<=53){
            
                   $greate= "B";
            
                }elseif($s5 >=54 and $s5<=62){
            
                      $greate= "B+";
            
                }
                elseif($s5 >=63 and $s5<=71){
            
                    $greate= "A";
            
              }elseif($s5 >=72 and $s5<=90){
            
                $greate= "A+";
            
            }
            
            
            
            
            }elseif($d5==60){
                if($s5 >=0 and $s5<=22){
                    $greate="F";
                }elseif($s5 >=23 and $s5<=29){
                
                  $greate= "C";
            
                }elseif($s5 >=30 and $s5<=35){
            
                   $greate= "B";
            
                }elseif($s5 >=36 and $s5<=41){
            
                      $greate= "B+";
            
                }
                elseif($s5 >=42 and $s5<=47){
            
                    $greate= "A";
            
              }elseif($s5 >=48 and $s5<=60){
            
                $greate= "A+";
            
            }
            
            
            
            }elseif($d5==30){
            
                if($s5 >=0 and $s5<=11){
                    $greate="F";
                    }elseif($s5 >=12 and $s5<=14){
                    $greate= "C";
                    
                    }elseif($s5 >=15 and $s5<=17){
                    
                    $greate= "B";
                    
                    }elseif($s5 >=18 and $s5<=20){
                    
                    $greate= "B+";
                    
                    }
                    elseif($s5 >=21 and $s5<=23){
                    
                    $greate= "A";
                    
                    }elseif($s5 >=24 and $s5<=30){
                    
                    $greate= "A+";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }
        function   marksubject6($s6,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d6==90){
                if($s6 >=0 and $s6<=32){
                    $greate= "F";
                }elseif($s6 >=33 and $s6<=44){
                
                  $greate= "C";
            
                }elseif($s6 >=45 and $s6<=53){
            
                   $greate= "B";
            
                }elseif($s6 >=54 and $s6<=62){
            
                      $greate= "B+";
            
                }
                elseif($s6 >=63 and $s6<=71){
            
                    $greate= "A";
            
              }elseif($s6 >=72 and $s6<=90){
            
                $greate= "A+";
            
            }
            
            
            
            
            }elseif($d6==60){
                if($s6 >=0 and $s6<=22){
                    $greate="F";
                }elseif($s6 >=23 and $s6<=29){
                
                  $greate= "C";
            
                }elseif($s6 >=30 and $s6<=35){
            
                   $greate= "B";
            
                }elseif($s6 >=36 and $s6<=41){
            
                      $greate= "B+";
            
                }
                elseif($s6 >=42 and $s6<=47){
            
                    $greate= "A";
            
              }elseif($s6 >=48 and $s6<=60){
            
                $greate= "A+";
            
            }
            
            
            
            }elseif($d6==30){
            
                if($s6 >=0 and $s6<=11){
                    $greate="F";
                    }elseif($s6 >=12 and $s6<=14){
                    $greate= "C";
                    
                    }elseif($s6 >=15 and $s6<=17){
                    
                    $greate= "B";
                    
                    }elseif($s6 >=18 and $s6<=20){
                    
                    $greate= "B+";
                    
                    }
                    elseif($s6 >=21 and $s6<=23){
                    
                    $greate= "A";
                    
                    }elseif($s6 >=24 and $s6<=30){
                    
                    $greate= "A+";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }
        function   marksubject7($s7,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d7==90){
                if($s7 >=0 and $s7<=32){
                    $greate= "F";
                }elseif($s7 >=33 and $s7<=44){
                
                  $greate= "C";
            
                }elseif($s7 >=45 and $s7<=53){
            
                   $greate= "B";
            
                }elseif($s7 >=54 and $s7<=62){
            
                      $greate= "B+";
            
                }
                elseif($s7 >=63 and $s7<=71){
            
                    $greate= "A";
            
              }elseif($s7 >=72 and $s7<=90){
            
                $greate= "A+";
            
            }
            
            
            
            
            }elseif($d7==60){
                if($s7 >=0 and $s7<=22){
                    $greate="F";
                }elseif($s7 >=23 and $s7<=29){
                
                  $greate= "C";
            
                }elseif($s7 >=30 and $s7<=35){
            
                   $greate= "B";
            
                }elseif($s7 >=36 and $s7<=41){
            
                      $greate= "B+";
            
                }
                elseif($s7 >=42 and $s7<=47){
            
                    $greate= "A";
            
              }elseif($s7 >=48 and $s7<=60){
            
                $greate= "A+";
            
            }
            
            
            
            }elseif($d7==30){
            
                if($s7 >=0 and $s7<=11){
                    $greate="F";
                    }elseif($s7 >=12 and $s7<=14){
                    $greate= "C";
                    
                    }elseif($s7 >=15 and $s7<=17){
                    
                    $greate= "B";
                    
                    }elseif($s7 >=18 and $s7<=20){
                    
                    $greate= "B+";
                    
                    }
                    elseif($s7 >=21 and $s7<=23){
                    
                    $greate= "A";
                    
                    }elseif($s7 >=24 and $s7<=30){
                    
                    $greate= "A+";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }

        function   pointsubject($s1,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d1==90){
                if($s1 >=0 and $s1<=32){
                    $greate= "0.00";
                }elseif($s1 >=33 and $s1<=44){
                
                  $greate= "2.00";
            
                }elseif($s1 >=45 and $s1<=53){
            
                   $greate= "2.50";
            
                }elseif($s1 >=54 and $s1<=62){
            
                      $greate= "3.00";
            
                }
                elseif($s1 >=63 and $s1<=71){
            
                    $greate= "3.50";
            
              }elseif($s1 >=72 and $s1<=90){
            
                $greate= "4.00";
            
            }
            
            
            
            
            }elseif($d1==60){
                if($s1 >=0 and $s1<=22){
                    $greate="0.00";
                }elseif($s1 >=23 and $s1<=29){
                
                  $greate= "2.00";
            
                }elseif($s1 >=30 and $s1<=35){
            
                   $greate= "2.50";
            
                }elseif($s1 >=36 and $s1<=41){
            
                      $greate= "3.00";
            
                }
                elseif($s1 >=42 and $s1<=47){
            
                    $greate= "3.50";
            
              }elseif($s1 >=48 and $s1<=60){
            
                $greate= "4.00";
            
            }
            
            
            
            }elseif($d1==30){
            
                if($s1 >=0 and $s1<=11){
                    $greate="0.00";
                    }elseif($s1 >=12 and $s1<=14){
                    $greate= "2.00";
                    
                    }elseif($s1 >=15 and $s1<=17){
                    
                    $greate= "2.50";
                    
                    }elseif($s1 >=18 and $s1<=20){
                    
                    $greate= "3.00";
                    
                    }
                    elseif($s1 >=21 and $s1<=23){
                    
                    $greate= "3.50";
                    
                    }elseif($s1 >=24 and $s1<=30){
                    
                    $greate= "4.00";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }
        function   pointsubject1($s2,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d2==90){
                if($s2 >=0 and $s2<=32){
                    $greate= "0.00";
                }elseif($s2 >=33 and $s2<=44){
                
                  $greate= "2.00";
            
                }elseif($s2 >=45 and $s2<=53){
            
                   $greate= "2.50";
            
                }elseif($s2 >=54 and $s2<=62){
            
                      $greate= "3.00";
            
                }
                elseif($s2 >=63 and $s2<=71){
            
                    $greate= "3.50";
            
              }elseif($s2 >=72 and $s2<=90){
            
                $greate= "4.00";
            
            }
            
            
            
            
            }elseif($d2==60){
                if($s2 >=0 and $s2<=22){
                    $greate="0.00";
                }elseif($s1 >=23 and $s1<=29){
                
                  $greate= "2.00";
            
                }elseif($s2 >=30 and $s2<=35){
            
                   $greate= "2.50";
            
                }elseif($s2 >=36 and $s2<=41){
            
                      $greate= "3.00";
            
                }
                elseif($s2 >=42 and $s2<=47){
            
                    $greate= "3.50";
            
              }elseif($s2 >=48 and $s2<=60){
            
                $greate= "4.00";
            
            }
            
            
            
            }elseif($d2==30){
            
                if($s2 >=0 and $s2<=11){
                    $greate="0.00";
                    }elseif($s2 >=12 and $s2<=14){
                    $greate= "2.00";
                    
                    }elseif($s2 >=15 and $s2<=17){
                    
                    $greate= "2.50";
                    
                    }elseif($s2 >=18 and $s2<=20){
                    
                    $greate= "3.00";
                    
                    }
                    elseif($s2 >=21 and $s2<=23){
                    
                    $greate= "3.50";
                    
                    }elseif($s2 >=24 and $s2<=30){
                    
                    $greate= "4.00";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }
        function   pointsubject2($s3,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d3==90){
                if($s3 >=0 and $s3<=32){
                    $greate= "0.00";
                }elseif($s3 >=33 and $s3<=44){
                
                  $greate= "2.00";
            
                }elseif($s3 >=45 and $s3<=53){
            
                   $greate= "2.50";
            
                }elseif($s3 >=54 and $s3<=62){
            
                      $greate= "3.00";
            
                }
                elseif($s3 >=63 and $s3<=71){
            
                    $greate= "3.50";
            
              }elseif($s3 >=72 and $s3<=90){
            
                $greate= "4.00";
            
            }
            
            
            
            
            }elseif($d3==60){
                if($s3 >=0 and $s3<=22){
                    $greate="0.00";
                }elseif($s3 >=23 and $s3<=29){
                
                  $greate= "2.00";
            
                }elseif($s3 >=30 and $s3<=35){
            
                   $greate= "2.50";
            
                }elseif($s3 >=36 and $s3<=41){
            
                      $greate= "3.00";
            
                }
                elseif($s3 >=42 and $s3<=47){
            
                    $greate= "3.50";
            
              }elseif($s3 >=48 and $s3<=60){
            
                $greate= "4.00";
            
            }
            
            
            
            }elseif($d3==30){
            
                if($s3 >=0 and $s3<=11){
                    $greate="0.00";
                    }elseif($s3 >=12 and $s3<=14){
                    $greate= "2.00";
                    
                    }elseif($s3 >=15 and $s3<=17){
                    
                    $greate= "2.50";
                    
                    }elseif($s3 >=18 and $s3<=20){
                    
                    $greate= "3.00";
                    
                    }
                    elseif($s3 >=21 and $s3<=23){
                    
                    $greate= "3.50";
                    
                    }elseif($s3 >=24 and $s3<=30){
                    
                    $greate= "4.00";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }
        function   pointsubject3($s4,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d4==90){
                if($s4 >=0 and $s4<=32){
                    $greate= "0.00";
                }elseif($s4 >=33 and $s4<=44){
                
                  $greate= "2.00";
            
                }elseif($s4 >=45 and $s4<=53){
            
                   $greate= "2.50";
            
                }elseif($s4 >=54 and $s4<=62){
            
                      $greate= "3.00";
            
                }
                elseif($s4 >=63 and $s4<=71){
            
                    $greate= "3.50";
            
              }elseif($s4 >=72 and $s4<=90){
            
                $greate= "4.00";
            
            }
            
            
            
            
            }elseif($d4==60){
                if($s4 >=0 and $s4<=22){
                    $greate="0.00";
                }elseif($s4 >=23 and $s4<=29){
                
                  $greate= "2.00";
            
                }elseif($s4 >=30 and $s4<=35){
            
                   $greate= "2.50";
            
                }elseif($s4 >=36 and $s4<=41){
            
                      $greate= "3.00";
            
                }
                elseif($s4 >=42 and $s4<=47){
            
                    $greate= "3.50";
            
              }elseif($s4 >=48 and $s4<=60){
            
                $greate= "4.00";
            
            }
            
            
            
            }elseif($d4==30){
            
                if($s4 >=0 and $s4<=11){
                    $greate="0.00";
                    }elseif($s4 >=12 and $s4<=14){
                    $greate= "2.00";
                    
                    }elseif($s4 >=15 and $s4<=17){
                    
                    $greate= "2.50";
                    
                    }elseif($s4 >=18 and $s4<=20){
                    
                    $greate= "3.00";
                    
                    }
                    elseif($s4 >=21 and $s4<=23){
                    
                    $greate= "3.50";
                    
                    }elseif($s4 >=24 and $s4<=30){
                    
                    $greate= "4.00";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }

        function   pointsubject4($s5,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d5==90){
                if($s5 >=0 and $s5<=32){
                    $greate= "0.00";
                }elseif($s5 >=33 and $s5<=44){
                
                  $greate= "2.00";
            
                }elseif($s5 >=45 and $s5<=53){
            
                   $greate= "2.50";
            
                }elseif($s5 >=54 and $s5<=62){
            
                      $greate= "3.00";
            
                }
                elseif($s5 >=63 and $s5<=71){
            
                    $greate= "3.50";
            
              }elseif($s5 >=72 and $s5<=90){
            
                $greate= "4.00";
            
            }
            
            
            
            
            }elseif($d5==60){
                if($s5 >=0 and $s5<=22){
                    $greate="0.00";
                }elseif($s5 >=23 and $s5<=29){
                
                  $greate= "2.00";
            
                }elseif($s5 >=30 and $s5<=35){
            
                   $greate= "2.50";
            
                }elseif($s5 >=36 and $s5<=41){
            
                      $greate= "3.00";
            
                }
                elseif($s5 >=42 and $s5<=47){
            
                    $greate= "3.50";
            
              }elseif($s5 >=48 and $s5<=60){
            
                $greate= "4.00";
            
            }
            
            
            
            }elseif($d5==30){
            
                if($s5 >=0 and $s5<=11){
                    $greate="0.00";
                    }elseif($s5 >=12 and $s5<=14){
                    $greate= "2.00";
                    
                    }elseif($s5 >=15 and $s5<=17){
                    
                    $greate= "2.50";
                    
                    }elseif($s5 >=18 and $s5<=20){
                    
                    $greate= "3.00";
                    
                    }
                    elseif($s5 >=21 and $s5<=23){
                    
                    $greate= "3.50";
                    
                    }elseif($s5 >=24 and $s5<=30){
                    
                    $greate= "4.00";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }

        function   pointsubject5($s6,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d6==90){
                if($s6 >=0 and $s6<=32){
                    $greate= "0.00";
                }elseif($s6 >=33 and $s6<=44){
                
                  $greate= "2.00";
            
                }elseif($s6 >=45 and $s6<=53){
            
                   $greate= "2.50";
            
                }elseif($s6 >=54 and $s6<=62){
            
                      $greate= "3.00";
            
                }
                elseif($s6 >=63 and $s6<=71){
            
                    $greate= "3.50";
            
              }elseif($s6 >=72 and $s6<=90){
            
                $greate= "4.00";
            
            }
            
            
            
            
            }elseif($d6==60){
                if($s6 >=0 and $s6<=22){
                    $greate="0.00";
                }elseif($s6 >=23 and $s6<=29){
                
                  $greate= "2.00";
            
                }elseif($s6 >=30 and $s6<=35){
            
                   $greate= "2.50";
            
                }elseif($s6 >=36 and $s6<=41){
            
                      $greate= "3.00";
            
                }
                elseif($s6 >=42 and $s6<=47){
            
                    $greate= "3.50";
            
              }elseif($s6 >=48 and $s6<=60){
            
                $greate= "4.00";
            
            }
            
            
            
            }elseif($d6==30){
            
                if($s6 >=0 and $s6<=11){
                    $greate="0.00";
                    }elseif($s6 >=12 and $s6<=14){
                    $greate= "2.00";
                    
                    }elseif($s6 >=15 and $s6<=17){
                    
                    $greate= "2.50";
                    
                    }elseif($s6 >=18 and $s6<=20){
                    
                    $greate= "3.00";
                    
                    }
                    elseif($s6 >=21 and $s6<=23){
                    
                    $greate= "3.50";
                    
                    }elseif($s6 >=24 and $s6<=30){
                    
                    $greate= "4.00";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }
        function   pointsubject6($s7,$connect,$id){


            $query="select Mark_1,mark_2,mark_3,mark_4,mark_5,mark6,mark_7 from Computer where id='$id'";
            $con=$connect -> query($query);
            $data =$con -> fetch_assoc();
            $d1= $data['Mark_1'];
            $d2= $data['mark_2'];
            $d3= $data['mark_3'];
            $d4= $data['mark_4'];
            $d5= $data['mark_5'];
            $d6= $data['mark6'];
            $d7= $data['mark_7'];
            if($d7==90){
                if($s7 >=0 and $s7<=32){
                    $greate= "0.00";
                }elseif($s7 >=33 and $s7<=44){
                
                  $greate= "2.00";
            
                }elseif($s7 >=45 and $s7<=53){
            
                   $greate= "2.50";
            
                }elseif($s7 >=54 and $s7<=62){
            
                      $greate= "3.00";
            
                }
                elseif($s7 >=63 and $s7<=71){
            
                    $greate= "3.50";
            
              }elseif($s7 >=72 and $s7<=90){
            
                $greate= "4.00";
            
            }
            
            
            
            
            }elseif($d7==60){
                if($s7 >=0 and $s7<=22){
                    $greate="0.00";
                }elseif($s7 >=23 and $s7<=29){
                
                  $greate= "2.00";
            
                }elseif($s7 >=30 and $s7<=35){
            
                   $greate= "2.50";
            
                }elseif($s7 >=36 and $s7<=41){
            
                      $greate= "3.00";
            
                }
                elseif($s7 >=42 and $s7<=47){
            
                    $greate= "3.50";
            
              }elseif($s7 >=48 and $s7<=60){
            
                $greate= "4.00";
            
            }
            
            
            
            }elseif($d7==30){
            
                if($s7 >=0 and $s7<=11){
                    $greate="0.00";
                    }elseif($s7 >=12 and $s7<=14){
                    $greate= "2.00";
                    
                    }elseif($s7 >=15 and $s7<=17){
                    
                    $greate= "2.50";
                    
                    }elseif($s7 >=18 and $s7<=20){
                    
                    $greate= "3.00";
                    
                    }
                    elseif($s7 >=21 and $s7<=23){
                    
                    $greate= "3.50";
                    
                    }elseif($s7 >=24 and $s7<=30){
                    
                    $greate= "4.00";
                    
                    }
                    
            
            
            
            
            
            }
            
            return $greate;
            
            
            
        }
        function totalp($subjectpoint1,$subjectpoint2,$subjectpoint3,$subjectpoint4,$subjectpoint5,$subjectpoint6,$subjectpoint7){


             $total=$subjectpoint1+$subjectpoint2+$subjectpoint3+$subjectpoint4+$subjectpoint5+$subjectpoint6+$subjectpoint7;
            $p=$total/7;
            return $p;

}
function pass($subjectpoint1,$subjectpoint2,$subjectpoint3,$subjectpoint4,$subjectpoint5,$subjectpoint6,$subjectpoint7){
  
    if($subjectpoint1==0  or $subjectpoint2==0 or $subjectpoint3==0 or $subjectpoint4==0 or $subjectpoint5==0 or $subjectpoint6==0 or $subjectpoint7==0){
        $data= "Fall";

    }else{
        $data="Passed";
    }

return $data;

}



?>