<?php
namespace App\Http\Controllers;

use App\Http\Models\UserModel;
use Lubed\MVCKernel\AbstractController;

class HelloController extends AbstractController
{
	public function hello()
	{
        $request = $this->request;
        $input =$request->getInput();
        $a = $input['a']??null;

        if($a==='123'){
            return $this->redirect('/jump');
        }
		return "\nHello World!\n";
	}

    public function init() {
        // TODO: Implement init() method.
    }

    public function jump()
    {
        return "\n Welcome jump to here!\n";
    }

    public function user()
    {
        $user = new UserModel();
        $users = $user->findAll();
        return json_encode($users);
    }
}
