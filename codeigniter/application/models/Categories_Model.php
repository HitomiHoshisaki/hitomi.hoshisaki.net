<?
class Categories_model extends CI_Model {

	public $title;
	public $content;
	public $date;
	
	public function __construct()
	{
		// CI_Model constructor の呼び出し
		parent::__construct();
	}
	
	public function get_last_ten_entries()
	{
		$query = $this->db->get('entries', 10);
		return $query->result();
	}
	
	public function insert_entry()
	{
		$this->title    = $_POST['title']; // 後述の注意書き参照
		$this->content  = $_POST['content'];
		$this->date     = time();
		
		$this->db->insert('entries', $this);
	}
	
	public function update_entry()
	{
		$this->title    = $_POST['title'];
		$this->content  = $_POST['content'];
		$this->date     = time();
		
		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}

}
?>