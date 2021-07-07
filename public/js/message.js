$(document).ready(function(){
    
    console.log("test");
$("#send").click(function(e){
    e.preventDefault();
    console.log("test");
    $.post(
        "controller/test.php",{
         message:$("#message").val(),},
         function (data){
          
             if (data.length != 0){
                 console.log(data);
                 data.forEach((item)=>{
                
                    $("body").append("<p>"+item.text+"</p>");
                   
                })
             }
         },
         'json'

    )
})
})