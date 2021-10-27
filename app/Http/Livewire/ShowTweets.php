<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{

    public $conteudo = "Apenas um teste";

    protected $rules = [
        'conteudo' => 'required|min:3|max:255'
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->get();

        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create() 
    {
        $this->validate();
        Tweet::create([
            'conteudo' => $this->conteudo,
            'user_id'  => 1
        ]);

        $this->conteudo = '';
    }
}
