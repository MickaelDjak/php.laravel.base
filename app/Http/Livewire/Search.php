<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Post;
use App\Models\Preaching;
use Illuminate\Pagination\Paginator;
use Livewire\Component;

class Search extends Component
{
    /** @var */
    public $search;

    /** @var int */
    public $currentPage = 1;


    /** @var string */
    public $type = 'Посты';

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
        if($this->type === 'Посты'){
            return view('livewire.search', [
                'data' => Post::where('title', 'like', $query)
                    ->orWhere('preview_text', 'like', $query)
                    ->orWhere('detail_text', 'like', $query)
                    ->paginate(10)
            ]);
        }

        if($this->type === 'События'){
            return view('livewire.search', [
                'data' => Event::where('title', 'like', $query)
                    ->orWhere('preview_text', 'like', $query)
                    ->orWhere('detail_text', 'like', $query)
                    ->paginate(10)
            ]);
        }

        if($this->type === 'Проповеди'){
            return view('livewire.search', [
                'data' => Preaching::where('title', 'like', $query)
                    ->orWhere('preview_text', 'like', $query)
                    ->orWhere('detail_text', 'like', $query)
                    ->paginate(10)
            ]);
        }

        return [];
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
