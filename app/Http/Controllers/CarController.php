<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUpdateCar;
use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    protected $repository;

    public function __construct(Car $car)
    {
        // $this->middleware('auth');
        $this->repository = $car;        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $carsId = $this->repository->requestCarById();

        return view('pages.cars.index', compact('carsId'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCar $request)
    {
    //    dd($request->all());
    //    die;
        $this->repository->create($request->all());
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$car = $this->repository->find($id)){
            return redirect()->back();
        }

        return view('pages.cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$car = $this->repository->find($id)){
            return redirect()->back();
        }

        return view('pages.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateCar $request, $id)
    {
        if(!$car = $this->repository->find($id)){
            return redirect()->back();
        }

        $car->update($request->all());

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$car = $this->repository->find($id)){
            return redirect()->back();
        }

        $car->delete();

        return redirect()->route('cars.index');
    }
}
