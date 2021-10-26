<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    Show tweets
<p>{{$message}}</p>
<form method="post" wire:submit.prevent="create" >
    <input type="text" name="message" id="message" wire:model="message">
    <button type="submit">Criar Tweet</button>
</form>

<hr>

@foreach ($tweets as $tweet)
    {{ $tweet->user->name }} - {{$tweet->conteudo}}
<br>
@endforeach
</div>
