<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_group_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get category by cat_id
     */
    function get_user_group($group_id)
    {
        $user_group = $this->db->query("
            SELECT
                *

            FROM
                `groups`

            WHERE
                `gro_id` = ?
        ",array($group_id))->row_array();
        
        return $user_group;
    }
        
    /*
     * Get all category
     */
    function get_all_user_group()
    {
        $user_group = $this->db->query("
            SELECT
                *

            FROM
                `groups`

            WHERE
                1 = 1
                AND gro_id != 1

            ORDER BY `gro_id` DESC
        ")->result_array();

        return $user_group;
    }
    
    /*
     * function to add new category
     */
    function add_user_group($params)
    {
        $this->db->insert('groups',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update category
     */
    function update_user_group($group_id,$params)
    {
        $this->db->where('gro_id',$group_id);
        return $this->db->update('groups',$params);
    }
    
    /*
     * function to delete category
     */
    function delete_user_group($group_id)
    {
        return $this->db->delete('groups',array('gro_id'=>$group_id));
    }

    function check_user_group($group_id)
    {        
        $user_group = $this->db->query("
            SELECT                
                usr_id
            FROM
                `users`

            WHERE
                `usr_group` = ?
        ",array($group_id))->num_rows();        
        return $user_group;
    }

    public function get_info($selected="", $table, $where=array(), $sorting=array(),$join=array(),$exception=array(),$like=array(),$where_in=array(),$limit=-99,$group_by=""){
        $this->db->select($selected);        
        if(count($where) > 0){
          $this->db->where($where);
        }
        if(count($where_in) > 0){
            $this->db->where_in($where_in['field'],$where_in['value']);
        }
        if(count($like) > 0){
            for($index=0;$index < count($like); $index++){
                $this->db->like($like[$index]['field'], $like[$index]['value']);
            }
        }
        if(count($join) > 0){
            for($index=0;$index < count($join); $index++){
                $this->db->join($join[$index]['table'],$join[$index]['connection'],$join[$index]['type']);
            }
        }
        if(count($exception) > 0){
            if($exception['value'] == null){
                $field_exception = $exception['field'];
                $this->db->where("$field_exception is not null");
            }else{
                $this->db->where_not_in($exception['field'],$exception['value']);
            }
        }
        if(count($sorting) > 0){
            $this->db->order_by($sorting['field'],$sorting['sort']);
        }
        if($limit > 0){
            $this->db->limit($limit);
        }
        if($group_by != ""){
            $this->db->group_by($group_by);
        }

        $query = $this->db->get($table);
        if($query->num_rows() > 0){
          return $query;
        }
        return false;
    }

    function userinfo($username){
        $this->db->select('a.*,b.user_all_access,b.user_group_all_access,b.donasi_all_access,b.contact_all_access,b.article_all_access,b.ads_all_access');
        $this->db->join('groups b','a.usr_group = b.gro_id','left');
        $this->db->where('a.usr_name',$username);
        $this->db->where('a.stuts',1);
        $query = $this->db->get('users a');
        if($query->num_rows() > 0){
            return $query->row();
        }
        return FALSE;
    }
}
