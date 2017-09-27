function prevSliderFrame(sid)
{
	var spans = document.querySelectorAll('menu.advantages span:not([class=except])');
	for(i in spans) if(spans[i].className=='active') return changeSliderFrame(sid,(i>0?i:spans.length));
}

function nextSliderFrame(sid)
{
	var spans = document.querySelectorAll('menu.advantages span:not([class=except])');
	for(i in spans) if(spans[i].className=='active') return changeSliderFrame(sid,(i<spans.length-1?i*1+2:1));
}

function changeSliderFrame(sid,num)
{
	fsChange('slider1',num);
	return;
}

function fsChange(sid,num)
{
	var elem = document.getElementById(sid);
	if(num == undefined)
	{
		if(elem.fsTimer != undefined) { clearInterval(elem.fsTimer); delete elem.fsTimer; }
		else elem.fsTimer = setInterval(function(){ fsChange(sid,'next') },elem.getAttribute('data-delay'));
		return;
	}
	var frames = document.querySelectorAll(elem.getAttribute('data-frames'));
	for(i in frames) if(frames[i].innerHTML) if(frames[i].style.opacity == '1') var current = i*1+1;
	if(num == 'prev') num = current == 1 ? frames.length : current-1;
	else if(num == 'next') num = current == frames.length ? 1 : current+1;
	if(num!=current) for(i in frames) if(frames[i].innerHTML) frames[i].style.zIndex = i*1+1 == num ? 2 : (i*1+1 == current ? 1 : 0);
	frames[current*1-1].style.opacity = '0';
	frames[num*1-1].style.opacity = '1';
	/////
	for(i in document.querySelectorAll('menu.advantages span:not([class=except])')) document.querySelectorAll('menu.advantages span:not([class=except])')[i].className = i*1+1 == num ? 'active' : '';
	/////
	return;
}

function defineHotKey(key,code)
{
	if(typeof(key) == 'string') { var plus = key.indexOf('+'); var key0 = plus > 0 ? key.substr(0,plus).toLowerCase() : undefined; if(!/^(ctrl|alt|shift)$/.test(key0)) return false; var key1 = key.substr(plus+1)*1; }
	else key1 = key;
	function react(e) { var e = e || window.event; var keyCode = e.which || e.keyCode; if((eval('e.'+key0+'Key')?key0:!key0) && keyCode == key1) { if(e.preventDefault) e.preventDefault(); e.returnValue = false; eval(code); } }
	if(document.addEventListener) document.addEventListener('keydown',react,false);	else if(document.attachEvent) document.attachEvent('onkeydown',react);
	return;
}

function getCookie(name) 
{
	var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
	return matches ? decodeURIComponent(matches[1]) : undefined;
}
 
function setCookie(name,value,props)
{
	props = props || {};
	var exp = props.expires;
	if(typeof exp == "number" && exp) { var d = new Date(); d.setTime(d.getTime() + exp*1000); exp = props.expires = d; }
	if(exp && exp.toUTCString) props.expires = exp.toUTCString();
	value = encodeURIComponent(value);
	var updatedCookie = name + "=" + value;
	for(var propName in props) { updatedCookie += "; " + propName; var propValue = props[propName]; if(propValue !== true) updatedCookie += "=" + propValue; }
	document.cookie = updatedCookie;
	return; 
}

function deleteCookie(name) { setCookie(name, null, { expires: -1 }); return; }

