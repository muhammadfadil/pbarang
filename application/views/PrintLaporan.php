<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE></TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">
	<META NAME="AUTHOR" CONTENT="hp">
	<META NAME="CREATED" CONTENT="20160111;2600000000000">
	<META NAME="CHANGEDBY" CONTENT="StupidLaptop">
	<META NAME="CHANGED" CONTENT="20181130;115500000000000">
	<META NAME="AppVersion" CONTENT="16.0000">
	<META NAME="DocSecurity" CONTENT="0">
	<META NAME="HyperlinksChanged" CONTENT="false">
	<META NAME="LinksUpToDate" CONTENT="false">
	<META NAME="ScaleCrop" CONTENT="false">
	<META NAME="ShareDoc" CONTENT="false">
	<STYLE>
	<!--
		@page { size: 8.5in 14in; margin-left: 1in; margin-right: 1in; margin-top: 1.38in; margin-bottom: 1in }
		P { margin-bottom: 0.08in; direction: ltr; line-height: 100%; widows: 2; orphans: 2 }
		P.western { font-family: "Times New Roman", serif; font-size: 12pt; so-language: en-US }
		P.cjk { font-family: "Times New Roman"; font-size: 12pt }
		P.ctl { font-family: "Times New Roman"; font-size: 12pt }
	-->
	.row{
		background-color:#bfbfbf;
		-webkit-print-color-adjust: exact; 
	}
	</STYLE>
</HEAD>
<?php
  foreach($view_Mlaporan as $detail){
	$day = date('D', strtotime($detail->tanggal));
	$dayList = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
	);
	$M = date('M', strtotime($detail->tanggal));
	$MList = array(
	'Dec' => 'Desember',
	'Nov' => 'November',
	'Oct' => 'Oktober',
	'Sept' => 'September',
	'Aug' => 'Agustus',
	'Jul' => 'Juli',
	'Jun' => 'Juni',
	'May' => 'Mei',
	'Apr' => 'April',
	'Mar' => 'Maret',
	'Feb' => 'Februari',
	'Jan' => 'Januari'
	);
	$d = date('d', strtotime($detail->tanggal));
	$Y = date('Y', strtotime($detail->tanggal));
?>
<BODY LANG="id-ID" DIR="LTR" onload="window.print()">
<P LANG="en-US" CLASS="western" ALIGN=CENTER >
<SPAN LANG="id-ID"><U><B>BERITA ACARA PENGGUNAAN PERALATAN MONITORING </B></U></SPAN><br/>
<SPAN LANG="sv-SE">NOMOR : </SPAN><SPAN LANG="id-ID"><?php echo $detail->no_pb; ?></SPAN></P>

<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY STYLE="margin-bottom: 0in">
Pada hari ini<SPAN LANG="id-ID"> </SPAN><?php echo $dayList[$day]; ?> tanggal <?php echo terbilang($d); ?>
 bulan <?php echo $MList[$M]; ?>  tahun <?php echo terbilang($Y); ?> <SPAN LANG="id-ID">berdasarkan
SPT Nomor : </SPAN><?php echo $detail->no_spt; ?></SPAN>
<SPAN LANG="id-ID">Tanggal </SPAN><?php echo date_indo($detail->tanggal); ?> <SPAN LANG="id-ID"><?php echo $detail->tujuan ?>.</SPAN>
</br>masing–masing yang bertanda tangan di bawah ini :</SPAN> 
</P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in">
</P>

	<TABLE WIDTH=631 CELLPADDING=2 CELLSPACING=0>
		<TR VALIGN=TOP>
			<TD COLSPAN=2 WIDTH=250 STYLE="border: none; padding: 0in">
				<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY>
				<SPAN LANG="id-ID">1.	<?php echo $detail->nama1; ?></SPAN></P>
			</TD>
			<TD COLSPAN=1 STYLE="border: none; padding: 0in">
				<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY>
				<SPAN LANG="id-ID">: &nbsp;</SPAN></P>
			</TD>
			<TD COLSPAN=3 WIDTH=284 STYLE="border: none; padding: 0in">
				<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY>
				<SPAN LANG="id-ID">AN. Kabalmon Spektrum
				Frekuensi Radio Kls II Lampung Selaku Kuasa Izin Peminjam Barang
				Jl. Kramat Jaya KM. 14 No.9 Hajimena, Natar Selanjutnya disebut <B>PIHAK
				PERTAMA</B></SPAN></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD COLSPAN=2 WIDTH=250 STYLE="border: none; padding: 0in">
				<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY>
				<SPAN LANG="id-ID">2.	<?php echo $detail->nama2; ?></SPAN></P>
			</TD>
			<TD COLSPAN=1 STYLE="border: none; padding: 0in">
				<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY>
				<SPAN LANG="id-ID">: &nbsp;</SPAN></P>
			</TD>
			<TD COLSPAN=3 WIDTH=284 STYLE="border: none; padding: 0in">
				<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY>
				<SPAN LANG="id-ID">Selaku Pengendali Frekuensi Radio
				Balmon Spektrum Frekuensi Radio Kls II Lampung	Jl. Kramat Jaya KM.14 No. 9 Hajimena, Natar	Selanjutnya disebut <B>PIHAK
				KEDUA</B></SPAN></P>
			</TD>
		</TR>
	</TABLE>

