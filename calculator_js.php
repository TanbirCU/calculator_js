<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="calculator">
            <form action="">
                <div class="display" >
                    <input type="text" name="display">
                </div>
                <div>
                    <input type="text" value="AC" onclick="display.value =''" class="operator">
                    <input type="text" value="DC" onclick="display.value = display.value.toString().slice(0,-1)" class="operator">
                    <input type="text" value="." onclick="display.value +='.'" class="operator">
                    <input type="text" value="/" onclick="display.value +='/'" class="operator">
                </div>
                <div>
                    <input type="text" value="7" onclick="display.value +='7'">
                    <input type="text" value="8" onclick="display.value +='8'" >
                    <input type="text" value="9" onclick="display.value  +='9'" >
                    <input type="text" value="*" onclick="display.value +='*'">
                </div>
                <div>
                    <input type="text" value="4" onclick="display.value +='4'" >
                    <input type="text" value="5" onclick="display.value +='5'" >
                    <input type="text" value="6" onclick="display.value +='6'" >
                    <input type="text" value="-" onclick="display.value +='-'" >
                </div>
                <div>
                    <input type="text" value="1" onclick="display.value +='1'" >
                    <input type="text" value="2" onclick="display.value +='2'" >
                    <input type="text" value="3" onclick="display.value +='3'" >
                    <input type="text" value="+" onclick="display.value +='+'" >
                </div>
                <div>
                    <input type="text" value="00" onclick="display.value +='00'" >
                    <input type="text" value="0" onclick="display.value +='0'" >
                    <input type="text" value="=" class="equal"  onclick="display.value=eval(display.value)" >
                    
                </div>
            </form>
        </div>
    </div>






    
</body>
</html>