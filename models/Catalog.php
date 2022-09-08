<?php
namespace models;
use core\Model;

class Catalog extends Model
{
    public function getGallery($route){
        $params = ['itemid' => $route['id']];
        $result = $this->db->row("SELECT * FROM catalog_item_gallery 
                                        where itemid =:itemid ", $params);
    }

    public function getTypeItems($route){
        $params = ['idtype' => $route['id']];

        $result = $this->db->row("SELECT i.id as itemid, i.title, i.path, i.idtype, t.title as ctype, t.intro_title, t.intro_text, t.addition, i.addition as iaddition FROM catalog_type t 
                                        left join catalog_item i ON t.id=i.idtype
                                        where t.id=:idtype ORDER BY i.order_by ASC LIMIT 10", $params);

        return $result;
    }

    public function getItems($route){
        $params = ['iditem' => $route['id']];

        $result = $this->db->row("SELECT * from catalog_item where id=:iditem", $params);

        return $result;
    }

}