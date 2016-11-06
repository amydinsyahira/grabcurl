<div id="content">

	
			<div id="left" style="visibility:">		
			
								<div id="lefttxt">
			
<style type="text/css">
<!--
.style1 {
	color: #OOOOOO;
	font-size: small;
	font-weight: bold;
}
.style5 {font-size: 12px}
.style7 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style9 {color: #FFFFFF}
-->
</style>
<script language="javascript" type="text/javascript">
jQuery(document).ready(function()
{
	jQuery("#kalenderPergi").datepicker(
	{
		showOn: 'button', 
		changeMonth: true,
		changeYear: true,
		buttonImage: 'http://www.batavia-air.com/public/etiket/jquery/calendar.png', 
		buttonImageOnly: true, //dateFormat: 'dd-M-y'
		dateFormat: 'd/m/y',
		minDate: 'Y',
		maxDate: '+1Y-1M'
	});
		
	jQuery("#kalenderPergi").change(function(){
	
		var tanggalBerangkat = jQuery("#kalenderPergi").val();
		var tglbrkt = tanggalBerangkat.split("/");
		
		jQuery("#tglBerangkatPergi option").each(function() {
			
			if(this.value == tglbrkt[0])
			{
				jQuery("select#tglBerangkatPergi option[selected]").removeAttr("selected");
				jQuery("#tglBerangkatPergi option[value=" + tglbrkt[0] +"]").attr("selected","selected") ;
			}
		});
		
		jQuery("#blnthnBerangkatPergi option").each(function() {
	
			if(this.value == tglbrkt[1]+"/"+tglbrkt[2])
			{
				jQuery("select#blnthnBerangkatPergi option[selected]").removeAttr("selected");
				jQuery("#blnthnBerangkatPergi option[value=" + tglbrkt[1]+"/"+tglbrkt[2] +"]").attr("selected","selected") ;
			}
		});
		
	});
		

	jQuery("#kalenderKembali").datepicker({
		showOn: 'button', 
		changeMonth: true,
		changeYear: true,
		buttonImage: 'http://www.batavia-air.com/public/etiket/jquery/calendar.png', 
		buttonImageOnly: true, //dateFormat: 'dd-M-y'
		dateFormat: 'd/m/y',
		minDate: 'Y',
		maxDate: '+2Y-1M'
	});
	
	if(jQuery("#ruteKembali").val() == 'kembali')
	{
		jQuery('#kalenderKembali').datepicker('disable');
	}
	else
	{
		jQuery('#kalenderKembali').datepicker('enable');
	}	
	
	jQuery("#ruteKembali").change(function() {
		
		if(jQuery("#ruteKembali").val() != 'kembali')
		{
			jQuery('#kalenderKembali').datepicker('enable');
		}
		else
		{
			jQuery('#kalenderKembali').datepicker('disable');
		}
	});
	
	jQuery("#kalenderKembali").change(function(){
	
		var tanggalKembali = jQuery("#kalenderKembali").val();
		var tglkmbli = tanggalKembali.split("/");
		
		jQuery("#tglBerangkatKembali option").each(function() {
			
			if(this.value == tglkmbli[0])
			{
				jQuery("select#tglBerangkatKembali option[selected]").removeAttr("selected");
				jQuery("#tglBerangkatKembali option[value=" + tglkmbli[0] +"]").attr("selected","selected") ;
			}
		});
		
		jQuery("#blnthnBerangkatKembali option").each(function() {
	
			if(this.value == tglkmbli[1]+"/"+tglkmbli[2])
			{
				jQuery("select#blnthnBerangkatKembali option[selected]").removeAttr("selected");
				jQuery("#blnthnBerangkatKembali option[value=" + tglkmbli[1]+"/"+tglkmbli[2] +"]").attr("selected","selected") ;
			}
		});
		
	});
	
});
</script>

<div align="center" id="SearchBook">

<script language='javascript' type='text/javascript'>
dari = new Array (225);
ke = new Array (225);
ke_ket = new Array (225);
dari[0]="SUB";
ke[0]="AMQ";
ke_ket[0]="Ambon";
dari[1]="CGK";
ke[1]="AMQ";
ke_ket[1]="Ambon";
dari[2]="BEJ";
ke[2]="BPN";
ke_ket[2]="BalikPapan";
dari[3]="SUB";
ke[3]="BPN";
ke_ket[3]="BalikPapan";
dari[4]="DPS";
ke[4]="BPN";
ke_ket[4]="BalikPapan";
dari[5]="MKW";
ke[5]="BPN";
ke_ket[5]="BalikPapan";
dari[6]="PNK";
ke[6]="BPN";
ke_ket[6]="BalikPapan";
dari[7]="BDJ";
ke[7]="BPN";
ke_ket[7]="BalikPapan";
dari[8]="JOG";
ke[8]="BPN";
ke_ket[8]="BalikPapan";
dari[9]="PLW";
ke[9]="BPN";
ke_ket[9]="BalikPapan";
dari[10]="MDC";
ke[10]="BPN";
ke_ket[10]="BalikPapan";
dari[11]="CGK";
ke[11]="BPN";
ke_ket[11]="BalikPapan";
dari[12]="UPG";
ke[12]="BPN";
ke_ket[12]="BalikPapan";
dari[13]="TRK";
ke[13]="BPN";
ke_ket[13]="BalikPapan";
dari[14]="CGK";
ke[14]="BTJ";
ke_ket[14]="Banda Aceh";
dari[15]="MES";
ke[15]="BTJ";
ke_ket[15]="Banda Aceh";
dari[16]="SUB";
ke[16]="BDJ";
ke_ket[16]="Banjarmasin";
dari[17]="CGK";
ke[17]="BDJ";
ke_ket[17]="Banjarmasin";
dari[18]="BPN";
ke[18]="BDJ";
ke_ket[18]="Banjarmasin";
dari[19]="TKG";
ke[19]="BTH";
ke_ket[19]="Batam";
dari[20]="JOG";
ke[20]="BTH";
ke_ket[20]="Batam";
dari[21]="CGK";
ke[21]="BTH";
ke_ket[21]="Batam";
dari[22]="MES";
ke[22]="BTH";
ke_ket[22]="Batam";
dari[23]="PNK";
ke[23]="BTH";
ke_ket[23]="Batam";
dari[24]="PLM";
ke[24]="BTH";
ke_ket[24]="Batam";
dari[25]="PKU";
ke[25]="BTH";
ke_ket[25]="Batam";
dari[26]="PDG";
ke[26]="BTH";
ke_ket[26]="Batam";
dari[27]="PLW";
ke[27]="BTH";
ke_ket[27]="Batam";
dari[28]="SUB";
ke[28]="BTH";
ke_ket[28]="Batam";
dari[29]="AMI";
ke[29]="BTH";
ke_ket[29]="Batam";
dari[30]="CGK";
ke[30]="BKS";
ke_ket[30]="Bengkulu";
dari[31]="BPN";
ke[31]="BEJ";
ke_ket[31]="Berau";
dari[32]="PNK";
ke[32]="DPS";
ke_ket[32]="Denpasar";
dari[33]="CGK";
ke[33]="DPS";
ke_ket[33]="Denpasar";
dari[34]="SUB";
ke[34]="DPS";
ke_ket[34]="Denpasar";
dari[35]="JOG";
ke[35]="DPS";
ke_ket[35]="Denpasar";
dari[36]="LBJ";
ke[36]="DPS";
ke_ket[36]="Denpasar";
dari[37]="ENE";
ke[37]="DPS";
ke_ket[37]="Denpasar";
dari[38]="BPN";
ke[38]="DPS";
ke_ket[38]="Denpasar";
dari[39]="UPG";
ke[39]="DPS";
ke_ket[39]="Denpasar";
dari[40]="WGP";
ke[40]="DPS";
ke_ket[40]="Denpasar";
dari[41]="KOE";
ke[41]="DPS";
ke_ket[41]="Denpasar";
dari[42]="MOF";
ke[42]="DPS";
ke_ket[42]="Denpasar";
dari[43]="AMI";
ke[43]="DPS";
ke_ket[43]="Denpasar";
dari[44]="MOF";
ke[44]="ENE";
ke_ket[44]="Ende";
dari[45]="WGP";
ke[45]="ENE";
ke_ket[45]="Ende";
dari[46]="DPS";
ke[46]="ENE";
ke_ket[46]="Ende";
dari[47]="CGK";
ke[47]="GTO";
ke_ket[47]="Gorontalo";
dari[48]="SUB";
ke[48]="GTO";
ke_ket[48]="Gorontalo";
dari[49]="MDC";
ke[49]="GTO";
ke_ket[49]="Gorontalo";
dari[50]="UPG";
ke[50]="GTO";
ke_ket[50]="Gorontalo";
dari[51]="CGK";
ke[51]="CAN";
ke_ket[51]="Guangzhou";
dari[52]="BPN";
ke[52]="CGK";
ke_ket[52]="Jakarta";
dari[53]="JOG";
ke[53]="CGK";
ke_ket[53]="Jakarta";
dari[54]="SOC";
ke[54]="CGK";
ke_ket[54]="Jakarta";
dari[55]="LUW";
ke[55]="CGK";
ke_ket[55]="Jakarta";
dari[56]="RUH";
ke[56]="CGK";
ke_ket[56]="Jakarta";
dari[57]="BTJ";
ke[57]="CGK";
ke_ket[57]="Jakarta";
dari[58]="PLW";
ke[58]="CGK";
ke_ket[58]="Jakarta";
dari[59]="MKW";
ke[59]="CGK";
ke_ket[59]="Jakarta";
dari[60]="SUB";
ke[60]="CGK";
ke_ket[60]="Jakarta";
dari[61]="AMQ";
ke[61]="CGK";
ke_ket[61]="Jakarta";
dari[62]="MDC";
ke[62]="CGK";
ke_ket[62]="Jakarta";
dari[63]="PDG";
ke[63]="CGK";
ke_ket[63]="Jakarta";
dari[64]="AMI";
ke[64]="CGK";
ke_ket[64]="Jakarta";
dari[65]="BKS";
ke[65]="CGK";
ke_ket[65]="Jakarta";
dari[66]="PKY";
ke[66]="CGK";
ke_ket[66]="Jakarta";
dari[67]="BDJ";
ke[67]="CGK";
ke_ket[67]="Jakarta";
dari[68]="PLM";
ke[68]="CGK";
ke_ket[68]="Jakarta";
dari[69]="BTH";
ke[69]="CGK";
ke_ket[69]="Jakarta";
dari[70]="UPG";
ke[70]="CGK";
ke_ket[70]="Jakarta";
dari[71]="TJQ";
ke[71]="CGK";
ke_ket[71]="Jakarta";
dari[72]="DJB";
ke[72]="CGK";
ke_ket[72]="Jakarta";
dari[73]="DPS";
ke[73]="CGK";
ke_ket[73]="Jakarta";
dari[74]="SRG";
ke[74]="CGK";
ke_ket[74]="Jakarta";
dari[75]="MES";
ke[75]="CGK";
ke_ket[75]="Jakarta";
dari[76]="PGK";
ke[76]="CGK";
ke_ket[76]="Jakarta";
dari[77]="KDI";
ke[77]="CGK";
ke_ket[77]="Jakarta";
dari[78]="DJJ";
ke[78]="CGK";
ke_ket[78]="Jakarta";
dari[79]="PKU";
ke[79]="CGK";
ke_ket[79]="Jakarta";
dari[80]="PNK";
ke[80]="CGK";
ke_ket[80]="Jakarta";
dari[81]="KOE";
ke[81]="CGK";
ke_ket[81]="Jakarta";
dari[82]="MLG";
ke[82]="CGK";
ke_ket[82]="Jakarta";
dari[83]="GTO";
ke[83]="CGK";
ke_ket[83]="Jakarta";
dari[84]="CAN";
ke[84]="CGK";
ke_ket[84]="Jakarta";
dari[85]="TKG";
ke[85]="CGK";
ke_ket[85]="Jakarta";
dari[86]="TRK";
ke[86]="CGK";
ke_ket[86]="Jakarta";
dari[87]="JED";
ke[87]="CGK";
ke_ket[87]="Jakarta";
dari[88]="TTE";
ke[88]="CGK";
ke_ket[88]="Jakarta";
dari[89]="SOQ";
ke[89]="CGK";
ke_ket[89]="Jakarta";
dari[90]="SIN";
ke[90]="CGK";
ke_ket[90]="Jakarta";
dari[91]="CGK";
ke[91]="DJB";
ke_ket[91]="Jambi";
dari[92]="CGK";
ke[92]="DJJ";
ke_ket[92]="Jayapura";
dari[93]="UPG";
ke[93]="DJJ";
ke_ket[93]="Jayapura";
dari[94]="MKW";
ke[94]="DJJ";
ke_ket[94]="Jayapura";
dari[95]="RUH";
ke[95]="JED";
ke_ket[95]="Jeddah";
dari[96]="CGK";
ke[96]="JED";
ke_ket[96]="Jeddah";
dari[97]="CGK";
ke[97]="KDI";
ke_ket[97]="Kendari";
dari[98]="UPG";
ke[98]="KDI";
ke_ket[98]="Kendari";
dari[99]="PNK";
ke[99]="KCH";
ke_ket[99]="Kuching";
dari[100]="WGP";
ke[100]="KOE";
ke_ket[100]="Kupang";
dari[101]="DPS";
ke[101]="KOE";
ke_ket[101]="Kupang";
dari[102]="CGK";
ke[102]="KOE";
ke_ket[102]="Kupang";
dari[103]="MOF";
ke[103]="KOE";
ke_ket[103]="Kupang";
dari[104]="SUB";
ke[104]="KOE";
ke_ket[104]="Kupang";
dari[105]="DPS";
ke[105]="LBJ";
ke_ket[105]="Labuanbajo";
dari[106]="CGK";
ke[106]="TKG";
ke_ket[106]="Lampung";
dari[107]="BTH";
ke[107]="TKG";
ke_ket[107]="Lampung";
dari[108]="UPG";
ke[108]="LUW";
ke_ket[108]="Luwuk";
dari[109]="SUB";
ke[109]="LUW";
ke_ket[109]="Luwuk";
dari[110]="CGK";
ke[110]="LUW";
ke_ket[110]="Luwuk";
dari[111]="CGK";
ke[111]="MLG";
ke_ket[111]="Malang";
dari[112]="BPN";
ke[112]="MDC";
ke_ket[112]="Manado";
dari[113]="CGK";
ke[113]="MDC";
ke_ket[113]="Manado";
dari[114]="SUB";
ke[114]="MDC";
ke_ket[114]="Manado";
dari[115]="GTO";
ke[115]="MDC";
ke_ket[115]="Manado";
dari[116]="CGK";
ke[116]="MKW";
ke_ket[116]="Manokwari";
dari[117]="BPN";
ke[117]="MKW";
ke_ket[117]="Manokwari";
dari[118]="SOQ";
ke[118]="MKW";
ke_ket[118]="Manokwari";
dari[119]="UPG";
ke[119]="MKW";
ke_ket[119]="Manokwari";
dari[120]="DJJ";
ke[120]="MKW";
ke_ket[120]="Manokwari";
dari[121]="DPS";
ke[121]="AMI";
ke_ket[121]="Mataram";
dari[122]="CGK";
ke[122]="AMI";
ke_ket[122]="Mataram";
dari[123]="SUB";
ke[123]="AMI";
ke_ket[123]="Mataram";
dari[124]="BTH";
ke[124]="AMI";
ke_ket[124]="Mataram";
dari[125]="ENE";
ke[125]="MOF";
ke_ket[125]="Maumere";
dari[126]="DPS";
ke[126]="MOF";
ke_ket[126]="Maumere";
dari[127]="KOE";
ke[127]="MOF";
ke_ket[127]="Maumere";
dari[128]="SUB";
ke[128]="MOF";
ke_ket[128]="Maumere";
dari[129]="CGK";
ke[129]="MES";
ke_ket[129]="Medan";
dari[130]="PDG";
ke[130]="MES";
ke_ket[130]="Medan";
dari[131]="BTJ";
ke[131]="MES";
ke_ket[131]="Medan";
dari[132]="BTH";
ke[132]="MES";
ke_ket[132]="Medan";
dari[133]="JOG";
ke[133]="MES";
ke_ket[133]="Medan";
dari[134]="CGK";
ke[134]="PDG";
ke_ket[134]="Padang";
dari[135]="MES";
ke[135]="PDG";
ke_ket[135]="Padang";
dari[136]="BTH";
ke[136]="PDG";
ke_ket[136]="Padang";
dari[137]="SUB";
ke[137]="PKY";
ke_ket[137]="Palangkaraya";
dari[138]="CGK";
ke[138]="PKY";
ke_ket[138]="Palangkaraya";
dari[139]="CGK";
ke[139]="PLM";
ke_ket[139]="Palembang";
dari[140]="BTH";
ke[140]="PLM";
ke_ket[140]="Palembang";
dari[141]="BPN";
ke[141]="PLW";
ke_ket[141]="Palu";
dari[142]="UPG";
ke[142]="PLW";
ke_ket[142]="Palu";
dari[143]="CGK";
ke[143]="PLW";
ke_ket[143]="Palu";
dari[144]="SUB";
ke[144]="PLW";
ke_ket[144]="Palu";
dari[145]="CGK";
ke[145]="PGK";
ke_ket[145]="Pangkalpinang";
dari[146]="BTH";
ke[146]="PKU";
ke_ket[146]="Pekanbaru";
dari[147]="CGK";
ke[147]="PKU";
ke_ket[147]="Pekanbaru";
dari[148]="PNK";
ke[148]="PKU";
ke_ket[148]="Pekanbaru";
dari[149]="BPN";
ke[149]="PNK";
ke_ket[149]="Pontianak";
dari[150]="KCH";
ke[150]="PNK";
ke_ket[150]="Pontianak";
dari[151]="BTH";
ke[151]="PNK";
ke_ket[151]="Pontianak";
dari[152]="PKU";
ke[152]="PNK";
ke_ket[152]="Pontianak";
dari[153]="CGK";
ke[153]="PNK";
ke_ket[153]="Pontianak";
dari[154]="JOG";
ke[154]="PNK";
ke_ket[154]="Pontianak";
dari[155]="SUB";
ke[155]="PNK";
ke_ket[155]="Pontianak";
dari[156]="DPS";
ke[156]="PNK";
ke_ket[156]="Pontianak";
dari[157]="SIN";
ke[157]="PNK";
ke_ket[157]="Pontianak";
dari[158]="SRG";
ke[158]="PNK";
ke_ket[158]="Pontianak";
dari[159]="PLW";
ke[159]="PNK";
ke_ket[159]="Pontianak";
dari[160]="JED";
ke[160]="RUH";
ke_ket[160]="Riyadh";
dari[161]="CGK";
ke[161]="RUH";
ke_ket[161]="Riyadh";
dari[162]="CGK";
ke[162]="SRG";
ke_ket[162]="Semarang";
dari[163]="PNK";
ke[163]="SRG";
ke_ket[163]="Semarang";
dari[164]="SIN";
ke[164]="SRG";
ke_ket[164]="Semarang";
dari[165]="CGK";
ke[165]="SIN";
ke_ket[165]="Singapore";
dari[166]="SRG";
ke[166]="SIN";
ke_ket[166]="Singapore";
dari[167]="PNK";
ke[167]="SIN";
ke_ket[167]="Singapore";
dari[168]="CGK";
ke[168]="SOC";
ke_ket[168]="Solo";
dari[169]="SUB";
ke[169]="SOQ";
ke_ket[169]="Sorong";
dari[170]="BPN";
ke[170]="SOQ";
ke_ket[170]="Sorong";
dari[171]="UPG";
ke[171]="SOQ";
ke_ket[171]="Sorong";
dari[172]="CGK";
ke[172]="SOQ";
ke_ket[172]="Sorong";
dari[173]="MKW";
ke[173]="SOQ";
ke_ket[173]="Sorong";
dari[174]="MDC";
ke[174]="SUB";
ke_ket[174]="Surabaya";
dari[175]="LUW";
ke[175]="SUB";
ke_ket[175]="Surabaya";
dari[176]="GTO";
ke[176]="SUB";
ke_ket[176]="Surabaya";
dari[177]="BTH";
ke[177]="SUB";
ke_ket[177]="Surabaya";
dari[178]="PLW";
ke[178]="SUB";
ke_ket[178]="Surabaya";
dari[179]="WGP";
ke[179]="SUB";
ke_ket[179]="Surabaya";
dari[180]="SOQ";
ke[180]="SUB";
ke_ket[180]="Surabaya";
dari[181]="MOF";
ke[181]="SUB";
ke_ket[181]="Surabaya";
dari[182]="DPS";
ke[182]="SUB";
ke_ket[182]="Surabaya";
dari[183]="TRK";
ke[183]="SUB";
ke_ket[183]="Surabaya";
dari[184]="BDJ";
ke[184]="SUB";
ke_ket[184]="Surabaya";
dari[185]="BPN";
ke[185]="SUB";
ke_ket[185]="Surabaya";
dari[186]="JOG";
ke[186]="SUB";
ke_ket[186]="Surabaya";
dari[187]="AMI";
ke[187]="SUB";
ke_ket[187]="Surabaya";
dari[188]="UPG";
ke[188]="SUB";
ke_ket[188]="Surabaya";
dari[189]="AMQ";
ke[189]="SUB";
ke_ket[189]="Surabaya";
dari[190]="KOE";
ke[190]="SUB";
ke_ket[190]="Surabaya";
dari[191]="PNK";
ke[191]="SUB";
ke_ket[191]="Surabaya";
dari[192]="PKY";
ke[192]="SUB";
ke_ket[192]="Surabaya";
dari[193]="CGK";
ke[193]="SUB";
ke_ket[193]="Surabaya";
dari[194]="TTE";
ke[194]="SUB";
ke_ket[194]="Surabaya";
dari[195]="CGK";
ke[195]="TJQ";
ke_ket[195]="Tanjung Pandan";
dari[196]="BPN";
ke[196]="TRK";
ke_ket[196]="Tarakan";
dari[197]="CGK";
ke[197]="TRK";
ke_ket[197]="Tarakan";
dari[198]="SUB";
ke[198]="TRK";
ke_ket[198]="Tarakan";
dari[199]="SUB";
ke[199]="TTE";
ke_ket[199]="Ternate";
dari[200]="UPG";
ke[200]="TTE";
ke_ket[200]="Ternate";
dari[201]="CGK";
ke[201]="TTE";
ke_ket[201]="Ternate";
dari[202]="CGK";
ke[202]="UPG";
ke_ket[202]="UjungPandang";
dari[203]="MKW";
ke[203]="UPG";
ke_ket[203]="UjungPandang";
dari[204]="BPN";
ke[204]="UPG";
ke_ket[204]="UjungPandang";
dari[205]="DJJ";
ke[205]="UPG";
ke_ket[205]="UjungPandang";
dari[206]="KDI";
ke[206]="UPG";
ke_ket[206]="UjungPandang";
dari[207]="DPS";
ke[207]="UPG";
ke_ket[207]="UjungPandang";
dari[208]="PLW";
ke[208]="UPG";
ke_ket[208]="UjungPandang";
dari[209]="GTO";
ke[209]="UPG";
ke_ket[209]="UjungPandang";
dari[210]="TTE";
ke[210]="UPG";
ke_ket[210]="UjungPandang";
dari[211]="LUW";
ke[211]="UPG";
ke_ket[211]="UjungPandang";
dari[212]="SOQ";
ke[212]="UPG";
ke_ket[212]="UjungPandang";
dari[213]="SUB";
ke[213]="UPG";
ke_ket[213]="UjungPandang";
dari[214]="SUB";
ke[214]="WGP";
ke_ket[214]="Waingapu";
dari[215]="ENE";
ke[215]="WGP";
ke_ket[215]="Waingapu";
dari[216]="KOE";
ke[216]="WGP";
ke_ket[216]="Waingapu";
dari[217]="DPS";
ke[217]="WGP";
ke_ket[217]="Waingapu";
dari[218]="SUB";
ke[218]="JOG";
ke_ket[218]="Yogyakarta";
dari[219]="CGK";
ke[219]="JOG";
ke_ket[219]="Yogyakarta";
dari[220]="PNK";
ke[220]="JOG";
ke_ket[220]="Yogyakarta";
dari[221]="BTH";
ke[221]="JOG";
ke_ket[221]="Yogyakarta";
dari[222]="BPN";
ke[222]="JOG";
ke_ket[222]="Yogyakarta";
dari[223]="MES";
ke[223]="JOG";
ke_ket[223]="Yogyakarta";
dari[224]="DPS";
ke[224]="JOG";
ke_ket[224]="Yogyakarta";
</script>
<script language="javascript">
// Script untuk mengganti tujuan dari rute berangkat

//var serverDate = new Date();	
var serverDate = parseInt(2010)+(parseInt(9)-1)+parseInt(17);
var pergiDate = new Date();
var kembaliDate = new Date();
var kembali;

//serverDate.setFullYear(parseInt(2010), parseInt(9)-1,parseInt(17));



function valueKembali()
{
	if(document.searchbook.ruteKembali.value == "kembali" || document.searchbook.ruteTujuan.value == "tujuan")
	{
		document.searchbook.tglBerangkatKembali.disabled = true;
		document.searchbook.blnthnBerangkatKembali.disabled = true;
	}
	else
	{
		var blnthnpergi = document.searchbook.blnthnBerangkatPergi.value.split("/");
		var blnthnkembali = document.searchbook.blnthnBerangkatKembali.value.split("/");
		
		pergiDate.setFullYear(parseInt(blnthnpergi[1],10)+2000,parseInt(blnthnpergi[0].value)-1,parseInt(document.searchbook.tglBerangkatPergi.value));
		kembaliDate.setFullYear(parseInt(blnthnkembali[1],10)+2000,parseInt(blnthnkembali[0],10)-1,parseInt(document.searchbook.tglBerangkatKembali.value));
		document.searchbook.tglBerangkatKembali.disabled = false;
		document.searchbook.blnthnBerangkatKembali.disabled = false;
		
		if(kembaliDate < pergiDate)
		{
			document.searchbook.tglBerangkatKembali.value =	document.searchbook.tglBerangkatPergi.value;
			document.searchbook.blnthnBerangkatKembali.value = document.searchbook.blnthnBerangkatPergi.value;			
		}
	}	
}	
function changeTujuan()
{

	document.searchbook.ruteTujuan.options.length = 0;
	document.searchbook.ruteTujuan.options[0] = new Option("Pilih Rute Tujuan", "tujuan", false, false);

	document.searchbook.ruteKembali.options.length = 0;
	document.searchbook.ruteKembali.options[0] = new Option("Pilih Rute Kembali", "kembali", true, true);
	var j = 1;
	var rutekemb= "";
	
	for(i=0;i<=225;i++)
	{
	
		if(document.searchbook.ruteBerangkat.value == dari[i])
		{
		
		 if(rutekemb==ke[i])
		 {
		 document.searchbook.ruteTujuan.options[j] = new Option(ke_ket[i], ke[i], 1, 1);

		 document.searchbook.ruteTujuan.options[j].selected = true;
		 		 return changeKembali();
		   		 }
		 else
		 {
			
			document.searchbook.ruteTujuan.options[j] = new Option(ke_ket[i], ke[i], false, false);
			}
			j++;
		}
	}
	valueKembali();
}
function changeKembali()
{ 

	document.searchbook.ruteKembali.options.length = 0;
	document.searchbook.ruteKembali.options[0] = new Option("Pilih Rute Kembali", "kembali", false, false);
	var j = 1;
	var rutekemb2= "";

	for(i=0;i<=225;i++)
	{
		if(document.searchbook.ruteTujuan.value == dari[i])
		{
	 if(rutekemb2==ke[i])
		 {
		 document.searchbook.ruteKembali.options[j] = new Option(ke_ket[i], ke[i], 1, 1);
		 document.searchbook.ruteKembali.options[j].selected = true;
		 
		 }
		 else
		 {
			document.searchbook.ruteKembali.options[j] = new Option(ke_ket[i], ke[i], false, false);
			
		}
		j++;
	  }	
	}
	valueKembali();
}


function tanggalan1()
{
	var jmltanggal=0;
	var blnthn = document.searchbook.blnthnBerangkatKembali.value.split("/");
	var tahun = parseInt(blnthn[1],10);
	var bulan = parseInt(blnthn[0],10);
	var kabisat =0;
	var tgl = parseInt(document.searchbook.tglBerangkatKembali.value,10);	
	var i=0;
	
	if((tahun%4) == 0)
	{
		kabisat = 1;
	}
	switch(bulan)
	{
		case 1: jmltanggal=31; break;
		case 2: if(kabisat == 1) jmltanggal = 29; else jmltanggal = 28; break;
		case 3: jmltanggal=31; break;
		case 4: jmltanggal=30; break;
		case 5: jmltanggal=31; break;
		case 6: jmltanggal=30; break;
		case 7: jmltanggal=31; break;
		case 8: jmltanggal=31; break;
		case 9: jmltanggal=30; break;
		case 10: jmltanggal=31; break;
		case 11: jmltanggal=30; break;
		case 12: jmltanggal=31; break;
	}
	document.searchbook.tglBerangkatKembali.options.length = 0;
	for(i=1;i<=jmltanggal;i++)
	{
		
		document.searchbook.tglBerangkatKembali.options[i-1] = new Option(i,i,false,false);
	}
	if(document.searchbook.tglBerangkatKembali.options[i-2].value < tgl)
		document.searchbook.tglBerangkatKembali.value = 1;
	else
		document.searchbook.tglBerangkatKembali.value = tgl;
}

function tanggalan()
{
	var jmltanggal=0;
	var blnthn = document.searchbook.blnthnBerangkatPergi.value.split("/");
	var tahun = parseInt(blnthn[1],10);
	var bulan = parseInt(blnthn[0],10);
	var kabisat =0;
	var tgl = parseInt(document.searchbook.tglBerangkatPergi.value,10);
	var i=0;var eNya=0;
		var tahunSekarang =parseInt(10);
	var bulanSekarang = parseInt(9);	
	
	if((tahun%4) == 0)
	{
		kabisat = 1;
	}
	switch(bulan)
	{
		case 1: jmltanggal=31; break;
		case 2: if(kabisat == 1) jmltanggal = 29; else jmltanggal = 28; break;
		case 3: jmltanggal=31; break;
		case 4: jmltanggal=30; break;
		case 5: jmltanggal=31; break;
		case 6: jmltanggal=30; break;
		case 7: jmltanggal=31; break;
		case 8: jmltanggal=31; break;
		case 9: jmltanggal=30; break;
		case 10: jmltanggal=31; break;
		case 11: jmltanggal=30; break;
		case 12: jmltanggal=31; break;
	}
	
	document.searchbook.tglBerangkatPergi.options.length = 0;
	for(i=1;i<=jmltanggal;i++)
	{
		document.searchbook.tglBerangkatPergi.options[i-1] = new Option(i,i,false,false);
	}
	
	if(document.searchbook.tglBerangkatPergi.options[i-2].value < tgl)
		document.searchbook.tglBerangkatPergi.value = 1;
	else
		document.searchbook.tglBerangkatPergi.value = tgl;

	valueKembali();
}
</script><script language="javascript" type="text/javascript">
function getSelectedRadio(buttonGroup) {
	// returns the array number of the selected radio button or -1 if no button is selected
	if (buttonGroup[0]) { // if the button group is an array (one button is not an array)
		for (var i=0; i<buttonGroup.length; i++) 
		{
			if (buttonGroup[i].checked) 
			{
			return i
			}
		}
	}
	else 
	{
		if (buttonGroup.checked) { return 0; } // if the one button is checked, return zero
	}
	// if we get to this point, no radio button is selected
	return -1;
} // Ends the "getSelectedRadio" function

function validation3(jmlLeg)
{
for(i=0;i<=jmlLeg;i++)
{
	if(i==0)
	{
				if(getSelectedRadio(document.pilihPenerbangan.flightBerangkatPergi) == -1)
		{
			alert("Anda Belum Memilih Penerbangan Pergi");
			return false;
		}
	}
	else
	{
				if(getSelectedRadio(document.pilihPenerbangan.flightBerangkatKembali) == -1)
		{
				alert("Anda Belum Memilih Penerbangan Kembali");
				return false;
		}
	}
}
	if(getSelectedRadio(document.pilihPenerbangan.room) == -1)
	{
		alert("Anda belum memilih tipe kamar");
		return false;
	}
	
	
}



function submitForm(f){ 

var serverDate = new Date();	
var serverDateCC = new Date();
var pergiDate = new Date();
var kembaliDate = new Date();
var kembali;

serverDate.setFullYear(parseInt(2010), parseInt(9)-1,parseInt(15));
serverDateCC.setFullYear(parseInt(2010), parseInt(9)-1,parseInt(17));

var blnthnpergi = document.searchbook.blnthnBerangkatPergi.value.split("/");
var blnthnkembali = document.searchbook.blnthnBerangkatKembali.value.split("/");

tglBerangkatPergi = parseInt(document.searchbook.tglBerangkatPergi.value,10);
blnBerangkatPergi = parseInt(blnthnpergi[0],10);
thnBerangkatPergi = parseInt(blnthnpergi[1],10);

tglBerangkatKembali = parseInt(document.searchbook.tglBerangkatKembali.value,10);
blnBerangkatKembali = parseInt(blnthnkembali[0],10);
thnBerangkatKembali = parseInt(blnthnkembali[1],10);

pergiDate.setFullYear(parseInt(blnthnpergi[1],10)+2000,parseInt(blnthnpergi[0],10)-1,parseInt(document.searchbook.tglBerangkatPergi.value,10));

if(document.searchbook.ruteBerangkat.value == "berangkat")
{
	alert("Anda Belum Memilih Rute Berangkat");	
	document.searchbook.ruteBerangkat.focus();
	return false;
}

if(document.searchbook.ruteTujuan.value == "tujuan")
{
	alert("Anda Belum Memilih Rute Tujuan");
	document.searchbook.ruteTujuan.focus();
	return false;
}

if(document.searchbook.ruteKembali.value != 'kembali')
{
	kembaliDate.setFullYear(parseInt(blnthnkembali[1],10)+2000,parseInt(blnthnkembali[0],10)-1,parseInt(document.searchbook.tglBerangkatKembali.value));
	kembali = true;
}


if(pergiDate < serverDate)
	{
					
			alert("Maaf, Anda harus memilih penerbangan yang berangkat di atas 3 jam dari sekarang.");
			return false;
			}
	if(kembaliDate < pergiDate && kembali)
	{
		alert("Tanggal berangkat tidak boleh melebihi tanggal kembali.");
		return false;
	}
	if(parseInt(document.searchbook.jmlPenumpang.value) < parseInt(document.searchbook.jmlInfant.value))
	{
		alert("Jumlah bayi tidak boleh lebih dari jumlah penumpang.");
		return false;
	}
	
			if(pergiDate >= serverDate && pergiDate < serverDateCC)
		{
			alert("Anda Telah Memilih Tanggal dan Jam Keberangkatan Kurang Dari 48 Jam. Tipe Pembayaran Yang Dapat Digunakan Adalah KlikBCA.");
			
		}
			


new Effect.Appear('preloader');	

if(window.XMLHttpRequest){ 
	var xmlReq = new XMLHttpRequest(); 
} else if(window.ActiveXObject) { 
	var xmlReq = new ActiveXObject('Microsoft.XMLHTTP'); 
} 
var formData = '', elem = ''; 

for(var s=0; s<f.elements.length; s++)
{
 	elem = f.elements[s]; 
	
	if(formData != '')
	{ 
		formData += '&'; 
	} 
	formData += elem.name+"="+elem.value;
	
}
 
xmlReq.onreadystatechange = function()
{ 
	if(xmlReq.readyState == 4)
	{ 
		new Effect.Fade('preloader');
		new Effect.BlindDown('centerright');
		
		document.getElementById('centerright').innerHTML = xmlReq.responseText; 
		 
		
		
	} 
}
 
xmlReq.open(f.method, f.action, true); 
xmlReq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
xmlReq.send(formData); 
return false; 
}

function submitForm2(f, jmlLeg)
{ 
	for(i=0;i<=jmlLeg;i++)
	{
		if(i==0)
		{
						
			if(getSelectedRadio(document.pilihPenerbangan.flightBerangkatPergi) == -1)
			{
				alert("Anda Belum Memilih Penerbangan Pergi");
				return false;
			}
		}
		else
		{
						
			if(getSelectedRadio(document.pilihPenerbangan.flightBerangkatKembali) == -1)
			{
				alert("Anda Belum Memilih Penerbangan Kembali");
				return false;
			}
		}
	}
}

</script>

<script src="http://www.batavia-air.com/public/etiket/jquery/lib/jquery-1.3.2.js" type="text/javascript"></script>

<script type="text/javascript">
jQuery.noConflict();
</script>
<script type="text/javascript" src="http://www.batavia-air.com/public/etiket/jquery/ui/ui.datepicker.js"></script>
<link type="text/css" href="http://www.batavia-air.com/public/etiket/jquery/themes/cupertino/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="http://www.batavia-air.com/public/etiket/jquery/ui/ui.core.js"></script>
<script type="text/javascript" src="http://www.batavia-air.com/public/etiket/jquery/ui/jquery.form.js"></script>
<script language="javascript" type="text/javascript">
jQuery(document).ready(function()
{
	jQuery("#kalenderPergi").datepicker(
	{
		showOn: 'button', 
		changeMonth: true,
		changeYear: true,
		buttonImage: 'http://www.batavia-air.com/public/etiket/jquery/calendar.png', 
		buttonImageOnly: true, //dateFormat: 'dd-M-y'
		dateFormat: 'd/m/y',
		minDate: 'Y',
		maxDate: '+1Y-1M'
	});
		
	jQuery("#kalenderPergi").change(function(){
	
		var tanggalBerangkat = jQuery("#kalenderPergi").val();
		var tglbrkt = tanggalBerangkat.split("/");
		
		jQuery("#tglBerangkatPergi option").each(function() {
			
			if(this.value == tglbrkt[0])
			{
				jQuery("select#tglBerangkatPergi option[selected]").removeAttr("selected");
				jQuery("#tglBerangkatPergi option[value=" + tglbrkt[0] +"]").attr("selected","selected") ;
			}
		});
		
		jQuery("#blnthnBerangkatPergi option").each(function() {
	
			if(this.value == tglbrkt[1]+"/"+tglbrkt[2])
			{
				jQuery("select#blnthnBerangkatPergi option[selected]").removeAttr("selected");
				jQuery("#blnthnBerangkatPergi option[value=" + tglbrkt[1]+"/"+tglbrkt[2] +"]").attr("selected","selected") ;
			}
		});
		
	});
		

	jQuery("#kalenderKembali").datepicker({
		showOn: 'button', 
		changeMonth: true,
		changeYear: true,
		buttonImage: 'http://www.batavia-air.com/public/etiket/jquery/calendar.png', 
		buttonImageOnly: true, //dateFormat: 'dd-M-y'
		dateFormat: 'd/m/y',
		minDate: 'Y',
		maxDate: '+2Y-1M'
	});
	
	if(jQuery("#ruteKembali").val() == 'kembali')
	{
		jQuery('#kalenderKembali').datepicker('disable');
	}
	else
	{
		jQuery('#kalenderKembali').datepicker('enable');
	}	
	
	jQuery("#ruteKembali").change(function() {
		
		if(jQuery("#ruteKembali").val() != 'kembali')
		{
			jQuery('#kalenderKembali').datepicker('enable');
		}
		else
		{
			jQuery('#kalenderKembali').datepicker('disable');
		}
	});
	
	jQuery("#kalenderKembali").change(function(){
	
		var tanggalKembali = jQuery("#kalenderKembali").val();
		var tglkmbli = tanggalKembali.split("/");
		
		jQuery("#tglBerangkatKembali option").each(function() {
			
			if(this.value == tglkmbli[0])
			{
				jQuery("select#tglBerangkatKembali option[selected]").removeAttr("selected");
				jQuery("#tglBerangkatKembali option[value=" + tglkmbli[0] +"]").attr("selected","selected") ;
			}
		});
		
		jQuery("#blnthnBerangkatKembali option").each(function() {
	
			if(this.value == tglkmbli[1]+"/"+tglkmbli[2])
			{
				jQuery("select#blnthnBerangkatKembali option[selected]").removeAttr("selected");
				jQuery("#blnthnBerangkatKembali option[value=" + tglkmbli[1]+"/"+tglkmbli[2] +"]").attr("selected","selected") ;
			}
		});
		
	});
	
});
</script>
<h1>BATAVIA</h1>
<form name="searchbook" action="javascript:get(document.getElementById('searchbook'));" >
<input type="hidden" name="page" id="page" value="booking" />
<table id="SearchBook">
  <tr>

    <td colspan="3" align="left" valign="top"><span class="style1">
      <label></label>
      </span></td>
    </tr>  
  <tr>
    <td colspan="3" align="left" valign="top"><span class="style9">Kota Berangkat:</span></td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="top"><span class="style5 style7">

      <select name="ruteBerangkat" id="ruteBerangkat" onchange="return changeTujuan();">
        <option value="berangkat">Pilih Rute Berangkat</option>
                <option value="AMQ" 
		 >Ambon</option>
                <option value="BPN" 
		 >BalikPapan</option>
                <option value="BTJ" 
		 >Banda Aceh</option>
                <option value="BDJ" 
		 >Banjarmasin</option>

                <option value="BTH" 
		 >Batam</option>
                <option value="BKS" 
		 >Bengkulu</option>
                <option value="BEJ" 
		 >Berau</option>
                <option value="DPS" 
		 >Denpasar</option>
                <option value="ENE" 
		 >Ende</option>
                <option value="GTO" 
		 >Gorontalo</option>

                <option value="CAN" 
		 >Guangzhou</option>
                <option value="CGK" 
		 >Jakarta</option>
                <option value="DJB" 
		 >Jambi</option>
                <option value="DJJ" 
		 >Jayapura</option>
                <option value="JED" 
		 >Jeddah</option>
                <option value="KDI" 
		 >Kendari</option>

                <option value="KCH" 
		 >Kuching</option>
                <option value="KOE" 
		 >Kupang</option>
                <option value="LBJ" 
		 >Labuanbajo</option>
                <option value="TKG" 
		 >Lampung</option>
                <option value="LUW" 
		 >Luwuk</option>
                <option value="MLG" 
		 >Malang</option>

                <option value="MDC" 
		 >Manado</option>
                <option value="MKW" 
		 >Manokwari</option>
                <option value="AMI" 
		 >Mataram</option>
                <option value="MOF" 
		 >Maumere</option>
                <option value="MES" 
		 >Medan</option>
                <option value="PDG" 
		 >Padang</option>

                <option value="PKY" 
		 >Palangkaraya</option>
                <option value="PLM" 
		 >Palembang</option>
                <option value="PLW" 
		 >Palu</option>
                <option value="PGK" 
		 >Pangkalpinang</option>
                <option value="PKU" 
		 >Pekanbaru</option>
                <option value="PNK" 
		 >Pontianak</option>

                <option value="RUH" 
		 >Riyadh</option>
                <option value="SRI" 
		 >Samarinda</option>
                <option value="SRG" 
		 >Semarang</option>
                <option value="SIN" 
		 >Singapore</option>
                <option value="SOC" 
		 >Solo</option>
                <option value="SOQ" 
		 >Sorong</option>

                <option value="SUB" 
		 >Surabaya</option>
                <option value="TJQ" 
		 >Tanjung Pandan</option>
                <option value="TRK" 
		 >Tarakan</option>
                <option value="TTE" 
		 >Ternate</option>
                <option value="UPG" 
		 >UjungPandang</option>
                <option value="WGP" 
		 >Waingapu</option>

                <option value="JOG" 
		 >Yogyakarta</option>
              </select>
    </span></td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="top">
      <span class="style9">Kota Tujuan:</span></td>
  </tr>

  <tr>
    <td colspan="3" align="left">
      <select name="ruteTujuan" id="ruteTujuan" onchange="return changeKembali();">
        <option value="tujuan">Pilih Rute Tujuan</option>
      </select>
    </span></td>
  </tr>
  <tr>

    <td colspan="3" align="left" valign="top">
      <span class="style9">Kota Kembali:</span></td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="top"><span class="style7">
      <select name="ruteKembali" id="ruteKembali" onchange="valueKembali()">
        <option value="kembali">Pilih Rute Kembali</option>
      </select>

    </span></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top"><span class="style9">Tanggal Berangkat</span></td>
  </tr>
  <tr>
    <td>
        <div align="left">

          <select name="tglBerangkatPergi" id="tglBerangkatPergi" onChange="valueKembali()" >
                        <option value="1" 
			>
            1			</option>
                        <option value="2" 
			>
            2			</option>
                        <option value="3" 
			>
            3			</option>

                        <option value="4" 
			>
            4			</option>
                        <option value="5" 
			>
            5			</option>
                        <option value="6" 
			>
            6			</option>
                        <option value="7" 
			>

            7			</option>
                        <option value="8" 
			>
            8			</option>
                        <option value="9" 
			>
            9			</option>
                        <option value="10" 
			>
            10			</option>

                        <option value="11" 
			>
            11			</option>
                        <option value="12" 
			>
            12			</option>
                        <option value="13" 
			>
            13			</option>
                        <option value="14" 
			>

            14			</option>
                        <option value="15" 
			>
            15			</option>
                        <option value="16" 
			>
            16			</option>
                        <option value="17" 
			selected="selected">
            17			</option>

                        <option value="18" 
			>
            18			</option>
                        <option value="19" 
			>
            19			</option>
                        <option value="20" 
			>
            20			</option>
                        <option value="21" 
			>

            21			</option>
                        <option value="22" 
			>
            22			</option>
                        <option value="23" 
			>
            23			</option>
                        <option value="24" 
			>
            24			</option>

                        <option value="25" 
			>
            25			</option>
                        <option value="26" 
			>
            26			</option>
                        <option value="27" 
			>
            27			</option>
                        <option value="28" 
			>

            28			</option>
                        <option value="29" 
			>
            29			</option>
                        <option value="30" 
			>
            30			</option>
                        <option value="31" 
			>
            31			</option>

            	
          </select>
        </div></td>
    	<td>
		<div align="left"><span class="style7">
		<select name="blnthnBerangkatPergi" id="blnthnBerangkatPergi" onChange="tanggalan()">
        				<option value="9/10" 
		
		>Sep 2010</option>
						<option value="10/10" 
		
		>Oct 2010</option>
						<option value="11/10" 
		
		>Nov 2010</option>

						<option value="12/10" 
		
		>Dec 2010</option>
						<option value="1/11" 
		
		>Jan 2011</option>
						<option value="2/11" 
		
		>Feb 2011</option>
						<option value="3/11" 
		
		>Mar 2011</option>
						<option value="4/11" 
		
		>Apr 2011</option>
						<option value="5/11" 
		
		>May 2011</option>

						<option value="6/11" 
		
		>Jun 2011</option>
						<option value="7/11" 
		
		>Jul 2011</option>
						<option value="8/11" 
		
		>Aug 2011</option>
			 </select>
	 <input type="hidden" name="kalenderPergi" id="kalenderPergi">
    </span></div>
	</td>

  </tr>
	<div id="jadwalKembali">
  <tr>
    <td colspan="2" align="left" valign="top"><span class="style9">Tanggal Kembali:</span></td>
  </tr>
  <tr>
    <td>
      <div align="left" class="style7">

        <select name="tglBerangkatKembali" id="tglBerangkatKembali">
                    <option value="1" 
		  >1</option>
                    <option value="2" 
		  >2</option>
                    <option value="3" 
		  >3</option>
                    <option value="4" 
		  >4</option>
                    <option value="5" 
		  >5</option>

                    <option value="6" 
		  >6</option>
                    <option value="7" 
		  >7</option>
                    <option value="8" 
		  >8</option>
                    <option value="9" 
		  >9</option>
                    <option value="10" 
		  >10</option>
                    <option value="11" 
		  >11</option>

                    <option value="12" 
		  >12</option>
                    <option value="13" 
		  >13</option>
                    <option value="14" 
		  >14</option>
                    <option value="15" 
		  >15</option>
                    <option value="16" 
		  >16</option>
                    <option value="17" 
		  selected="selected">17</option>

                    <option value="18" 
		  >18</option>
                    <option value="19" 
		  >19</option>
                    <option value="20" 
		  >20</option>
                    <option value="21" 
		  >21</option>
                    <option value="22" 
		  >22</option>
                    <option value="23" 
		  >23</option>

                    <option value="24" 
		  >24</option>
                    <option value="25" 
		  >25</option>
                    <option value="26" 
		  >26</option>
                    <option value="27" 
		  >27</option>
                    <option value="28" 
		  >28</option>
                    <option value="29" 
		  >29</option>

                    <option value="30" 
		  >30</option>
                    <option value="31" 
		  >31</option>
          	
        </select>
      </div></td>
    <td align="left" valign="top"><div align="left"><span class="style7">
    <select name="blnthnBerangkatKembali" id="blnthnBerangkatKembali" onChange="tanggalan1()">
        				<option value="9/10" 
		
		>Sep 2010</option>

						<option value="10/10" 
		
		>Oct 2010</option>
						<option value="11/10" 
		
		>Nov 2010</option>
						<option value="12/10" 
		
		>Dec 2010</option>
						<option value="1/11" 
		
		>Jan 2011</option>
						<option value="2/11" 
		
		>Feb 2011</option>
						<option value="3/11" 
		
		>Mar 2011</option>

						<option value="4/11" 
		
		>Apr 2011</option>
						<option value="5/11" 
		
		>May 2011</option>
						<option value="6/11" 
		
		>Jun 2011</option>
						<option value="7/11" 
		
		>Jul 2011</option>
						<option value="8/11" 
		
		>Aug 2011</option>
						<option value="9/11" 
		
		>Sep 2011</option>

						<option value="10/11" 
		
		>Oct 2011</option>
						<option value="11/11" 
		
		>Nov 2011</option>
						<option value="12/11" 
		
		>Dec 2011</option>
						<option value="13/12" 
		
		>Jan 2012</option>
						<option value="14/12" 
		
		>Feb 2012</option>
						<option value="15/12" 
		
		>Mar 2012</option>

						<option value="16/12" 
		
		>Apr 2012</option>
						<option value="17/12" 
		
		>May 2012</option>
						<option value="18/12" 
		
		>Jun 2012</option>
						<option value="19/12" 
		
		>Jul 2012</option>
						<option value="20/12" 
		
		>Aug 2012</option>
			 </select>

	  <input type="hidden" name="kalenderKembali" id="kalenderKembali">
    </span></div></td>
  </tr>
  </div>
  <tr>
    <td colspan="3"><div align="left"><span class="style9">Jumlah Penumpang:</span></div></td>
  </tr>
  <tr>

    <td colspan="3"><div align="left"><span class="style9">Dewasa:</span></div></td>
  </tr>
  <tr>
    <td colspan="3">
      <div align="left">
        <select name="jmlPenumpang" id="jmlPenumpang">
                    <option value="1"
						>1 Tamu</option>
                    <option value="2"
						>2 Tamu</option>

                    <option value="3"
						>3 Tamu</option>
                    <option value="4"
						>4 Tamu</option>
                    <option value="5"
						>5 Tamu</option>
                    <option value="6"
						>6 Tamu</option>
                    <option value="7"
						>7 Tamu</option>
                  </select>

      </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left"><span class="style9">Bayi*:</span></div></td>
  </tr>
  <tr>
    <td colspan="3">
      <div align="left">

        <select name="jmlInfant" id="jmlInfant">
                    <option value="0"
		  		  >
            0 Bayi (3 - 23 bulan)            </option>
                    <option value="1"
		  		  >
            1 Bayi (3 - 23 bulan)            </option>
                    <option value="2"
		  		  >
            2 Bayi (3 - 23 bulan)            </option>

                    <option value="3"
		  		  >
            3 Bayi (3 - 23 bulan)            </option>
                    <option value="4"
		  		  >
            4 Bayi (3 - 23 bulan)            </option>
                  </select>
      </div></td>
  </tr>
  <tr>

    <td colspan="3"><div align="left"><span class="style9">*Untuk bayi dibawah 3 bulan, harap menghubungi Call Centre kami di 021-38999888</span></div></td>
  </tr>
  <tr>
    <td colspan="3">
		<input type="submit" class="caripenerbangan" name="Submit" id="Submit" value="Cari Penerbangan" />	</td>
  </tr>
</table>
</form>
<script type="text/javascript" src="kirimin.js"></script>
<span id="informasi"></span>
<script language="javascript">
document.searchbook.tglBerangkatKembali.disabled = true;
document.searchbook.blnthnBerangkatKembali.disabled = true;
tanggalan();
changeTujuan();

</script>
</div>		

</body></html>



