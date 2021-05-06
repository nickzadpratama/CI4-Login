<?php

namespace App\Models;

use CodeIgniter\Model;

class tesModel extends Model
{
	protected $table = 'login';
	protected $allowFields = ['nama'];

	public function getLog() {
		return $this->findAll();
	} 
}