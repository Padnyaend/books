<?php defined('SYSPATH') or die('No direct script access.');


	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/css/datatable/datatable.css" />
	';
	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/css/paginator/paginator.css" />
	';
	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/css/growl/growl.css" />
	';

	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/js/datatable/datatable.js"></script>
	';
	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/js/paginator/paginator.js"></script>
	';
	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/js/growl/growl.js"></script>
	';


	echo "	
	<script type='text/javascript'>
    	$(function() {  
	        $('#tbllocal').puidatatable({ 
            caption: 'Local Datasource',  
            paginator: {  
                rows: 5  
            },  
            datasource: [  
                {'brand':'Volkswagen','year': 2012, 'color':'White', 'vin':'dsad231ff'},  
                {'brand':'Audi','year': 2011, 'color':'Black', 'vin':'gwregre345'},  
                {'brand':'Renault','year': 2005, 'color':'Gray', 'vin':'h354htr'},  
                {'brand':'Bmw','year': 2003, 'color':'Blue', 'vin':'j6w54qgh'},  
                {'brand':'Mercedes','year': 1995, 'color':'White', 'vin':'hrtwy34'},  
                {'brand':'Opel','year': 2005, 'color':'Black', 'vin':'jejtyj'},  
                {'brand':'Honda','year': 2012, 'color':'Yellow', 'vin':'g43gr'},  
                {'brand':'Chevrolet','year': 2013, 'color':'White', 'vin':'greg34'},  
                {'brand':'Opel','year': 2000, 'color':'Black', 'vin':'h54hw5'},  
                {'brand':'Mazda','year': 2013, 'color':'Red', 'vin':'245t2s'}  
            ],  
            selectionMode: 'single',  
            rowSelect: function(event, data) {  
                $('#messages').puigrowl('show', [{severity:'info', summary: 'Row Selected', detail: (data.brand + ' ' + data.vin)}]);  
            },  
            rowUnselect: function(event, data) {  
                $('#messages').puigrowl('show', [{severity:'info', summary: 'Row Unselected', detail: (data.brand + ' ' + data.vin)}]);  
            }  
        	});   
    	});  
        
        $('#messages').puigrowl();

	</script>";

	echo '<style type="text/css"> .pui-datatable {margin-bottom: 40px;} </style>';
	
	echo '
	</head>
	<body>
       <div id="main">
          <div class="content-section">
             <div class="content-block">					
                <div id="content-demo">
					<div id="messages"></div>
                    <div id="tbllocal"></div> 
                </div>
                <div style="clear: both" />
           </div>
          </div>
       </div>
	</body>';
