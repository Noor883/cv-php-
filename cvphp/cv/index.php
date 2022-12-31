<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Helper;
use Core\Model\User;

class profile extends Controller
{
        public function render()
        {
                if (!empty($this->view))
                        $this->view();
        }

  public function index()
  {
        $this->view= 'profile';
       
        $user = new User;
        $this->data['user'] = $user->get_by_id($_SESSION["user"]["user_id"]);
       

  }

  public function update(){


   //* CREATE USER MODEL
   $user = new User();
   //* UPDATE THE POST 
   $user->update_profile($_POST);
   //* REDIRECT 
   Helper::redirect('/profile?id=' . $_POST['user_id']);


  }






}
