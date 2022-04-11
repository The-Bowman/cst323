<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;
use App\Models\User;
use App\Services\Data\SecurityDAO;

class LoginController extends Controller
{
    public function index(Request $request) { // Using a data request.
        try {
          
            // Instantiating a new security service while setting username and password.
            $username = $request->input('username');
            $password = $request->input('password');
            
            $dao = new SecurityDAO();
            // Binding to the userModel.
            $user = new User($username, $password);
           
            // Validating login 1 for valid 0 for invalid
            $validation = $dao->findbyUser($user);
         
            if ($validation == 1) {
                
             return view('loginPass', ['username' => $username]);
             
            } else {
             
                return view('loginFail');
                
            }
        } catch (Exception $e) {
            echo "Error occurred: " . $e;
        }
    }
}