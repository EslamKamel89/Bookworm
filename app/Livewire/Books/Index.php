<?php

namespace App\Livewire\Books;

use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component {
	/** @var Collection<Book>|null $books */
	public Collection|null $books = null;
	public function mount() {
		$this->books = auth()->user()->books()->latest()->get();
	}
	public function render() {
		return view( 'livewire.books.index', [ 
			'books' => $this->books,
		] );
	}
}
