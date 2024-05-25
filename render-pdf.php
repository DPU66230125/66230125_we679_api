<?php

// Visit Knowledgebase for adding Text Macros to PDF 
// https://apidocs.pdf.co/kb/Fill%20PDF%20and%20Add%20Text%20or%20Images%20(pdf-edit-add)/macros

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.pdf.co/v1/pdf/edit/add',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
        "encrypt": false,
        "async": false,
        "name": "f1040-form-filled",
        "url": "bytescout-com.s3-us-west-2.amazonaws.com/files/demo-files/cloud-api/pdf-form/f1040.pdf",
        "annotationsString": "250;20;0-;PDF form filled with PDF.co API;24+bold+italic+underline+strikeout;Arial;FF0000;www.pdf.co;true",
        "imagesString": "100;180;0-;bytescout-com.s3-us-west-2.amazonaws.com/files/demo-files/cloud-api/pdf-edit/logo.png|400;180;0-;bytescout-com.s3-us-west-2.amazonaws.com/files/demo-files/cloud-api/pdf-edit/logo.png;www.pdf.co;200;200",
        "fieldsString": "1;topmostSubform[0].Page1[0].f1_02[0];John A. Doe|1;topmostSubform[0].Page1[0].FilingStatus[0].c1_01[1];true|1;topmostSubform[0].Page1[0].YourSocial_ReadOrderControl[0].f1_04[0];123456789"
        "inline": true,
    }',
    CURLOPT_HTTPHEADER => array(
		'Content-Type: application/json',
		'x-api-key: __tummanoonw1997@gmail.com_vCwzK9w3lip0PpZl15sKY53O16FM4M6Nj9jpv33eq2s7FSw7HOMLdTi5KB1jDZ4F__'
	),
));

/*curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.pdf.co/v1/pdf/edit/add',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '
    {
        {
            "url": "http://54.175.155.216/api/p-2/assets/visa-form-1.pdf",
            "async": false,
            "encrypt": false,
            "inline": true,
            "annotations": [
                {
                    "text": "TUMMANOON WANCHAEM",
                    "x": 165.81,
                    "y": 140.54,
                    "width": 396.02,
                    "height": 13.16,
                    "pages": "0",
                    "color": "#000000",
                    "size": 12,
                    "fontName": "Tahoma",
                    "type": "text"
                },
                {
                    "text": "Lao",
                    "x": 135.56,
                    "y": 186.79,
                    "width": 156.56,
                    "height": 11,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma",
                    "type": "text"
                },
                {
                    "text": "Vientiane",
                    "x": 160.82,
                    "y": 210.98,
                    "width": 128.8,
                    "height": 11,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "Single",
                    "x": 168.65,
                    "y": 234.82,
                    "width": 120.27,
                    "height": 11,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "PA2345678",
                    "x": 178.61,
                    "y": 283.57,
                    "width": 106.74,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "27 September 1997",
                    "x": 140.19,
                    "y": 259.02,
                    "width": 151.22,
                    "height": 11,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "Champasak",
                    "x": 149.44,
                    "y": 309.54,
                    "width": 139.48,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "26 May 2024",
                    "x": 154.78,
                    "y": 333.73,
                    "width": 133.79,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "27 May 2029",
                    "x": 162.25,
                    "y": 358.29,
                    "width": 125.25,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "Software Developer",
                    "x": 66.18,
                    "y": 401.34,
                    "width": 223.45,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "120/5 Victory Gate, Lanxang, Vientiane",
                    "x": 62.98,
                    "y": 448.3,
                    "width": 233.41,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "0927934612",
                    "x": 202.81,
                    "y": 471.78,
                    "width": 92.51,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "94/1 Moo.4, Tamai, Kratumban, Samut Sakhon",
                    "x": 62.62,
                    "y": 515.19,
                    "width": 233.06,
                    "height": 32.38,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "0867686242",
                    "x": 96.07,
                    "y": 560.73,
                    "width": 57.29,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "barnista@gmail.com",
                    "x": 202.46,
                    "y": 561.09,
                    "width": 92.16,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "474 ซอยจรัญสนิทวงศ์ 71 แยก 13 แขวงบางพลัด เขตบางพลัด, กรุงเทพมหานคร",
                    "x": 61.91,
                    "y": 610.19,
                    "width": 234.13,
                    "height": 32.38,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "1 June 2024",
                    "x": 483.55,
                    "y": 186.79,
                    "width": 77.92,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "Commercial Aireplane",
                    "x": 422.71,
                    "y": 211.34,
                    "width": 135.57,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "30 days",
                    "x": 477.86,
                    "y": 235.54,
                    "width": 80.41,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "PEERAKARN KRIANGSRI",
                    "x": 328.77,
                    "y": 283.92,
                    "width": 132.36,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "0653209812",
                    "x": 500.99,
                    "y": 283.57,
                    "width": 65.11,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "KAMSAI HINTAO",
                    "x": 329.48,
                    "y": 331.96,
                    "width": 132.36,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                },
                {
                    "text": "034471753",
                    "x": 499.21,
                    "y": 331.96,
                    "width": 66.18,
                    "height": 11.03,
                    "pages": "0",
                    "size": 10,
                    "fontName": "Tahoma"
                }
            ],
            "images": [
                {
                    "url": "http://54.175.155.216/api/p-2/assets/check-mark.png",
                    "x": 62.46,
                    "y": 149.69,
                    "width": 7,
                    "height": 7,
                    "pages": "0"
                },
                {
                    "url": "http://54.175.155.216/api/p-2/assets/check-mark.png",
                    "x": 90.24,
                    "y": 149.3,
                    "width": 7,
                    "height": 7,
                    "pages": "0"
                },
                {
                    "url": "http://54.175.155.216/api/p-2/assets/check-mark.png",
                    "x": 127.72,
                    "y": 149.3,
                    "width": 7,
                    "height": 7,
                    "pages": "0"
                }
            ],
            "fields": []
        }
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'x-api-key: tummanoonw1997@gmail.com_vCwzK9w3lip0PpZl15sKY53O16FM4M6Nj9jpv33eq2s7FSw7HOMLdTi5KB1jDZ4F'
    ),
));*/

