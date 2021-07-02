<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: large;
}
.auto-style2 {
	text-align: center;
}
.auto-style3 {
	font-size: medium;
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
}
.auto-style4 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
}
.auto-style5 {
	text-align: center;
	font-size: large;
}
</style>
</head>

<body>

<table style="width: 100%">
	<tr>
		<td class="auto-style2" style="height: 26px">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Lambang_Kabupaten_Hulu_Sungai_Utara.png" width="80px">
		<h2><span class="auto-style1">PEMERINTAH KABUPATEN HULU SUNGAI UTARA</span><br class="auto-style1" />
		<span class="auto-style1">BADAN KEPEGAWAIAN PENDIDIKAN DAN PELATIHAN 
		(BKPP)</span></h2>
		</td>
	</tr>
</table>
<p class="auto-style5"><strong>PENILAIAN TAHUN : {{$data->tahun}}</strong></p>
<table style="width: 100%">
	<tr>
		<td class="auto-style3" style="width: 210px"><strong>Pegawai Yang 
		Dinilai</strong></td>
		<td class="auto-style4" style="width: 413px">&nbsp;</td>
		<td class="auto-style4" style="width: 205px">&nbsp;</td>
		<td class="auto-style4">&nbsp;</td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 210px"><strong>NIP</strong></td>
		<td class="auto-style4" style="width: 413px">: {{$data->pegawai->nip}}</td>
		<td class="auto-style3" style="width: 205px"><strong>Nilai SKP</strong></td>
		<td class="auto-style4">: {{$data->nilai_skp}}</td>
	</tr>
	<tr>
		<td class="auto-style3" style="height: 26px; width: 210px"><strong>Nama</strong></td>
		<td style="height: 26px; width: 413px">: {{$data->pegawai->nama}}</td>
		<td class="auto-style3" style="height: 26px; width: 205px"><strong>Nilai 
		perilaku Kerja</strong></td>
		<td style="height: 26px">: {{$data->nilai_perilaku}}</td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 210px"><strong>Pangkat</strong></td>
		<td class="auto-style4" style="width: 413px">: {{$data->pegawai->pangkat}}</td>
		<td class="auto-style3" style="width: 205px"><strong>Nilai Kinerja 
		Pgawai</strong></td>
		<td class="auto-style4">: {{$data->nilai_kinerja}}</td>
	</tr>
	<tr>
		<td class="auto-style3" style="height: 26px; width: 210px"><strong>
		Jabatan</strong></td>
		<td style="height: 26px; width: 413px">: {{$data->pegawai->jabatan}}</td>
		<td style="height: 26px; width: 205px"></td>
		<td style="height: 26px">:</td>
	</tr>
</table>

<table style="width: 100%">
	<tr>
		<td class="auto-style3" style="width: 210px"><strong>Pejabat Penilai</strong></td>
		<td class="auto-style4">&nbsp;</td>
		<td class="auto-style4">&nbsp;</td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 170px"><strong>NIP</strong></td>
		<td class="auto-style4">: {{$data->penilai->nip}}</td>
		<td class="auto-style3">&nbsp;</td>
	</tr>
	<tr>
		<td class="auto-style3" style="height: 26px; width: 170px"><strong>Nama</strong></td>
		<td style="height: 26px">: {{$data->penilai->nama}}</td>
		<td class="auto-style3" style="height: 26px">&nbsp;</td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 170px"><strong>Pangkat</strong></td>
		<td class="auto-style4">: {{$data->penilai->pangkat}}</td>
		<td class="auto-style3">&nbsp;</td>
	</tr>
	<tr>
		<td class="auto-style3" style="height: 26px; width: 170px"><strong>
		Jabatan</strong></td>
		<td style="height: 26px">: {{$data->penilai->jabatan}}</td>
		<td style="height: 26px"></td>
	</tr>
</table>
<p>&nbsp;&nbsp;&nbsp;
<table style="width: 100%">
	<tr>
		<td>&nbsp;</td>
		<td style="width: 865px">&nbsp;</td>
		<td>Amuntai, {{\Carbon\Carbon::today()->format('d M Y')}}</td>
	</tr>
</table>
</p>
<table style="width: 100%">
	<tr>
		<td>Pegawai Yang Dinilai<br />
		<br />
		<br />
		Nama : {{$data->pegawai->nama}}<br />
		NIP&nbsp;&nbsp;&nbsp; : {{$data->pegawai->nip}}</td>
		<td>Pejabat Penilai<br />
		<br />
		<br />
		Nama : {{$data->penilai->nama}}<br />
		NIP&nbsp;&nbsp;&nbsp; : {{$data->penilai->nip}}</td>
	</tr>
</table>

</body>

</html>
