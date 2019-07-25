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

var db_events = [{
    title: "Board members meeting",
    date: new Date().getTime(),
    link: "events.com/ev2"
}];

$(document).ready(function(){
    $("#calendar").MEC({
        calendar_link: "example.com/myCalendar",
        events: db_events
    });
});

$(document).ready(function(){
    $("#calendar2").MEC({
        calendar_link: "example.com/myCalendar",
        events: db_events
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
        return 1;
    }
    else{
        console.log("Bartek");
    }
}

