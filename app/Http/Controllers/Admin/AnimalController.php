<?php

namespace App\Http\Controllers\Admin;
use App\Models\Animals;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals= Animals::all();
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
        $data= $request->all();

        $newAnimal = Animals::create($data);

        return redirect()-> route('admin.Animals.show',$newAnimal);

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
        return view('admin.Animals.edit',compact("animal"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animals $animal)
    {
        $data=$request->all();
        $animal->update($data);

        return redirect()->route('admin.Animals.show',$animal);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}