$response = json_decode(curl_exec($curl));

curl_close($curl);

echo "URL: " . $response->url . "</br>";
echo "Page Count: " . $response->pageCount . "<br>";
echo "Error: " . $response->error . "<br>";
echo "Status: " . $response->status . "<br>";
echo "Name: " . $response->name;

$template = '
{
    "url": "http://54.175.155.216/api/p-2/assets/visa-form-1.pdf",
    "async": false,
    "encrypt": false,
    "inline": true,
    "annotations": [
        {
            "text": "TUMMANOON WANCHAEM",
            "x": 165.81,
            "y": 140.54,
            "width": 396.02,
            "height": 13.16,
            "pages": "0",
            "color": "#000000",
            "size": 12,
            "fontName": "Tahoma",
            "type": "text"
        },
        {
            "text": "Lao",
            "x": 135.56,
            "y": 186.79,
            "width": 156.56,
            "height": 11,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma",
            "type": "text"
        },
        {
            "text": "Vientiane",
            "x": 160.82,
            "y": 210.98,
            "width": 128.8,
            "height": 11,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "Single",
            "x": 168.65,
            "y": 234.82,
            "width": 120.27,
            "height": 11,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "PA2345678",
            "x": 178.61,
            "y": 283.57,
            "width": 106.74,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "27 September 1997",
            "x": 140.19,
            "y": 259.02,
            "width": 151.22,
            "height": 11,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "Champasak",
            "x": 149.44,
            "y": 309.54,
            "width": 139.48,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "26 May 2024",
            "x": 154.78,
            "y": 333.73,
            "width": 133.79,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "27 May 2029",
            "x": 162.25,
            "y": 358.29,
            "width": 125.25,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "Software Developer",
            "x": 66.18,
            "y": 401.34,
            "width": 223.45,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "120/5 Victory Gate, Lanxang, Vientiane",
            "x": 62.98,
            "y": 448.3,
            "width": 233.41,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "0927934612",
            "x": 202.81,
            "y": 471.78,
            "width": 92.51,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "94/1 Moo.4, Tamai, Kratumban, Samut Sakhon",
            "x": 62.62,
            "y": 515.19,
            "width": 233.06,
            "height": 32.38,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "0867686242",
            "x": 96.07,
            "y": 560.73,
            "width": 57.29,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "barnista@gmail.com",
            "x": 202.46,
            "y": 561.09,
            "width": 92.16,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "474 ซอยจรัญสนิทวงศ์ 71 แยก 13 แขวงบางพลัด เขตบางพลัด, กรุงเทพมหานคร",
            "x": 61.91,
            "y": 610.19,
            "width": 234.13,
            "height": 32.38,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "1 June 2024",
            "x": 483.55,
            "y": 186.79,
            "width": 77.92,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "Commercial Aireplane",
            "x": 422.71,
            "y": 211.34,
            "width": 135.57,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "30 days",
            "x": 477.86,
            "y": 235.54,
            "width": 80.41,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "PEERAKARN KRIANGSRI",
            "x": 328.77,
            "y": 283.92,
            "width": 132.36,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "0653209812",
            "x": 500.99,
            "y": 283.57,
            "width": 65.11,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "KAMSAI HINTAO",
            "x": 329.48,
            "y": 331.96,
            "width": 132.36,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        },
        {
            "text": "034471753",
            "x": 499.21,
            "y": 331.96,
            "width": 66.18,
            "height": 11.03,
            "pages": "0",
            "size": 10,
            "fontName": "Tahoma"
        }
    ],
    "images": [
        {
            "url": "http://54.175.155.216/api/p-2/assets/check-mark.png",
            "x": 62.46,
            "y": 149.69,
            "width": 7,
            "height": 7,
            "pages": "0"
        },
        {
            "url": "http://54.175.155.216/api/p-2/assets/check-mark.png",
            "x": 90.24,
            "y": 149.3,
            "width": 7,
            "height": 7,
            "pages": "0"
        },
        {
            "url": "http://54.175.155.216/api/p-2/assets/check-mark.png",
            "x": 127.72,
            "y": 149.3,
            "width": 7,
            "height": 7,
            "pages": "0"
        }
    ],
    "fields": []
}
';
