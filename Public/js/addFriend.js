$("#buttonSearch").click(function (e) { 
    e.preventDefault();
    let content = $("#inputAddFriend").val();
    $.ajax({
        url:"?page=searchFriend",
        method:"POST",
        dataType:"json",
        data:{content},
        success:function(response){
        }
    })
});