<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY STYLE="margin-bottom: 0in">
<SPAN LANG="id-ID"><B>PIHAK PERTAMA</B></SPAN><SPAN LANG="id-ID">
telah menyerahkan kepada </SPAN><SPAN LANG="id-ID"><B>PIHAK KEDUA</B></SPAN><SPAN LANG="id-ID">
dan  </SPAN><SPAN LANG="id-ID"><B>PIHAK KEDUA</B></SPAN><SPAN LANG="id-ID">
menerima dari </SPAN><SPAN LANG="id-ID"><B>PIHAK PERTAMA</B></SPAN><SPAN LANG="id-ID">
barang tersebut di bawah ini dalam keadaan baik, dan cukup satuan
maupun jumlahnya dengan perincian sebagai berikut :</SPAN></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in">
</P>
<TABLE WIDTH=631 CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=17>
	<COL WIDTH=76>
	<COL WIDTH=100>
	<COL WIDTH=106>
	<COL WIDTH=94>
	<COL WIDTH=46>
	<COL WIDTH=22>
	<COL WIDTH=57>
	<TR class="row">
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>No</B></SPAN></FONT></P>
		</TD>
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>Kode
			Barang</B></SPAN></FONT></P>
		</TD>
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>Nama
			Barang</B></SPAN></FONT></P>
		</TD>
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>Merk/type
			       </B></SPAN></FONT>
			</P>
		</TD>
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>No
			Seri                </B></SPAN></FONT>
			</P>
		</TD>
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>Kondisi
			Barang</B></SPAN></FONT></P>
		</TD>
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>Unit</B></SPAN></FONT></P>
		</TD>
		<TD BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=1 STYLE="font-size: 8pt"><SPAN LANG="id-ID"><B>Keterangan</B></SPAN></FONT></P>
		</TD>
	</TR>
	<?php
	$i=0;
	foreach($view_Dlaporan as $br){
		$i++;
	?>
	<TR>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER><FONT SIZE=2 STYLE="font-size: 9pt"><SPAN LANG="id-ID"><?php echo $i ?></SPAN></FONT></P>
		</TD>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER><FONT SIZE=2 STYLE="font-size: 9pt"><?php echo $br->kode_barang ?></FONT></P>
		</TD>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER STYLE="margin-right: -0.08in">
			<FONT SIZE=2 STYLE="font-size: 9pt"><SPAN LANG="id-ID"><?php echo $br->nama_barang ?></SPAN></FONT></P>
		</TD>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER><FONT SIZE=2 STYLE="font-size: 9pt"><?php echo $br->merk ?></FONT></P>
		</TD>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER><FONT SIZE=2 STYLE="font-size: 9pt"><SPAN LANG="id-ID"><?php echo $br->no_seri ?></SPAN></FONT></P>
		</TD>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER><FONT SIZE=2 STYLE="font-size: 9pt"><SPAN LANG="id-ID"><?php echo $br->kondisi_barang ?></SPAN></FONT></P>
		</TD>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER><FONT SIZE=2 STYLE="font-size: 9pt"><SPAN LANG="id-ID"><?php echo $br->unit ?></SPAN></FONT></P>
		</TD>
		<TD STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P LANG="en-US" CLASS="western" ALIGN=LEFT VALIGN=CENTER><FONT SIZE=2 STYLE="font-size: 9pt"><SPAN LANG="id-ID"><?php echo $br->keterangan ?></SPAN></FONT></P>
		</TD>
	</TR>
	<?php
    }
    ?>
