var nom =  localStorage.nom;
// on soumet chaque message 
// Javascript function to submit new chat entered by user
function submitchat(){
    if($('#chat').val()=='' || $('#chatbox').val()==' ') return false;
    $.ajax({
        url:'../php/chat.php',
        data:{chat:$('#chatbox').val(),ajaxsend:true, username: nom},
        method:'post',
        success:function(data){
            $('#result').html(data); // Get the chat records and add it to result div
            $('#chatbox').val(''); //Clear chat box after successful submition

            document.getElementById('result').scrollTop=document.getElementById('result').scrollHeight; // Bring the scrollbar to bottom of the chat resultbox in case of long chatbox
        }
    })
    return false;
};

// Function to continously check the some has submitted any new chat
setInterval(function(){
$.ajax({
        url:'../php/chat.php',
        data:{ajaxget:true},
        method:'post',
        success:function(data){
            $('#result').html(data);
        }

})

}
,1000);




