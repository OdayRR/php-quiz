<?php

$question="is PHP is programing language ?";

$options=array("Yes"=>"yes","No"=>"no");


$correct_answer="yes";

$selected_answer="";


if(isset($_POST["answer"]))
    
{
 $selected_answer=$_POST["answer"];   
    
}


function get_quiz_html() 

{
    
    global $question;
    global $options;
    global $selected_answer;
    global $correct_answer;

    $html="";
    $checked="";

    $html.='<h3>'.$question.'</h3>';
    $html.="<br/>";
    
    foreach ($options as $key => $value)
    {
     
       
        if($selected_answer==$value)
        {
           if($selected_answer == $correct_answer)
           {
           $checked="checked"; 
           } 
        }
      $html.='<span>'.$key.'<input name="answer" '.$checked.'type="radio" value="'.$value.'"onchange=this.form.submit();"/></span>';  
        
    }


return $html;    
}
?>

<DOCTYPE html>
<html>
    <head> 
        <title>Quiz Demo</title>
    </head>
    <body style="background-color:powderblue;">
        <div align="center" > <form>
           First name:<br>
             <input type="text" name="firstname"><br>
               Last name:<br>
               <input type="text" name="lastname">
          </form> 
            <form>
         <input type="radio" name="gender" value="male" checked> Male<br>
         <input type="radio" name="gender" value="female"> Female<br>
         <input type="radio" name="gender" value="other"> Other
             </form>
       <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">"
           </div>
        <div align="center" >
        <?php
        echo get_quiz_html();
        ?>
            </div>
       </form>      
    </body>
</html>



