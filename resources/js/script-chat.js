function sendMessage() {
    const messageInput = document.getElementById('messageInput');
    const messageText = messageInput.value;

    if (messageText.trim() !== "") {
        const userMessageContainer = document.createElement('div');
        userMessageContainer.className = 'message user';
        userMessageContainer.textContent = messageText;

        const chatBox = document.getElementById('chatBox');
        chatBox.appendChild(userMessageContainer);

        messageInput.value = "";
        chatBox.scrollTop = chatBox.scrollHeight;

        // Simular resposta automática do bot após um pequeno atraso
        setTimeout(() => {
            const botMessageContainer = document.createElement('div');
            botMessageContainer.className = 'message bot';
            botMessageContainer.textContent = "Este usuário do SOGA de momento não pode responder. Aguarde, por favor!";

            chatBox.appendChild(botMessageContainer);
            chatBox.scrollTop = chatBox.scrollHeight;
        }, 1000);
    }
}
