<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Livewire\Component;

class Search extends Component
{
    /** @var */
    public $search;

    /** @var int */
    public $currentPage = 1;

    /**
     *
     */
    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        $query = '%' . $this->search . '%';
        return view('livewire.search', [
            'data' => Post::where('title', 'like', $query)
                ->orWhere('preview_text', 'like', $query)
                ->orWhere('detail_text', 'like', $query)
                ->paginate(10)
        ]);
    }

    /**
     * @param $page
     */
    public function setPage($page)
    {
        $this->currentPage = $page;

        Paginator::currentPageResolver(function () {
            return $this->currentPage;
        });
    }
}
