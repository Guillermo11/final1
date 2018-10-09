<?php

namespace vume\Http\Controllers;
use vume\roles;
use vume\Admi_User;
use vume\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function index()
    {
        $Users = Admi_User::all();
       return View('admin.index',compact('Users'));  //

    }

      public function create()
    {

      $roles = roles::all('nombre','id');
      return view('admin.Usuario',compact('roles'));

    }

    public function store(Request $request)
    {
      $Admi_User = new Admi_User();
      $User = new User();
  //Nombre de la tabla->Nombre del campo de la tabla = $request->Nombre de caja de formulario;
    //
          $Admi_User->nombres= $request->Nombres;
          $Admi_User->apellidos = $request->Apellidos;
          $Admi_User->direccion= $request->Direccion;
          $Admi_User->telefono = $request->Telefono;
          $Admi_User->usuario = $request->Usuario;
          $Admi_User->Correo = $request->Email;
          $Admi_User->password =$request->Password;
          $Admi_User->cargo =$request->Cargo;
          $Admi_User->save();
          return redirect('/admin');

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {

      $user = Admi_User::find($id);
  return View('admin.Editar',['user'=>$user]);

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
      $user = Admi_User::find($id);
      $user->fill($request->all());
      $user->save();
      return redirect('/admin');
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
