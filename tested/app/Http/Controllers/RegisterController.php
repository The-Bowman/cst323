<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;
use App\Models\User;
use App\Services\Data\SecurityDAO;

class RegisterController extends Controller
{

    public function index(Request $request)
    {
        try {
            $username = $request->input('username');
            $password = $request->input('password');
            $email = $request->input('email');

            $dao = new SecurityDAO();
            // Binding to the userModel.
            $user = new User($username, $password, $email);
           
            $register = $dao->insertUser($user);

            if ($register) {
                return view('registerPass', [
                    'username' => $username,
                    'email' => $email
                ]);
            } else {
                return view('registerFail');
            }
        } catch (Exception $e) {
            echo "Error occurred: " . $e;
        }
    }
}
    
    

