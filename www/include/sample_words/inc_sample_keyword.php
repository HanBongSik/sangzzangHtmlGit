
<div class="g chat-message">
    <div class="chat-messages">
    </div>
    <div class="search">
        <div class="g keyword-input">
            <div class="r gap-hor-sm">
                <div class="c">
                    <span class="forms forms-full">
                        <input type="text" id="inputKeywards" placeholder="검색어를 입력하세요" class="INPUT-RESET" value="마리오파티 우승, 경쟁자를 제치고, 챔피언">
                        <button class="INPUT-RESET-BTN" data-target="#inputKeywards">×</button>
                    </span>
                </div>
                <div class="c c-inner-width">
                    <div class="search-btn">
                        <span class="forms">
                            <button type="button" id="sendBtn" class="btn-search">작성</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    const messageInput = document.getElementById('inputKeywards');
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
        //alert(messageContent); //마리오파티 우승, 경쟁자를 제치고, 챔피언
        if (messageContent) {

            addMessageToChat('', messageContent, 'right');

            // 아이콘 추가
            const snippet = addSnippet();

            messageInput.value = '';

            try {
                const response = await fetch('https://gpt-api.impreci.com/content', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    //body: JSON.stringify({ content: messageContent })
                    body: JSON.stringify({ message: messageContent })
                });

                if (response.ok) {
                    const aiResponse = await response.json();
                    // 아이콘 제거
                    snippet.remove();
                    // 응답

                    //addMessageToChat(aiResponse.title, 'left');
                    addMessageToChat(aiResponse.title, aiResponse.content, 'left');
                }
            } catch (error) {
                console.error('Error while sending message:', error);
            }
        }
    }

    function addSnippet() {
        const snippetDiv = document.createElement('div');
        snippetDiv.className = 'ai-loading';
        snippetDiv.innerHTML = '<div class="ai-loading__inner">작성중...</div>';
        chatMessages.appendChild(snippetDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        return snippetDiv;
    }

    function addMessageToChat(title = '키워드', message, direction) {
        const messageDiv = document.createElement('div');
        console.log(message);
        const displayTitle = title.replace(/\n/g, '<br>');
        const displayMessage = message.replace(/\n/g, '<br>');
        if (direction === 'right') {
            messageDiv.className = 'question';
            messageDiv.innerHTML = `<div class="question__inner">${displayMessage}</div>`;
        } else {
            messageDiv.className = 'answer';
            messageDiv.innerHTML = `
                <div class="answer__inner">
                    <div class="answer-title" style="font-weight:600;">${displayTitle}</div>
                    <div class="answer-message">${displayMessage}</div>
                </div>
                <div class="answer-function">
                    <a href="javascript:void(0)" onclick="applyAnswer(this);return false;">적용하기</a>
                </div>
            `;
        }
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
</script>
