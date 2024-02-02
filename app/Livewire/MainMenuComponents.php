<?php

namespace App\Livewire;

use App\Models\Diklat;
use Livewire\Component;
use Livewire\WithPagination;

class MainMenuComponents extends Component
{
    public $searchdiklat;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function resetPage()
    {
        $this->gotoPage(1, 'Page');
    }
    public function render()
    {
        $searchdiklat = '%' . $this->searchdiklat . '%';
        return view('livewire.main-menu-components', [
            'diklats' => Diklat::where('nama_diklat', 'LIKE', $searchdiklat)->orderBy('id', 'DESC')->paginate(6, ['*'], 'Page'),
        ]);
    }

    public function delete($id)
    {
        Diklat::find($id)->delete();
        session()->flash('message', 'Data berhasil dihapus.');
    }
}
