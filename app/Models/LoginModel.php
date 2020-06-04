<?php namespace App\Models;

use CodeIgniter\Model;


class LoginModel extends Model
{


	 protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['username', 'password','fname','lname','email'];

    protected $useTimestamps = false;
  

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;





}

?>