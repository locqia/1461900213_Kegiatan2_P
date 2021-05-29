<!DOCTYPE html>
<html lang="en">
<head>
       <title> Ququh/ </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
 <body>
    <header>
    <img src="images/locqia.jpg">
	</header>
   <menu>
	<ul>
	<li><a href="/">HOME</a></li>
	    <li><a href="/kategori">KATEGORI</a></li>
		<li><a href="/buku">BUKU</a></li>
		<li><a href="/anggota">ANGGOTA SURABAYA</a>
		</li>
	</ul>
   </menu>
   <div class="recomended">
	<table style="width : 100%; color : white">
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Buku</title>
    <style>
       
    </style>
    <br>
<center><h3>Data Pinjaman Anggota di Surabaya</h3></center>
<br>
<table cellspacing='0'>
  <tr>
                                                 
                            <td>Id</td>
                            <td>Nama Anggota</td>
                            <td>Alamat Anggota</td>
                            <td>Buku Id</td>
							<td>Tanggal Pinjam</td>
							<td>Tanggal Jatuh Tempo</td>
                        </tr>
                        @foreach($buku as $Buku)
                        <tr>
                           <td>{{$Buku->anggota_id}}</td>       
                            <td>{{$Buku->anggota_nama}}</td>
                            <td>{{$Buku->anggota_alamat}}</td>
							<td>{{$Buku->buku_id}}</td>
                            <td>{{$Buku->tgl_pinjam}}</td>
							<td>{{$Buku->tgl_jatuh_tempo}}</td>
                        </tr>
                        @endforeach
                      
                  
    </table>
        </div>
			
	</div>
	
 </body>
</html>