 <?php
     $Taxes_forms =[ 
        ['name' => 'Income tax' ,'percentage' => '25%' ],
        ['name' => 'Excise tax' ,'percentage' => '15%' ],
        ['name' => 'Inheritance' ,'percentage' => '30%' ],
        
     ];

  
        $Filtered_tax_forms = array_filter($Taxes_forms , function($Tax_form){
            return $Tax_form['percentage'] === '30%';
        });
    
   require "index.view.php";