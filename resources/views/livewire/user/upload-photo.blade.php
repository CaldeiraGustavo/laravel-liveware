<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div>
        <h1>
            Atualizar foto de perfil
        </h1>
    </div>
    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model="photo">
        <br>
        @error('photo')
            {{$message}}
        @enderror
        <br>
        <button type="submit">Upload Photo</button>
    </form>
</div>
