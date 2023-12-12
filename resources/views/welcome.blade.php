<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schadensprotokoll für Güterwagen</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<style>
    *,
    *:before,
    *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .combined-input {
        display: flex;
    }

    .combined-input input {
        margin-right: 5px;
        /* Add some spacing between the inputs */
    }

    .tickradio {
        appearance: none;
        border: 1px solid #d9d9d9;
        width: 18px;
        height: 18px;
        content: none;
        outline: none;
        margin: 0;
        margin: 10px 6px -6px 0;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .tickradio {
        appearance: none;
        border: 1px solid #d9d9d9;
        width: 18px;
        height: 18px;
        content: none;
        outline: none;
        margin: 0;
        margin: 10px 6px -6px 0;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .tickradio:checked {
        appearance: none;
        outline: none;
        padding: 0;
        content: none;
        border: none;
    }

    .tickradio:checked::before {
        position: absolute;
        color: black !important;
        content: "\00A0\2713\00A0" !important;
        border: 1px solid #d9d9d9;
        font-weight: bolder;
        font-size: 12px;
    }

    .form-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .form-column {
        flex-basis: calc(50% - 10px);
        /* Adjust the width and margin as needed */
        margin-bottom: 10px;
    }

    textarea {
        resize: none;
    }

    .flex-container {
        display: inline-block !important;
        flex-wrap: wrap;
        white-space: nowrap !important;


    }

    .check {
        display: inline-block !important;
    }

    .check label {
        display: inline;
        clear: none;
        margin-right: 0px;
        margin-left: -10px;
        font-size: 11;


    }

    .intable {
        margin-left: 4px;
        margin-top: 2px;
    }

    .small {

        width: 15px;
        height: 15px;

        padding-right: 4px;
        color: black;
        accent-color: black;

    }

    table {
        border-collapse: separate;
        border: none;
        font-size: 12px !important;
        border-spacing: 0 5px;
        /* Adjust the second value to control the vertical spacing */
    }

    td,
    th {
        /* Add borders for a clearer separation */
        padding: 0px;
        text-align: center;
        font-size: 15px;
        /* Add padding for cell content */
        border: none;
    }

    input[type="checkbox"]:not(.small) {
        appearance: none;
        border: 1px solid #d9d9d9;
        width: 18px;
        height: 18px;
        content: none;
        outline: none;
        margin: 0;
        margin: 10px 6px -6px 0;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    input[type="checkbox"]:not(.small):checked {
        appearance: none;
        outline: none;
        padding: 0;
        content: none;
        border: none;
    }

    input[type="checkbox"]:not(.small):checked::before {
        position: absolute;
        color: black !important;
        content: "\00A0\2713\00A0" !important;
        border: 1px solid #d9d9d9;
        font-weight: bolder;
        font-size: 12px;
    }

    body {
        font-family: "Arial", sans-serif !important;
        color: #384047;
    }

    form {
        max-width: 300px;
        min-width: 436px;
        margin: 10px auto;
        padding: 10px 20px;
        background: #f4f7f8;
        border-radius: 8px;
    }

    h1 {
        margin: 0 0 30px 0;
        text-align: center;
        font-size: 13px;
    }

    .radname {
        font-size: 14px;
        margin-right: 10px;
        display: inline;
        vertical-align: 22%;
    }

    input[type="text"]:not(.nb),
    input[type="password"],
    input[type="date"],
    input[type="datetime"],
    input[type="email"],
    input[type="number"],
    input[type="search"],
    input[type="tel"],
    input[type="time"],
    input[type="url"],
    textarea,
    select {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        font-size: 16px;
        height: 40px;
        margin: 0;
        outline: 0;
        padding: 15px;
        width: 100%;
        background-color: #e2e5ef;
        ;
        color: black;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 30px;
    }



    select {
        padding: 6px;
        height: 32px;
        border-radius: 2px;
    }

    button {
        padding: 19px 39px 18px 39px;
        color: #FFF;
        background-color: #00CED1;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #48D1CC;
        border-width: 1px 1px 3px;
        box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
        margin-bottom: 10px;
        cursor: pointer;
        /* Add hand cursor */
        transition: background-color 0.3s ease;
        /* Add smooth transition for color change */
    }

    button:hover {
        background-color: #008B8B;
        /* Change color on hover */
    }


    fieldset {
        margin-bottom: 30px;

    }

    legend {
        font-size: 1em;
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    label.light {
        font-weight: 300;
        display: inline;
    }

    .number {
        background-color: #48D1CC;
        color: #fff;
        height: 20px;
        width: 20px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 3px;
        line-height: 20px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
        border-radius: 100%;
    }

    @media screen and (min-width: 660px) {
        table {
            border-collapse: separate;
            border: none;
            border-spacing: 0 20px;

            font-size: 19px !important;

            /* Adjust the second value to control the vertical spacing */
        }

        td,
        th {
            /* Add borders for a clearer separation */
            padding: 1px;
            /* Add padding for cell content */
            border: none;
        }

        .small {

            width: 24px;
            height: 24px;

            padding-right: 6px;
            color: black;
            accent-color: black;

        }

        .intable {
            margin-left: 6px;
            margin-top: 4px;
        }

        .radname {
            font-size: 18px;
            margin-right: 15px;
            display: inline;
            vertical-align: 22%;
        }
    }

    @media screen and (min-width: 400px) {


        form {
            max-width: 1000px;
        }

        h1 {

            font-size: 50px;
            margin-bottom: 40px;
        }

        legend {
            font-size: 1.4em;

            margin-bottom: 10px;
        }

        .number {
            background-color: #48D1CC;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
            border-radius: 100%;
        }
    }

    @media screen and (min-width: 490px) {

        legend {
            white-space: nowrap;
            font-size: 1.4em;

            margin-bottom: 10px;
        }

    }

    @media screen and (min-width: 260px) {

        h1 {

            font-size: 23px;
        }

    }

    @media screen and (min-width: 255px) {

        .check label {

            margin-right: 2px;
            margin-left: -8px;
            font-size: 15;


        }

        .tickradio {

            width: 20px;
            height: 20px;

        }

        .tickradio:checked::before {

            font-size: 14px;
        }

        input[type="checkbox"]:not(.small) {

            width: 20px;
            height: 20px;

        }



        input[type="checkbox"]:not(.small):checked::before {

            font-size: 14px;
        }


    }

    @media screen and (min-width: 305px) {

        .check label {

            margin-right: 2px;
            margin-left: -8px;
            font-size: 17;


        }

        input[type="checkbox"]:not(.small) {

            width: 25px;
            height: 25px;

        }


        input[type="checkbox"]:not(.small):checked::before {

            font-size: 18px;
        }

        .tickradio {

            width: 25px;
            height: 25px;

        }


        .tickradio:checked::before {

            font-size: 18px;
        }


    }

    @media screen and (min-width: 650px) {

        .check label {

            margin-right: 10px;
            margin-left: -8px;
            font-size: 17;


        }

        input[type="checkbox"]:not(.small) {

            width: 35px;
            height: 35px;

        }


        input[type="checkbox"]:not(.small):checked::before {

            font-size: 25px;
        }

        .tickradio {

            width: 35px;
            height: 35px;

        }


        .tickradio:checked::before {

            font-size: 25px;
        }




    }

    @media screen and (min-width: 505px) {

        .row {
            display: flex;
            justify-content: space-around;
        }

    }

    .nb {
        background: rgba(255, 255, 255, 0.1);
        border: none;
        font-size: 16px;
        height: 40px;
        margin: 0;
        outline: 0;
        padding: 7px;
        width: 24px;
        margin-right: 2px;
        background-color: #e2e5ef;
        ;
        color: black;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 30px;


    }

    .first {
        border-spacing: 0 0px;
        height: 10px;
        margin-top: -5px;
    }

    .close {
        padding: 4px;
        white-space: nowrap;
    }
</style>

<body>

    <form action="{{ route('generate-pdf') }}" method="post">
        @csrf
        <h1>Schadensprotokoll für Güterwagen</h1>

        <fieldset>
            <div class="form-container">
                <div class="form-column">
                    <label for="verwendendesevu">Verwendendes EVU:</label>
                    <table class="first">
                        <tr>
                            <td class="close" style="width: 35px;">
                                <input type="text" class="nb" maxlength="1" name="verevu1" required>
                                <input type="text" class="nb" maxlength="1" name="verevu2" required>
                                <input type="text" class="nb" maxlength="1" name="verevu3" required>
                                <input type="text" class="nb" maxlength="1" name="verevu4" required>
                            </td>
                            <td class="close" style="width: 325px;"><input type="text" id="verwendendesevu" name="verwendendesevu"></td>
                        </tr>
                    </table>







                    <label for="sendungsnr">Sendungs- Nr.:</label>
                    <input type="text" id="sendungsnr" name="sendungsnr" required>

                    <label for="ortschadensfeststellung">Ort Schadensfeststellung</label>

                    <input type="text" id="ortschadensfeststellung" name="ortschadensfeststellung" required>

                    <label for="versandbahnhof">Versandbahnhof</label>
                    <input type="text" id="versandbahnhof" name="versandbahnhof" required>

                    <label for="empfangsbahnhof">Empfangsbahnhof</label>
                    <input type="text" id="empfangsbahnhof" name="empfangsbahnhof" required>





                </div>

                <div class="form-column">
                    <label for="protokollnr">Protokoll-Nr:</label>
                    <input type="text" id="protokollnr" name="protokollnr" required>

                    <label for="zugnr">Zug-Nr.:</label>
                    <input type="text" id="zugnr" name="zugnr">

                    <label for="Schadenfestgestelltam">Schaden festgestellt am:</label>
                    <input type="text" id="datuminp" name="Schadenfestgestelltam" pattern="\d{2}.\d{2}.\d{4}" required placeholder="DD.MM.YY">


                    <label for="versanddatum">Versanddatum</label>
                    <input type="text" id="datuminp2" name="versanddatum" pattern="\d{2}.\d{2}.\d{4}" required placeholder="DD.MM.YY">

                    <label for="ladezustand" style="margin-bottom: 20px;">Ladezustand:</label>
                    <input type="radio" class="small" id="ladezustand" name="ladezustand" value="Beladen" required>
                    <span class="radname"> beladen</span>
                    <div class="flex-container">
                        <input type="radio" id="ladezustand" class="small" name="ladezustand" value="Leer" required>
                        <span class="radname">Leer</span>

                    </div>

                </div>


            </div>

            <legend><span class="number">1</span> Allgemeine Informationen</legend>



            <label for="wagennummer">Wagennummer:</label>
            <input type="text" minlength="16" maxlength="29" oninput="checkNumber()" required id="input-rs" name="wagennummer" class="form-control input-field" placeholder="z.B 37 80 4950 360-0" data-rule="minlen:4" >

            <label for="halter">Halter:</label>

            <table class="first">
                <tr>
                    <td class="close" style="width: 35px;">
                        <input type="text" class="nb" maxlength="1" name="halter1">
                        <input type="text" class="nb" maxlength="1" name="halter2">
                        <input type="text" class="nb" maxlength="1" name="halter3">
                        <input type="text" class="nb" maxlength="1" name="halter4">
                    </td>
                    <td class="close" style="width: 650px;"><input type="text" id="halter" name="halter"></td>
                </tr>
            </table>

            <label for="halter_adresse">Halter Adresse/ E-Mail :</label>
            <input type="email" id="halter_adresse" name="halter_adresse">

        </fieldset>

        <fieldset>

            <legend><span class="number">2</span> Beschreibung des Schadens</legend>
            <div class="container">
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
                        <tr style="margin-right: 7px;">
                            <td>
                                <h4>schaden 1:</h4>
                            </td>
                            <td><input type="text" class="nb" maxlength="1" name="sch1" required>
                                <input type="text" class="nb" maxlength="1" name="sch2" required>
                                <input type="text" class="nb" maxlength="1" name="sch3">
                                <input type="text" class="nb" maxlength="1" name="sch4">
                            </td>
                            <td>
                                <div style="display: flex; margin-top: -32px;"><input type="radio" class="small" name="Schadstand1" value="Neu" id="Schadstand1"> <span class="radname intable"> Neu</span></div>
                                <div style="display: flex;"><input type="radio" class="small" name="Schadstand1" value="Alt" id="Schadstand1"> <span class="radname intable"> Alt</span> </div>
                            </td>
                            <td><input type="text" id="Mangelbezeichnung1" name="Mangelbezeichnung1"></td>
                        </tr>
                        <tr>
                            <td>
                                <h4>schaden 2:</h4>
                            </td>
                            <td><input type="text" class="nb" maxlength="1" name="sch11">
                                <input type="text" class="nb" maxlength="1" name="sch22">
                                <input type="text" class="nb" maxlength="1" name="sch33">
                                <input type="text" class="nb" maxlength="1" name="sch44">
                            </td>
                            <td style="white-space: nowrap;">
                                <div style="display: flex; margin-top: -32px;"><input type="radio" class="small" name="Schadstand2" value="Neu" id="Schadstand2"> <span class="radname intable"> Neu</span></div>
                                <div style="display: flex;"><input type="radio" class="small" name="Schadstand2" value="Alt" id="Schadstand2"> <span class="radname intable"> Alt</span> </div>
                            </td>
                            <td><input type="text" id="Mangelbezeichnung2" name="Mangelbezeichnung2"></td>
                        </tr>
                        <tr>
                            <td>
                                <h4>schaden 3:</h4>
                            </td>
                            <td>
                                <div style="white-space: nowrap;">
                                    <input type="text" class="nb" maxlength="1" name="sch111">
                                    <input type="text" class="nb" maxlength="1" name="sch222">
                                    <input type="text" class="nb" maxlength="1" name="sch333">
                                    <input type="text" class="nb" maxlength="1" name="sch444">
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; margin-top: -32px;"><input type="radio" class="small" name="Schadstand3" value="Neu" id="Schadstand3"> <span class="radname intable"> Neu</span></div>
                                <div style="display: flex;"><input type="radio" class="small" name="Schadstand3" value="Alt" id="Schadstand3"> <span class="radname intable"> Alt</span> </div>
                            </td>
                            <td><input type="text" id="Mangelbezeichnung3" name="Mangelbezeichnung3"></td>
                        </tr>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>

            <label for="evu">Zusätzliche Bemerkungen : </label>
            <input type="text" id="ZusätzlicheBemerkungen" name="ZusätzlicheBemerkungen">
        </fieldset>

        <fieldset>
            <div class="form-container">
                <div class="form-column">
                    <div class="check">
                        <div class="flex-container">
                            <input type="checkbox" id="kRadio_erfolgte" name="k" value="K">
                            <label for="kRadio_erfolgte">K</label>
                        </div>

                        <div class="flex-container">
                            <input type="checkbox" id="mRadio_erfolgte" name="m" value="M">
                            <label for="mRadio_erfolgte">M</label>
                        </div>

                        <div class="flex-container">
                            <input type="checkbox" id="iRadio_erfolgte" name="i" value="I">
                            <label for="iRadio_erfolgte">I</label>
                        </div>

                        <div class="flex-container">
                            <input type="checkbox" id="r1Radio_erfolgte" name="r" value="R1">
                            <label for="r1Radio_erfolgte">R1</label>
                        </div>

                        <div class="flex-container">
                            <input type="checkbox" id="uRadio_erfolgte" name="u" value="U">
                            <label for="uRadio_erfolgte">U</label>
                        </div>

                    </div>


                </div>

                <div class="form-column">
                    <label for="protokollnr">Datum:</label>
                    <input type="text" id="datum_vorgefundene" name="datum_vorgefundene" pattern="\d{2}.\d{2}.\d{4}"  placeholder="DD.MM.YY">


                </div>


                <label for="sendungsnr">EVU, das die Bezettelung vorgenommen hat:</label>

                <table class="first">
                    <tr>
                        <td class="close" style="width: 35px;">
                            <input type="text" class="nb" maxlength="1" name="evu1">
                            <input type="text" class="nb" maxlength="1" name="evu2">
                            <input type="text" class="nb" maxlength="1" name="evu3">
                            <input type="text" class="nb" maxlength="1" name="evu4">
                        </td>
                        <td class="close" style="width: 650px;"> <input type="text" id="evu" name="evu"></td>
                    </tr>
                </table>


            </div>

            <legend><span class="number">3</span> Vorgefundene Bezettelung</legend>





        </fieldset>
        <fieldset>
            <legend><span class="number">4</span> Erfolgte Bezettelung</legend>

            <label for="muster_erfolgte">Muster:</label>
            <div class="check">
                <div class="flex-container">
                    <input type="checkbox" id="kRadio_erfolgte" name="k1" value="K">
                    <label for="kRadio_erfolgte">K</label>
                </div>

                <div class="flex-container">
                    <input type="checkbox" id="mRadio_erfolgte" name="m1" value="M">
                    <label for="mRadio_erfolgte">M</label>
                </div>

                <div class="flex-container">
                    <input type="checkbox" id="iRadio_erfolgte" name="i1" value="I">
                    <label for="iRadio_erfolgte">I</label>
                </div>

                <div class="flex-container">
                    <input type="checkbox" id="r1Radio_erfolgte" name="r1" value="R1">
                    <label for="r1Radio_erfolgte">R1</label>
                </div>

                <div class="flex-container">
                    <input type="checkbox" id="uRadio_erfolgte" name="u1" value="U">
                    <label for="uRadio_erfolgte">U</label>
                </div>
                <div class="flex-container">
                    <input type="checkbox" id="uRadio_aussetzen" name="aus1" value="Aussetzen">
                    <label for="uRadio_aussetzen">Aussetzen</label>
                </div>
            </div>
            <br> <br>

            <label for="werkstattzufuehrung" style="display: inline;">Werkstattzuführung:</label>

            <div class="check">
                <div class="flex-container">

                    <input type="radio" class="tickradio" id="uRadio_erfolgte" name="werkstattzufuehrung" value="vor">
                    <label for="uRadio_erfolgte">Vor</label>
                </div>
                <div class="flex-container">
                    <input type="radio" class="tickradio" id="uRadio_aussetzen" name="werkstattzufuehrung" value="Nach">
                    <label for="uRadio_aussetzen">Nach</label>
                </div>
                <span>Entladung</span>
            </div>

        </fieldset>

        <fieldset>
            <legend><span class="number">5</span> Schadensfeststellung bei der Übernahme</legend>

            <div class="check">
                <div class="flex-container">
                    <input type="radio" id="avv-evu" class="tickradio" name="schadensfeststellung" value="AVV-EVU">
                    <label for="avv-evu">AVV-EVU</label>
                </div>

                <div class="flex-container">
                    <input type="radio" id="nicht-avv-evu" class="tickradio" name="schadensfeststellung" value="Nicht-AVV-EVU">
                    <label for="nicht-avv-evu">Nicht-AVV-EVU</label>
                </div>

                <div class="flex-container">
                    <input type="radio" id="anschlussbahn" class="tickradio" name="schadensfeststellung" value="Anschlussbahn">
                    <label for="anschlussbahn">Anschlussbahn</label>
                </div>
            </div>
            <br> <br>
            <label for="unternehmen">Unternehmen:</label>
            <table class="first">
                <tr>
                    <td class="close" style="width: 35px;">
                        <input type="text" class="nb" maxlength="1" name="unter1">
                        <input type="text" class="nb" maxlength="1" name="unter2">
                        <input type="text" class="nb" maxlength="1" name="unter3">
                        <input type="text" class="nb" maxlength="1" name="unter4">
                    </td>
                    <td class="close" style="width: 650px;"> <input type="text" id="unternehmen" name="unternehmen"></td>
                </tr>
            </table>

        </fieldset>

        <fieldset>
            <legend><span class="number">6</span> Angaben zur Ursache / zum Verursacher</legend>

            <div class="row">
                <div class="column">
                    <div class="check" style="width:5%;">
                        <div class="flex-container">
                            <input type="radio" id="dritter" name="ursache_verursacher" value="Dritter" class="tickradio" required>
                            <label for="dritter">Dritter</label>
                        </div>

                        <div class="flex-container">
                            <input type="radio" id="verschleiss" name="ursache_verursacher" value="Verschleiß" class="tickradio" required>
                            <label for="verschleiss">Verschleiß</label>
                        </div>

                        <div class="flex-container">
                            <input type="radio" id="gewaltschaden" name="ursache_verursacher" required value="Gewaltschaden im Eisenbahnbetrieb" class="tickradio">
                            <label for="gewaltschaden">Gewaltschaden im Eisenbahnbetrieb</label>
                        </div>
                        <div class="flex-container">
                            <input type="radio" id="nicht-ermittelbar" required name="ursache_verursacher" value="Nicht ermittelbar" class="tickradio">
                            <label for="nicht-ermittelbar">Nicht ermittelbar</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="column">
                    <label for="kontaktinfo_dritter">Name, Adresse und Kontaktinformationen Dritter:</label>
                    <textarea id="kontaktinfo_dritter" name="kontaktinfo_dritter" rows="4" cols="70" style="height: auto;"></textarea>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <div class="form-container">
                <div class="form-column">
                    <label for="protokollnr">Ort, Datum:</label>
                    <input type="text" id="ortdatum" name="ortdatum" hidden>
                    <div class="combined-input">
                        <input type="text" id="ortval" oninput="updateCombinedInput()" required placeholder="Ort,">
                        <input type="text" id="datumval"  oninput="updateCombinedInput()" pattern="\d{2}.\d{2}.\d{4}" required placeholder="DD.MM.YY">
                    </div>

                </div>
                <div class="form-column" style="margin-top: 20px;">
                    <div class="check">
                        <div class="flex-container">
                            <input type="checkbox" id="Anlagen" name="Anlagen" value="Anlagen">
                            <label for="kRadio_erfolgte" style="margin-left: 5px;">Anlagen</label>
                        </div>


                    </div>


                </div>




            </div>

        </fieldset>
        <button type="submit">Submit</button>

    </form>
    <script>
        const inputElement = document.getElementById('input-rs');

        const res = document.getElementById('wagennummer');

        inputElement.addEventListener('input', formatNumber);
        inputElement2.addEventListener('input', formatNumber);
        formatNumber.call(inputElement); // Format initial value
        formatNumber.call(inputElement2);

        function formatNumber() {
            let input = this.value.replace(/\D/g, ''); // Remove non-numeric characters
            let formattedNumber = '';

            // Add spaces
            if (input.length > 2) {
                formattedNumber += input.substring(0, 2) + ' - ';
                input = input.substring(2);
            }
            if (input.length > 2) {
                formattedNumber += input.substring(0, 2) + ' - ';
                input = input.substring(2);

            }

            if (input.length > 4) {
                formattedNumber += input.substring(0, 4) + ' - ';
                input = input.substring(4);

            }
            if (input.length > 3) {
                formattedNumber += input.substring(0, 3) + ' - ';
                input = input.substring(3);

            }
            console.log(input);
            formattedNumber += input;

            this.value = formattedNumber.substring(0, 24);
            res.value = formattedNumber.replace(/\D/g, '').substring(0, 12);
            // Limit to 15 characters

        }
    </script>
    <script>
        
        function updateCombinedInput() {
            var ortValue = document.getElementById('ortval').value;
            var datumValue = document.getElementById('datumval').value;
            var combinedInput = ortValue + ',' + datumValue;
            document.getElementById('ortdatum').value = combinedInput;
        }
        $(function() {
            $("#datuminp").datepicker({
                altFormat: "dd/mm/yy",
                dateFormat: "dd.mm.yy",
                changeMonth: true,
                changeYear: true
            });
        });
        $(function() {
            $("#datumval").datepicker({
                altFormat: "dd/mm/yy",
                dateFormat: "dd.mm.yy",
                changeMonth: true,
                changeYear: true
            });
        });
        $(function() {
            $("#datuminp2").datepicker({
                altFormat: "dd/mm/yy",
                dateFormat: "dd.mm.yy",
                changeMonth: true,
                changeYear: true
            });
        });
        $(function() {
            $("#datum_vorgefundene").datepicker({
                altFormat: "dd/mm/yy",
                dateFormat: "dd.mm.yy",
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
</body>

</html>