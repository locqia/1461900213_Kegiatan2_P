<!doctype html>
<style>
    * {margin: 0; padding: 0;}
body {
	width: 900px;
	margin: auto;
}

header {
	width: 900px;
	height: 192px;
}
header img{
	width: 900px;
	height: 192px;
}

menu {
	width: 880px;
	height: 25px;
	background-color: #351d2f;
	padding: 10px;
}

menu ul {
	margin: 0px;
	padding: 0px;
	list-style: none;
}
menu ul li {
	float: left;
	width: 100px;
	height: 25px;
	background-color: #351d2f;
	opacity: .80;
	line-height: 25px;
	text-align: center;
	font-size: 16px;
}
menu ul li a {
	text-decoration: none;
	color: white;
	display: block;
}
menu ul li a:hover {
	background-color: #cc004f;
}
menu ul li ul li {
	display: none;
}
menu ul li:hover ul li{
	display: block;
}

.recomended {
	width: 100%;
	overflow: hidden;
	background-color: #cc004f;
}
.recomended h1 {
	text-align: center;
	color: white;
}

</style>

<html>
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
        <li><a href="/">home</a></li>
	    <li><a href="/kategori">kategori</a></li>
		<li><a href="/buku">buku</a></li>
		<li><a href="/anggota">anggota</a>
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
<center><h3>Data Buku</h3></center>
<br>
<table cellspacing='0'>
  <tr>
                                                 
                            <td>Id</td>
                            <td>Judul</td>
                            <td>Deskripsi Buku</td>
                            <td>Jumlah Buku</td>
                            <td>Penerbit Buku</td>
                        </tr>
                        @foreach($buku as $Buku)
                        <tr>
                           <td>{{$Buku->buku_id}}</td>       
                            <td>{{$Buku->buku_judul}}</td>
                            <td>{{$Buku->buku_deskripsi}}</td>
                            <td>{{$Buku->buku_jumlah}}</td>
                            <td>{{$Buku->penerbit}}</td>
                        </tr>
                        @endforeach
                      
                  
    </table>
        </div>
			
	</div>
	
 </body>
</html>