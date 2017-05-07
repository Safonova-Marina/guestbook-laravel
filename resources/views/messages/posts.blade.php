<div class="text-right"><b>Всего сообщений:</b> <i class="badge">{{$total_mes}}</i></div>
<br/>
<div class="messages">
    @if (!$messages -> isEmpty())
        @foreach ($messages as $message)
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>
                        @unless (empty($message -> email))
                            <a href="mailto:{{$message -> email}}">{{$message -> avtor_name}}</a>
                        @else
                            {{$message -> avtor_name}}
                        @endunless
                        </span>
                        <span class="pull-right label label-info">
                            {{$message -> created_at}}
                        </span>
                    </h3>
                </div>
                <div class="panel-body">
                    {{$message -> message}}
                </div>
            </div>
        @endforeach
        <div class="text-center">
            {{$messages -> render()}}
        </div>
	@else
		<div class="text-center bg-info">
			Вы будете первым, кто напишет сообщение!
        </div>
    @endif    
</div>