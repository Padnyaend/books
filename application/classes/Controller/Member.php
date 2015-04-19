<?php defined('SYSPATH') or die('No direct access allowed.'); 

 // �������� ������ 
class Controller_Member extends Controller { 

    public function action_index() { 				 		
    	
 		
    } 

	// ����������� ������������� 
	public function action_register() { 
		// ���� ���� ������, ���������� ������� POST    
		if ($_POST) { 
			// ������� ����������, ���������� �� ����� � ������� ������ User 
			$model = ORM::factory('user'); 
			// ������ � ��� ���������� ��������, ���������� �� POST 
			$model->values(array( 
		   		'username' => $_POST['username'], 
		   		'email' => $_POST['email'], 
		   		'password' => $_POST['password'], 
		   		'password_confirm' => $_POST['password_confirm'], 
			)); 
			try 
				{ 
				// �������� ��������� ������������ (�� ����, �������� � ����) 
				$model->save(); 
				// ��������� ��� ���� 
				$model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find()); 
				// � ���������� ��� �� �������� ������������ 
		    	$this->request->redirect('member/view/'); 
			} 
			catch (ORM_Validation_Exception $e) 
			{ 
				// ��� ���� �������� �����-�� ������ 
				echo $e; 
			} 
	    } 
	    // �������� ����� ������ 
	    $this->response->body(View::factory('register')); 
	} 
	 
	// �������� ���������������� ������ 
	public function action_view() {
	// ��������, ��������� �� ������������	 
	if(Auth::instance()->logged_in()) 
        	{ 
			// ���� ��, �� ����������� � ���������� �����. ��� ����� ���� � � ���� view ����������� 
			echo '����� ����������, '.Auth::instance()->get_user()->username.'!'; 
			echo '<br /><a href=\'logout\'>logout</a>'; 
        	} 
	else 
		{ 
			// � ���� �� �� ���������, ���������� ���������� 
			return $this->request->redirect('member/login'); 
		} 		 
	} 

	// ����� ������������ 
	public function action_logout() 
	{ 
	// �������� ������������� 
	if (Auth::instance()->logout()) 
		{ 
			// ���� ����������, �� ���������� ����� ������������ 
			return $this->request->redirect('member/login'); 
		} 
	else 
		{ 
			// � ����� - ����� ��� �� ������� 
			echo 'fail logout'; 
		} 
	} 
	 
	// ����� ������ 
	public function action_login() 
	{ 
		// ��������, ����� ������������ ��� ����� 
		 if(Auth::instance()->logged_in()) 
        	{	 
			// � ���� ��� ���, �� ���������� ��� ����� �� �������� ������������� 
			return $this->request->redirect('member/view'); 
        	} 

		// ���� �� ������������ �� �����, �� ������ �� �������� ������, ��: 
		if ($_POST) 
		{ 
			// ������� ����������, ���������� �� ����� � ������� ������ User 
			$user = ORM::factory('user'); 
			// � $status �������� ��������� ������� login 
			$status = Auth::instance()->login($_POST['username'], $_POST['password']); 
			// ���� ����� �������, �� 
			if ($status) 
			{ 
				// ���������� ������������ �� ��� �������� 
				$this->request->redirect('member/view'); 
			} 
			else 
			{ 
				// ����� ������ �� ����������, ����� failed 
				echo 'failed'; 
			} 
		} 
	    // ������ view ������ 
            $this->response->body(View::factory('login')); 
	} 
}
