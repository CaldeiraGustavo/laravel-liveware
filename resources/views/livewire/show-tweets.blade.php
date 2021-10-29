<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div>
        <h1 class="text-4xl py-6 font-bold h-24">Tweets</h1>
    
        <form method="post" wire:submit.prevent="create" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8">
            <textarea name="conteudo" id="conteudo" rows="5" placeholder="O que está pensando?" wire:model="conteudo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('conteudo') border-red-500 @enderror"></textarea>
            @error('conteudo') <p><span class="text-red-500">{{ $message }}</span></p> @enderror
            <button type="submit" class="p-2 pl-6 pr-6 rounded">Criar Tweet</button>
        </form>

    <hr>

    @foreach ($tweets as $tweet)
    <div class="flex m-8 bg-white shadow-md rounded p-4">
        <div class="w-1/8 pl-3 text-center">
            @if ($tweet->user->photo)
                <img src="{{ url("storage/{$tweet->user->photo}") }}" alt="{{$tweet->user->name}}" class="rounded-full h-8 w-8">
            @else
                <img src="{{ url('imgs/noimage.png') }}" alt="{{$tweet->user->name}}" class="rounded-full h-8 w-8">
            @endif
            {{ $tweet->user->name }} - {{ $tweet->conteudo }}
        </div>
        <div class="w-7/8 pl-3 inline-block align-text-middle">
            @if ($tweet->likes()->count())
                <a href="#" wire:click.prevent="unlike({{$tweet->id}})" class="text-red-500">Descurtir </a>
            @else
                <a href="#" wire:click.prevent="like({{$tweet->id}})" class="text-teal-500">Curtir </a>
            @endif
        </div>
    </div>
    @endforeach

    <hr>
    <div class="py-12">
        {{$tweets->links()}}
    </div>
</div>
