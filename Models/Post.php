<?php
/**
 * Created by PhpStorm.
 * User: Mahbub-Alam
 * Date: 13-08-16
 * Time: 17.53
 */

namespace APP;
use PDO;

class Post
{
    public $id = "";
    public $users_id = "";
    public $caption = "";
    public $caption_details = "";
    public $img_orgi = "";
    public $img_thmb = "";
    public $img_mid = "";
    public $excerpt = "";
    public $content = "";
    public $is_act = "";
    public $link = "";
    public $aud_lnk="";
    public $vdo_lnk = "";
    public $meta_content = "";
    public $meta_description = "";
    public $post_share = "";
    public $post_like = "";
    public $post_read="";
    public $comment_count = "";
    public $best_of_month="";
    public $world_news = "";
    public $post_display = "";
    public $post_tags = "";
    public $department_id = "";
    public $postcategory_id = "";
    public $department_category_id="";
    public $post_date = "";
    public $created_by = "";
    public $archive = "";
    public $conn = "";
    public function __construct() {
        session_start();
        $this->conn = new PDO('mysql:dbname=www_uddin_db;host=localhost', 'root', '');
    }

    public function prepare($data= ""){

        if(!empty($data['id'])){
            $this->id = $data['id'];
        }

        if(!empty($data['users_id'])){
            $this->users_id = $data['users_id'];
        }

        if(!empty($data['caption'])){
            $this->caption = $data['caption'];
        }

        if(!empty($data['caption_details'])){
            $this->caption_details = $data['caption_details'];
        }

        if(!empty($data['img_orgi'])){
            $this->img_orgi = $data['img_orgi'];
        }

        if(!empty($data['img_thmb'])){
            $this->img_thmb = $data['img_thmb'];
        }

        if(!empty($data['img_mid'])){
            $this->img_mid = $data['img_mid'];
        }

        if(!empty($data['users_id'])){
            $this->users_id = $data['users_id'];
        }

        if(!empty($data['excerpt'])){
            $this->excerpt = $data['excerpt'];
        }

        if(!empty($data['is_act'])){
            $this->is_act = $data['is_act'];
        }

        if(!empty($data['aud_lnk'])){
            $this->aud_lnk = $data['aud_lnk'];
        }

        if(!empty($data['vdo_lnk'])){
            $this->vdo_lnk = $data['vdo_lnk'];
        }

        if(!empty($data['meta_content'])){
            $this->meta_content = $data['meta_content'];
        }

        if(!empty($data['img_thmb'])){
            $this->img_thmb = $data['img_thmb'];
        }

        if(!empty($data['meta_description'])){
            $this->meta_description = $data['meta_description'];
        }

        if(!empty($data['post_share'])){
            $this->post_share = $data['post_share'];
        }

        if(!empty($data['post_like'])){
            $this->post_like = $data['post_like'];
        }

        if(!empty($data['post_read'])){
            $this->post_read = $data['post_read'];
        }

        if(!empty($data['comment_count'])){
            $this->comment_count = $data['comment_count'];
        }

        if(!empty($data['best_of_month'])){
            $this->best_of_month = $data['best_of_month'];
        }

        if(!empty($data['world_news'])){
            $this->world_news = $data['world_news'];
        }
        if(!empty($data['post_display'])){
            $this->post_display = $data['post_display'];
        }

        if(!empty($data['post_tags'])){
            $this->post_tags = $data['post_tags'];
        }

        if(!empty($data['department_id'])){
            $this->department_id = $data['department_id'];
        }

        if(!empty($data['postcategory_id'])){
            $this->postcategory_id = $data['postcategory_id'];
        }

        if(!empty($data['department_category_id'])){
            $this->department_category_id = $data['department_category_id'];
        }

        if(!empty($data['post_date'])){
            $this->post_date = $data['post_date'];
        }

        if(!empty($data['created_by'])){
            $this->best_of_month = $data['created_by'];
        }

        if(!empty($data['created_by'])){
            $this->world_news = $data['world_news'];
        }
        if(!empty($data['archive'])){
            $this->archive = $data['archive'];
        }
        
        return $this;
        // print_r($data);
    }

    public function index(){
        try{
            $query = "SELECT * FROM `post`";
            $result = $this->conn->query($query) or die("Index query not ok");
            while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
        } catch (PDOException $e){
            echo"Error: " .$e->getMassage();
        }
        if(isset($data)){return $data;}
    }

}