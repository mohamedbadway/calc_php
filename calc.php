<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calc web</title>
    <style type="text/css">
        body{
            background-color: #C2FFC7;
            color: #91AC8F;
        }
form{
   text-align: center;
   padding-top: 180px;

}
input{
    /* width: 180px;
    height: 24px;
    padding:5px; */
    width:  40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit]{
    color: #526E48;
    border-radius:5px;
    background-color: #9EDF9C;
    border: none;
}
input[type="text"]{
    background-color: #9EDF9C;
    color: #fff;
    border-radius:5px;
    border: none;
}
select {
width: 200px;
background-color: #9EDF9C;
color: #333;
border: 1px solid #ccc;
padding: 5px;
font-size: 16px;
}
option {
background-color: #fff;
color: #333;
}
    </style>
</head>
<body>
   <form action="#" method="post">
    <input type="text" name="num1" placeholder="enter number"><br><br>
    <input type="text" name="num2" placeholder="enter number"><br><br>
    <input type="submit" name="submit" value="SUBMIT"><br><br>
    <select name="operator">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="multi">*</option>
        <option value="div">/</option>
    </select>
<p>
    <?php
$a=$_POST['num1'];
$b=$_POST['num2'];
if(isset($_POST['submit'])){
    switch ($_POST['operator']) {
        case 'add':
            $z= $a + $b;
            echo "additon of tow number $z";
            break;
            case 'sub':
                $z= $a - $b;
                echo "substraction of tow number $z";
                break;
                case 'multi':
                    $z= $a * $b;
                    echo "multiplic of tow number $z";
                    break;
                    case 'div':
                        $z= $a / $b;
                        echo "division of tow number $z";
                        break;

        default:
            echo "error";
            break;
    }
}

    ?>
</p>
   </form> 
</body>
</html>