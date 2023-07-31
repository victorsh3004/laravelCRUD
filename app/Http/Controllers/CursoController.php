<?php

namespace App\Http\Controllers;

use App\Models\Curso;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::paginate();
        //return $cursos;
        return view('cursos.index',compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        //return $request->all();

        //validar campos

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->email = $request->email;
        
        //return $curso;
        $curso->save();

        return redirect()->route('cursos.show', $curso);//Le mandamos el objeto donde esta incluido el id, laravel busca el id y lo utiliza
        
    }

    public function show($id){

        $curso = Curso::find($id);
        //return $curso;

        return view('cursos.show', ['curso' => $curso]);  
    }

    /*public function edit($id){
        $curso = Curso::find($id);

        return $curso;
    }*/

    public function edit(Curso $curso){
        //return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        //return $request->all();
        $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|min:10',
        ]);
        $curso->name = $request->name;
        $curso->email = $request->email;

        $curso->save();
        return view('cursos.show', ['curso' => $curso]);  
    }


}
