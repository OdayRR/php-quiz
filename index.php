<?php

$question="is PHP is programing language ?";

$options=array("yes"=>"Yes","no"=>"No");

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
    <body>
       <form action ="<?php echo $_SERVER["PHP"];?>"method="POST"> 
        <?php
        echo get_quiz_html();
        ?>
       </form>      
    </body>
</html>
