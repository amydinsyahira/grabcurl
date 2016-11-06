var ipb_var_image_url = "img/";
var ipb_var_base_url = "";
var ipb_cgi_artikel_url = "artikel.pl";
var ipb_cgi_chat_url = "chat.pl";

var wait_respons_interval = 15;
var mu_refresh_interval = 90;
var mu_retry_times = 30;

var operator_chat_interval = 15;

var img_cross = "aff_cross.gif";
var img_tick = "accept.gif";
var img_warn = "warn.gif";
var img_pixel = "pixel.gif";
var img_wait = "loading.gif";

var minpasschar=6;
var def_red="#FFCCFF";
var def_white="#CCFFFF";
var passwordList="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
var oneyear  = new Date();
fixDate(oneyear);
oneyear.setTime(oneyear.getTime() + 365 * 24 * 60 * 60 * 1000);
var onesecond  = new Date();
fixDate(onesecond);

var form_field_ids = new Array();
var form_div_ids = new Array();
var form_img_ids = new Array();
var form_btn_ids = new Array();

var lastid = '';

function prtError(err_msg) {
	alert("Error!\n\nInvalid operation ["+err_msg+"]");
}

function enterValidInput(myid, chrset) {
	var myval = document.getElementById(myid);
	var new_val = "";
	var a_chr = 0;
	for (var i=0; i<myval.value.length; i++) {
		if (chrset.indexOf(myval.value.charAt(i))!=-1) {
			if ((myval.value.charAt(i)=='@' && a_chr==0) || myval.value.charAt(i)!='@') {
				if (myval.value.charAt(i)=='@') {
					a_chr++;
				}
				new_val += myval.value.charAt(i);
			}
		}
	}
	document.getElementById(myid).value = new_val;
}

function delFrmList(dest, del_target) {
var my_list = document.getElementById(dest);
var my_new_list = new Array();

for (var i=0;i<my_list.length;i++) {
	if (my_list[i].value!=del_target) {
		my_new_list[my_new_list.length] = new Option(my_list[i].text, my_list[i].value);
	}
}

while (my_list.length) my_list[0]=null;

for (var i=0;i<my_new_list.length;i++) {
	my_list[i] = new Option(my_new_list[i].text, my_new_list[i].value);
}
}

function fillchar(mychr , ttl_str, mystr) {
	mystr = mystr + '';
	var selisih = ttl_str - mystr.length;
	var fix_str = "";
	for (var i=0; i<selisih; i++) {
		fix_str += mychr;
	}
	mystr = fix_str + mystr;
	return mystr;
}

function revTGL(tglku) {
var fix_arr = new Array();
var new_tgl = '';
fix_arr = tglku.split('-');
new_tgl = fix_arr[2]+'-'+fix_arr[1]+'-'+fix_arr[0];
return new_tgl;
}

function setupChkField(field_arr) {
	var arrlist=field_arr;
	var checknext=arrlist.indexOf(',');
	var field_name;
	var field_img;
	while (checknext>-1) {
		field_name=getline(arrlist,',');
		field_img='img_'+field_name;
		form_field_ids[field_name] = document.getElementById(field_name);
		form_img_ids[field_name] = document.getElementById(field_img);
		arrlist=cutline(arrlist,',');
		checknext=arrlist.indexOf(',');	
	}
	if (arrlist!='') {
		field_name=arrlist;
		field_img='img_'+field_name;
		form_field_ids[field_name] = document.getElementById(field_name);
		form_img_ids[field_name] = document.getElementById(field_img);
	}
}

function showFAQ(faq_no) {
	var total_faq=9;
	var dummy;
	for (var i=1;i<=total_faq;i++) {
		dummy='faq'+i;
		document.getElementById(dummy).style.visibility="hidden";
		document.getElementById(dummy).style.display="none";
	}
	dummy='faq'+faq_no;
	
	document.getElementById(dummy).style.visibility="visible";
	document.getElementById(dummy).style.display="";
}

