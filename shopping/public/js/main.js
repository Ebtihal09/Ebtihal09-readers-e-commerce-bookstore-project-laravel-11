var id;
function test(i){
    id=i;
    $('#deletee').modal('show');
}


function del(){
    // Ajax
    var path = "delete"; //name of Route that will perofme delte function bulided in controller
    $.ajax({
        Headers:  {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
        url:'/delete',
        data:{
            id:id
        },
        method:"get",
        success:function(response){
            // console.log(response);
            location.reload();
        }
    });
}

var id_details;
function delete_details(i){
    id_details=i;
    $('#delete_details').modal('show');

}

function confirm_delete_details(){
    // Ajax
    $.ajax({
        Headers:  {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
        url:'/deletedetails',
        data:{
            id:id_details
        },
        method:"get",
        success:function(response){
            // console.log(response);
            location.reload();
        }
    });

}

function delete_item(id){
    $id=id;
    $.ajax({
        Headers:  {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
        url:'/delete_item',
        data:{
            id:id
        },
        method:"get",
        success:function(response){
            // console.log(response);
            location.reload();
        }
    });
}

