<?php

namespace App\Http\Controllers;

use App\Models\Curso;

use Illuminate\Http\Request;
use App\http\Requests\StoreCurso;
use PhpParser\Node\Expr\FuncCall;

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

    public function store(StoreCurso $request){
        //return $request->all();

        //validar campos
/*
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->email = $request->email;
        
        //return $curso;
        $curso->save();
*/
        /*
        $curso  = Curso::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        */
        
        $curso  = Curso::create($request->all());//salva el registro en la DB con los datos del formulario, menos la propiedad _token
        
        return redirect()->route('cursos.show', $curso);//Le mandamos el objeto donde esta incluido el id, laravel busca el id y lo utiliza
        
    }

/*
    public function show($id){

        $curso = Curso::find($id);
        //return $curso;

        return view('cursos.show', ['curso' => $curso]);  
    }
*/

    public function show(Curso $curso){
        return view('cursos.show', compact('curso'));
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
        /*$curso->name = $request->name;
        $curso->email = $request->email;
        $curso->save();*/

        $curso->update($request->all());
        
        return view('cursos.show', ['curso' => $curso]);  
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');  
    }

}