</TABLE>
<P LANG="en-US" CLASS="western" ALIGN=JUSTIFY STYLE="margin-bottom: 0in">
<SPAN LANG="id-ID">Selanjutnya setelah serah terima pinjam pakai
barang ini, <B>PIHAK KEDUA</B> dapat mempergunakan dan selama 3 hari
terhitung sejak tanggal <?php echo date_indo($detail->tanggal); ?> sampai dengan
tanggal <?php echo date_indo($detail->tanggal); ?> <B>PIHAK
KEDUA</B> bertanggung jawab untuk barang Montek tersebut serta sanggup untuk mengembalikan kepada dinas dalam
keadaan baik dan tanpa syarat apapun juga.</br>Apabila terjadi kehilangan atau kerusakan Barang
Milik Negara tersebut, sehingga menimbulkan kerugian negara, <B>PIHAK
KEDUA</B> bertanggung jawab mutlak, dan
tunduk pada peraturan yang berlaku.</br>Demikian Berita Acara Penggunaaan Peralatan
Monitoring ini dibuat menurut keadaan yang sebenarnya.</SPAN></P>
<CENTER>
	<TABLE WIDTH=641 CELLPADDING=7 CELLSPACING=0>
		<COLGROUP>
			<COL WIDTH=97>
		</COLGROUP>
		<COLGROUP>
			<COL WIDTH=118>
		</COLGROUP>
		<COLGROUP>
			<COL WIDTH=41>
			<COL WIDTH=73>
		</COLGROUP>
		<COLGROUP>
			<COL WIDTH=109>
		</COLGROUP>
		<COLGROUP>
			<COL WIDTH=119>
		</COLGROUP>
		<TR VALIGN=TOP>
			<TD COLSPAN=3 WIDTH=284 HEIGHT=91 STYLE="border: none; padding: 0in">
				<P LANG="en-US" ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><SPAN LANG="id-ID"><B>PIHAK
				PERTAMA</B></SPAN></FONT></FONT></FONT></P>
				<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
				</P>
				<P LANG="en-US" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><SPAN LANG="id-ID"><B>	</B></SPAN></FONT></FONT></FONT></P>
				<P LANG="en-US" ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><SPAN LANG="id-ID"><U><B><?php echo $detail->nama1; ?></B></U></SPAN></FONT></FONT></FONT></P>
				<P LANG="en-US" CLASS="western" ALIGN=CENTER >
				<FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="es-ES"><B>NIP.
				</B></SPAN></FONT><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID"><B></B></SPAN></FONT></P>
				<P ALIGN=CENTER><BR>
				</P>
			</TD>
			<TD COLSPAN=3 WIDTH=284 HEIGHT=91 STYLE="border: none; padding: 0in">
				<P LANG="en-US" ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><SPAN LANG="id-ID"><B>PIHAK
				KEDUA</B></SPAN></FONT></FONT></FONT></P>
				<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
				</P>
				<P LANG="en-US" STYLE="margin-bottom: 0in"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><SPAN LANG="id-ID"><B>	</B></SPAN></FONT></FONT></FONT></P>
				<P LANG="en-US" ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Calibri, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Times New Roman, serif"><SPAN LANG="id-ID"><U><B><?php echo $detail->nama2; ?></B></U></SPAN></FONT></FONT></FONT></P>
				<P LANG="en-US" CLASS="western" ALIGN=CENTER >
				<FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="es-ES"><B>NIP.
				</B></SPAN></FONT><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="id-ID"><B></B></SPAN></FONT></P>
				<P ALIGN=CENTER><BR>
				</P>
			</TD>
		</TR>
		<?php
            }
        ?>
		<TR>
			<TD COLSPAN=6 WIDTH=627 HEIGHT=20 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
				<P LANG="en-US" CLASS="western" ALIGN=CENTER><FONT SIZE=2><SPAN LANG="id-ID">Paraf
				Peminjam Barang</SPAN></FONT></P>
			</TD>
		</TR>
		<TR>
			<TD COLSPAN=6 WIDTH=627 HEIGHT=20 BGCOLOR="#ffffff" STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
				<P CLASS="western" ALIGN=CENTER><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=97 HEIGHT=30 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
				<P CLASS="western" ALIGN=JUSTIFY><BR>
				</P>
			</TD>
			<TD WIDTH=118 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
				<P CLASS="western" ALIGN=JUSTIFY STYLE="margin-right: -0.08in"><BR>
				</P>
			</TD>
			<TD COLSPAN=2 WIDTH=128 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
				<P CLASS="western" ALIGN=JUSTIFY><BR>
				</P>
			</TD>
			<TD WIDTH=109 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
				<P CLASS="western" ALIGN=JUSTIFY><BR>
				</P>
			</TD>
			<TD WIDTH=119 STYLE="border: 1px solid #00000a; padding: 0in 0.08in">
				<P CLASS="western" ALIGN=JUSTIFY><BR>
				</P>
			</TD>
		</TR>
	</TABLE>
</CENTER>
<P LANG="en-US" CLASS="western" STYLE="margin-bottom: 0in"><BR>
</P>
</BODY>
</HTML>