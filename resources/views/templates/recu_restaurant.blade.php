<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Invoice</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            * {
                font: courier
            }

            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                max-width: 800px;
            }

            .invoice-container {
                background: #fff;
                max-width: 800px;
                margin: auto;
                padding: 3px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                position: relative;
            }

            .header {
                display: flex;
                justify-content: space-between;
                align-items: center; border-bottom: 2px solid #f5f5f5;
                padding-bottom: 20px;
            }

            .logo img {
                max-width: 100px;
            }

            .logo h1 {
                font-size: 7px;
                color: #e60000;
                margin: 0;
                margin-left: 10px;
                font-weight: bold;
            }

            .invoice-info,
            .invoice-to {
                text-align: right;
            }

            .invoice-info p,
            .invoice-to p {
                margin: 4px 0;
            }

            .service-description {
                margin: 10px 0;
            }

            .service-description h2 {
                background-color: #ffcc00;
                padding: 5px;
                border-radius: 5px;
                font-size: 7px;
                margin: 0;
                color: white;
                text-align: center;
            }

            .service-description table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
            }

            .service-description table th,
            .service-description table td {
                padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;
            }

            .service-description table .total {
                font-weight: bold;
            }

            .payment-methods,
            .signature,
            .footer {
                margin: 5px 0;
            }

            .signature-space {
                margin-top: 5px;
                border-top: 1px solid #000;
                width: 200px;
            }

            .footer p { text-align: center;
                margin: 4px 0;
                font-size: 7px;
            }

            .footer p strong {
                font-size: 7px;
            }
        </style>
    </head>

    <body style="font-family: courier, Arial, sans-serif; margin: 0; padding: 0; max-width: 800px; font-size: 7px">
        <div class="invoice-container" style="background: #fff; max-width: 800px; margin: auto; padding: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); position: relative;">
            <div class="service-description">
                <table style="width: 100%; border-collapse: collapse; margin-top: 5px;">
                    <tr style="border: none;">
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none;" rowspan="2">
                            <div class="logo">
                                {{-- <img @if ($my_banniere) src="{{$my_banniere->logo}}" @endif alt="Logo" style="width: 50px; height: 50px"> --}}
                            </div>
                        </td>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none;">
                            <strong>Reçu No: </strong> <span>2024{{$data['id']}}</span>
                            @if(isset($data['table']))
                                <div><strong>Table No: </strong> <span>{{$data['table']}}</span></div>
                            @endif
                        </td>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none;"></td>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none; text-align: end; align-items: end; ">
                            <strong>De : </strong> <span>
                                @if ($my_banniere) {{$my_banniere->raison_sociale}} @endif
                            </span>
                        </td>
                    </tr>

                    <tr style="border: none;">
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none;">
                            <strong>Référence : </strong> <span>{{$data['reference']}}</span>
                        </td>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none;"></td>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none; text-align: end; align-items: end; ">
                            <strong>Localisation : </strong> <span> @if ($my_banniere) {{$my_banniere->siege}} @endif</span>
                        </td>
                    </tr>
                    <tr style="border: none;">
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none;">
                            @if ($my_banniere) {{$my_banniere->raison_sociale}} @endif
                        </td>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none;">
                            <strong>Date : </strong> <span>{{ $data['created_at']->locale('fr')->isoFormat('LLLL') }}</span>
                        </td>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none;"></td>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none; text-align: end; align-items: end; ">
                            <strong>Telephone : </strong> <span>@if ($my_banniere) {{$my_banniere->telephone}} @endif</span>
                        </td>
                    </tr>
                    <tr style="border: none;">
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" colspan="1" style="border: none;"></td>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none;">
                            <strong>Caissier(e) : </strong> <span>{{$data['caissier']->fullname}}</span>
                            @if (isset($data['manager']))
                                <br><strong>Manager : </strong> <span>{{$data['manager']->fullname}}</span>
                            @endif
                        </br>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none;"></td>
                        <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="border: none; text-align: end; align-items: end;">
                            <strong>Email : </strong> <span>@if ($my_banniere) {{$my_banniere->email}} @endif</span>
                        </td>
                    </tr>
                </table>

            </div>
            <div class="service-description" style="margin: 8px 0;">
                <h2 style="background-color: #ff0000; padding: 6px; border-radius: 5px; font-size: 7px; margin: 0; align-text:center">Description de l'achat</h2>
                <table>
                    <tr style="border-bottom: 1px solid rgb(252, 55, 55);">
                        <th>Nouriture</th>
                        <th></th>
                        <th>Unité</th>
                        <th>Prix</th>
                        <th style="text-align: end; align-items: end; ">Montant</th>
                    </tr>
                    @foreach ($data['detail'] as $detail)
                        <tr>
                            <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;">{{$detail->name}}</td>
                            <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;"></td>
                            <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;">{{$detail->quantite}}</td>
                            <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;">{{$detail->prix}}XOF</td>
                            <td style="padding: 5px; border-bottom: 1px solid #f5f5f5; text-align: left;" style="text-align: end; align-items: end; ">{{$detail->montant}}XOF</td>
                        </tr>
                    @endforeach
                    <tr style="font-size: 7px; border-top: 2px solid red; border-right: 1px solid red; border-left: 1px solid red; font-size: 7px">
                        <td colspan="4">Montant total</td>
                        <td style="color: red; text-align: end; align-items: end;">{{$data['montant']}} XOF </td>
                    </tr>
                </table>
            </div>
            <div class="footer" style="margin: 7px 0;">
                <p style="text-align: center;margin: 4px 0;font-size: 7px;"><strong style="font-size: 7px;">@if ($my_banniere) {{$my_banniere->raison_sociale}} vous remerci pour votre fidélité et vous souhaite bonne chance !@endif </strong></p>
                <p style="text-align: center; margin: 4px 0; font-size: 7px;">@if ($my_banniere) {{$my_banniere->slogan}} @endif</p>
            </div>
        </div>
    </body>

</html>
