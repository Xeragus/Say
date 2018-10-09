<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Say | Chat Room</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <div class="container chatroom-container">
      <div class="row justify-content-center align-items-center">
        <div class="col-sm-7 col-md-7 col-lg-5">
          <div class="" id="app">
            <div class="chat-window">
                <li class="list-group-item active">Chatroom | @{{ numberOfPresentUsers }} people here</li>
                <ul class="list-group list-group-messages" v-chat-scroll>
                  <message
                    v-for="value,index in chat.messages"
                    :key=value.index
                    :color=chat.colors[index]
                    :badgecolor=chat.badgeColors[index]
                    :user=chat.users[index]
                    :time=chat.messagesTimes[index]>
                    @{{ value }}
                  </message>
                </ul>
                <div class="badge badge-pill badge-primary">@{{ typing }}</div><br>
                <div class="input-group message-box">
                    <input type="text" class="form-control py-4" placeholder="Type new message..."
                    v-model='message'
                    @keyup.enter="send">
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
