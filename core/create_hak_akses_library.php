<?php 

$string = "<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hak_akses {

    function __construct()
    {
        $this->ci =& get_instance();    // get a reference to CodeIgniter.
    }

    function cek_read($level='')
    {
        $query = $this->ci->db->query('select * from sys_menu_role WHERE group_id="$level"');
        $kolom = $query->result();
        if ($kolom->read_act<>'Y') {
            redirect(base_url('login'));
        }

    }

    function cek_add($level='')
    {
        $query = $this->ci->db->query('select * from sys_menu_role WHERE group_id"$level"');
        $kolom = $query->result();
        if ($kolom->insert_act<>'Y') {
            redirect(base_url('login'));
        }

    }


    function cek_edit($level='')
    {
        $query = $this->ci->db->query('select * from sys_menu_role WHERE group_id="$level"');
        $kolom = $query->result();
        if ($kolom->update_act<>'Y') {
            redirect(base_url('login'));
        }

    }

    function cek_delete_action($level='')
    {
        $query = $this->ci->db->query('select * from sys_menu_role WHERE group_id="$level"');
        $kolom = $query->result();
        if ($kolom->delete_act<>'Y') {
            redirect(base_url('login'));
        }

    }
}";



$hasil_pdf = createFile($string, $target."libraries/Hak_akses.php");

?>