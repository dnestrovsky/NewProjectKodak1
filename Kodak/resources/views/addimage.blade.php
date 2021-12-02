<!doctype html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Laravel PHP Framework</title>
    <!-- Latest compiled and minified CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container" style="text-align: center;">
      <div class="span4" style="display: inline-block;margin-top:100px;">
        @if(isset($errors) && $errors->has(''))
          <div class="alert alert-block alert-error fade in"id="error-block">
            <?php
            $messages = $errors->all('<li>:message</li>');
            ?>
            <button type="button" class="close"data-dismiss="alert">×</button>

            <h4>Warning!</h4>
            <ul>
              @foreach($messages as $message)
                {{$message}}
              @endforeach

            </ul>
          </div>
        @endif
        <form name="addimagetoalbum" method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
          <input type="hidden" name="souvenir_id"value="{{ $souvenir->id }}" />
          <fieldset>
            <legend>Добавление примера к сувениру {{$souvenir->name}}</legend>
            <div class="form-group">
              <label for="description">Описание(*не обязательно)</label>
              <textarea name="description" type="text"class="form-control" placeholder="Описание"></textarea>
            </div>
            <div class="form-group">
              <label for="image">Выберете фото</label>
              <input type="file" name="image" class="contact-form-text" id="image">
            </div>
            <button type="submit" class="btnbtn-default">Добавить фото</button>
          </fieldset>
        </form>
      </div>
    </div> <!-- /container -->
  </body>
</html>