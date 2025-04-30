<?php 

use Illuminate\Database\Capsule\Manager as DB;

    class MySqlHandler implements DbHandler
    {
        protected $db;
        protected $table;
        public function __construct( $table){
            $this->db = new DB;
            $this->table = $table;
            
        }
        public function connect():bool{
            $this->db->addConnection([
            "driver" => 'mysql',
            "host" => host,
            "database" => db,
            "port" => port,
            "username" => uname,
            "password" => pass,
            "charset" => 'utf8mb4',
            "collation" => 'utf8mb4_unicode_ci',
            "prefix" => '',
            ]);
            $flag=true;
            try {
            $this->db->setAsGlobal();
            $this->db->bootEloquent();
            } catch (Exception $er) {
            echo $er->getMessage();
            $flag=false;
            }
            return $flag;
        }
        public function get_data($per_page, $page){
            $offset = ($page -1 ) * per_page;
            $items = DB::table($this->table)->offset($offset)->limit(per_page)->get();

            $total_records = DB::table($this->table)->count();
            $total_pages = (int)ceil($total_records / $per_page);

            $_SESSION["total_pages"] = $total_pages;
            $_SESSION["items"] = $items;
            $_SESSION["page"] = $page;
            require_once 'view/all.php';
        }
        public function disconnect(){
            $this->db->disconnect();
        }
        public function get_record_by_id($id){
            $item = DB::table($this->table)->where('id', $id)->first();
            $_SESSION["item"] = $item;
            require_once 'view/detail.php';
        }
        public function search($keyword , $per_page , $page)
        {
            $page = max(1,$page);
            $offset = ($page -1) * $per_page;
            $items = DB::table($this->table)->where('product_name', 'LIKE', "%$keyword%")->offset($offset)->limit(per_page)->get();

            $total_records = DB::table($this->table)->where('product_name', 'LIKE', "%$keyword%")->count();
            $total_pages = (int)ceil($total_records / $per_page);

            $_SESSION["total_pages"] = $total_pages;
            $_SESSION["items"] = $items;
            $_SESSION["page"] = $page;
            $_SESSION["search_term"] = $keyword;

            require_once 'view/all.php';
        }
    }
    






?>