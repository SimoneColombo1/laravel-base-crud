<?php

namespace App\Http\Controllers\Admin;

use App\Models\Animals;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnimalRequest;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    private $validationRules = [
        'Nome' => 'min:4',
        'Specie' => 'min:4',
        'Eta' => 'min:1',
        'DataArrivo' => 'min:4',
        'Peso' =>  'min:1',
        'Sesso' => 'min:4',
        'habitat' =>  'min:4',
    ];

    private $validationMessages = [
        'Nome.min' => 'Devi inserire almeno 4 caratteri',

        'Specie.min' => 'Devi inserire almeno 4 caratteri',
        'Eta.min' => 'Deve essere maggiore di 1',
        'DataArrivo.min' => 'Devi inserire almeno 4 caratteri',
        'Peso.min' => 'Deve essere maggiore di 1',

        'Sesso.min' => 'Devi inserire almeno 4 caratteri',
        'habitat.min' => 'Devi inserire almeno 4 caratteri',
    ];
    public function index()
    {
        $animals = Animals::all();
        return view('admin.Animals.index', compact("animals"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->validationRules, $this->validationMessages);

        $newAnimal = Animals::create($data);

        return redirect()->route('admin.Animals.show', $newAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animals $animal)
    {

        return view('admin.Animals.show', compact("animal"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animals $animal)
    {
        return view('admin.Animals.edit', compact("animal"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animals $animal)
    {
        $data =
            $request->validate($this->validationRules, $this->validationMessages);;
        $animal->update($data);

        return redirect()->route('admin.Animals.show', $animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animals $animal)
    {
        $animal->delete();
        return redirect()->route('admin.Animals.index');
    }
}
