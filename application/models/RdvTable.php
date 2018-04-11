<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RdvTable extends CI_Model
{
    protected $table = 'rendez-vous';

    /**
	 *	Ajoute un rendez-vous
	 *
	 *	@param string $email_user
     *	@param string $date
     *	@param string $time
     *	@param string $cause
	 *	@return bool Le résultat de la requête
	 */
	public function add_rdv($email_user, $date, $time, $cause)
	{
		return $this->db->set('email_user', $email_user)
                        ->set('date', $date)
                        ->set('time', $time)
                        ->set('cause', $cause)
                        ->insert($this->table);
    }

    /**
    *	Retourne tous les rdv d'un utilisateur
    *	
    *	@param string $email L'id de l'utilisateur
    *	@return objet Le résultat de la requête
    */
	public function get_user_rdv($email)
	{
		return $this->db->select('*')
                        ->from($this->table)
                        ->where('email_patient', (string) $email)
                        ->get()
                        ->result_array();
    }

    /**
    *	Supprime un rendez-vous
    *	
    *	@param string $id_rdv L'id du rendez-vous à supprimer
    *	@return bool Le résultat de la requête
    */
    public function delete_rdv($id_rdv)
    {
        return $this->db->where('id_rdv', $id_rdv)
                        ->delete($this->table);
    }

}