function addCalendar(input)
{
	var value = input.value;
	if(found = value.match(/^(0{0,1}[1-9]|[1-2][0-9]|3[0-1])\.(0{0,1}[1-9]|1[0-2])\.(19[7-9][0-9]|2[0-9]{3})( (0{0,1}[0-9]|1[0-9]|2[0-3]):(0{0,1}[0-9]|[1-5][0-9])|)$/)) { var year = found[3]*1; var month = found[2]*1; var day = found[1]*1; var hour = found[5]*1; var minute = found[6]*1; }
	else { var now = new Date(); var year = now.getFullYear(); var month = now.getMonth()*1+1; var day = now.getDate()*1; var hour = now.getHours(); var minute = now.getMinutes()*1; }
	var name = input.getAttribute('name');
	var div = document.createElement('div');
	// document.body.appendChild(div);
	
	input.parentNode.style.position = 'relative';
	input.parentNode.appendChild(div);
	
	div.style.display = 'none';
	div.id = 'calendar_'+name;
	div.className = 'calendar';
	var html = '<div class=arrow></div><section><label>◄</label><select>';
	var months = ['','Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'];
	for(i in months) if(months[i]) html += '<option '+(i==month?'selected ':'')+'value='+i+'>'+months[i]+'</option>';
	html += '</select><select>';
	for(i=1970;i<=new Date().getFullYear()*1+20;i++) html += '<option'+(i==year?' selected':'')+'>'+i+'</option>';
	html += '</select><label>►</label></section><section><div><span>Пн</span><span>Вт</span><span>Ср</span><span>Чт</span><span>Пт</span><span>Сб</span><span>Вс</span></div>';
	for(i=0;i<6;i++) html += '<div><a></a><a></a><a></a><a></a><a></a><a></a><a></a></div>';
	html += '</section>';
	div.innerHTML = html;
	changeCalendarMonth(name,year,month,day);
	input.onfocus = function() { if(div.style.display == 'none') { div.style.left = input.offsetLeft + 'px'; div.style.top = input.offsetTop + input.offsetHeight + 4 + 'px'; div.style.display = 'block'; } return; }
	input.onblur = function() { if(div.style.display == 'block' && div.getAttribute('data-mouseover') != 'yes') div.style.display = 'none'; return; }
	div.onmouseover = function() { div.setAttribute('data-mouseover','yes'); }
	div.onmouseout = function() { div.setAttribute('data-mouseover','no'); }
	div.querySelector('select:first-of-type').onchange = div.querySelector('select:last-of-type').onchange = function()
	{
		changeCalendarMonth(name,div.querySelector('select:last-of-type').value,div.querySelector('select:first-of-type').value);
		input.focus();
		return;
	}
	div.querySelector('select:first-of-type').onblur = div.querySelector('select:last-of-type').onblur = function() { if(div.getAttribute('data-mouseover') != 'yes') div.style.display = 'none'; return; }
	div.onclick = function(e) { e = e || window.event; if(e.target.tagName != 'LABEL' && e.target.tagName != 'SELECT' && e.target.tagName != 'A') input.focus(); return; }
	for(i in div.querySelectorAll('a'))
	{
		var a = div.querySelectorAll('a')[i];
		a.onclick = function()
		{
			var newValue = this.getAttribute('data-dmy');
			if(!isNaN(hour)) newValue += ' '+hour+':'+(minute*1>9?minute:'0'+minute);
			input.value = newValue;
			if(div.querySelector('a[class*=active]')) div.querySelector('a[class*=active]').className = div.querySelector('a[class*=active]').className.split('active').join('');
			this.className += 'active ';
			div.style.display = 'none';
			return;
		}
	}
}

function changeCalendarMonth(name,year,month)
{
	var div = document.getElementById('calendar_'+name);
	var input = document.querySelector('input[name='+name+']');
	var holidays = {'1.1':'Новый год','2.1':'Новогодние каникулы','3.1':'Новогодние каникулы','4.1':'Новогодние каникулы','5.1':'Новогодние каникулы','7.1':'Православное Рождество','23.2':'День защитника Отечества','8.3':'Международный женский день','1.5':'Праздник весны и труда','9.5':'День Победы','12.6':'День России','4.11':'День народного единства'};
	var firstDay = new Date(year,month-1,1);
	var prevDaysCount = firstDay.getDay()==0 ? 6 : (firstDay.getDay()==1 ? 7 : firstDay.getDay()-1);
	for(i=1,j=0;i<=42;i++)
	{
		var a = div.querySelectorAll('a')[i-1];
		if(i>prevDaysCount) j++;
		var oneday = i>prevDaysCount ? new Date(year,month-1,j) : new Date(new Date(year,month-1,1).getTime()-(86400000*(prevDaysCount-i+1)));
		a.className = a.title = '';
		if(oneday.getMonth()+1 != month) a.className += 'other ';
		if(oneday.toDateString()==new Date().toDateString()) { a.className += 'today '; a.title = 'Сегодня'; }
		for(one in holidays) if(oneday.getDate()+'.'+(oneday.getMonth()*1+1) == one) { a.className += 'holiday '; a.title = holidays[one]; }
		a.innerHTML = oneday.getDate();
		var temp1 = oneday.getDate(); temp1 = temp1*1>9?temp1:'0'+temp1; var temp2 = oneday.getMonth()+1; temp2 = temp2*1>9?temp2:'0'+temp2;
		a.setAttribute('data-dmy',temp1+'.'+temp2+'.'+oneday.getFullYear());
		if(input.value.substring(0,10) == temp1+'.'+temp2+'.'+oneday.getFullYear()) a.className += 'active ';
	}
	var prevMonth = month==1 ? 12 : month*1-1; var prevYear = month==1 ? year*1-1 : year; var nextMonth = month==12 ? 1 : month*1+1; var nextYear = month==12 ? year*1+1 : year;
	div.querySelector('label:first-of-type').onclick = function() { div.querySelector('select:first-of-type').value = prevMonth; div.querySelector('select:last-of-type').value = prevYear; changeCalendarMonth(name,prevYear,prevMonth); input.focus(); }
	div.querySelector('label:last-of-type').onclick = function() { div.querySelector('select:first-of-type').value = nextMonth; div.querySelector('select:last-of-type').value = nextYear; changeCalendarMonth(name,nextYear,nextMonth); input.focus(); }
	return;
}

