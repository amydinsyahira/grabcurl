<form name="cekharga" action="cekharga.php" method="post" id="cekharga" >
<input name="airline" type="hidden" value="Y6">
<div id="jadwalKembali">
  </div><table class="style5" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
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
                <option value="AMQ">Ambon</option>
                <option value="BPN">BalikPapan</option>
                <option value="BTJ">Banda Aceh</option>
                <option value="BDJ">Banjarmasin</option>
                <option value="BTH">Batam</option>

                <option value="BKS">Bengkulu</option>
                <option value="BEJ">Berau</option>
                <option value="DPS">Denpasar</option>
                <option value="ENE">Ende</option>
                <option value="GTO">Gorontalo</option>
                <option value="CAN">Guangzhou</option>

                <option value="CGK">Jakarta</option>
                <option value="DJB">Jambi</option>
                <option value="DJJ">Jayapura</option>
                <option value="JED">Jeddah</option>
                <option value="KDI">Kendari</option>
                <option value="KCH">Kuching</option>

                <option value="KOE">Kupang</option>
                <option value="LBJ">Labuanbajo</option>
                <option value="TKG">Lampung</option>
                <option value="LUW">Luwuk</option>
                <option value="MLG">Malang</option>
                <option value="MDC">Manado</option>

                <option value="MKW">Manokwari</option>
                <option value="AMI">Mataram</option>
                <option value="MOF">Maumere</option>
                <option value="MES">Medan</option>
                <option value="PDG">Padang</option>
                <option value="PKY">Palangkaraya</option>

                <option value="PLM">Palembang</option>
                <option value="PLW">Palu</option>
                <option value="PGK">Pangkalpinang</option>
                <option value="PKU">Pekanbaru</option>
                <option value="PNK">Pontianak</option>
                <option value="RUH">Riyadh</option>

                <option value="SRI">Samarinda</option>
                <option value="SRG">Semarang</option>
                <option value="SIN">Singapore</option>
                <option value="SOC">Solo</option>
                <option value="SOQ">Sorong</option>
                <option value="SUB">Surabaya</option>

                <option value="TJQ">Tanjung Pandan</option>
                <option value="TNJ">Tanjung Pinang</option>
                <option value="TRK">Tarakan</option>
                <option value="TTE">Ternate</option>
                <option value="UPG">UjungPandang</option>
                <option value="WGP">Waingapu</option>

                <option value="JOG">Yogyakarta</option>
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
        
      <option value="tujuan">Pilih Rute Tujuan</option><option value="AMQ">Ambon</option><option value="BPN">BalikPapan</option><option value="BTJ">Banda Aceh</option><option value="BDJ">Banjarmasin</option><option value="BTH">Batam</option><option value="BKS">Bengkulu</option><option value="DPS">Denpasar</option><option value="GTO">Gorontalo</option><option value="CAN">Guangzhou</option><option value="DJB">Jambi</option><option value="DJJ">Jayapura</option><option value="JED">Jeddah</option><option value="KDI">Kendari</option><option value="KOE">Kupang</option><option value="TKG">Lampung</option><option value="LUW">Luwuk</option><option value="MLG">Malang</option><option value="MDC">Manado</option><option value="MKW">Manokwari</option><option value="AMI">Mataram</option><option value="MES">Medan</option><option value="PDG">Padang</option><option value="PKY">Palangkaraya</option><option value="PLM">Palembang</option><option value="PLW">Palu</option><option value="PGK">Pangkalpinang</option><option value="PKU">Pekanbaru</option><option value="PNK">Pontianak</option><option value="RUH">Riyadh</option><option value="SRG">Semarang</option><option value="SIN">Singapore</option><option value="SOC">Solo</option><option value="SOQ">Sorong</option><option value="SUB">Surabaya</option><option value="TJQ">Tanjung Pandan</option><option value="TNJ">Tanjung Pinang</option><option value="TRK">Tarakan</option><option value="TTE">Ternate</option><option value="UPG">UjungPandang</option><option value="JOG">Yogyakarta</option></select>

    </td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="top">
      <span class="style9">Kota Kembali:</span></td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="top"><span class="style7">

      <select name="ruteKembali" id="ruteKembali" onchange="valueKembali()">
        
      <option value="kembali">Pilih Rute Kembali</option><option value="AMQ">Ambon</option><option value="BPN">BalikPapan</option><option value="BDJ">Banjarmasin</option><option value="BTH">Batam</option><option value="BEJ">Berau</option><option value="DPS">Denpasar</option><option value="GTO">Gorontalo</option><option value="CGK">Jakarta</option><option value="KOE">Kupang</option><option value="LUW">Luwuk</option><option value="MDC">Manado</option><option value="AMI">Mataram</option><option value="MOF">Maumere</option><option value="PKY">Palangkaraya</option><option value="PLW">Palu</option><option value="PNK">Pontianak</option><option value="SOQ">Sorong</option><option value="TRK">Tarakan</option><option value="TTE">Ternate</option><option value="UPG">UjungPandang</option><option value="WGP">Waingapu</option><option value="JOG">Yogyakarta</option></select>

    </span></td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="top"><span class="style9">Tanggal Berangkat</span></td>
  </tr>
  <tr>
    <td>
      
        <div align="left">

          <select name="tglBerangkatPergi" id="tglBerangkatPergi" onchange="valueKembali()">
                        <option value="1">
              1            </option>
                        <option value="2">
              2            </option>
                        <option value="3">
              3            </option>

                        <option value="4">
              4            </option>
                        <option value="5">
              5            </option>
                        <option value="6">
              6            </option>
                        <option value="7">

              7            </option>
                        <option value="8">
              8            </option>
                        <option value="9">
              9            </option>
                        <option value="10">
              10            </option>

                        <option value="11">
              11            </option>
                        <option value="12">
              12            </option>
                        <option value="13">
              13            </option>
                        <option value="14">

              14            </option>
                        <option value="15">
              15            </option>
                        <option value="16" selected="selected">
              16            </option>
                        <option value="17">
              17            </option>

                        <option value="18">
              18            </option>
                        <option value="19">
              19            </option>
                        <option value="20">
              20            </option>
                        <option value="21">

              21            </option>
                        <option value="22">
              22            </option>
                        <option value="23">
              23            </option>
                        <option value="24">
              24            </option>

                        <option value="25">
              25            </option>
                        <option value="26">
              26            </option>
                        <option value="27">
              27            </option>
                        <option value="28">

              28            </option>
                        <option value="29">
              29            </option>
                        <option value="30">
              30            </option>
                        <option value="31">
              31            </option>

            	
          </select>
        </div></td>
    <td><div align="left"><span class="style7">
      <select name="blnBerangkatPergi" id="blnBerangkatPergi" onchange="tanggalan()">
                <option value="1">Jan</option>
                <option value="2">Feb</option>
                <option value="3">Mar</option>

                <option value="4">Apr</option>
                <option value="5">May</option>
                <option value="6">Jun</option>
                <option value="7">Jul</option>
                <option value="8">Aug</option>
                <option value="9">Sep</option>

                <option value="10">Oct</option>
                <option value="11" selected="selected">Nov</option>
                <option value="12">Dec</option>
              </select>
    </span></div></td>
    <td><div align="left"><span class="style7">
      <select name="thnBerangkatPergi" id="thnBerangkatPergi" onchange="tanggalan()">

                <option value="10" selected="selected">2010</option>
                <option value="11">2011</option>
              </select>
    </span></div></td>
  </tr>
	<tr>
    <td colspan="3" align="left" valign="top"><span class="style9">Tanggal Kembali:</span></td>

  </tr>
  <tr>
    <td>
      <div class="style7" align="left">
        <select name="tglBerangkatKembali" id="tglBerangkatKembali" onchange="tanggalan1()">
          <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option></select>

      </div></td>
    <td align="left" valign="top"><span class="style7">
    <select name="blnBerangkatKembali" id="blnBerangkatKembali" onchange="tanggalan1()">
       <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option selected="selected" value="11">Nov</option><option value="12">Dec</option></select>

    </span></td>
    <td align="left" valign="top"><div align="left"><span class="style7">
      <select name="thnBerangkatKembali" id="thnBerangkatKembali" onchange="tanggalan1()">
                <option value="10" selected="selected">2010</option>
                <option value="11">2011</option>
              </select>
    </span></div></td>
  </tr>

  
  <tr>
    <td colspan="3"><div align="left"><span class="style9">Jumlah Penumpang:</span></div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left"><span class="style9">Dewasa:</span></div></td>
  </tr>
  <tr>
    <td colspan="3">

      <div align="left">
	   <label id="paxValue"><label><select name="jmlPenumpang"><option value="1">1 Tamu</option><option value="2">2 Tamu</option><option value="3">3 Tamu</option><option value="4">4 Tamu</option><option value="5">5 Tamu</option><option value="6">6 Tamu</option><option value="7">7 Tamu</option></select></label></label>
       <label id="paxValue2"></label>
       <label id="childValue"></label></div></td>
  </tr>

  <tr>
    <td colspan="3"><div align="left"><span class="style9">Bayi*:</span></div></td>
  </tr>
  <tr>
    <td colspan="3">
      <div align="left">
        <select name="jmlInfant" id="jmlInfant">
          		            <option value="0">

            0 Bayi (3 - 23 bulan)            </option>
                    <option value="1">
            1 Bayi (3 - 23 bulan)            </option>
                    <option value="2">
            2 Bayi (3 - 23 bulan)            </option>
                    <option value="3">
            3 Bayi (3 - 23 bulan)            </option>

                    <option value="4">
            4 Bayi (3 - 23 bulan)            </option>
          		          </select>
      </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="left"><span class="style9">*Untuk bayi dibawah 3 bulan, harap menghubungi Call Centre kami di +62-21-38999888</span></div></td>
  </tr>

  <tr>
    <td colspan="3">
		<input class="caripenerbangan" name="Submit" value="Cari Penerbangan!" type="submit">	</td>
  </tr>
</tbody></table>
</form>
<!--

POST /MyPage/booking/cariBookAjaxPros.php ruteBerangkat=CGK&ruteTujuan=SUB&ruteKembali=CGK&tglBerangkatPergi=19&blnBerangkatPergi=11&thnBerangkatPergi=10&tglBerangkatKembali=25&blnBerangkatKembali=11&thnBerangkatKembali=10&jmlPenumpang=1&jmlInfant=0&Submit=Cari Penerbangan!

http://222.124.141.98/MyPage/booking/cariBookAjaxPros.php
-->
