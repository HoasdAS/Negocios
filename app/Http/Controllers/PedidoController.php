<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        //
    $datos['pedidos']=Pedido::paginate(5);

        return view('pedidos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pedidos.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosEmpleado =request()->all();
        $datosPedidos =request()->except('_token');


        Pedido::insert($datosPedidos);

        return response()->json($datosPedidos);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function edit($id)
     {
         $pedidos = Pedido::findOrFail($id);
         return view('pedidos.edit', compact('pedidos'));
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosPedidos = request()->except(['_token', '_method']);

        Pedido::where('id','=',$id)->update($datosPedidos);

        $pedidos = Pedido::findOrFail($id);
        return view('pedidos.edit', compact('pedidos'));
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Pedido::destroy($id);
        return redirect('pedidos');
    }
}
