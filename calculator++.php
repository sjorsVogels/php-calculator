<?php
$getal1=0;
$getal2=0;
$operator="";
$uitkomst=0;
echo "";
//controleren of het formulier is ingevuld//
if(isset($_POST['antwoord']))
{
//verstuurd//
$getal1=$_POST['getal1'];
$getal2=$_POST['getal2'];
$operator=$_POST['operator'];
}//plus//
if($operator=="+")
{
    $uitkomst=$getal1+$getal2;
}//min//
if($operator=="-")
{
    $uitkomst=$getal1-$getal2;
}//keer//
if($operator=="*")
{
    $uitkomst=$getal1*$getal2;
}//delen//
if($operator=="/")
{ if($getal2==0)//delen waarschuwing//
    {
      echo"delen door 0 is niet mogelijk";  
    }
    else{
    $uitkomst=$getal1/$getal2;
        }
}//wortel trekken//
if($operator=="sqrt")
{
    $uitkomst=sqrt($getal1);
}//machts verheffen//
if($operator=="pow")
{
    $uitkomst=pow($getal1,$getal2);
}//mijl naar kilometer//
if($operator=="mile-to-km")
{
    $uitkomst=$getal1*1.609344;
}//kilometer naar mile//
if($operator=="km-to-mile")
{
    $uitkomst=$getal1/1.609344;
}
?><!--begin van hyml-->
<!DOCTYPE html>
<head>
    <!--de styling van enkele elementen-->
    <style>
        input {
            background-color:blue;
            border:none;
            height: 50px;
            width:175px;
            text-align:center;
            margin-left:10px;
        }
       
    </style>
<meta charset="UTF8";>
<meta name= "discription">
<link rel="stylesheet" type="text/css" href="calculator++style.css">
<div class=title>
<title>calculator++</title>
    
<h1>calculator van sjors </h1>
    </div>
</head>
<body>
    <div class="top">
    <!-- start van het formulier (het formulier wordt gestyled door middel van een list-->  
<form action="calculator++.php" method="post" >
<div class="form_div">
 

  
<ul> 
    <div class=resultaat>
        <?php echo $uitkomst?>
    </div>  
    
<li><label>getal 1 </label>  
<input type="number" name="getal1" required>
</li>
<li><label>operator</label>
<select name = "operator" id="operator-list">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
  <option value="sqrt">sqrt</option>
  <option value="pow">pow</option>
  <option value="mile-to-km">mile to km</option>
  <option value="km-to-mile">km-to-mile</option>
</select>
</li>
<li id="second-input"><label>getal 2 </label>
<input type="number" name="getal2" >
</li>
<li>
<input type="reset">
</li>
<li>
<input type="submit" name="antwoord" class = submit>
</div>
<div class="credit">
<h4> © sjors vogels</h4>
</body>
</html>
<!--waarom werkt dit script niet-->
<script>
let operatorlist = document.getElementById("operator-list");
let secondInput = document.getElementById("second-input");
operatorlist.oninput = function (){
    let selectedOperator = this.value;
    if (selectedOperator == "sqrt"){
        secondInput.style.display = "none";
    }else{
        secondInput.style.display = "Block"; 
    }

}
}
</script>
