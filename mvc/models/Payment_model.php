<?php

class payment_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function payList()
	{
		return $this->db->select('SELECT * FROM payment');
	}
        
        public function paySingleList($id)
	{
		return $this->db->select('SELECT * FROM payment WHERE studID =:studid',
                        array(':studid'=>$id));
	}

	public function create($data)
	{
		$this->db->insert('payment', array(
			'paymentDate' => date('Y-m-d H:i:s'),
                        'totalAmt' => $data['payment'],
                        'studID' => $data['studID']
		));
	}
        
        public function editSave($data)
	{
		$postData = array(
			'paymentDate' => date('Y-m-d H:i:s'),
			'totalAmt' => $data['sum'],
		);
		
		$this->db->update('payment', $postData, 
				"`studID` = '{$data['studid']}'");
	}
        
        public function delete($id)
	{
		$this->db->delete('payment', "`studID` = {$id}");
	}
}