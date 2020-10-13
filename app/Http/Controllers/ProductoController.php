<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Http\Requests\SaveProductoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('productos.index', [
            'productos' => Producto::latest()->paginate()
        ]);
    }

    public function show(Producto $producto) 
    {
        return view('productos.show', [
            'producto' => $producto
        ]);
    }

    public function create()
    {
        return view('productos.create', [
            'producto' => new Producto
        ]);
    }

    public function store(SaveProductoRequest $request)
    {
        $file = $request->file('foto');
        $originalname = $file->getClientOriginalName();
        Producto::create([
            'user_id' => auth()->id(),
            'foto' => $file->storeAs('fotos', $originalname, 'public') // AGREGA FOTO
        ] + $request->validated()); // se pone la id del usuario logeado en user_id
        return redirect()->route('productos.index')->with('status', 'El producto fue agregado con exito');
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', [
            'producto' => $producto
        ]);
    }

    public function update(Producto $producto, SaveProductoRequest $request)
    {
        

        /*if ($request->hasFile('foto')) {

            $imagePath = public_path('storage/'.$request->foto);
            if(Storage::disk('public')->exists($imagePath)){
                Storage::delete($producto->foto);
            }
            $file = $request->file('foto');
            $originalname = $file->getClientOriginalName();
            $image = $file->storeAs('fotos', $originalname, 'public');
            //$data['foto'] = $image;
            //$post->update($data);
        }*/

        $producto->update($request->validated());

        return redirect()->route('productos.show', $producto)->with('status', 'El producto fue actualizado con exito');
    }

    public function destroy(Producto $producto)
    {
        Storage::delete($producto->foto);
        $producto->delete();
        return redirect()->route('productos.index')->with('status', 'El producto fue eliminado con exito');
    }
}
