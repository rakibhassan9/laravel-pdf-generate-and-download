<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    
    public function generatePdf(){
        
    $data = 'Rakib Hassan';  

    $pdf = Pdf::loadView('billing_invoice', compact('data'));
    return $pdf->stream('Billing_Invoice');
    }

    public function downloadPdf(){
        $data = 'Rakib Hassan';  

    $pdf = Pdf::loadView('billing_invoice', compact('data'));
    return $pdf->download('Billing_Invoice');
    }
}
