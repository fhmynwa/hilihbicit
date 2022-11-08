


<!<!DOCTYPE HTML>
<html>
    <head>
      <title>Teshtml</title>

     <style>
     body{
            background-image: url('https://i.ibb.co/0qkHhqb/e6c604bce1c1f9afe127e0ead3382af6.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
            
        }
         .tombol{
         background-color: #6495ED;
         border: 3px solid blue;
         border-radius: 0.6em;
         color: black;
         display: flex;
         align-self: 100;
         font-size: 2rem;
         font-weight: 300;
         line-height: 1;
         margin: 10px;
         padding: 1em 2.8em;
         text-decoration: none;
         text-align: center;
         text-transform: uppercase;
         font-family: 'Montserrat', sans-serif;
         font-weight: 700;
         }
.kalimat{
    background-color: #6495ED;
         border: 3px solid black;
         border-radius: 0.6em;
         color: black;
         font-size: 50px;
         padding: 10px;
         margin: 200px;
}
.gambar{
    border: 3px solid black;
    border-radius: 7em;
    margin-top: -165px;
}
.papan{
    border: 3px solid black;
    border-radius: 1em;
    
}
.hasil{
    border: 3px solid black;
    border-radius: 1em;
}
font{
    font-family: Courier New;
}
.footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;  
}

     </style>
      
    </head>
    <center>
    <body >
        <br><br><br><br>
          
        <h1 class="kalimat">Ayo Ubah Kalimatmu<br>Menjadi Seperti Dia</h1>
       <img src="https://i.ibb.co/HTfKhsx/2x-XAsa-Qi-400x400.jpg" alt="hilihbicit" height="300px" width="300px"class="gambar"/>
        <br><br>
        <form action=" " method="POST">
            <textarea type="text" name="txtname" rows="8" cols="100"placeholder="ketik disini..." class="papan"></textarea>
            <button name="KIRIM"class="tombol">UBAH</button>
<?php

if(isset($_POST['KIRIM'])){
    $coba = $_POST['txtname'];
    $str= array( 'a', 'u', 'e', 'o', 'A', 'U', 'E', 'O',);
    $hasil = str_replace($str, 'i', "$coba");
     
}


?>
<textarea  rows="8" cols="100" class="hasil">
HASILNYA:

<?php 
echo $hasil; ?>
</textarea>
<center><marquee width="60%"></font>
<font class="text-center text-gray mb-3" color="black" size="10"><b>[!] Ini Hanyalah Sekedar Hiburan Saja[!]<b></font></marquee></center>        </form>
<div class="footer">Copyright@2022</div>
    </body>
    </center>
</html>