function showLoadingBox(modeku, boxid, bw, p_top, h_top, h_left) {
if (typeof boxid == 'undefined' || boxid=='') {
	boxid = 'loadingbox';
}
if (typeof bw == 'undefined' || bw=='') {
	bw = 250;
}
if (typeof p_top == 'undefined' || p_top=='') {
	p_top = 100;
}
var ns = (navigator.appName.indexOf("Netscape") != -1);
if (modeku=="on") {
	var dw=document.documentElement.offsetWidth;
	var dh=document.documentElement.offsetHeight;
	document.getElementById(boxid).style.top=p_top;
	document.getElementById(boxid).style.left=Math.round((dw-bw)/2);
	document.getElementById(boxid).style.position='fixed';
	document.getElementById(boxid).style.visibility="visible";
	document.getElementById(boxid).style.display="";
} else {
	document.getElementById(boxid).style.visibility="hidden";
	document.getElementById(boxid).style.display="none";
}
}

function selectArr(dst, myvalue) {
var myfield = document.getElementById(dst);
for (var i=0; i<myfield.length; i++) {
	if (myfield[i].value==myvalue) {
		myfield[i].selected=1;
		return;
	}
}
}

function isNotFile(namafile,ext1,ext2,ext3)
{
	var j = "";
	var dcount = false;
	for (var i = namafile.length; i >0 ; i--)
	{
       if (namafile.charAt(i) == '.') {
          i = 0;
       } else {
          j = namafile.charAt(i) + j;
       }
	}
	j = j.toUpperCase();
	if ((j != ext1) && (j != ext2) && (j != ext3)) {
	   return true;
	}
	return false; 
}

function countChar(dst,note_dst) {
	if (typeof max_chars=='undefined') {
		var max_chars=255;
	}
	var txt_chars=document.getElementById(dst).value.length;
	var remain_chars=max_chars-txt_chars;
	if (remain_chars<0) {
		document.getElementById(dst).value=document.getElementById(dst).value.substr(0,max_chars);
		remain_chars=0;
	}
	if (typeof note_dst!='undefined' && note_dst!='')
		document.getElementById(note_dst).innerHTML='Remain chars: <b>'+remain_chars+'</b>';
}

function memberLogOut() {
	if (confirm("Anda akan mengakhir sesi ini?")) {
		location.href=ipb_var_base_url+cgi_member+"?mode=logout";
	}
}

function submitForm(formname, act_val) {
	if (typeof act_val!='undefined' && act_val!='') {
		document.getElementById(formname).action.value = act_val;
		//document.getElementById(formname).submit();
		//formname.action.value = act_val;
	}
	//formname.submit();
	document.getElementById(formname).submit();
}

function loadURL(cgi, action, targetfrm) {
	var url="";
	if (cgi=='art') {
		if (lastid != action) {
			url=ipb_cgi_artikel_url+'?mode=plain&id='+action;
			lastid = action;
		}		
	} else {
		url=cgi+'?'+action;
	}
	if (url!="") {
		do_request_function = function()
		{
			if (!xmlobj.readystate_ready_and_ok() )
			{
				showLoadingBox("on");
				return;
			}
			var cekajax = xmlobj.xmlhandler.responseText;
			var art_title = getline(cekajax,',');
			cekajax = cutline(cekajax,',');
			showLoadingBox("off");
			parent.document.title = art_title;
			if (typeof targetfrm!='undefined' && targetfrm!='') {
				document.getElementById(targetfrm).innerHTML=cekajax;
			} else {
				document.getElementById('mycontent').innerHTML=cekajax;
			}
		}
		var xmlobj = new ajax_request();
		xmlobj.onreadystatechange( do_request_function );
		xmlobj.process( url );
	}
}

function check_value(src) {
	for (var i=0;i<form_field_ids[src].length;i++) {
		if (form_field_ids[src][i].selected) {	
			return form_field_ids[src][i].value;
		}
	}
	return '';
}

function check(sInput, sCheck) 
{
	if (sInput=='') return false;
	var chr, j;
	var bfound = false;
	var ok = true;
	for (var i = 0; i < sInput.length; i++)
	{
		chr = sInput.charAt(i);
		bfound = false;
		for (j=0; j < sCheck.length; j++)
		{
			if (chr == sCheck.charAt(j)) bfound = true;
		}
		if (!bfound) ok = false;
	}
	return ok;
}

function isNotPassword(sItem)
{
	if (!check(sItem,passwordList))
		return true;
	return false;
}

function isNotPhone(sItem)
{
	if (!check(sItem,"1234567890-()"))
		return true;
	return false;
}

function isNotYM(sItem)
{
	if (!check(sItem,"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890_"))
		return true;
	return false;
}

function isNotUserName(sItem)
{
	if (!check(sItem,"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890._-"))
		return true;
	return false;
}

