var host = "https://ourz-spaces.herokuapp.com";

$(document).ready(function () {

    $.ajax({
        type: 'POST',
        url: host+'/property/getOrderByID/'+localStorage.getItem("userID"),
        data: {},
        success: function (data) {

            var result = "";
            
            for (let index = 0; index < data.length; index++) {
                result += `<tr>
                <th scope="row">`+data[index].useOrderID+`</th>
                <td>`+data[index].first_name +" "+ data[index].last_name+`</td>
                <td>`+data[index].phone+`</td>
                <td>`+data[index].street_number+` `+data[index].street+` `+data[index].address+`</td>`;
                /*<td>`+moment(data[index].startDate).format('DD MMMM')+"-"+moment(data[index].endDate).format('DD MMMM')+`</td>
                <td>`+data[index].time1+"-"+data[index].time2+`</td>*/
                result += `<td>`+data[index].rate+`</td>
                <td>`+data[index].totalHours+`</td>
                <td>`+data[index].rate*data[index].totalHours+`</td>
                <td>`+data[index].peoples+`</td>
                <td>`+data[index].paymentID+`</td>
                <td>`+moment(data[index].createdDate).format('DD MMMM Y')+`</td>
                <td>`+moment(data[index].createdDate).format('HH:MM:SS')+`</td>
              </tr>`;
            }

            $("#orderTableData").html(result)

        },
        error: function (data) {
            console.log(data)
            toastr.error('Something went wrong.Please check the browser console for the error!');
        }
    });

});