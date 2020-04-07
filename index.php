<!DOCTYPE HTML>
<html>
<head>
<title> Калькулятор </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
      <div class="header_text">
        Calculate everything as you want!
      </div>
  </header>
  <br>
<form id="calcGround">
  <input type="text" class="chInp" id="numb1"><br>
  <select class="chInp" id="oper">
  <option ></option>
  <option value = "plus">+</option>
  <option value = "-">-</option>
  <option value = "*">*</option>
  <option value = "/">/</option>
  </select><br>
  <input type="text" class="chInp" id="numb2"><br>
  <input type="button" class="chInp" id="butt" value="расчитать" onclick = "res()"><br>
</form><br>
<div id="result" >Введите значения</div>
<script src="scripts.js"></script>
</body>
</html>
