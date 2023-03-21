@extends('layouts.app')
@section('content')
<div class="bg-dark text-white rounded">
<div class="container w-100%">
<h1>Здесь вы можете оставить ваши<br> отзывы для улучшения нашего сайта</h1>

@foreach($messages as $message)
<p>{{ Auth::user()->name }}
    {{ $message->message }}
</p>
@endforeach
    <form action="{{ route('messages.delete', $message->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="border-0 bg-white mb-2 rounded" value="Delete">
    </form>
    
        
        
        
        
        
    
    <form class="form-content" style="height:70px" action="{{ route('messages.store') }}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <textarea name="message" class="rounded" style="border: 100%; border-color:black" cols="30" rows="2"></textarea>
        <button type="submit">Send</button>
    </form>
</div>
</div>
@endsection