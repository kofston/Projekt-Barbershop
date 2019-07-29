class SwitchWebsites{

};

function AboutUS() {
    $('#PriceContent').css('opacity','0.1');
    $('#AboutUsContent').css('width','100%');
    $('#AboutUsContent').css('opacity','1');
    $('#PriceContent').css('width','0%');
    $('#ContactContent').css('width','0%');
    $('#ContactContent').css('padding','0px');
    $('#GalleryContent').css('width','0%');
    $('#ReservationContent').css('width','0%');
    $('#ReservationContent').css('opacity','0.1');
}
function Price() {
    $('#AboutUsContent').css('opacity','0.1');
    $('#PriceContent').css('width','100%');
    $('#PriceContent').css('opacity','1');
    $('#AboutUsContent').css('width','0%');
    $('#ContactContent').css('width','0%');
    $('#ContactContent').css('padding','0px');
    $('#GalleryContent').css('width','0%');
    $('#ReservationContent').css('width','0%');
    $('#ReservationContent').css('opacity','0.1');
}
function Contact() {
    $('#PriceContent').css('opacity','0.1');
    $('#AboutUsContent').css('opacity','0.1');
    $('#PriceContent').css('width','0%');
    $('#AboutUsContent').css('width','0%');
    $('#ContactContent').css('width','100%');
    $('#ContactContent').css('padding','50px');
    $('#GalleryContent').css('width','0%');
    $('#ReservationContent').css('width','0%');
    $('#ReservationContent').css('opacity','0.1');
}
function Gallery() {
    $('#PriceContent').css('opacity','0.1');
    $('#AboutUsContent').css('opacity','0.1');
    $('#PriceContent').css('width','0%');
    $('#AboutUsContent').css('width','0%');
    $('#GalleryContent').css('width','100%');
    $('#ContactContent').css('padding','0px');
    $('#ContactContent').css('width','0%');
    $('#ReservationContent').css('width','0%');
    $('#ReservationContent').css('opacity','0.1');
}
function Reserv() {
    $('#ReservationContent').css('opacity','1');
    $('#PriceContent').css('opacity','0.1');
    $('#AboutUsContent').css('opacity','0.1');
    $('#PriceContent').css('width','0%');
    $('#AboutUsContent').css('width','0%');
    $('#ReservationContent').css('width','100%');
    $('#ContactContent').css('padding','0px');
    $('#ContactContent').css('width','0%');
    $('#GalleryContent').css('width','0%');
}
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
async function DoStemp() {
    var Name = $('#name').val();
    var Mail = $('#mail').val();
    var Phone = $('#phone').val();
    if((Name.length>0) && (Mail.length>0) && (Phone.length>0))
    {
    $('#STEMPEL').css('opacity','1');
    await sleep(1000);
    $('#STEMPEL').css('opacity','0');
    $('#ContactMARK').css('opacity','1');
    await sleep(850);
    location.reload();
    }
    else alert('Pola nie zostały wypełnione prawidłowo!');
}
$(document).ready(function(){
    $("#calendar").MEC({
        calendar_link: "example.com/myCalendar",
        events: EventsBartek
    });
    $("#calendar2").MEC({
        calendar_link: "example.com/myCalendar",
        events: EventsKonrad
    });
});

function LastPrice()
{
   var price = $('#RegSelect').val();
   console.log(price);
   $('#YourPriceReserve').html(price);
}
function WhatBarber(){
    if(document.getElementById("CHCKBX").checked == true)
    {
        console.log("Konrad");
        $('#calendar').attr('id', 'calendar2');
        $('#AcceptReservation').css('background-color','rgba(100, 30, 30, 0.774)')
        $("#calendar2").MEC({
            calendar_link: "example.com/myCalendar",
            events: EventsKonrad
        });
        return 1;
    }
    else{
        console.log("Bartek");
        $('#calendar2').attr('id', 'calendar');
        $('#AcceptReservation').css('background-color','rgba(30, 100, 36, 0.774)')
        $("#calendar").MEC({
            calendar_link: "example.com/myCalendar",
            events: EventsBartek
        });
    }
}
async function GalleryBack()
{
    $('#GalleryBlackBackground').css('transition','opacity 2s');
    $('#GalleryBlackBackground').css('opacity','0');
    await sleep(2000);
    $('#GalleryBlackBackground').css('display','none');
    $('#ZoomPhotoGallery').css('width','0');
}
$(document).ready(function() {
    $('#buttonGallery1').click(async function() {
        var IdPhoto = $(this).attr("value");
        $('.PhotoContainerGalleryZOOM').attr('id', IdPhoto);
        $('#GalleryBlackBackground').css('transition','opacity 4s');
        $('#GalleryBlackBackground').css('display','block');
        await sleep(100);
        $('#ZoomPhotoGallery').css('width','500px');
        $('#GalleryBlackBackground').css('opacity','1');
    });
    $('#buttonGallery2').click(async function() {
        var IdPhoto = $(this).attr("value");
        $('.PhotoContainerGalleryZOOM').attr('id', IdPhoto);
        $('#GalleryBlackBackground').css('transition','opacity 4s');
        $('#GalleryBlackBackground').css('display','block');
        await sleep(100);
        $('#ZoomPhotoGallery').css('width','500px');
        $('#GalleryBlackBackground').css('opacity','1');
    });
    $('#buttonGallery3').click(async function() {
        var IdPhoto = $(this).attr("value");
        $('.PhotoContainerGalleryZOOM').attr('id', IdPhoto);
        $('#GalleryBlackBackground').css('transition','opacity 4s');
        $('#GalleryBlackBackground').css('display','block');
        await sleep(100);
        $('#ZoomPhotoGallery').css('width','500px');
        $('#GalleryBlackBackground').css('opacity','1');
    });
    $('#buttonGallery4').click(async function() {
        var IdPhoto = $(this).attr("value");
        $('.PhotoContainerGalleryZOOM').attr('id', IdPhoto);
        $('#GalleryBlackBackground').css('transition','opacity 4s');
        $('#GalleryBlackBackground').css('display','block');
        await sleep(100);
        $('#ZoomPhotoGallery').css('width','500px');
        $('#GalleryBlackBackground').css('opacity','1');
    });
});

