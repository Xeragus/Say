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
          <div class="chat-window border border-secondary d-flex flex-column justify-content-between" id="app">
            <ul class="list-group">
              <li class="list-group-item active">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="input-group message-box">
                <input type="text" class="form-control py-4" placeholder="Write new message">
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
