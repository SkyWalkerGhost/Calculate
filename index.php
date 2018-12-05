<p>The answer is : </p>
<?php
    
    
    if(isset($_GET['submit'])) {

    $result   = $_GET['num1'];
    $result2  = $_GET['num2'];
    $operator = $_GET['operator'];


   
    switch($operator) {
       
        case 'None': 
                     echo 'Error';
        break;

        case 'Add': 
                    echo  $result + $result2;
        break;

        case 'Substract': 
                    echo  $result - $result2;
        break;

        case 'MultyPly':
                    echo  $result * $result2;
        break;

        case 'Divide':
                    echo  $result / $result2;
        break;
    }
}


?>

<br><br>
<form>
    
    <input type="text" name="num1" placeholder='first  number'> <br><br>
    <input type="text" name="num2" placeholder='second number'>

    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>MultyPly</option>
        <option>Divide</option>
    </select>
    <br><br>
    <button type='submit' name='submit'>Calculate</button>
</form>

