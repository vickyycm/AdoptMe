<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novedad;

class NovedadesController extends Controller
{
    public function index()
    {
        $novedades = Novedad::latest()->get();
        return view('novedades.index', compact('novedades'));
    }
}
