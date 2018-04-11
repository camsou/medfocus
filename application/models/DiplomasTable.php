<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DiplomasTable extends CI_Model
{

    protected $table = 'diplomas';

    /**
	 *	Ajoute un diplôme
	 *
	 *	@param string $email_pro
     *	@param int $year
     *	@param string $name
	 *	@return bool Le résultat de la requête
	 */
	public function add_diploma($email_pro, $year, $name)
	{
		return $this->db->set('email_pro', $email_pro)
                        ->set('year', $year)
                        ->set('name', $name)
                        ->insert($this->table);
    }

}