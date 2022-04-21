var nom = localStorage.nom;
// on soumet chaque message 
function submitchat() {
    if ($('#chat').val() == '' || $('#chatbox').val() == ' ') return false;
    $.ajax({
        url: '../php/chat.php',
        data: { chat: $('#chatbox').val(), ajaxsend: true, username: nom },
        method: 'post',
        success: function(data) {
            $('#result').html(data); 
            $('#chatbox').val(''); //efface l'espace d'ecriture après envoi

            document.getElementById('result').scrollTop = document.getElementById('result').scrollHeight; // Bring the scrollbar to bottom of the chat resultbox in case of long chatbox
        }
    })
    return false;
};

// actualise le chat
setInterval(function() {
    $.ajax({
        url: '../php/chat.php',
        data: { ajaxget: true },
        method: 'post',
        success: function(data) {
            $('#result').html(data);
        }

    })

}, 1000);