function isNotStraightName(sItem)
{
	if (!check(sItem,"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"))
		return true;
	return false;
}

function isNotModerateName(sItem)
{
	if (!check(sItem,"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz "))
		return true;
	return false;
}

function isNotSAlphabet(sItem)
{
	if (!check(sItem,"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"))
		return true;
	return false;
}

function isNotAlphabet(sItem)
{
	if (!check(sItem,"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz. "))
		return true;
	return false;
}

function isNotSemiAlphabet(sItem)
{
	if (!check(sItem,"ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890 "))
		return true;
	return false;
}

function isNotAlphaNumeric(sItem)
{
	if (!check(sItem,"ABCDEFGHIJKLMNOPQRSTUVWXYabcdefghijklmnopqrstuvwxyzZ1234567890"))
		return true;
	return false;
}

function isNotMAlphaNumeric(sItem)
{
	if (!check(sItem,"ABCDEFGHIJKLMNOPQRSTUVWXYabcdefghijklmnopqrstuvwxyzZ1234567890-. "))
		return true;
	return false;
}

function isNotNumeric(sItem, negative_mode)
{
	if (negative_mode=="yes") {
		if (!check(sItem,"1234567890-"))
			return true;
		var iLoop;
		for (iLoop = 1; iLoop < sItem.length; iLoop++)
		{ 
			if (sItem.charAt(iLoop) == '-')
			return true;		
		}
		return false;
	}
	if (!check(sItem,"1234567890"))
		return true;
	return false;
}

function isNotEmail(sItem)
{
	var iLoop, sTemp;
	var noA = 0;
	var noT = 0;
	var noS = 0;
	var prevchar = "";

	if (!check(sItem,"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890-\@._"))
		return true;

	sTemp = sItem.toUpperCase();
	
	for (iLoop = 0; iLoop < sTemp.length; iLoop++)
	{ 
		if (sTemp.charAt(iLoop) == '\@')
			noA = noA + 1;
		if (sTemp.charAt(iLoop) == '.')
			noT = noT + 1;
		if ((sTemp.charAt(iLoop) == '.') && (prevchar == '.' || prevchar == '\@'))
			return true;
		if (sTemp.charAt(iLoop) == '-')
			noS = noS + 1;
		if (sTemp.charAt(iLoop) == '-' && prevchar == '-')
			return true;
		prevchar = sTemp.charAt(iLoop);
	}

	if (isNotSemiAlphabet(sTemp.charAt(0)) || isNotAlphabet(sTemp.charAt(sTemp.length-1)))
		return true;
    if (noA !=1)
   	   return true;
    if ((noT > 3) || (noT == 0))
   	   return true;
    if (noS > 2)
   	   return true;
return false;
}

function getCookie(name) {
  var dc = document.cookie;
  if (dc.length==0) { 
	return ""; 
  }
  var prefix = name + "=";
  var begin = dc.indexOf("; " + prefix);
  if (begin == -1) {
    begin = dc.indexOf(prefix);
    if (begin != 0) return null;
  } else
    begin += 2;
  var end = document.cookie.indexOf(";", begin);
  if (end == -1)
    end = dc.length;
  return unescape(dc.substring(begin + prefix.length, end));
}

function setCookie(name, value, expires, path, domain, secure) {
  var curCookie = name + "=" + escape(value) +
      ((expires) ? "; expires=" + expires.toGMTString() : "") +
      ((path) ? "; path=" + path : "") +
      ((domain) ? "; domain=" + domain : "") +
      ((secure) ? "; secure" : "");
  document.cookie = curCookie;
}

function fixDate(date) {
  var base = new Date(0);
  var skew = base.getTime();
  if (skew > 0)
    date.setTime(date.getTime() - skew);
}

function setNetral(fieldname,myimg) {
		form_field_ids[fieldname].className   = 'formulir';
		if (myimg!='no-img') {
			form_img_ids[fieldname].src           = ipb_var_image_url + img_pixel;
		}
}

function setNotOk(fieldname,myimg) {
		form_field_ids[fieldname].className   = 'input-warn';
		if (myimg!='no-img') {
			if (myimg!="") form_img_ids[fieldname].src = ipb_var_image_url + myimg;
			else form_img_ids[fieldname].src           = ipb_var_image_url + img_cross;
		}
		//err_arr[fieldname] = 1;
}

