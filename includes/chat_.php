<link rel="stylesheet" href="cscc/chat.css" />

<link rel="stylesheet" href="../cscc/chat.css" />
<div class="container">
    <div id='result'></div>

    <div class='chatcontrols'>
        <form method="post" onsubmit="return submitchat();">
            <input type='text' name='chat' id='chatbox' autocomplete="off" required placeholder="RENTRER UN MESSAGE" />
            <input type='submit' name='send' id='send' class='btn btn-send' value='Envoyer' />
        </form>

        <script src="script/chat.js"></script>
    </div>
</div>