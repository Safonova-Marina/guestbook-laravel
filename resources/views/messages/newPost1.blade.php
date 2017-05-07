<form method="POST" id="id-form_messages" name="form_messages" action="/add">
    {{ csrf_field() }}

    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Имя: *</label>
        <input class="form-control" placeholder="Имя" name="name" type="text" id="name" value="{{ Auth::user()->name }}">
        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>


    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">E-mail:</label>
        <input class="form-control" placeholder="E-mail" name="email" type="email" id="email" value="{{Auth::user()->email}}">
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
        <label for="message">Сообщение (минимум 5 символов): *</label>
        <textarea class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50"
                  id="message">{{ old('message') }}</textarea>
        @if ($errors->has('message'))
        <span class="help-block">
            <strong>{{ $errors->first('message') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Добавить">
    </div>       
</form>