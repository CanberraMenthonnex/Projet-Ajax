// $('select').on('change', function() {
//     //this.value;
//     $('form').append("Veuillez renseigner les " + this.value + " valeurs :");
//     for(let i = 0; i<this.value;i++){
//         $('form').append('<input type="text" id= "Q' + i + '" placeholder="Answer">');
//     }
//     $('form').append('<label>Combien de temps pour répondre ?<input type="time" id="time" placeholder="Time"></label>');
//   });




$("#resetButton").click(function(){
    window.location.reload();
});


$( "form" ).submit(function( event ) {
    data = ( $( this ).serializeArray() );
    
    
    sendData = {
        question:data[0]["value"],
        asw1:data[1]["value"],
        asw2:data[2]["value"],
        asw3:data[3]["value"],
        asw4:data[4]["value"],
    }
    event.preventDefault();
    console.log(sendData);
    $.ajax({
        url:"?page=sendSurvey",
        method:"POST",
        dataType:"json",
        data:sendData,
        success:function(response){
            
            console.log("Sucess");
        },
        error :function(){
            console.log("error");
        }
    })
  });


// $("#submit").click(function(e){
//     e.preventDefault();
//     let content = $("#newSurvey").serializeArray();
//     console.log(content);

// })