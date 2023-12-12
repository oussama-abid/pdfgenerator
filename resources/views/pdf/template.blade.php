<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Css Link  put after title  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!--Script Link  put befor end of </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        .element {
            display: inline-block;
            /* Display elements side by side */
            margin: 10px;
            vertical-align: top;
            /* Align elements to the top */

            /* Add some margin for spacing */
        }

        @page {
            size: A4;
            mso-header-data: "";
            mso-footer-data: "";
            margin: 1in 0.75in 1in 0.75in;
            mso-header-margin: 0.511811023622047in;
            mso-footer-margin: 0.511811023622047in;
            mso-page-orientation: Portrait;
        }

        body {
            margin-top: -90px;
            margin-bottom: -90px;
            font-family: "Arial", sans-serif !important;
            margin-left: -50px;
            width: 80%;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            white-space: nowrap;
        }


        .header>div {
            width: 80px;
        }

        input[type="checkbox"] {
            transform: scale(1.5);
            accent-color: black;
            margin-right: 2px;
            /* Adjust the scale factor as needed */
        }

        input[type="radio"] {
            transform: scale(1.1);
            accent-color: black;

            /* Adjust the scale factor as needed */
        }

        .img {

            width: 50px !important;
            height: 50px;
        }

        .title h4 {

    border-bottom: 2px outset #e2e5ef;
    padding-bottom: 5px;
    margin-bottom: 5px;
    margin-top: 4px;
 /* Adjust this value to control the length of the border */
    border-bottom: 2px outset #e2e5ef;
    width: 600px;
}

.title h4::after {
    /* Extend the width to 100% */
}

        table {
            font-size: 12px;
            width: 60%;
            width: 750px;
            border-collapse: separate;
            border-spacing: 3px;
        }

        td {
            width: 3px;
            padding: 1px;
            margin-bottom: 5px;
            margin-top: 1px;
            height: 17px;
        }

        tr {
            margin-top: 5px !important;
            height: 12px;
        }

        .datafirst {
            background-color: #e2e5ef;
            /* Set the background color as needed */
            padding: 4px;
            width: 135px;
            /* Add any additional styles for the td elements here */
        }

        .small {
            background-color: #e2e5ef;
            /* Set the background color as needed */
            padding: 3px;
            display: inline-block;
            float: left;
            width: 11%;
            text-align: center;
            margin-right: 2px;
            margin-bottom: 2px !important;
            height: 14px;
        }

        .small2 {
            background-color: #e2e5ef;
            /* Set the background color as needed */
            padding: 3px;
            display: inline-block;
            float: left;
            width: 13%;
            text-align: center;
            margin-right: 2px;
            height: 13px;
        }

        .pt {
            padding: 3px;
            display: inline-block;
            float: left;
            width: 7%;
            text-align: center;
            margin-right: 1px;
            height: 16px;
        }

        .halfline {
            border-bottom: 2px outset #e2e5ef;
            /* You can adjust the color and thickness as needed */
            padding-bottom: 5px;
            /* Adjust the spacing between the text and the line as needed */
            margin-bottom: 10px;
            margin-right: -225px;
            float: right;
            width: 590px;
        }

        th {
            text-align: center;
        }
    </style>
</head>

