<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/favicon.png">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pixel Artist</title>
</head>
<body>
<h1><span style="color: #4a90e2">L</span><span style="color: #93e28e">a</span><span style="color: #e270cf">b</span>
    <span style="color: #e2d45e">:</span> <span style="color: #5be2cc">P</span><span style="color: #ac84e2">i</span>
    <span style="color: #e233a3">x</span><span style="color: #2ae2dc">e</span><span style="color: #e25258">l</span>
    <span style="color: #6ae297">A</span><span style="color: #e2d595">r</span><span style="color: #7ee27d">t</span>
    <span style="color: #bf92e2">M</span><span style="color: #3cbfe2">a</span><span style="color: #e24f5a">k</span>
    <span style="color: #dde29d">e</span><span style="color: #8fe278">r</span></h1>

<h2 class="inline">Choose Grid Size</h2>
<form id="sizePicker">
    <p >Grid Height:</p>
    <input type="number" id="height" name="height" min="1" value="20">
    <p>Grid Width:</p>
    <input type="number" id="width" name="width" min="1" value="20"> <br>
    <input type="submit">
</form>

<h2>Pick A Color</h2>
<input type="color" value="#bf92e2" id="colorPicker">

<h2>Design Canvas</h2>
<table id="pixel_canvas"></table>

<script src="js/script.js"></script>
</body>
</html>