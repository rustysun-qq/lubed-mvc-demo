<?php
namespace App\Http\Controllers;

use Lubed\MVCKernel\AbstractController;

class HelloController extends AbstractController
{
	public function hello()
	{
		return "\nHello World!\n";
	}
}
