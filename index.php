 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calc app</title>
    <link rel="stylesheet" href="./style.css">
 </head>
 <body>
    <?php
         if(isset($_POST["num"])){
            $num=$_POST["input"].$_POST["num"];

         }else{
            $num="";
         }
         function calc($calculate){
            $result =eval("return $calculate;");
            $num = $result;
            return $num;
         }
         function BackSpace($backspace){
            $num_backspace_index =strlen($backspace)-1;
            $num_backspace=substr($backspace,0,$num_backspace_index);
            return $num_backspace;
         }
         if(isset($_POST["Clear"])){
            $num ="";
         }
    ?>
    <div class="container">
        <form action="#" method="post" class="form">
         <fieldset width="100%" height="100%">
             <div>
                <input type="text" name="input" id="input" placeholder="To Enter number from under keyboard" class="Text_Box" value="<?php
                if(isset($_POST["num"])){
                    echo @$num;
                } elseif(isset($_POST["equal"])){
                    $result = $_POST["input"].$num;
                    $calculate_calculate =calc($result);
                    echo @$calculate_calculate;
                }elseif(isset($_POST["delete"])){
                    $result_backspace =$_POST["input"].$num;
                    $num_backspace_calculator = BackSpace($result_backspace);
                    echo $num_backspace_calculator;
                }
                
                ?>">
                
             </div>
             <div class="Table_Div">
              <table class="Table">
                <tr class="trr">
                   <td class="tdd" colspan="2"><div class="inner_td"><input type="submit" name="num" id="num" value=""class="input_num" ></div></td>
                   <td class="tdd"><div class="inner_td"><input type="submit" name="delete" id="num" value="delete"class="input_num" ></div></td>
                   <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="."class="input_num light_yellow" ></div></td>



                </tr>
                <tr class="trr">
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="7"class="input_num" ></div></td>
                <td class="tdd" ><div class="inner_td"><input type="submit" name="num" id="num" value="8"class="input_num" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="9"class="input_num" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="+"class="input_num light_yellow" ></div></td>
              </tr>
              <tr class="trr">
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="4"class="input_num" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="5"class="input_num" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="6"class="input_num" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="-"class="input_num light_yellow" ></div></td>
              </tr>
              <tr class="trr">
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="1"class="input_num" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="2"class="input_num" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="3"class="input_num" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="*"class="input_num light_yellow" ></div></td>
              </tr>
              <tr class="trr">
                <td class="tdd"><div class="inner_td"><input type="submit" name="Clear" id="Clear" value="C"class="input_num color_h" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="" id="num" value="0"class="input_num" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="equal" id="equal" value="="class="input_num green_hi" ></div></td>
                <td class="tdd"><div class="inner_td"><input type="submit" name="num" id="num" value="/"class="input_num light_yellow" ></div></td>
              </tr>
               
              </table>
             </div>
         </fieldset>
</form>
    </div>
 </body>
 </html>

