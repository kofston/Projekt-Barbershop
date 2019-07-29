<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BarberShop: Los Barberos!</title>
    <?php
    include ("ReservationDataBase.php");
    $bart = new ReservationDataBase;
    $kon= new ReservationDataBase;
    if (isset($_GET['resdate'])&&isset($_GET['name']))
    {
        echo "<script language='javascript'>alert('MAM TEGO GETA!');</script>";
        echo($_GET['resdate']);
        $send = new ReservationDataBase;
        $send->AddNewTermin($_GET['resdate'],$_GET['name']);
        echo "<script language='javascript'>window.location.href='index.php';</script>";
    }
    
    ?>
    <script>
    var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;
    var AktualMonth = new Date().getMonth()+1;
    var PlusZeroMonth = '0'+AktualMonth;
    var StartDate = "2019-"+PlusZeroMonth+"-01";
    var LastDate = "2019-"+PlusZeroMonth+"-31";
    console.log("MOJ MIESIAC: "+StartDate+" A moja dzisiejsza data to "+today);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="mini-event-calendar.min.css">
    <script src="mini-event-calendar.js"></script>
    <script>
     $(document).ready(function() {
        $('#DateReserv').attr('min',StartDate);
        $('#DateReserv').attr('max',LastDate);
        $('#DateReserv').attr('value',today);
    });
    var tojedata = '2019-07-29';
    var EventsBartek = [<?php $bart->BartekCallendar()?>];
    var EventsKonrad = [<?php $kon->KonradCallendar()?>];


  //new Date().setDate(new Date('2019-07-20').getDate())


    </script>
</head>
<body>
<div id="container">
<div id="topBar">
        <!-- <audio src="music/WildWestBackground.mp3" muted></audio> -->
<span>Barber Shop</span>
<img id="barberPole" src="images//barberPole.png">
    <div id="scissors"></div>
    <div id="shaver"></div>
</div>
<div id="contentContainer">

<div id="navBarLeft">
<div id="aboutUs">
        <button class="button" id="aboutUsButton" onclick="AboutUS()"><img id="scissors_about_us" src="images/scissors.png" width="150px" height="150px">O Nas</button>
</div>
<div id="price">
        <button v-on:click="ShowPrice" class="button" id="priceButton"onclick="Price()"> <img id="razor_price" src="images/razor.png" width="150px" height="150px">Cennik</button>
</div>
<div id="contact">
        <button class="button" id="contactButton" onclick="Contact()"> <img id="brush_contact" src="images/brush.png" width="150px" height="150px">Kontakt</button>
</div>

</div>



<div id="content">



<div id="AboutUsContent">
        <div id="firstBarberAboutUs" class="barbersSquare">
            Bartek
            <img class="barberphoto" src="images/men1.png" width="200px" height="230px">
            </div>
            <div id="secondBarberAboutUs" class="barbersSquare">
            Konrad
            <img class="barberphoto2" src="images/men2.png" width="200px" height="230px">
                </div>
    <div id="tapeContainer">
<div id="aboutUsText">
    <span>O nas:<br></span>
    Barber Shop Wild West powstal aby zapewnic,kazdemu mezczyznie najlepszy wyglad,nie patrzac na kompromisy.To wlasnie u nas poczujesz sie jak na prawdziwym ranczo.Nasze 
    dlugoletnie doswiadczenie zagwarantuje Ci ze koncowy efekt bedzie lepszy niz sie tego spodziewales.Nasz zespol profesjonalistow,polaczony ze znakomitym klimatem panujacym w lokalu pozwoli Ci poczuc sie prawdziwym mezczyzna.Wybierz nasz BarberShop,a zadbamy o twoj kazdy wlos ;)
    <br><br><br>
    Zapraszamy do naszej ekipy:<br>
   Konrad i Bartek 
</div>
    </div>

    </div>





<div id="PriceContent">
    <div id="AnimationDivPrice"><img id="AnimationShotPrice"  src="images/wildwestshot2.gif"></div>
    <div id="PriceTable">
        CENNIK:
        <div id="BoxPriceFrame">
            <div id="WhiteThemeFrame">
                Broda   30 zl<br>
                Strzyzenie 50 zl<br>
                Golenie 40 zl<br>
                Broda+Strzyzenie 70 zl
            </div>
        </div>
    </div>
</div>




<div id="ContactContent">
    <div id="nameDIV"><input id="name" type="text"></div>
    <div id="mailDIV"><input id="mail" type="mail"></div>
    <div id="phoneDIV"><input id="phone" type="number"></div>
