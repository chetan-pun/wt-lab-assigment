<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'aileronblack';
            src: url('Aileron-Black-webfont.eot');
            src: url('Aileron-Black-webfont.eot?#iefix') format('embedded-opentype'),
            url('Aileron-Black-webfont.woff2') format('woff2'),
            url('Aileron-Black-webfont.woff') format('woff'),
            url('Aileron-Black-webfont.ttf') format('truetype'),
            url('Aileron-Black-webfont.svg#aileronblack') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        html{
            font-family: 'aileronblack';
        }
        td{
            padding:2em;
        }
        table{
            border-collapse: collapse;
            width:80%;
        }
        .row{
            width:100%;
        }
        .faculty{
            font-weight:bold;
            font-size:20px;
        }

    </style>
</head>
<body>
<?php
$gcesStaffs = [
    "Non-Academic" => [
        [ "Name" => "AAA",
          "Address" => "aaa",
          "Phone" => [
            "Phone 1" => "9811111111",
            "Phone 2" => "9822222222"
          ]
        ],

        [ "Name" => "BBB",
        "Address" => "bbb",
        "Phone" => [
            "Phone 1" => "9833333333",
            "Phone 2" => "9844444444"
          ]
        ]
       ],

    "Academic" => [
        ["Name" => "CCC",
         "Address" => "ccc",
         "Phone" => [
            "Phone 1" => "9855555555",
            "Phone 2" => "9866666666"
         ],
         "Subjects" => [
            "Subject 1" => "Maths-I" , 
            "Subject 2" => "Maths-II"] 
         ],

        ["Name" => "DDD",
         "Address" => "ddd",
         "Phone" => [
            "Phone 1" => "9877777777",
            "Phone 2" => "9888888888"
         ],  
         "Subjects" => [
            "Subject 1" => "Physics", 
            "Subject 2" => "Thermal"] 
         ],

         ["Name" => "EEE",
         "Address" => "eee",
         "Phone" => [
            "Phone 1" => "9899999999",
            "Phone 2" => "9800000000"
         ],  
         "Subjects" => [
            "Subject 1" => "Micro Processor", 
            "Subject 2" =>"Logic Circuits"]
        ]
    ]
 ];



foreach($gcesStaffs as $faculty => $person)
{
   
    echo '<table border="2px solid black">';
    echo '<tr class="faculty">'.$faculty.' : '.'<br/>'.'</tr>';
    echo '<tr>';
    foreach($person as $info => $info_value)
    {
        
        foreach($info_value as $specific => $specific_value)
        {
            echo '<tr>';
            if(is_array($specific_value) || is_object($specific_value))
            {
                echo '<td  colspan="2">'.$specific.' : '.'</td>';
                foreach($specific_value as $i => $j)
                {
                    echo '<td>'.$j.'</td>';
                }
            }
            else
            {
                echo '<td class="rows">'.$specific.':'.'</td>'.'<td colspan="3">'.$specific_value.'</td>';
            }
            echo '</tr>';
        }
        echo '<td colspan="4" bgcolor="grey">'.'</td>';
    }
    echo '</tr>';
    echo '</table>';
    echo "<br />";
}
?> 



</body>
</html>
