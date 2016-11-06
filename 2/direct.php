<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title></title>
<link href="templates/eljquery/css/cetak_style.css" type=text/css rel=stylesheet>
<script language="javascript" src="cgi.js" type="text/javascript"></script>
<script language="javascript" src="common.js" type="text/javascript"></script>
<script language="javascript" src="xmlhttprequest.js"></script>
</head>
<?php
$airline = $_GET['arln'];

if ($airline == 'Y6')
{
	$logo = "bataviashadow.jpg";
}

?>
<body>

								<p><table border="0" width="570" align="center" cellpadding="0" cellspacing="0" style="margin-top:12px">

									<tr>
										<td width="24"><img src="lt.gif" border="0"></td>
										<td background="t_bg.gif" width="528">
											<table border="0" cellpadding="0" cellspacing="0">
												<tr>
													<td class="blue_title">print e-ticket</td>
												</tr>
											</table>

										</td>
										<td width="18"><img src="rt.gif" border="0"></td>
									</tr>
								</table>
								<table border="0" width="570" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
									<tr>
										<td width="11" background="img_ticket/l_bg.gif"></td>
										<td width="547" height="300" valign="top" bgcolor="#FFFFFF">
										
							<p align="center"><img border="0" src="img_ticket/smart-logo.jpg" alt="SMART"></p>

										<p align="center">Sedang melakukan koneksi ke sistem<p align="center">
										<img border="0" src="<?php echo $logo; ?>"><p align="center">
										Mohon tunggu sebentar ...<p align="center">
										<img border="0" src="wait2.gif" width="90" height="20"><p align="justify" style="line-height: 150%">
										<u><b>Catatan:</b></u> Bila dalam waktu 
										lebih dari 3 menit Anda masih tidak 
										berhasil konek ke sistem dari Airline 
										yang bersangkutan, silahkan tutup window 
										ini dan ulangi kembali proses issued 
										dari awal.<p align="justify" style="line-height: 150%">
										Bila Anda masih menemui kesulitan, 
										silahkan hubungi layanan teknis SMART 
										untuk bantuan asistensi.
										</td>

										<td width="12" background="r_bg.gif"></td>
									</tr>
								</table>
								<table border="0" width="570" align="center" cellpadding="0" cellspacing="0">
									<tr>
										<td width="18"><img src="lb.gif" border="0"></td>
										<td background="b_bg.gif" width="534"></td>
										<td width="18"><img src="rb.gif" border="0"></td>
									</tr>

								</table>

<form name="bataviaForm" action="http://222.124.141.98/MyPage/booking/cariBookAjaxPros.php?ruteBerangkat=CGK&ruteTujuan=SUB&ruteKembali=CGK&tglBerangkatPergi=19&blnBerangkatPergi=11&thnBerangkatPergi=10&tglBerangkatKembali=25&blnBerangkatKembali=11&thnBerangkatKembali=10&jmlPenumpang=1&jmlInfant=0&Submit=Cari Penerbangan!" method="post">
<input type="hidden" name="Submit" value="Submit">
</form>


<script language="JavaScript">
parent.document.title="Print e-ticket Batavia dan Mandala";

var chk_logged7P = getCookie("logged7P");

if ((issued_airline=='Y6' && chk_logged7P=='yes')) {
	print_etiket();
} else {
	setTimeout(print_etiket, 20*1000);
}
</script>
</body>
</html>

