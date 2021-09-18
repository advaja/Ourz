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
                $("#rateText").html(data[0].rate*$("#totalHours").html())
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

function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'blue',
        layout: 'horizontal',
        label: 'checkout',
        size: 'responsive'

      },

      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: [{
            "amount": {
              "currency_code": "USD",
              "value": finalPrice*$("#totalHours").html()
            }
          }]
        });
      },

      onApprove: function (data, actions) {
        return actions.order.capture().then(function (orderData) {

          $.ajax({
            type: 'POST',
            url: 'http://localhost:3000/property/saveOrder',
            data: {
              propertyID: $("#propertyID").html(),
              userID: localStorage.getItem("userID"),
              paymentID: orderData.id,
              totalHours: $("#totalHours").html()
            },
            success: function (data) {
    
                if(data){
                  if(data.affectedRows){
                    location.href = "thanku.php?paymentID="+orderData.id+"&propertyID="+$("#propertyID").html()
                  }else{
                    toastr.error("User Order not placed");
                  }
                }else{
                  toastr.error(data);
                }
    
            },
            error: function (data) {
                console.log(data)
                toastr.error('Something went wrong.Please check the browser console for the error!');
            }
        });
          

        });
      },

      onError: function (err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();