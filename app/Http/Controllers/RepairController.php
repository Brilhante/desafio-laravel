<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUpdateRepair;
use App\Models\Car;
use App\Models\User;
use App\Models\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    protected $repository;

    public function __construct(Repair $repair)
    {
        // $this->middleware('auth');
        $this->repository = $repair;        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $repairsId = $this->repository->requestRepairById();

        return view('pages.repairs.index', compact('repairsId'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataCars = Car::where('user_id',  Auth::user()->id)->get();
        // dd($dataCars);
        return view('pages.repairs.create', compact('dataCars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    //    dd($request->all());
        $this->repository->create($request->all());
        return redirect()->route('repairs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$repair = $this->repository->find($id)){
            return redirect()->back();
        }

        return view('pages.repairs.show', compact('repair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$repair = $this->repository->find($id)){
            return redirect()->back();
        }

        // dd($this->repository->all('tipo_manutencao'));

        return view('pages.repairs.edit', compact('repair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!$repair = $this->repository->find($id)){
            return redirect()->back();
        }

        $repair->update($request->all());

        return redirect()->route('repairs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$repair = $this->repository->find($id)){
            return redirect()->back();
        }

        $repair->delete();

        return redirect()->route('repairs.index');
    }
}
