<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePdf(Request $request)
    {
        // Validate form data here if needed

        // Get form data
        $verevu1 = $request->input('verevu1');
        $verevu2 = $request->input('verevu2');
        $verevu3 = $request->input('verevu3');
        $verevu4 = $request->input('verevu4');
        $verwendendesevu = $request->input('verwendendesevu');



        $protokollnr = $request->input('protokollnr');
        $sendungsnr = $request->input('sendungsnr');
        $zugnr = $request->input('zugnr');
        $ortschadensfeststellung = $request->input('ortschadensfeststellung');
        $versandbahnhof = $request->input('versandbahnhof');
        $versanddatum = $request->input('versanddatum');
        $empfangsbahnhof = $request->input('empfangsbahnhof');
        $Schadenfestgestelltam = $request->input('Schadenfestgestelltam');
        $ladezustand = $request->input('ladezustand');
        $wagennummer = $request->input('wagennummer');





        $halter1 = $request->input('halter1');
        $halter2 = $request->input('halter2');
        $halter3 = $request->input('halter3');
        $halter4 = $request->input('halter4');
        $halter = $request->input('halter');





        $halter_adresse = $request->input('halter_adresse');

        #------------2----------------

        $sch1 = $request->input('sch1');
        $sch2 = $request->input('sch2');
        $sch3 = $request->input('sch3');
        $sch4 = $request->input('sch4');

        $schadstand1 = $request->input('Schadstand1');
        $mangelbezeichnung1 = $request->input('Mangelbezeichnung1');




        $sch11 = $request->input('sch11');
        $sch22 = $request->input('sch22');
        $sch33 = $request->input('sch33');
        $sch44 = $request->input('sch44');


        $schadstand2 = $request->input('Schadstand2');
        $mangelbezeichnung2 = $request->input('Mangelbezeichnung2');



        $sch111 = $request->input('sch111');
        $sch222 = $request->input('sch222');
        $sch333 = $request->input('sch333');
        $sch444 = $request->input('sch444');


        $schadstand3 = $request->input('Schadstand3');
        $mangelbezeichnung3 = $request->input('Mangelbezeichnung3');
        $ZusätzlicheBemerkungen = $request->input('ZusätzlicheBemerkungen');

        #--------------------
        $muster_vorgefundene = $request->input('muster_vorgefundene');
        $datum_vorgefundene = $request->input('datum_vorgefundene');


        $evu = $request->input('evu');
        $evu1 = $request->input('evu1');
        $evu2 = $request->input('evu2');
        $evu3 = $request->input('evu3');
        $evu4 = $request->input('evu4');

        $muster_erfolgte = $request->input('muster_erfolgte');
        $werkstattzufuehrung = $request->input('werkstattzufuehrung');

        $schadensfeststellung = $request->input('schadensfeststellung');
        $unternehmen = $request->input('unternehmen');
        $unter1 = $request->input('unter1');
        $unter2 = $request->input('unter2');
        $unter3 = $request->input('unter3');
        $unter4 = $request->input('unter4');


        $ursache_verursacher = $request->input('ursache_verursacher');
        $kontaktinfo_dritter = $request->input('kontaktinfo_dritter');

        #--------------------

        $ortdatum = $request->input('ortdatum');
        $Anlagen = $request->input('Anlagen');


        $k = $request->input('k');
        $m = $request->input('m');
        $i = $request->input('i');
        $r = $request->input('r');
        $u = $request->input('u');

        $k1 = $request->input('k1');
        $m1 = $request->input('m1');
        $i1 = $request->input('i1');
        $r1 = $request->input('r1');
        $u1 = $request->input('u1');
        $aus1 = $request->input('aus1');






        // Create PDF
        $pdf = PDF::loadView('pdf.template', compact(
            'verevu1',
            'verevu2',
            'verevu3',
            'verevu4',
            'verwendendesevu',
            'protokollnr',
            'sendungsnr',
            'zugnr',
            'ortschadensfeststellung',
            'versandbahnhof',
            'versanddatum',
            'empfangsbahnhof',
            'Schadenfestgestelltam',
            'ladezustand',
            'wagennummer',
            'halter1',
            'halter2',
            'halter3',
            'halter4',
            'halter',
            'halter_adresse',
            'sch1',
            'sch2',
            'sch3',
            'sch4',
            'schadstand1',
            'mangelbezeichnung1',
            'sch11',
            'sch22',
            'sch33',
            'sch44',
            'schadstand2',
            'mangelbezeichnung2',
            'sch111',
            'sch222',
            'sch333',
            'sch444',
            'schadstand3',
            'mangelbezeichnung3',
            'ZusätzlicheBemerkungen',
            'muster_vorgefundene',
            'datum_vorgefundene',
            'evu',
            'evu1',
            'evu2',
            'evu3',
            'evu4',
            'muster_erfolgte',
            'werkstattzufuehrung',
            'schadensfeststellung',
            'unternehmen',
            'unter1',
            'unter2',
            'unter3',
            'unter4',
            'ursache_verursacher',
            'kontaktinfo_dritter',
            'ortdatum',
            'Anlagen',
            'k1',
            'm1',
            'i1',
            'r1',
            'u1',
            'aus1',
            'k',
            'm',
            'i',
            'r',
            'u',
        ));
        $pdf->setPaper('A4', 'landscape');
        //$pdf->setMargins(10, 10, 10, 10);
        //return view('pdf.template');
        // Download PDF
        return $pdf->stream('generated_pdf.pdf');
    }
}
