<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <h1>Laravel Calculator</h1>
    <body>
    <!--
        <form method="POST" action="/calculate">
        {{ csrf_field() }}

            <div>
                <select name="operator" required>
                    <option value="selected">--select--<option>
                    <option value="plus">+<option>
                    <option value="minus">-<option>
                    <option value="multiply">*<option>
                    <option value="divide">/<option>
                </select>
            </div>
            <br>
            <div>
                <input type="number" name="first" placeholder="Enter first num" required>
            </div>
            <br>
            <div>
                <input type="number" name="second" placeholder="Enter second num" required>
            </div>
            <br>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
        <br>
        <div>
            @if(session('info'))
            <div>
                {{ session('info') }}
            </div>
            @endif    
        </div>
        <br><br><br><br><br>
        -->
        <div>
            <form method='POST' action='/calculate'>
            {{ csrf_field() }}
            <td>
                <button name='incqty'>+</button>
                <input type='text' size='1' name='item'>
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
        
    </div>
    </body>
</html>


