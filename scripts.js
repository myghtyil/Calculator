function res()
{
	numb1 = document.getElementById('numb1').value;
	numb2 = document.getElementById('numb2').value;
	oper = document.getElementById('oper').value;
	var request= new XMLHttpRequest();
	request.onreadystatechange = function()
	{
		if(request.readyState == 4)
		{
			write_res(request.responseText);
		}
	}
	request.open('get', 'http://localhost/10_1/serv.php?a='+numb1+'&b='+numb2+'&oper='+oper);
	request.send();
}

function write_res(response)
{
	if(response == 'littleData')
	{
		document.getElementById('result').innerHTML = 'Не все поля заполнены';
	}
	else
	{
		document.getElementById('result').innerHTML = response;
	}

}
