<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chnage value on html src</title>
</head>
<body>
    <button onclick="document.getElementById('myImage').src='pic_bulbon.gif'">
turn on the light
    </button>
    <img id='myImage' src="pic_bulboff.gif" style='width:100px' alt="">
    <button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">
        turn off the light

    </button>
    <p id='hidtext'>Script can hide here...</p>

    <button onclick="document.getElementById('hidtext').style.display='none'">click me!</button>
    
</body>
</html>