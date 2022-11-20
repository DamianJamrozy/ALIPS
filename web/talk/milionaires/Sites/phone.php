<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8"/> 
<link rel="stylesheet" href="../style/style2.css" type="text/css" />
<title>Telefon Do Przyjaciela</title>
<script>
var type1 = sessionStorage.getItem("t1");
var type2 = sessionStorage.getItem("t2");
var type3 = sessionStorage.getItem("t3");
var type4 = sessionStorage.getItem("t4");
x1 = parseInt(type1, 10);
x2 = parseInt(type2, 10);
x3 = parseInt(type3, 10);
x4 = parseInt(type4, 10);
var i=10,j=10,x,y=500;

//window.onload = 
function ringing_1 () {
	var element = document.getElementById('ring');
	element.setAttribute('class', 'ringing1');
}

function ringing_2 () {
	var element = document.getElementById('ring');
	element.setAttribute('class', 'ringing2');
}

function ringing_end () {
	//Losuje liczbę od 1 do 3 dla wyboru obrazka
	q=Math.floor(Math.random()*3)+1;
	
	//Jeżeli różnica jest znacząca
	if(x1>x2+10 && x1>x3+10 && x1>x4+10 || x2>x1+10 && x2>x3+10 && x2>x4+10 || x3>x2+10 && x3>x1+10 && x3>x4+10 || x4>x2+10 && x4>x3+10 && x4>x1+10){
		if(x1>x2+10 && x1>x3+10 && x1>x4+10){
			document.getElementById("phone").innerHTML='Według mnie jest to A.<br><img src="../img/yes'+q+'.png" width="50%">';
		}
		else if(x2>x1+10 && x2>x3+10 && x2>x4+10){
			document.getElementById("phone").innerHTML='Ja bym zaznaczył B.<br><img src="../img/yes'+q+'.png" width="50%">';
		}
		else if(x3>x2+10 && x3>x1+10 && x3>x4+10){
			document.getElementById("phone").innerHTML='Na sto procent jest to C.<br><img src="../img/yes'+q+'.png" width="50%">';
		}
		else if(x4>x2+10 && x4>x3+10 && x4>x1+10){
			document.getElementById("phone").innerHTML='Zaznacz D! <br><img src="../img/yes'+q+'.png" width="50%">';
		}
	}
	
	//Jeżeli różnica jest mała
	else{
		if(x1>x2 && x1>x3 && x1>x4){
			document.getElementById("phone").innerHTML='Hmm... Wydaje mi się, że może to być A.<br><img src="../img/maybe'+q+'.png" width="50%">';
		}
		else if(x2>x1 && x2>x3 && x2>x4){
			document.getElementById("phone").innerHTML='Możliwe, że jest to odpowiedź B.<br><img src="../img/maybe'+q+'.png" width="50%">';
		}
		else if(x3>x2 && x3>x1 && x3>x4){
			document.getElementById("phone").innerHTML='Prawdopodobnie odpowiedź C.<br><img src="../img/maybe'+q+'.png" width="50%">';
		}
		else if(x4>x2 && x4>x3 && x4>x1){
			document.getElementById("phone").innerHTML='Raczej jest to odpowiedź D.<br><img src="../img/maybe'+q+'.png" width="50%">';
		}
	
		//Jeżeli wybór nie jest jednoznaczny
		else{
			p=Math.floor(Math.random()*4)+1;
			if(p===1){
				document.getElementById("phone").innerHTML='Powiem szczerze... Nie mam pojęcia.<br>Może A?<br><img src="../img/no'+q+'.png" width="50%">';
			}
			if(p===2){
				document.getElementById("phone").innerHTML='Ciężki wybór...<br>Może B?<br><img src="../img/no'+q+'.png" width="50%">';
			}
			if(p===3){
				document.getElementById("phone").innerHTML='Nie wiem.<br>Może C?<br><img src="../img/no'+q+'.png" width="50%">';
			}
			if(p===4){
				document.getElementById("phone").innerHTML='Nie znam odpowiedzi.<br>Może D?<br><img src="../img/no'+q+'.png" width="50%">';
			}
		}
	}
}

setTimeout(ringing_1, 1000);
setTimeout(ringing_2, 1500);
setTimeout(ringing_1, 3500);
setTimeout(ringing_2, 4000);
setTimeout(ringing_1, 5000);
setTimeout(ringing_2, 5500);
setTimeout(ringing_end, 6000);

</script>
</head>
<body>
<div id="phone" style="height: 300px; width: 100%;">
	<center><img src="../img/phone_ring.png" id="ring"></center>
</div>
<div>
	<audio autoplay="autoplay">   
   		<source src="../Sound/Phone.mp3">  
	</audio> 
	</div>
</body>
</html>