<body style="padding: 10px;">
    <div>
        <div class="header">
            <div>
                <h2>Schadensprotokoll für Güterwagen</h2>
                <p style="font-size: 9px;">Ref: Allgemeiner Vertrag für die Verwendung von Güterwagen (AVV) – Artikel 18 & Anlage 4</p>
            </div>

        </div>
        <div class="hero">
            <div class="title">

                <h4>1. Allgemeine Informationen</h4>

            </div>
            <div class="content">
                <table style="">
                    <tr>
                        <td style="width: 100px;">Verwendendes EVU</td>
                        <td style="align-items: center;">
                            <span class="small" style="width: 8px !important;">{{ $verevu1 }}</span>

                            <span class="small" style="width: 8px !important;">{{ $verevu2 }}</span>
                            <span class="small" style="width: 8px !important;">{{ $verevu3 }}</span>
                            <span class="small" style="width: 8px !important;">{{ $verevu4 }}</span>
                            <span style="min-width: 126px !important; margin-bottom: -4px !important;padding-left: 4px !important;padding-top: 2px !important;  text-align: left !important;float: left; height: 17.8px; background-color: #e2e5ef; display: inline-block; ">{{ $verwendendesevu }}</span>
                        </td>
                        <td>Protokoll-Nr.</td>
                        <td class="datafirst"> {{ $protokollnr }}</td>
                    </tr>
                    <tr>
                        <td>Sendungs- Nr</td>
                        <td class="datafirst"> {{ $sendungsnr }}</td>
                        <td>Zug-Nr.</td>
                        <td class="datafirst"> {{ $zugnr }}</td>
                    </tr>
                    <tr>
                        <td>Ort Schadensfeststellung</td>
                        <td class="datafirst"> {{ $ortschadensfeststellung }}</td>
                        <td>Schaden festgestellt am</td>
                        <td class="datafirst">  {{ $Schadenfestgestelltam }}</td>
                    </tr>
                    <tr>
                        <td>Versandbahnhof</td>
                        <td class="datafirst"> {{ $versandbahnhof }}</td>
                        <td>Versanddatum</td>
                        <td class="datafirst"> {{ $versanddatum }}</td>
                    </tr>
                    <tr>
                        <td>Empfangsbahnhof</td>
                        <td class="datafirst"> {{ $empfangsbahnhof }}</td>
                        <td>Ladezustand</td>
                        <td style="white-space: nowrap; width: 200px;">


                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" {{ $ladezustand === 'Beladen' ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio1" style=" margin-left: 3px;">Beladen</label>

                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" style=" margin-left: 6px;" value="option2" {{ $ladezustand === 'Leer' ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadio2" style=" margin-left: 3px;">Leer</label>


                        </td>
                    </tr>
                </table>
                <div class="halfline">

                </div>
                <br>
                <table style="">
                    <tr>
                        <td>Wagennummer</td>
                        <td class="datafirst"> {{ $wagennummer }}</td>
                    </tr>
                    <tr>
                        <td style="width: 100px !important;">Halter
                        </td>
                        <td style="align-items: center;">
                            <span class="small" style="width: 20px !important;">{{ $halter1 }}</span>

                            <span class="small" style="width: 20px !important;">{{ $halter2 }}</span>
                            <span class="small" style="width: 20px !important;">{{ $halter3 }}</span>
                            <span class="small" style="width: 20px !important; margin-bottom: 20px !important ;">{{ $halter4 }}</span>
                            <span style="width: 499px  !important; margin-bottom: 2px !important;padding-left: 4px !important;padding-top: 2px !important;  text-align: left !important;float: left; height: 18px; background-color: #e2e5ef; display: inline-block; min-width: 200px; ">{{ $halter }}</span>
                        </td>

                    </tr>
                    <br style="line-height: 0.1;">
                    <tr>
                        <td style="margin-top: 20px !important ; height: 20px !important; ">Halter Adresse/ E-Mail</td>
                        <td class="datafirst"> {{ $halter_adresse }}</td>
                    </tr>
                </table>
            </div>

        </div>
        <div class="hero">
            <div class="title">

                <h4>2. Beschreibung des Schadens</h4>

            </div>
            <div class="content">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 15%;"></th>
                            <th style="width: 30%;">Schadcodes <span style="font-size:11px">(Anlage 9 AVV)</span></th>
                            <th></th>
                            <th style="width: 50% !important;">Mangelbezeichnung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>schaden 1:</h4>
                            </td>
                            <td style="align-items: center;">

                                <span class="small">{{ $sch1 }}</span>
                                <span class="pt">.</span>
                                <span class="small">{{ $sch2 }}</span>
                                <span class="pt">.</span>
                                <span class="small">{{ $sch3 }}</span>
                                <span class="pt">.</span>
                                <span class="small2">{{ $sch4 }}</span>

                            </td>
                            <td style="float: left; ">
                                <div class="flex-container">
                                    <input type="radio" name="" id="" style="margin-top: -9px; margin-left: 9px;" {{ $schadstand1 === 'Neu' ? 'checked' : '' }}>
                                    <label>Neu</label>

                                    <br>
                                    <input type="radio" name="" id="" style="margin-top: -9px; margin-left: 9px;" {{ $schadstand1 === 'Alt' ? 'checked' : '' }}>
                                    <label>Alt</label>
                                </div>


                            </td>
                            <td class="datafirst"> {{ $mangelbezeichnung1 }}</td>
                        </tr>
                        <tr>
                            <td>
                                <h4>schaden 2:</h4>
                            </td>
                            <td style="align-items: center;">

                                <span class="small">{{ $sch11 }}</span>
                                <span class="pt">.</span>
                                <span class="small">{{ $sch22 }}</span>
                                <span class="pt">.</span>
                                <span class="small">{{ $sch33 }}</span>
                                <span class="pt">.</span>
                                <span class="small2">{{ $sch44 }}</span>

                            </td>
                            <td style="float: left; ">
                                <div class="flex-container">
                                    <input type="radio" name="" id="" style="margin-top: -9px; margin-left: 9px;" {{ $schadstand2 === 'Neu' ? 'checked' : '' }}>
                                    <label>Neu</label>

                                    <br>
                                    <input type="radio" name="" id="" style="margin-top: -9px; margin-left: 9px;" {{ $schadstand2 === 'Alt' ? 'checked' : '' }}>
                                    <label>Alt</label>
                                </div>


                            </td>
                            <td class="datafirst"> {{ $mangelbezeichnung2 }}</td>
                        </tr>
                        <tr>
                            <td>
                                <h4>schaden 3:</h4>
                            </td>
                            <td style="align-items: center;">

                                <span class="small">{{ $sch111 }}</span>
                                <span class="pt">.</span>
                                <span class="small">{{ $sch222 }}</span>
                                <span class="pt">.</span>
                                <span class="small">{{ $sch333 }}</span>
                                <span class="pt">.</span>
                                <span class="small2">{{ $sch444 }}</span>

                            </td>
                            <td style="float: left; ">
                                <div class="flex-container">
                                    <input type="radio" name="" id="" style="margin-top: -9px; margin-left: 9px;" {{ $schadstand3 === 'Neu' ? 'checked' : '' }}>
                                    <label>Neu</label>

                                    <br>
                                    <input type="radio" name="" id="" style="margin-top: -9px; margin-left: 9px;" {{ $schadstand3 === 'Alt' ? 'checked' : '' }}>
                                    <label>Alt</label>
                                </div>


                            </td>
                            <td class="datafirst"> {{ $mangelbezeichnung3 }}</td>
                        </tr>
                        <tr>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tr>
                        <td>Zusätzliche Bemerkungen
                        </td>
                        <td class="datafirst" style="height: 40px;"> {{ $ZusätzlicheBemerkungen }} </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="hero">
            <div class="title">

                <h4>3. Vorgefundene Bezettelung</h4>

            </div>
            <div class="content">
                <table>
                    <tr>
                        <td style="align-items: center; width: 180px;">

                            <div class="form-check form-check-inline">
                                <label style="margin-right: 20px; margin-left: -20px; ">Muster</label>
                                <input type="checkbox" id="inlineCheckbox1" value="option1" {{ $k === 'K' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox1">K</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px;">
                                <input type="checkbox" id="inlineCheckbox2" value="option2" {{ $m === 'M' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox2">{{$k}}</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px;">
                                <input type="checkbox" id="inlineCheckbox3" value="option3" {{ $i === 'I' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox3">I</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px;">
                                <input type="checkbox" id="inlineCheckbox3" value="option3" {{ $r === 'R1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox3">R1</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px;">
                                <input type="checkbox" id="inlineCheckbox3" value="option3" {{ $u === 'U' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox3">U</label>
                            </div>

                        </td>
                        <td style="width: 200px;">
                            <div class="form-check form-check-inline" style="">
                                <label style="margin-right: 10px;" class="element">Datum</label>
                                <span class="element" style=" margin-bottom: -4px !important;padding-left: 4px !important;padding-top: 2px !important;  text-align: left !important; height: 17px; background-color: #e2e5ef; display: inline-block; min-width: 300px; ">{{ $datum_vorgefundene }}</span>

                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px; " hidden>
                                <input type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Nach</label>
                                <label style="margin-left: 6px;">Entladung</label>
                            </div>
                        </td>

                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="width: 190px !important;">EVU, das die Bezettelung vorgenommen hat
                        </td>
                        <td style="align-items: center;">
                            <span class="small" style="width: 20px !important;">{{ $evu1 }}</span>

                            <span class="small" style="width: 20px !important;">{{ $evu2 }}</span>
                            <span class="small" style="width: 20px !important;">{{ $evu3 }}</span>
                            <span class="small" style="width: 20px !important;">{{ $evu4 }}</span>
                            <span style="width: 375px  !important; margin-bottom: -4px !important;padding-left: 4px !important;padding-top: 2px !important;  text-align: left !important;float: left; height: 17.8px; background-color: #e2e5ef; display: inline-block; min-width: 200px; ">{{ $evu }}</span>
                        </td>

                    </tr>
                </table>
            </div>

        </div>
        <div class="hero">
            <div class="title">

                <h4>4. Erfolgte Bezettelung</h4>


            </div>
            <div class="content">
                <table>
                    <tr>
                        <td style="align-items: center; width: 180px;">

                            <div class="form-check form-check-inline">
                                <label style="margin-right: 20px; margin-left: -20px; ">Muster</label>
                                <input type="checkbox" id="inlineCheckbox1" value="option1" {{ $k1 === 'K' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox1">K</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px;">
                                <input type="checkbox" id="inlineCheckbox2" value="option2" {{ $m1 === 'M' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox2">M</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px;">
                                <input type="checkbox" id="inlineCheckbox3" value="option3" {{ $i1 === 'I' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox3">I</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px;">
                                <input type="checkbox" id="inlineCheckbox3" value="option3" {{ $r1 === 'R1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox3">R1</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px;">
                                <input type="checkbox" id="inlineCheckbox3" value="option3" {{ $u1 === 'U' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox3">U</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px;">
                                <input type="checkbox" id="inlineCheckbox3" value="option3" {{ $aus1 === 'Aussetzen' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox3">Aussetzen</label>
                            </div>
                        </td>
                        <td style="width: 200px;">
                            <div class="form-check form-check-inline" style="">
                                <label style="margin-right: 10px;">Werkstattzuführung</label>
                                <input type="checkbox" id="inlineCheckbox3" value="option3" {{ $werkstattzufuehrung === 'vor' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox3">Vor</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-left: -25px;">
                                <input type="checkbox" id="inlineCheckbox3" value="option3" {{ $werkstattzufuehrung === 'Nach' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineCheckbox3">Nach</label>
                                <label style="margin-left: 6px;">Entladung</label>
                            </div>
                        </td>

                    </tr>
                </table>

                </table>
            </div>

        </div>
        <div class="hero">
            <div class="title">

                <h4>5. Schadensfeststellung bei der Übernahme</h4>

            </div>
            <table>
                <tr>
                    <td style="align-items: center; ">

                        <div class="form-check form-check-inline" style="margin-left: -20px;">
                            <input type="checkbox" id="inlineCheckbox1" value="option1" {{ $schadensfeststellung === 'AVV-EVU' ? 'checked' : '' }} >
                            <label class="form-check-label" for="inlineCheckbox1">AVV-EVU</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-left: 25px;">
                            <input type="checkbox" id="inlineCheckbox2" value="option2" {{ $schadensfeststellung === 'Nicht-AVV-EVU' ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineCheckbox2">Nicht-AVV-EVU </label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-left: 25px;">
                            <input type="checkbox" id="inlineCheckbox3" value="option3" {{ $schadensfeststellung === 'Anschlussbahn' ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineCheckbox3">Anschlussbahn</label>
                        </div>

                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width: 70px  !important;">Unternehmen
                    </td>
                    <td style="align-items: center;">
                        <span class="small" style="width: 20px !important;">{{ $unter1 }}</span>

                        <span class="small" style="width: 20px !important;">{{ $unter2 }}</span>
                        <span class="small" style="width: 20px !important;">{{ $unter3 }}</span>
                        <span class="small" style="width: 20px !important;">{{ $unter4 }}</span>
                        <span style="width: 530px  !important; margin-bottom: -4px !important;padding-left: 4px !important;padding-top: 2px !important;  text-align: left !important;float: left; height: 18px; background-color: #e2e5ef; display: inline-block; min-width: 200px; "> {{ $unternehmen }}</span>
                    </td>

                </tr>
            </table>

        </div>
        <div class="hero">
            <div class="title">

                <h4>6. Angaben zur Ursache / zum Verursacher</h4>

            </div>
            <div class="content">
                <table>
                    <tr>
                        <td style="width: 50%;">
                            <input type="checkbox" value="" id="defaultCheck1" {{ $ursache_verursacher === 'Dritter' ? 'checked' : '' }}>
                            <label class="form-check-label" for="defaultCheck1">
                                Dritter
                            </label>
                            <br>
                            <input type="checkbox" value="" id="defaultCheck1" {{ $ursache_verursacher === 'Verschleiß' ? 'checked' : '' }}>
                            <label class="form-check-label" for="defaultCheck1">
                                Verschleiß
                            </label>
                            <br>
                            <input type="checkbox" value="" id="defaultCheck1" {{ $ursache_verursacher === 'Gewaltschaden im Eisenbahnbetrieb' ? 'checked' : '' }}>
                            <label class="form-check-label" for="defaultCheck1">
                                Gewaltschaden im Eisenbahnbetrieb

                            </label>
                            <br>
                            <input type="checkbox" value="" id="defaultCheck1" {{ $ursache_verursacher === 'Nicht ermittelbar' ? 'checked' : '' }}>
                            <label class="form-check-label" for="defaultCheck1">
                                Nicht ermittelbar

                            </label>

                        </td>
                        <td style="width: 50%;">
                            <div>
                                <p style="color: black; "> Name, Adresse und Kontaktinformationen Dritter</p>

                                <span style="width: 375px  !important; padding-left: 4px !important;padding-top: 2px !important;  text-align: left !important; height: 70px; background-color: #e2e5ef; display: inline-block; min-width: 200px; ">{{ $kontaktinfo_dritter }}</span>
                            </div>
                        </td>
                    </tr>
                </table>

            </div>

        </div>
        <div class="hero">
            <div class="title">

                <h4></h4>

            </div>
            <div class="content">
                <div class="left" style="float: left; ">
                    <div class="element">
                        <!-- Content for the first element goes here -->
                        Ort, Datum
                    </div>
                    <div class="element">
                        <span style="display: inline-block;width: 190px;height: 20px; background-color: #e2e5ef;">
                        {{ $ortdatum }}
                        </span>

                    </div>
                    <br>
                    <div>
                        <input type="checkbox" value="" id="defaultCheck1" style="margin-left: 3px; transform: scale(1.0) !important;" {{ $Anlagen === 'Anlagen' ? 'checked' : '' }}>
                        <label class="form-check-label" for="defaultCheck1">
                            Anlagen
                        </label>
                    </div>

                </div>
                <div class="right" style="float: right; margin-right:-190px ; ">
                    <!-- Content for the right div goes here -->
                    <div class="element">
                        <!-- Content for the first element goes here -->
                        Kontakt
                    </div>
                    <div class="element">
                        <span style="display: inline-block;
      width: 280px;
      height: 70px; 
      background-color: #e2e5ef;">

                        </span>

                    </div>
                </div>
            </div>

        </div>


    </div>
</body>

</html>