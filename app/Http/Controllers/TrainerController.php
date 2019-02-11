<?php
namespace LaraDex\Http\Controllers;

use LaraDex\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "Hola desde el controlador";
        $trainers = Trainer::all();
        return view('trainers.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // este if verifica si existe una imagen 
        if ($request->hasFile('avatar')){ //verifica si es una archivo
            $file=$request->file('avatar'); //guarda la imagen en la varible $file
            $name=time().$file->getClientOriginalName(); // se le asigna un nombre a la imagen de manera unica
            $file->move(public_path().'/images/',$name); // se mueve la imagen a una carpea llamada images
        }

        $trainer=new Trainer();
        $trainer->name=$request->input('name'); // almacena el nombre en trainer
        $trainer->avatar=$name; // se asocia la imagen con el nombre del entrenador
        $trainer->des=$request->input('des'); // almacena la descripcion
        $trainer->save();
        return 'Saved';

        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    public function show(Trainer $trainer) // usando Implicit Binding
    //public function show($slug)
    {
        //$trainer=Trainer::find($id);
        //return $trainer;
        
        //$trainer=Trainer::where('slug','=',$slug)->firstOrFail();// lanza una excepcion si no encuentra el modelo que se desea
        return view('trainers.show',compact('trainer')); // compact le pasa toda la informacion del id a la vista show
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
