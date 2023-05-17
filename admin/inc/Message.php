<?php
class Message{
	public function message(){
		if($_GET['error']){
			return '<div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Sorry, </strong> Invalid Login Credentials
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
		}

		if($_GET['unauthorised']){
			return '<div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Sorry, </strong> Access Denied
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
		}

		if($_GET['success']){
			return $_GET['success'];
		}
	}
}

$message = new Message();