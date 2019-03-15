@extends('layouts.app3')

@section('content')
    <!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>TripAdvisor Invitation</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }
      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }
      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; }
      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */
      .body {
        background-color: #f6f6f6;
        width: 100%; }
      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        Margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; }
      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px; }
      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; }
      .wrapper {
        box-sizing: border-box;
        padding: 20px; }
      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }
      .footer {
        clear: both;
        Margin-top: 10px;
        text-align: center;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; }
      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; }
      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }
      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }
      a {
        color: #3498db;
        text-decoration: underline; }
      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; }
      .btn-primary table td {
        background-color: #3498db; }
      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; }
      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; }
      .first {
        margin-top: 0; }
      .align-center {
        text-align: center; }
      .align-right {
        text-align: right; }
      .align-left {
        text-align: left; }
      .clear {
        clear: both; }
      .mt0 {
        margin-top: 0; }
      .mb0 {
        margin-bottom: 0; }
      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }
      .powered-by a {
        text-decoration: none; }
      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }
      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}
      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; }
        .btn-primary table td:hover {
          background-color: #34495e !important; }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; } }
    </style>
  </head>
  <body class="">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader">Ayudenos a mejorar en nuestros servicios.</span>
            <table role="presentation" class="main">


              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr style="text-align: center">
                      <img src="https://res.cloudinary.com/dklua9mor/image/upload/v1544639796/hsa.jpg" alt="Hoteles San Agustín" width="174" height="150">
                    </tr>
                    <tr>
                      <td>
                        <p>¡Hola! Sr./Sra. <strong>{{ $client->nombre_cliente.' '.$client->apellido_cliente }}</strong>,</p>
                        <p>Muchas gracias por elegir <strong>{{ $hotel->getName($client->hotel_id) }}</strong>  para ser los anfitriones de su estadía.</p>
                        <p>Nos encantaría que nos regalara unos minutos de su tiempo y nos diera un comentario compartiendo su experiencia en la plataforma más grande de viajes del mundo, <a href="https://www.tripadvisor.com.pe/?fid=ca3db4fa-1d88-4eb2-ac41-4b0e3cd9dfa5" target="_blank" style="font-weight: bold; color: blue;" >TripAdvisor</a>, ayudando así a muchos viajeros a conseguirnos y que así disfruten su viaje tanto como usted.</p>
                        <p>¡Gracias de nuevo, y esperamos poder verlo nuevamente la proxima vez que haga sus viajes a Perú!</p>
                        <table style="text-align: center;" role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr >
                                        <td >
                                            @switch($client->hotel_id)
                                                @case(1)
                                                    <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294316-d309486-San_Agustin_Exclusive-Lima_Lima_Region.html">San Agustín Exclusive</a>
                                                    @break
                                                @case(2)
                                                    <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294316-d562101-San_Agustin_Riviera_Hotel-Lima_Lima_Region.html">San Agustín Riviera</a>
                                                    @break
                                                @case(3)
                                                    <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g445063-d3785199-San_Agustin_Paracas-Paracas_Ica_Region.html">San Agustín Paracas</a>
                                                    @break
                                                @case(4)
                                                    <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294321-d318921-San_Agustin_Monasterio_de_la_Recoleta_Hotel-Urubamba_Sacred_Valley_Cusco_Region.html">San Agustín Monasterio de la Rocleta</a>
                                                    @break
                                                @case(5)
                                                    <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294321-d877867-San_Agustin_Urubamba_Hotel-Urubamba_Sacred_Valley_Cusco_Region.html">San Agustín Urubamba</a>
                                                    @break
                                                @case(6)
                                                    <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294314-d455224-San_Agustin_Plaza-Cusco_Cusco_Region.html">San Agustín Plaza</a>
                                                    @break
                                                @case(7)
                                                    <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294314-d308977-El_Dorado_San_Agustin-Cusco_Cusco_Region.html">San Agustín El Dorado</a>
                                                    @break
                                                @case(8)
                                                    <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g445060-d2703883-Hotel_San_Agustin_Internacional-San_Agustin_Huila_Department.html">San Agustín Internacional</a>
                                                    @break
                                                @case(9)
                                                    <a href="https://www.tripadvisor.com.pe/UserReviewEdit-g294313-d2283257-Hotel_San_Agustin_Posada_del_Monasterio-Arequipa_Arequipa_Region.html">San Agustín Posada del Monasterio</a>
                                                    @break
                                            @endswitch
                                        </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class="footer">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">
                    <span class="apple-link">Hoteles San Agustín - Hoteles en Lima, Cusco, Paracas, Valle Sagrado y Areqiupa</span>
                  </td>
                </tr>
                <tr>
                  <td class="content-block powered-by">
                    <h3>Visitanos y conoce nuestras ofertas Exclusivas al reservar por nuestra página </h3><a style="font-size: 18px;" target="_blank" href="http://www.hotelessanagustin.com.pe">Hoteles San Agustín</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>

@endsection
</body>
</html>
