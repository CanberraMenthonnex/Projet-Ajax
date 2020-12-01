$('select').on('change', function() {
    //this.value;
    $('form').append("Veuillez renseigner les " + this.value + " valeurs :");
    for(let i = 0; i<this.value;i++){
        $('form').append('<input type="text" id="' + i + '" placeholder="Answer">');
    }
    $('form').append('<label>Combien de temps pour répondre ?<input type="time" id="time" placeholder="Time"></label>');
  });



//native version

var resetButton = document.getElementById("resetButton"); 
resetButton.onclick= reloadPage;
  
function reloadPage(){
    window.location.reload();
}


//Jquery version

// $("resetButton").click(function(){
//     window.location.reload();
//     console.log("hello");

// });


$("#submit").click(function(e){
    e.preventDefault();
    let content = $("input").val();
    $.ajax({
        url:"router.php?page=sendSurvey",
        method:"POST",
        dataType:"json",
        data:{content},
        success:function(response){
            
            console.log("Sucess");
        }
    })
})
