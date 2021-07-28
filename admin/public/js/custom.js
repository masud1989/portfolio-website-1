$(document).ready(function () {
$('#VisitorDt').DataTable();
$('.dataTables_length').addClass('bs-select');
});



// Start Select Data from Database Table ('services')//
function getServicesData(){
    axios.get('/getServicesData')  //Route ------------------
    .then (function(response){
        var jsonData=response.data;
            $.each(jsonData, function(i, item){
                $('<tr>').html(
                    "<td> <img class='table-img' src="+jsonData[i].service_img+"> </td>"+
                    "<td> <img class='table-img' src="+jsonData[i].service_img+"> </td>"+
                    "<td>"+jsonData[i].service_name+"</td>"+
                    "<td> "+jsonData[i].service_des+" </td>"+
                    "<td><a href='' class='btn btn-sm btn-info' id='edit' title='Edit'><i class='fas fa-edit'></i></a></td>"+
                    "<td><a href='' class='btn btn-sm btn-danger' id='edit' title='Delete'><i class='fas fa-trash'></i></a></td>"
                 ).appendTo('#service_table');
            });

            
    })
    .catch(function(error){

    });
    // End Select Data from Database Table ('services')//
}