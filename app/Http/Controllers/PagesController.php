<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $value = isset($_POST['item']) ? $_POST['item'] : 0; //to be displayed
        if(isset($_POST['incqty'])){
        $value += 1;
}

        if(isset($_POST['decqty'])){
        $value -= 1;                                            
}
    
    }
}

?>
<!DOCTYPE html> 
<html> 
<body>
<form method='post' action='<?= $_SERVER['PHP_SELF']; ?>'>
   
   <td>
       <button name='incqty'>+</button>
       <input type='text' size='1' name='item' value='<?= $value; ?>'/>
       <button name='decqty'>-</button>
   </td>
</form>
</body>
</html>
