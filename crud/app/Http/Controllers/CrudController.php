<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;


class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = Crud::paginate(5);
        return view('crud.index', compact('cruds'))
                    ->with( 'i' , (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ho' => 'required',
            'ten' => 'required'
        ]);

        // dd($request->all());

        Crud::create($request->all());

        return redirect()->route('crud.index')
                    ->with('success', 'new crud created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crud = Crud::find($id);
        return view('crud.detail',compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = Crud::find($id);
        return view('crud.edit', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ho' => 'required',
            'ten' => 'required'
        ]);
        $crud = Crud::find($id);
        $crud->ho = $request->get('ho');
        $crud->ten = $request->get('ten');
        $crud->save();
        return redirect()->route('crud.index')
                ->with('success','crud siswa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = Crud::find($id);
        $crud->delete();
        return redirect()->route('crud.index')
                ->with('success','crud delete');
    }
}
