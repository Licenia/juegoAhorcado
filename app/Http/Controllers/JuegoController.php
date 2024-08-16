<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Session;

class JuegoController extends Controller
{
    public function index()
    {
        if (!Session::has('palabra')) {
            $categoria_id = rand(1, Categoria::count());
            $categoria = Categoria::find($categoria_id);
            if ($categoria) {
                Session::put('categoria_nombre', $categoria->nombre);
                $palabra = $categoria->palabras()->inRandomOrder()->first();
                if ($palabra) {
                    Session::put('palabra', $palabra->palabra);
                    Session::put('letras_adivinadas', []);
                    Session::put('intentos', 6);
                } else {
                    return redirect()->back()->withErrors('No se encontró ninguna palabra en la categoría seleccionada.');
                }
            } else {
                return redirect()->back()->withErrors('No se encontró ninguna categoría con id ' . $categoria_id);
            }
        }

        $palabra_mostrada = $this->mostrarPalabra(Session::get('palabra'), Session::get('letras_adivinadas'));

        if (str_replace("_", "", $palabra_mostrada) == Session::get('palabra')) {
            $mensaje = "¡Felicidades! Has ganado. La palabra era " . Session::get('palabra');
            Session::forget('palabra');
        } elseif (Session::get('intentos') == 0) {
            $mensaje = "Has perdido. La palabra era " . Session::get('palabra');
            Session::forget('palabra');
        } else {
            $mensaje = "";
        }

        return view('juego.index', compact('palabra_mostrada', 'mensaje'));
    }

    public function adivinar(Request $request)
    {
        $request->validate([
            'letra' => 'required|alpha|max:1',
        ]);

        $letra = mb_strtoupper($request->input('letra'), 'UTF-8');
        $letras_adivinadas = Session::get('letras_adivinadas', []);
        $mensaje = '';

        if (!in_array($letra, $letras_adivinadas)) {
            $letras_adivinadas[] = $letra;
            Session::put('letras_adivinadas', $letras_adivinadas);

            if (mb_strpos(Session::get('palabra'), $letra) === false) {
                Session::increment('intentos', -1);
            }
        } else {
            $mensaje = "Ya has intentado con esa letra.";
        }

        \Log::info('Letra recibida: ' . $letra);
        \Log::info('Letras adivinadas: ' . implode(', ', $letras_adivinadas));
        \Log::info('Intentos restantes: ' . Session::get('intentos'));

        return redirect()->route('juego.index')->with('mensaje', $mensaje);
    }

    private function mostrarPalabra($palabra, $letras_adivinadas)
    {
        $salida = "";
        for ($i = 0; $i < strlen($palabra); $i++) {
            if (in_array($palabra[$i], $letras_adivinadas)) {
                $salida .= $palabra[$i];
            } else {
                $salida .= "_";
            }
        }
        return $salida;
    }
}
