
/*
function reply_click(clicked_id){
    console.log(clicked_id);
}*/
function reply_click(clicked_id)
{

    /*$.each(data.justIn, function() {
        $.each(this, function(k, v) {
            alert(k + ' ' + v);
        });
    });*/
    $.ajax({
        type:"GET",
        dataType:"json",
        url:"/"+"api"+"/"+"repositories"+"/"+clicked_id,
        success:function (response){
            let data="";
            data+="<ul>"
            $.each(response.contributor,function (key,value){
                data+="<li>"+ value.repository_name
                +"</li>"
                data+="<li>"+ value.user_name
                    +"</li>"
            })
            data+="</ul>"
            data+="<ul>"
            $.each(response.commits,function (key,value){
                data+="<li>"+ value.message
                    +"</li>"
                data+="<li>"+ value.date
                    +"</li>"
            })
            data+="</ul>"
            $('#detail').html(data);
        }
    })
}








