<?php
function get_age($birth_year,$birth_month,$birth_date)

{

$now_age = 1; //实际年龄，以出生时为1岁计

$full_age = 0; //周岁，该变量放着，根据具体情况可以随时修改

$now_year = date('Y',time());

$now_date_num = date('z',time()); //该年份中的第几天

$birth_date_num = date('z',mktime(0,0,0,$birth_month,$birth_date,$birth_year));

$difference = $now_date_num - $birth_date_num;

if ($difference > 0)

{

$full_age = $now_year - $birth_year;

}

else

{

$full_age = $now_year - $birth_year - 1;

}

$now_age = $full_age + 1;

return $now_age;

}

function next_age($age){
    if (date('j', time()) >= date('j', strtotime($birthday))){  
	    $age=$age+1;
	    return $age; }  
    else{return $age;} 
} 
?>
