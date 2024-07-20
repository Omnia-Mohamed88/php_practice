<!-- dealing with variables -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* body{
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
        } */
    </style>
 </head>
 <body>
    <?php
     $Taxes_forms =[
        ['name' => 'Income tax' ,'percentage' => '25%' ],
        ['name' => 'Excise tax' ,'percentage' => '15%' ],
        ['name' => 'Inheritance' ,'percentage' => '30%' ],
        
     ];

     function filter($Items , $Key , $Value ){ // function signature 
        $Filtered_items =[];
        foreach ($Items as $Item){
            if ($Item[$Key] === $Value){
                $Filtered_items[] = $Item;
            }
        }
        return $Filtered_items;
     }
        $Filtered_tax_forms = filter($Taxes_forms , 'percentage' , '30%')
    ?>
    <ul>
        <?php foreach ($Filtered_tax_forms as $Tax_form ) : ?>
            <li> <?= $Tax_form['name'] ?> </li>
        <?php endforeach; ?>
    </ul>
<h1>
    
</h1>
 </body>
 </html>