function showImage(url,text)
{
  if(!arguments[0])
  {
    clearTimeout(window.timerImageError);
    var dlkpFog = document.getElementById('dlkpFog');
    var dlkpImage = document.getElementById('dlkpImage');
    var img = dlkpImage.getElementsByTagName('img')[0];
    var winWidth = window.innerWidth ? window.innerWidth : (document.documentElement.clientWidth ? document.documentElement.clientWidth : document.body.offsetWidth);
    var winHeight = window.innerHeight ? window.innerHeight : (document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.offsetHeight);
    var srcWidth = img.width; var srcHeight = img.height; var imgWidth = img.width; var imgHeight = img.height; var zoom = 100;
    if(imgWidth+50 > winWidth || imgHeight+50 > winHeight) { if(imgWidth/imgHeight > winWidth/winHeight) { var tempWidth = winWidth-50; var tempHeight = tempWidth*imgHeight/imgWidth; zoom = Math.round(tempWidth*50/imgWidth); imgWidth = tempWidth; imgHeight = tempHeight; } else { var tempHeight = winHeight-50; var tempWidth = tempHeight*imgWidth/imgHeight; zoom = Math.round(tempWidth*50/imgWidth); imgWidth = tempWidth; imgHeight = tempHeight; } }
    img.width = imgWidth; img.height = imgHeight;
    dlkpImage.style.width = imgWidth + 'px'; dlkpImage.style.height = imgHeight + 'px';
    dlkpImage.style.marginTop = '-' + imgHeight/2 + 'px';
    dlkpImage.style.marginLeft = '-' + imgWidth/2 + 'px';
    dlkpImage.style.visibility = 'visible';
    var size = (img.fileSize > 0 ? (img.fileSize >= 1048576 ? Math.round(img.fileSize/1048576*10)/10 + ' РњР‘, ' : Math.round(img.fileSize/1024*10)/10 + ' РљР‘, ') : '');
    document.getElementById('dlkpTitle').innerHTML = document.title; document.title = img.src.replace(/^.*[\/\\]/g,'')+' ('+(size?size.split('.').join(','):'')+srcWidth+String.fromCharCode(215)+srcHeight+(zoom<100?', РјР°СЃС€С‚Р°Р± '+zoom+'%':'')+')';
    dlkpFog.style.cursor = 'default';
    return false;
  }
  if(!document.getElementById('dlkpFog'))
  {
    var div = document.createElement('div'); document.body.appendChild(div);
    div.innerHTML  = '<div id="dlkpFog" style="z-index: 10000; display: none; position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; *position: absolute; top: expression(eval(document.body.scrollTop)+\'px\'); width: expression(eval(document.body.scrollLeft+document.body.clientWidth)+\'px\'); opacity: 0.9; filter: alpha(opacity=90); background: white;" onclick="hideImage();"><span id=dlkpTitle style="display: none;"></span></div>';
    div.innerHTML += '<div id="dlkpImage" style="z-index: 10001; display: none; visibility: hidden; position: fixed; top: 50%; left: 50%; *position: absolute; *top: expression(eval(document.body.scrollTop+(document.body.offsetHeight/2))+\'px\');"></div>';
  }
  var dlkpFog = document.getElementById('dlkpFog');
  var dlkpImage = document.getElementById('dlkpImage');
  dlkpFog.style.display = 'block'; dlkpFog.style.cursor = 'wait';
  dlkpImage.style.visibility = 'hidden'; dlkpImage.style.display = 'block';
  dlkpImage.innerHTML = '<img src="'+url+'" onclick="hideImage();" onload="showImage();" style="border: 1px solid silver;" title="'+text+'">';
  window.timerImageError = setTimeout("alert('РќРµ СѓРґР°РµС‚СЃСЏ Р·Р°РіСЂСѓР·РёС‚СЊ РёР·РѕР±СЂР°Р¶РµРЅРёРµ.'); hideImage();",10000);
  return false;
}

function hideImage()
{
  document.getElementById('dlkpFog').style.display = 'none';
  document.getElementById('dlkpImage').style.display = 'none';
  document.title = document.getElementById('dlkpTitle').innerHTML;
  return false;
}
