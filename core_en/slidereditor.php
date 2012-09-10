  <script type="text/javascript" src="./jquery.js"></script>
  <form action='' method="get"><input type="hidden" name="templateurl" value="<?php echo $_GET['templateurl']; ?>/" /></form>
  <div id="slider">
  <p><strong>Articles Slider</strong></p>
  <table id="tabmenu" style="display:none;">
  <tr>
  <td>Title of slide:</td>
  <td>Content of slide:</td>
  <td>Url article,image and size:</td>
  <td>Preview:</td>
  </tr>
  </table>
  <table id="slidenum">
  </table>
  <button OnClick="var n_slide=prompt('What number should I put to this slide? If this is the first slide put 1.'); if(isNaN(n_slide) == false && n_slide != null && n_slide != ''){ n=n_slide;newslide(); if(document.getElementById('tabmenu').style.display=='none') { document.getElementById('tabmenu').style.display=''; } }else { alert('You must insert a number!'); }">New Slide</button>
  <script type="text/javascript">
   var n=0;
   var s=false;
   function newslide()
   {
	var table=document.getElementById("slidenum");
	if(document.getElementById('title'+n) == null)
	{
		var tr=table.insertRow(table.rows.length);
		tr.id="slider"+n;
		var td0=tr.insertCell(0);
		var td1=tr.insertCell(1);
		var td2=tr.insertCell(2);
		var td3=tr.insertCell(3);
		td0.innerHTML='<textarea cols="15" rows="10" id="title'+n+'" OnKeyUp="preview(this, 0);"></textarea>';
		td1.innerHTML='<textarea id="content'+n+'" cols="20" rows="10" OnKeyUp="preview(this, 0); if(event.keyCode == 13) { this.value+=\'<br/>\'; }"></textarea>';
		td2.innerHTML='url_post:<input type="text" id="post'+n+'" OnKeyUp="preview(this, 1);"><br/>';
		td2.innerHTML+=' url_img:<input type="text" id="img'+n+'" OnKeyUp="preview(this, 2);"><br/>';
		td2.innerHTML+=' width: <input type="text" id="width'+n+'" value="150" style="width:50px;" OnKeyUp="preview(this, 3);">';
		td2.innerHTML+=' height:<input type="text" id="height'+n+'" value="100%" style="width:50px;" OnKeyUp="preview(this, 4);">';
		td3.innerHTML='<div>';
		td3.innerHTML+='<a href="" id="previewpost'+n+'"><h4 id="previewtitle'+n+'"></h4></a>';
		td3.innerHTML+='<span id="previewcontent'+n+'"></span><br/><br/>';
		td3.innerHTML+='<img id="previewimg'+n+'" src="" OnClick="javascript:location.href=document.getElementById(\'post'+n+'\').value;"></img>';
		td3.innerHTML+='</div>';
		var tr=table.insertRow(table.rows.length);
		var td0=tr.insertCell(0);
		td0.innerHTML='<br/><button OnClick=\'$("#slider'+n+'").slideToggle(); if (s==false) { this.innerHTML="Slide '+n+' &darr;";s=true; } else { this.innerHTML="Slide '+n+' &uarr;";s=false; } \'>Slide '+n+' &uarr;</button> <button OnClick="if(confirm(\'Are you sure to add this slide?\') == true) { addslide('+n+'); }">Confirm slide</button><br/>';
	}
	else
	{
		alert('This slide already exists!');
	}
  }
  
  function addslide(slide)
  {
	if(document.getElementById("part2").value.indexOf('<div id="'+slide+'">') != -1)
	{
		if(confirm('This slide already exists, overwrite it?') == true)
		{
			var content=document.getElementById("part2").value;
			document.getElementById("part2").value=document.getElementById("part2").value.replace(content.substring(content.indexOf('<div id="'+slide+'">'), (content.indexOf('</div>', content.indexOf('<div id="'+slide+'">')))+6), '<div id="'+slide+'">\n<a href="'+document.getElementById('post'+slide).value+'"><h4>'+document.getElementById('title'+slide).value+'</h4></a>\n<span>'+document.getElementById('content'+slide).value+'</span><br/><br/>\n<a href="'+document.getElementById('post'+slide).value+'"><img width="'+document.getElementById('width'+slide).value+'" height="'+document.getElementById('height'+slide).value+'" src="'+document.getElementById('img'+slide).value+'" /></a>\n</div>');
			document.getElementById('part4').innerHTML=document.getElementById('part1').value+"\n"+document.getElementById('part2').value+"\n"+document.getElementById('part3').value;
		}
	}
	else
	{
		document.getElementById('part2').value+='\n\n<div id="'+slide+'">\n<a href="'+document.getElementById('post'+slide).value+'"><h4>'+document.getElementById('title'+slide).value+'</h4></a>\n<span>'+document.getElementById('content'+slide).value+'</span><br/><br/>\n<a href="'+document.getElementById('post'+slide).value+'"><img width="'+document.getElementById('width'+slide).value+'" height="'+document.getElementById('height'+slide).value+'" src="'+document.getElementById('img'+slide).value+'" /></a>\n</div>';
		document.getElementById('part4').innerHTML=document.getElementById('part1').value+"\n"+document.getElementById('part2').value+"\n"+document.getElementById('part3').value;
	}
  }
  </script>
  <p><strong>Result code</strong></p>
  <p><textarea id="part1" cols="100%" rows="3" style="display:none;">
<center>
<hr>
<div style="height:250px;"></textarea>
  <textarea id="part2" cols="100%" rows="15" style="display: none;"></textarea>
  <textarea id="part3" cols="100%" rows="4" style="display: none;"></div>
</center>
  </textarea>
  <textarea id="part4" readonly="readonly" cols="100%" rows="15"></textarea></p>
    <script type="text/javascript">
    document.getElementById("part3").innerHTML+='<'+'script type="text/javascript" src="'+document.getElementsByName("templateurl")[0].value+'slider.js"></'+'script>';
    function preview(object, n)
    {
	if(n==0)
	{
		document.getElementById("preview"+object.id).innerHTML=object.value;
	}
	else if(n==1)
	{
		document.getElementById("preview"+object.id).href=object.value;
	}
	else if(n==2)
	{
		document.getElementById("preview"+object.id).src=object.value;
	}
	else if(n==3)
	{
		var img=object.id.replace("width", "img");
		document.getElementById("preview"+img).style.width=object.value;
	}
	else if(n==4)
	{
		var img=object.id.replace("height", "img");
		document.getElementById("preview"+img).style.height=object.value;
	}
    }
  </script>
  </div>
<p>Copy this code and add it to sidebar (for example in the welcome message).</p>