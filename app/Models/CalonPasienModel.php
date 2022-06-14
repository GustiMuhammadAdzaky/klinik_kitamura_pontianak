<?php

namespace App\Models;

use CodeIgniter\Model;

class CalonPasienModel extends Model
{
	protected $table                = 'tb_rawat_inap';
	protected $primaryKey           = 'id';
	protected $allowedFields        = [];
	protected $returnType           = 'App\Entities\Calonpasien';

	// Dates
	protected $useTimestamps        = false;
	// protected $dateFormat           = 'datetime';
	// protected $createdField         = 'created_at';
	// protected $updatedField         = 'updated_at';


}