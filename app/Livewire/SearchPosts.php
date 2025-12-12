<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPosts extends Component
{
    public $search = '';


    public function render()
    {
        $posts = Post::query()->when($this->search, function ($query) {
            $query->where('title', 'like', '%' . $this->search . '%')->orWhere('body', 'like', '%' . $this->search . '%');
        })
            ->orderBy('created_at', 'desc')
            ->get();



        return view('livewire.search-posts', ['posts' => $posts]);
    }
}
