<?php defined('SYSPATH') or die('No direct script access.');

	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/css/button/button.css" />
	';
	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/js/button/button.js"></script>
	';

	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/css/dialog/dialog.css" />
	';
	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/primeui-1.1/js/dialog/dialog.js"></script>
	';


	echo '	
	<script type="text/javascript">';
    echo "
    	 $(function() {
                $('#login').puibutton({
					click: function() {  $('#dlg').puidialog('show'); }  
                });

                $('#registration').puibutton({
					click: function() {  $('#rgs').puidialog('show'); }  
                });

			    $('#dlg').puidialog({  
					 showEffect: 'fade',  
					 hideEffect: 'fade',  
					 minimizable: true,  
					 maximizable: true,  
					 modal: true,  
					 buttons: [{  
					                text: 'Login',  
					                click: function() {  
					                    $('#dlg').puidialog('hide');  
					                }  
					            },  
					            {  
					                text: 'Cancel',  
					                click: function() {  
					                    $('#dlg').puidialog('hide');  
					                }  
					            }  
					        ]  
                   
				}); 

			    $('#rgs').puidialog({  
					 showEffect: 'fade',  
					 hideEffect: 'fade',  
					 minimizable: true,  
					 maximizable: true,  
					 modal: true,  
					 buttons: [{  
					                text: 'Registration',  
					                click: function() {  
					                    $('#rgs').puidialog('hide');  
					                }  
					            },  
					            {  
					                text: 'Cancel',  
					                click: function() {  
					                    $('#rgs').puidialog('hide');  
					                }  
					            }  
					        ]  
                   
				}); 
				

            });  

	</script>";
	
	echo '      
          <div class="content-section" >
			
                <div id="content-demo" align="right" valign="top">
                    <button id="login" type="button">Login</button>
					<button id="registration" type="button">Registration</button>
					<div id="dlg" title="Login User" align="right">

						<p>Login: <input id="inp" 
                                         type="text" 
                                         placeholder=" Username" 
                                         style="margin-right:50px">
                        </p>
        				<p>Password: <input id="pas" 
                                         type="password" 
                                         placeholder=" Password" 
                                         style="margin-right:50px">
                        </p>
                    </div> 
					<div id="rgs" title="Registration User" align="right">

						<p>Login: <input id="inp" 
                                         type="text" 
                                         placeholder=" Username" 
                                         style="margin-right:50px">
                        </p>
						<p>Email: <input id="eml" 
                                         type="text" 
                                         placeholder=" E-mail" 
                                         style="margin-right:50px">
                        </p>
        				<p>Password: <input id="pas" 
                                         type="password" 
                                         placeholder=" Password" 
                                         style="margin-right:50px">
                        </p>
                    </div> 
                </div>

          </div>
	';

