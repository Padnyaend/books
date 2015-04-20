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

	echo '	
	<script type="text/javascript">';
    echo "
    	 $(function() {
                $('#tbllocal').puidatatable({
                    caption: 'Books',
                    paginator: {
                        rows: 50
                    },
                    columns: [
                        {field:'book', headerText: 'Book', sortable:true},
                        {field:'author', headerText: 'Author', sortable:true}
                    ],
                    datasource: ";

     echo json_encode($books);

	 echo ",
                    selectionMode: 'single',
                    rowSelect: function(event, data) {
                        $('#messages').puigrowl('show', [{severity:'info', summary: 'Row Selected', detail: (data.brand + ' ' + data.vin)}]);
                    },
                    rowUnselect: function(event, data) {
                        $('#messages').puigrowl('show', [{severity:'info', summary: 'Row Unselected', detail: (data.brand + ' ' + data.vin)}]);
                    }
                });                                
                
                $('#messages').puigrowl();
                
            });  
        
 

	</script>";

	echo '<style type="text/css"> .pui-datatable {margin-bottom: 40px;} </style>';
	
	echo '
       <div id="main">
          <div class="content-section">
             <div class="content-block">					
                <div id="content-demo">
                    <div id="tbllocal"></div> 
                </div>
           	 </div>
          </div>
       </div>
	';
