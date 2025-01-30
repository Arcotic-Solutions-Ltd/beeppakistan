<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Beep Pakistan | Based on Gemini Pro model</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="icon" href="{{ asset('images/pakistan.png') }}" type="image/png" sizes="16x16">

</head>
<body>
<!-- Chats container -->
<div class="chat-container"></div>

<!-- Typing container -->
<div class="typing-container">
    <div class="typing-content">
        <div class="typing-textarea">
            <textarea id="chat-input" spellcheck="false" placeholder="Enter a prompt here" required></textarea>
            <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
        <div class="typing-controls">
            <span id="theme-btn" class="material-symbols-rounded">light_mode</span>
            <span id="delete-btn" class="material-symbols-rounded">delete</span>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="main-footer">
    <p>This project is run by <a href="https://github.com/Arcotic-Solutions-Ltd/beeppakistan">Arcotic Solutions</a> and uses the <a href="https://ai.google.dev/gemini-api/docs/models/gemini">Gemini Pro model</a> - Beep Pakistan</p>
</footer>

<script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>