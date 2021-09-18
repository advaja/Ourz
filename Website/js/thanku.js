var finalPrice = 0;

$(document).ready(function () {

    if (localStorage.getItem("userID")) {
        
    } else {
        location.href = "index.php";
    }

    $.ajax({
        type: 'POST',
        url: 'http://localhost:3000/property/findByID/'+$("#propertyID").html(),
        data: {},
        success: function (data) {

            if(data.length){
                finalPrice = data[0].rate
                $("#cityText").html(data[0].city)
                $("#streetText").html(data[0].street)
                $("#owner_nameText").html(data[0].owner_name)
                $("#owner_phoneText").html(data[0].phone)
                $("#datesText").html(moment(data[0].startDate).format('DD MMMM')+"-"+moment(data[0].endDate).format('DD MMMM'))
                $("#timeText").html(data[0].time1+"-"+data[0].time2)
                $("#rateText").html(data[0].rate)
                $("#whatsappLink").attr("href", "https://api.whatsapp.com/send?phone="+data[0].phone)
                $("#googleMapLink").attr("href", "https://maps.google.com/?q="+data[0].lat+","+data[0].lng)
                $("#calendarLink").attr("href", "https://calendar.google.com/calendar/r/eventedit?text="+data[0].owner_name+"&details="+data[0].description+"&location="+data[0].address+"&dates="+moment(data[0].startDate).format("YYYYMMDDTHHmmSSZ")+"/"+moment(data[0].endDate).format("YYYYMMDDTHHmmSSZ")+"&ctz=Asia/Jerusalem")
            }else{
                location.href = "index.php";
            }

        },
        error: function (data) {
            console.log(data)
            toastr.error('Something went wrong.Please check the browser console for the error!');
        }
    });

});