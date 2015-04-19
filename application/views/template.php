<?php defined('SYSPATH') or die('No direct script access.');


	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/css/button/button.css" />
	';
	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/js/button/button.js"></script>
	';
	echo "	
	<script type='text/javascript'>
    	$(function() {  
	        $('#default').puibutton();   
    	});  
	</script> ";	
	echo '
	</head>
	<body>
            <div id="main">
                <div class="content-section">
                    <div class="content-block">					

                        <div id="content-demo">
                            <h1 class="widget-title">Button</h1>
                            <p>Button widget provides styling over native button elements.</p>

                            <button id="default" type="button">Default</button>

                        </div>

                        <div style="clear: both" />
                    </div>
                </div>
            </div>
	</body>';