function setOk(fieldname, myimg) {
		form_field_ids[fieldname].className   = 'input-ok';
		if (myimg!='no-img') {
			if (myimg!="") form_img_ids[fieldname].src = ipb_var_image_url + myimg;
			else form_img_ids[fieldname].src           = ipb_var_image_url + img_tick;
		}
		//err_arr[fieldname] = 0;
}

function isDate(date,month,year) {
	if (month==2) {
		// Check for leap year
		if ( ( (year%4==0)&&(year%100!=0) ) || (year%400==0) ) { // leap year
			if (date > 29){ return false; }
			}
		else { if (date > 28) { return false; } }
		}
	if ((month==4)||(month==6)||(month==9)||(month==11)) {
		if (date > 30) { return false; }
		}
	if (date > 31) return false;
	if (month < 0 || month > 12) return false;
	return true;
}

function getline(str,char) {
var dummy=str.indexOf(char);
hasil=str.substr(0, dummy);
return hasil;
}

function cutline(str,char) {
var dummy = str.indexOf(char);
hasil = str.substr(dummy+char.length,str.length);
return hasil;
}

function offDiv(myname) {
	form_div_ids[myname].style.visibility="hidden";
	form_div_ids[myname].style.display="none";
}

function onDiv(myname) {
	form_div_ids[myname].style.visibility="visible";
	form_div_ids[myname].style.display="";
}

function offDiv2(myname) {
	document.getElementById(myname).style.visibility="hidden";
	document.getElementById(myname).style.display="none";
}

function onDiv2(myname) {
	document.getElementById(myname).style.visibility="visible";
	document.getElementById(myname).style.display="";
}

function togDiv2(myname) {
	if (document.getElementById(myname).style.visibility=="visible") {
		document.getElementById(myname).style.visibility="hidden";
		document.getElementById(myname).style.display="none";
	} else {
		document.getElementById(myname).style.visibility="visible";
		document.getElementById(myname).style.display="";
	}
}

function go2URL(dst) {
	location.href=dst;
}

var x,y;
var isNav = (navigator.appName.indexOf("Netscape") !=-1);

function popInfo(object1,title,description,tb_width){
if (tb_width==null) {
	tb_width='200';
}
var desc = "<table border='1' width='"+tb_width+"' cellspacing='0' cellpadding='3' style='border-collapse: collapse' bordercolor='#3A7FAB'>";
desc += "<tr><td bgcolor='#F2F2F2' align='center'><p class='small'><b>"+title+"</b></p></td></tr>\n";
desc += "<tr><td bgcolor='#FFFF00'>"+description+"</td></tr>";
desc += "</table>";
document.getElementById(object1).innerHTML=desc;
document.getElementById(object1).style.top=y+14;
document.getElementById(object1).style.left=x;
}

function hideLayer(object1){
document.getElementById(object1).innerHTML="";
}

function handlerMM(e){
if (!e) var e = window.event;
if (e.pageX || e.pageY) 	{
	x = e.pageX;
	y = e.pageY;
}
else if (e.clientX || e.clientY) 	{
	x = e.clientX + document.body.scrollLeft
		+ document.documentElement.scrollLeft;
	y = e.clientY + document.body.scrollTop
		+ document.documentElement.scrollTop;
}

}
document.onmousemove = handlerMM;

function rtn_desimal(myangka) {
var dec=''; 
var panjang_string='';
var dummydec='';
var minstr='';
var panjang_string=angka;
var angka=myangka+'';
dummydec=angka.indexOf(".");
if (dummydec > 0) {
	dec = angka.substr(dummydec, angka.length-dummydec);
	angka = angka.substr(0, dummydec);
}
if (angka.substr(0,1)=="-") {
	minstr="-";
	angka=angka.substr(1,angka.length-1);
}
panjang_string=angka.length;
if (panjang_string>3 && panjang_string<=6) {
	sisa_panjang = panjang_string - 3;
	cetak_angka  = minstr+angka.substr(0,sisa_panjang)+','+angka.substr(sisa_panjang,panjang_string)+dec;
	return cetak_angka;
} else if (panjang_string>6 && panjang_string<=9) {	
	sisa_panjang = panjang_string - 6;
	cetak_angka  = minstr+angka.substr(0,sisa_panjang)+','+angka.substr(sisa_panjang,3)+','+angka.substr(sisa_panjang+3,3)+dec;
	return cetak_angka; 
} else {  
	cetak_angka = minstr+angka+dec;
	return cetak_angka;
}
}