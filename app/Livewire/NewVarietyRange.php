<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\varietyRange;

class NewVarietyRange extends Component
{
    use WithFileUploads;

    public string $varietyName = '';
    public string $brand = 'AAA ROSES';
    public string $v_range = '';
    public $picUrl;

    protected $rules = [
        'varietyName' => 'required|string|max:255',
        'brand' => 'required|string|max:255',
        'v_range' => 'required|string|max:255',
        'picUrl' => 'image|max:1024',
    ];

    public function creatVarietyRange()
    {
        // // $request->file('profile_image')->store('http://localhost:8000/storage/images/')
        // // $this->picUrl->store('public/photos');
        // // $this->fileName
        $this->picUrl->storeAs('public/uploads', 'sq.png');
        // varietyRange::create($validated);

        $this->validate();

        varietyRange::create([
            'varietyName' => $this->varietyName,
            'brand' => $this->brand,
            'v_range' => $this->v_range,
            'picUrl' => $this->picUrl,
        ]);


        // varietyRange::create($validated);
        //  // Store the file in storage\app\public folder
        //  $file = $request->file('file_upload');
        //  $fileName = $file->getClientOriginalName();
        //  $filePath = $file->store('uploads', 'public');

        // $this->redirect('/variety-range', navigate: true);

        $this->redirect('/variety-range', navigate: true);
    }

    public function render()
    {
        return view('livewire.new-variety-range');
    }
}
