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
            $name=time().$file->getClientOriginalName(); // se le asigna un nombre a la imagen unico
            $file->move(public_path().'/images/',$name); // se mueve la imagen a una carpea llamada images
        }
        
            $trainer=new Trainer();
            $trainer->name=$request->input('name'); // almacena el nombre en trainer
            $trainer->avatar=$name; // se asocia la imagen con el nombre del entrenador
            $trainer->des=$request->input('des'); // almacena la descripcion
            $trainer->slug=$request->input('slug');
            $trainer->save();
            return 'Saved';
            //return $request->all();
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
    //public function edit($id)
    public function edit(Trainer $trainer) // se utiliza Implicit binding
    {
        return view('trainers.edit',compact('trainer')); // retorna la vista edit y le envia los datos
        //return $trainer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update(Request $request, Trainer $trainer) //usando implicit binding
    {
        //para actualizar nustra informacion de trainer
        //$trainer->fill($request->all()); // todo lo que venga en el $request sera capturado
        $trainer->fill($request->except('avatar')); 
        if ($request->hasFile('avatar')){ 
            $file=$request->file('avatar'); 
            $name=time().$file->getClientOriginalName(); 
            $trainer->avatar=$name; // le da nuevo nombre a la imagen y remplaza la existente
            $file->move(public_path().'/images/',$name); 
        }
        $trainer->save();// Almacena todos los cambios
        return 'Updated';    
        //return $request; 
        //return $trainer;
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
