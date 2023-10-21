<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>칭찬해드릴께요 :)</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 h-screen p-6">

    <div class="bg-white max-w-3xl mx-auto p-4 shadow-lg">
        <div class="chat-messages overflow-y-auto h-64 mb-4">
        </div>

        <div class="flex items-center">
            <input type="text" id="messageInput" class="flex-grow p-2 border rounded" placeholder="메시지 입력">
            <button id="sendBtn" class="ml-2 bg-blue-500 text-white p-2 rounded">보내기</button>
        </div>
    </div>

    <script>
        const messageInput = document.getElementById('messageInput');
        const sendBtn = document.getElementById('sendBtn');
        const chatMessages = document.querySelector('.chat-messages');

        messageInput.addEventListener('keydown', async (event) => {
            if (event.key === 'Enter' && !event.shiftKey) {
                event.preventDefault();
                sendMessage();
            }
        });
        
        sendBtn.addEventListener('click', sendMessage);
    
        async function sendMessage() {
            const messageContent = messageInput.value.trim();
            if (messageContent) {
                
                addMessageToChat(messageContent, 'right');

                // 아이콘 추가
                const snippet = addSnippet();

                messageInput.value = '';

                try {
                    const response = await fetch('https://bs.doseong.net/content', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ content: messageContent })
                    });

                    if (response.ok) {
                        const aiResponse = await response.json();
                        // 아이콘 제거
                        snippet.remove();
                        // 응답
                        
                        addMessageToChat(aiResponse.message, 'left');
                    }
                } catch (error) {
                    console.error('Error while sending message:', error);
                }
            }
        }

        function addSnippet() {
            const snippetDiv = document.createElement('div');
            snippetDiv.className = 'text-left mb-2';
            snippetDiv.innerHTML = '<div class="inline-block p-2 rounded-r-lg animate-pulse">작성중...</div>';
            chatMessages.appendChild(snippetDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
            return snippetDiv;
        }
    
        function addMessageToChat(message, direction) {
            const messageDiv = document.createElement('div');
            const displayMessage = message.replace(/\n/g, '<br>');
            if (direction === 'right') {
                messageDiv.className = 'text-right mb-2';
                messageDiv.innerHTML = `<div class="inline-block bg-blue-500 text-white p-2 rounded-l-lg">${displayMessage}</div>`;
            } else {
                messageDiv.className = 'text-left mb-2';
                messageDiv.innerHTML = `<div class="inline-block bg-gray-300 text-black p-2 rounded-r-lg">${displayMessage}</div>`;
            }
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    </script>
</body>
</html>