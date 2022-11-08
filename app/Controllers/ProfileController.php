<?php 

namespace App\Controllers;  

use CodeIgniter\Controller;

  

class ProfileController extends Controller

{

    public function index()

    {

        $session = session();

        echo "<centre><h3>Welcome  ".$session->get('name'); 

    }

}
