<?php

interface DbHandler {
    public function connect():bool;
    public function get_data($per_page, $page);
    public function disconnect();   
    public function get_record_by_id($id);
    
    
}
