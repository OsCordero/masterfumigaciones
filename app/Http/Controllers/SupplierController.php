<?php

namespace App\Http\Controllers;

use App\ProductType;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductType::all();

        $suppliers =
            Supplier::paginate(5);
        return view('proveedores.index', compact(["suppliers","products"]));
    }

    /**
     * Display a listing filtered by two params.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filterSuppliers(Request $request)
    {
        $products = ProductType::all();
        $name = $request['name_supplier'];
        $product_type = $request['product_type'];
        $suppliers = null;

        if($name !== null && $product_type !== "0"){
            $suppliers = Supplier::where('product_types_id','=',(int)$product_type)
                ->where('nombre_proveedor','LIKE',"%{$name}%")
                ->paginate(5);
            return view('proveedores.index', compact(["suppliers","products"]));
        } elseif($name !== null){
            $suppliers = Supplier::where('nombre_proveedor','LIKE',"%{$name}%")
                ->paginate(5);
            return view('proveedores.index', compact(["suppliers","products"]));
        } elseif ($product_type !== "0"){
            $suppliers = Supplier::where('product_types_id','=',(int)$product_type)->paginate(5);
            return view('proveedores.index', compact(["suppliers","products"]));
        } else {
            return redirect("suppliers");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = ProductType::all();
        return view('proveedores.create', compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validando valores del request
        $data = $request->validate([
            'nombre_proveedor' => 'required|min:3|max:50',
            'tipo_producto' => 'required',
            'telefono_proveedor' => 'required|min:9|max:9',
            'celular_proveedor' => 'required|min:9|max:9',
            'correo_proveedor' => 'required|email|unique:suppliers,correo_proveedor',
            'direccion_proveedor' => 'required|min:3|max:100',
            'comentarios' => 'required|min:3|max:100'
        ]);

        //Creando y guardando registro
        $supplier = Supplier::create([
           "nombre_proveedor" => $data['nombre_proveedor'],
           "product_types_id" => $data['tipo_producto'],
           "telefono_proveedor" => $data['telefono_proveedor'],
           "celular_proveedor" => $data['celular_proveedor'],
           "correo_proveedor" => $data['correo_proveedor'],
           "direccion_proveedor" => $data['direccion_proveedor'],
           "comentarios" => $data['comentarios']
        ]);
        //Redireccionar a index con mensaje de éxito
        return redirect("suppliers")->with("success","Proveedor creado con éxito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        $products = ProductType::all();
        return view('proveedores.show', compact(['supplier','products']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $products = ProductType::all();
        return view('proveedores.edit', compact(['supplier','products']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //Validando valores del request
        $data = $request->validate([
            'nombre_proveedor' => 'required|min:3|max:50',
            'tipo_producto' => 'required',
            'telefono_proveedor' => 'required|min:9|max:9',
            'celular_proveedor' => 'required|min:9|max:9',
            'correo_proveedor' => ['required','email',Rule::unique('suppliers')->ignore($supplier->id)],
            'direccion_proveedor' => 'required|min:3|max:100',
            'comentarios' => 'required|min:3|max:100'
        ]);

        //Asignando valores nuevos al objeto
        $supplier->nombre_proveedor = $data["nombre_proveedor"];
        $supplier->product_types_id = $data["tipo_producto"];
        $supplier->telefono_proveedor = $data["telefono_proveedor"];
        $supplier->celular_proveedor = $data["celular_proveedor"];
        $supplier->correo_proveedor = $data["correo_proveedor"];
        $supplier->direccion_proveedor = $data["direccion_proveedor"];
        $supplier->comentarios = $data["comentarios"];

        //Guardar objeto
        $supplier->save();

        //Redireccionar a index con mensaje de éxito
        return redirect("suppliers")->with("success","Proveedor actualizado con éxito");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        try {
            $supplier->delete();
            return redirect('suppliers')->with("success","Proveedor eliminado con éxito");
        } catch (exception $e) {
            return redirect('suppliers')->with("error","Algo salió mal");
        }
    }
}
