<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Order Placed Notification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        body,
        table,
        td,
        a {
            -ms-text-size-adjust: 100%;
        / 1 / -webkit-text-size-adjust: 100 %;
        / 2 /
        }

        /**
         * Remove extra space added to tables and cells in Outlook.
         */
        table,
        td {
            mso-table-rspace: 0pt;
            mso-table-lspace: 0pt;
        }

        /**
         * Better fluid images in Internet Explorer.
         */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /**
         * Remove blue links for iOS devices.
         */
        a[x-apple-data-detectors] {
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            color: inherit !important;
            text-decoration: none !important;
        }

        /**
         * Fix centering issues in Android 4.4.
         */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }

        body {
            width: 100% !important;
            height: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        /**
         * Collapse table borders to avoid space between cells.
         */
        table {
            border-collapse: collapse !important;
        }

        a {
            color: #1a82e2;
        }

        img {
            height: auto;
            line-height: 100%;
            text-decoration: none;
            border: 0;
            outline: none;
        }
        table p{
            color: #333;
            font-family: 'Poppins', sans-serif; 
            font-size: 12px;
        }
        .info p{
            line-height: 18px;
            margin: 0px;
            font-size: 12px;
            text-transform: capitalize;
        }
        .ship-info p{
            text-align: center;
        }
        .ship-info td{
            padding: 0px; 
            text-align: cenetr; 
            font-family: 'Poppins', sans-serif; 
            font-weight: 500;

        }
        .ship-info td p{
            font-weight: 400;
            font-size: 12px;
            margin: ;
            
        }
        .ship-info2 td p{
            font-weight: 400;
            font-size: 12px;
            margin: 5px;
            
        }
        .ship-info2 td p{
            font-weight: 400;
            font-size: 12px;
            margin: 5px;
            
        }
        .ship-info2 td{
            text-align: center; 
            font-family: 'Poppins', sans-serif; 
            font-weight: 400; 
        }
        .ship-info3 td{
            padding: 0px 4px 0; 
            text-align: center; 
            font-family: 'Poppins', sans-serif; 
            font-weight: 500;
        }
        .ship-info3 td p{
            font-weight: 500;
            font-size: 12px;
            
        }
        .ship-info, .ship-info2, .ship-info3{
            border-bottom: 1px solid rgb(0, 0, 0,0.1);
        }
        .trhead td{
            padding: 10px 24px; 
            font-family: 'Poppins', sans-serif; 
            font-weight: 500;
            font-size: 14px;
            text-align: center;
        }
        .trhwead2 td{
            padding: 0px 24px 0; 
            font-family: 'Poppins', sans-serif; 
            font-weight: 500;
            font-size: 12px;
        }

    </style>

</head>
<body style="background-color: #e9ecef;">
<!-- start body -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background: #fff;">
    <!-- start logo -->
    <tr>
        <td align="center" bgcolor="#e9ecef">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 36px 24px;">
                        <a href="https://sendgrid.com" target="_blank" style="display: inline-block;">

                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- end logo -->

    <!-- start hero -->
    <tr>
        <td align="center" bgcolor="#e9ecef">
      
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background: #fff;">
                <tr style="background: linear-gradient(to left, #fe9126 0%, #33ccff 100%); border-radius: 20px;">
                    <td align="center"
                        style="padding: 20px 24px 20px;">
                        <img src="{{asset('/frontend/logo/zmalllogo-b.png')}}" alt="Zmall" border="0" width="48"
                             style="display: block; width: 23%">
                    </td>
                    <td>
                        <h2 style="float: right; font-family: 'Poppins', sans-serif; margin-right: 20px; vertical-align: middle; font-weight: 500; color: #fff; text-transform: uppercase;">Order Confirmation</h2>
                    </td>
                </tr>
                <tr>

                    <td colspan="2" align="left" bgcolor="#ffffff"
                        style="padding: 6px 24px 0; font-family: 'Poppins', sans-serif;">
                       <p style="margin-bottom: 7px;">Dear <b> {{$mail_data['name']}}</b>, </p>
                            <p style="margin-top: 5px;">
                                    Thank you for shopping with us. Once your package ships we will send an email with a
                                    link to track your order. If you have any questions about your order please contact
                                    us at <a href="" style="color: #111; font-weight: 500;">info@zmall.pk</a> or call us at +92 316 0852499</p>

                                    <p>Your Order # <small style="color: #666; font-size: 14px;"><b>({{$mail_data['order_id']}})</b></small></p>

                    </td>
                </tr>
            </table>
         
        </td>
    </tr>
    <!-- end hero -->
        <!-- start footer -->
    <tr>
        <td align="center" bgcolor="#e9ecef" style="">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background: #fff;">

                <!-- start permission -->
                <tr class="trhwead2">
                    <td>Shipping Information:</td>
                    <td>Shipping Method:</td>
                </tr>
                <tr class="info">
                    <td bgcolor="#ffffff" style="padding: 10px 24px 10px; font-family: 'Poppins', sans-serif;">
                        <p>{{$mail_data['name']}}</p>
                        <p>{{$mail_data['address']}}</p>
                        <p>{{$mail_data['phone']}}</p>
                        <p>{{$mail_data['state']}}, {{$mail_data['city']}}</p>
                        <p>Pakistan</p>
                    </td>
                    <td style="padding: 4px 24px 0; font-family: 'Poppins', sans-serif;">
                        <p style="text-transform: capitalize;">{{$mail_data['city']}} - Shipping Charges</p>
                        <p style="text-transform: capitalize; margin-top: 15px;"><b>Payment Method :</b> <br>Cash on Delivery</p>
                    </td>
                </tr>
                <!-- end permission -->

            </table>
        </td>
    </tr>

    <tr style="margin-top: 10px;">
        <td align="center" bgcolor="#e9ecef" style="">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background: #fff;">

                <!-- start permission -->
                <tr class="trhead" style="background: rgb(0, 0, 0,0.05);">
                    <td style="width:40%;">Item:</td>
                     <td >Sku</td>
                      <td>QTY</td>
                       <td>Subtotal</td>
                </tr>
                <tr class="ship-info">
                    <td bgcolor="#ffffff"><p style="padding: 0px 24px 0px; text-align:left;">{{$mail_data['pro_name']}}</p></td>
                    <td bgcolor="#ffffff"><p>{{$mail_data['pro_sku']}}</p></td>
                    <td bgcolor="#ffffff"><p>{{$mail_data['quantity']}}</p></td>
                    <td bgcolor="#ffffff"><p>Rs. {{$mail_data['sub_total']}}</p></td>
                </tr>
                <tr class="ship-info2">
                    <td bgcolor="#ffffff"><p></p></td>
                    <td bgcolor="#ffffff"><p>Subtotal</p></td>
                    <td bgcolor="#ffffff"><p></p></td>
                    <td bgcolor="#ffffff"><p>Rs. {{$mail_data['sub_total']}}</p></td>
                </tr>
                <tr class="ship-info2">
                    <td bgcolor="#ffffff"><p></p></td>
                    <td bgcolor="#ffffff" ><p>Shipping & Handling</p></td>
                    <td bgcolor="#ffffff"><p></p></td>
                    <td bgcolor="#ffffff" ><p>Rs. {{$mail_data['shipment_charges']}}</p></td>
                </tr>
                <tr class="ship-info3">
                    <td bgcolor="#ffffff"><p></p></td>
                    <td bgcolor="#ffffff"><p> <b>Grand Total</b></p></td>
                    <td bgcolor="#ffffff"><p></p></td>
                    <td bgcolor="#ffffff"><p><b>Rs. {{$mail_data['grand_total']}}<b></p></td>
                </tr>
                <!-- end permission -->
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <p style="float:right; margin-right: 30px;"><b>Thank you,  <a href="/" style="color: #fe9126;">Zmall.pk</a></b></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
     
    <!-- end footer -->


   

</table>
<!-- end body -->

</body>
</html>