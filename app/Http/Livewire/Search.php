<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public $currentPage = 1;

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.search', [
            'data' => Post::where('title', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function setPage($page)
    {
        $this->currentPage = $page;
        $r = $this->currentPage;

        Paginator::currentPageResolver(function () use ($r) {
            return $r;
        });
    }
}
