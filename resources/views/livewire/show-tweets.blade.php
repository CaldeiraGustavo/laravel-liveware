<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    Show tweets
<p>{{$message}}</p>

<input type="text" name="message" id="message" wire:model="message">

<hr>

@foreach ($tweets as $tweet)
    {{ $tweet->user->name }} - {{$tweet->conteudo}}
<br>
@endforeach
</div>
