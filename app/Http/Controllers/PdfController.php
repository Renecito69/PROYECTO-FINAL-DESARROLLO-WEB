<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use pdf;
use App\Models\Vehiculo;
class PdfController extends Controller
{
    public function imprimirVehiculos(Request $request)
 {
 $vehiculos=Vehiculo::orderBy('id','ASC')->get();
 $pdf = \PDF::loadView('pdf.vehiculosPDF',['vehiculos' => $vehiculos ]);
 $pdf->setPaper('carta', 'A4');
 return $pdf->stream();
 }

}