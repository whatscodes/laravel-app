
<!DOCTYPE html> 
<html> 
<body>      

<form method='post' action='/calculate'>
   
   <td>
       <button name='incqty'>+</button>
       
       <button name='decqty'>-</button>
   </td>
</form>
<div>
    @if(session('info'))
    <div>
        {{ session('info') }}
    </div>
    @endif    
</div>

</body>  
</html> 