<div id="messageDIV"><textarea id="message"></textarea></div>
<div id="STEMPEL"></div>
<div id="ContactMARK"></div>
<button id="ContactSEND" onclick="DoStemp()">nadaj telegram</button>
</div>



<div id="GalleryContent">
    <video autoplay muted loop class="myVideoGallery">
        <source src="images/gallery_theme.mp4" type="video/mp4">
      </video>
<div id="GalleryFace1"><button value="P1" id="buttonGallery1"><div class="PhotoContainerGallery" id="P1"></div></button></div>
<div id="GalleryFace2"><button id="buttonGallery2" value="P2"><div class="PhotoContainerGallery" id="P2"></div></button></div>
<div id="GalleryFace3"><button id="buttonGallery3" value="P3"><div class="PhotoContainerGallery" id="P3"></div></button></div>
<div id="GalleryFace4"><button id="buttonGallery4" value="P4"><div class="PhotoContainerGallery" id="P4"></div></button></div>
<div id="GalleryInformation">Poszukiwani za swietny fryz!<br>Dla znalazcy wysoka nagroda!</div>
<div id="GalleryBlackBackground"><button onclick="GalleryBack();" id="GalleryBack">&#8592;</button><div id="ZoomPhotoGallery"><div class="PhotoContainerGalleryZOOM" id="P1"></div></div></div>

</div>





<div id="ReservationContent">
    <div id="reserveBar">Ponizej mozesz zarezerwowac termin na swoja wizyte.Aby to uczynic wybierz barbera,rodzaj uslugi,oraz termin (o ile jest dostepny) a nastepnie kliknij przycisk rezerwuj.</div>
    <video autoplay muted loop class="myVideoGalleryGun">
        <source src="images/gunmanss.mp4" type="video/mp4">
      </video>
<div id="TableBackgroundReserv">
      <div id="BarberContainerReserv">
      <div id="firstBarberReservation" >
        Bartek
        <img class="barberphoto" src="images/men1.png" width="200px" height="230px">
        </div>
        <div id="secondBarberReservation" >
        Konrad
        <img class="barberphoto2" src="images/men2.png" width="200px" height="230px">
            </div>
            <label class="switch">
                <input type="checkbox" id="CHCKBX" onchange="WhatBarber()">
                <span class="slider round"></span>
              </label>
        </div>

        <div id="HaircutContainerReserv">
Wybierz rodzaj uslugi<br>
<select id="RegSelect" onchange="LastPrice()">
    <option value="0"></option>
    <option value="30">Strzyzenie Brody</option>
    <option value="50">Strzyzenie Wlosow</option>
    <option value="40">Golenie</option>
    <option value="70">COMBO(Broda+Wlosy)</option>
</select><br>
Cena ostateczna:<br>
<span id="YourPriceReserve">0</span> zl
<div id="FormReserve">
    Wpisz Dane do Rezerwacji:
    <input type="text" id="NameReserv" placeholder="Twoje Imię i Nazwisko">
    <input type="text" id="TelReserv" placeholder="Numer Telefonu">
    <span>Wybierz wolna date (bazujac na kalendarzu rezerwacji obok):</span>
    <input id="DateReserv" type="date" id="DateReserv" min="" max="" value="">
</div>
        </div>
        <div id="CalendarContainerReserv">
<div id="calendar">

</div>
     <button id="AcceptReservation" >rezerwuj</button>       
        </div>
    </div>






    
</div>









</div>



<div id="navBarRight">
    <div id="gallery">
            <button class="buttonBigger" id="GalleryButton" onclick="Gallery()">  <img id="comb_gallery" src="images/comb.png" width="150px" height="150px">Nasze prace</button>
    </div>
    <div id="terminar">
            <button class="buttonBigger" id="terminarButton" onclick="Reserv()">  <img id="moustache_terminar" src="images/moustache.png" width="150px" height="150px">Rezerwacja</button>
    </div>


</div>




</div>
<div id="footer"><span>Created by: Łukasz Konop 2019</span></div>
</div>





</body>

<script>
$("#AcceptReservation").click(function(){

    var mydata = $('#DateReserv').val();
    var myname = $('#NameReserv').val();
    var mynameSEND = myname.substr(0,myname.indexOf(' '));
var mydataString = "`"+mydata+"`";
    console.log("moja data to:"+mydata);
    console.log("A STRING DATY TO:"+mydataString);
console.log("A moje imie to:"+mynameSEND);
    var data = new Date().setDate(new Date(mydata).getDate());
    console.log(data);

  window.location.href = "index.php?resdate="+mydataString+"&name="+mynameSEND; 
});
</script>



</html>