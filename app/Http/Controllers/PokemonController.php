<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePokemonRequest;
use App\Http\Requests\UpdatePokemonRequest;
use App\Models\Pokemon;
use Inertia\Inertia;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pokemon::select(
            'p_id',
            'jp_name',
            'en_name',
            'type1',
            'type2',
            'ability1',
            'ability2',
            'hidden_ability',
            'hp',
            'attack',
            'defense',
            'special_attack',
            'special_defense',
            'speed',
            'total_stats',
            'front_default',
            'back_default',
            'dream_world_front_default',
            'home_front_default',
            'official_artwork_front_default',
            'height',
            'weight'
        )->get();

        return Inertia::render('Pokedex/Index', [
            'pokeinfo' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePokemonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePokemonRequest $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        //
    }
}
