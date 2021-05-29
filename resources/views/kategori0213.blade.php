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
<center><h3>Kategori</h3></center>
<br>
<table cellspacing='0'>
  <tr>
                                                 
                            <td>Id</td>
                            <td>Judul</td>
                            <td>Deskripsi Buku</td>
                            <td>Kategori Buku</td>
                        </tr>
                        @foreach($buku as $Buku)
                        <tr>
                           <td>{{$Buku->buku_id}}</td>       
                            <td>{{$Buku->buku_judul}}</td>
                            <td>{{$Buku->buku_deskripsi}}</td>
                            <td>{{$Buku->kategori_nama}}</td>
                        </tr>
                        @endforeach
                      
                  
    </table>
        </div>
			
	</div>
	
 </body>
</html>