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
 <ul>
        <?php foreach ($Filtered_tax_forms as $Tax_form ) : ?>
            <li> <?= $Tax_form['name'] ?> </li>
        <?php endforeach; ?>
    </ul>
<h1>
    
</h1>
 </body>
 </html>