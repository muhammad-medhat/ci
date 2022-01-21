<?php 

namespace App\Controllers;
class ContactsController extends BaseController{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        // $this->todos_model = new TodoModel();
        $this->perpage=10;
    }
    public function index(){
        
        return  $this->show_contacts();
    }

    public function insert(){

        switch (strtolower($this->data['method']) ) {
            case 'insert':
                return $this->do_insert();
                break;
            
            default:
                return $this->show_insert();
                break;
        }

    }


    /**
     * private methods
     */
    function get_p(){
        return array(
            // {'id'=>1, 'name'=>'person 1'},
            // {'id'=>2, 'name'=>'person 1'},
            // {'id'=>3, 'name'=>'person 1'}
        );        
        // return $this->todos_model->asObject()->paginate($this->perpage);        
    }
    
    function show_contacts(){
        $mtd  = $this->request->getMethod();               


        $title = 'List';
        $ls=$this->get_p();
        return view('contacts', 
            array(
                'method'=>$mtd,
                'title'=>$title, 
                'list'=>$ls, 
                'APPNAME'=>'HMSSS'
                // 'todos'=>$ls, 
                //'alert'=>$alert,
                // 'pager'=>$this->todos_model->pager
            )
        );
    }

    function show_insert(){
        return view('insert', $this->data);
    }

    function do_insert(){
        
    }

}