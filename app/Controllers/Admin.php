<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;
use App\Models\ArticleModel;
/**
 * 
 */

class Admin extends BaseController
{

	public function submit_article()
	{
		// $db      = \Config\Database::connect();
  //        $builder = $db->table('blog_table');
		// echo "ha";
		// echo "<pre>";
		// print_r("uploaded[file]");

  //       $validated = $this->validate([
  //           'file' => [
  //               'uploaded[file]',
  //               'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
  //               'max_size[file,4096]',
  //           ],
  //       ]);

  //      //  $msg = 'Please select a valid file';
 
  //       if ($validated) {
  //           $avatar = $this->request->getFile('file');
  //          echo $avatar->move(WRITEPATH . 'uploads');

  //         $data = [

  //           'img' =>  $avatar->getClientName(),
  //           'type'  => $avatar->getClientMimeType()
  //         ];
  //         print_r($data);

  //         $save = $builder->insert($data);
  //         $msg = 'File has been uploaded';
  //       }

  //      // return redirect()->to( base_url('public/index.php/form') )->with('msg', $msg);

		// exit;
		echo "string";

		helper(['form', 'url','html']);
		 $session = session();
         
         // echo $_SESSION['id'];
         // echo $_POST['t_article'];
        $art = $this->validate([
            't_article' => 'required',
            'b_article' => 'required',
        ]);

        if(!$art)
        {

        	return redirect()->to('welcome');
        }
        {
        	$data = [
        		'article_title' => $_POST['t_article'],
        		'artile_body' => $_POST['b_article'],
        		'user_id' => $_SESSION['id'],

        	];
        	
        	
        	
        	$add_article = new ArticleModel();
	 		$add_article->insert($data);
        	return redirect()->to('welcome');
	 		
        }


			}
	

	public function addarticle()
	{
		
		$session = session();
		if(isset($_SESSION['id']))
		{
			helper(['form', 'url']);
				echo "string";
			echo view("Admin/add_articles");
		
		}else
		{
			return redirect()->to('login');
		}

	}
	public function login()
	{
		$session = session();
		if(!isset($_SESSION['id']))
		{
			helper(['form', 'url']);
			echo view("Admin/Login");
		}else
		{
			return redirect()->to('welcome');
		}
	}

	public function logout(){
		$session = session();
		echo $session->id;
		$session->remove('id');
		return redirect()->to('login');

	}

	public function index()
	{



		 helper(['form', 'url']);
		 $session = session();
         
        $val = $this->validate([
            'uname' => 'required',
            'pass' => 'required',
        ]);



        if (!$val)
        {
 
            echo "fail";
            echo view("Admin/Login");

 
        }
        else
        { 
       		
       		echo $_POST['uname'] . $_POST['pass'];
       		$login = new LoginModel();
       		$s = $login->asArray()->where('username',$_POST['uname'])->findAll();
       		echo "<pre>";
       		if($s[0]['password'] == $_POST['pass'])
       		{
       			$d = [
       				'id'=> $s[0]['id'],
       				];
       			$session->set($d);
       			echo $session->id;

       			return redirect()->to('welcome');
       		}else
       		{
       			$session->setFlashdata('login_error', 'invalid password/email');
       			return redirect()->to('login');
       		}

       		

        }
	    

	   

	}

	public function userRegister()
	{
		helper(['form', 'url']);
		echo "done";
		$reg = $this->validate([
            'uname' => 'required|alpha',
            'email' => 'required|valid_email|is_unique[users.email]',
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'pass' => 'required|max_length[12]',
        ]);
        echo $_POST['email'];
        if($reg)
        {
        	$data = [
        		'username' => $_POST['uname'],
        		'password' => $_POST['pass'],
        		'fname' => $_POST['fname'],
        		'lname' => $_POST['lname'],
        		'email' => $_POST['email'],

        	];
        	
        	$register = new LoginModel();
        	$register->insert($data);
        	return redirect()->to('login');
        }else
        {

		echo view('Admin/register');
        }
	}

	public function register()
	{
		$session = session();

		if($session->id){
			helper(['form', 'url']);
				echo view('Admin/register');
			}
			else
			{
				return redirect()->to('welcome');
			}
	}


	public function welcome()
	 {
	 	$session = session();
	 	// echo $session->id;
	 	if($session->id)
	 	{
	 		helper(['form', 'url','form']);
	 		$article = new ArticleModel();
	 		$data = $article->asArray()->where('user_id',$session->id)->findAll();
	 		// print_r($data);
	 		 
	 		echo view('Admin/dashboard',['articles'=>$data]);
	 	}else
	 	{
	 		return redirect()->to('login');
	 	}
	 }

	 public function delarticle()
	 {
	 	helper(['form', 'url','form']);
	 	// echo $_POST['id'];
	 	$session = session();
	 	echo $session->id;
	 	if($session->id)
	 	{
	 		
	 		$article = new ArticleModel();
	 		$article->delete($_POST['id']);
	 		return redirect()->to('welcome');
	 	}else
	 	{
	 		return redirect()->to('login');
	 	}

	 }
	 public function edit_art()
	 {
	 	// echo "done";
		helper(['form', 'url','form']);
	 	// echo $_POST['id'];
	 	$session = session();
	 	// echo $session->id;
	 	$data= [
	 		'article_title' => $_POST['t_article'],
	 		'artile_body' => $_POST['b_article'],
	 	];
	 	if($session->id)
	 	{
	 		// echo $_POST['id'];
	 		$article = new ArticleModel();
	 		$article->update($_POST['id'],$data );
	 		echo "updated";
	 		return redirect()->to('welcome');
	 	}else
	 	{
	 		return redirect()->to('login');
	 	}
	 }

	 public function editarticle()
	 {
	 	helper(['form', 'url','form']);
	 	$session = session();
	 	
	 	
	 	if($session->id)
	 	{
	 		$article = new ArticleModel();
	 		$data = $article->asArray()->where('id',$_POST['id'])->findAll();
	 		print_r($data);

	 		return view('Admin/edit_article',['edit_art' => $data]);
	 		// echo $_SESSION['art_id'];
	 	}else
	 	{
	 		return redirect()->to('login');
	 	}
	 } 
}


?>