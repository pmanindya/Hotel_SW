<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_initial_table extends CI_Migration{
     public function up(){
         $this->dbforge->add_field([
                        'blog_id' => [
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'blog_title' => [
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ],
                        'blog_description' => [
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ]
                ]);
                $this->dbforge->add_key('blog_id', TRUE);
                $this->dbforge->create_table('blog');
     }
     public function down(){
         $this->dbforge->drop_table('blog');
     }
}
