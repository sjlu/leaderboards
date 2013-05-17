<?php

class Migration_Leaders extends CI_Migration
{

	function up()
	{
		$fields = array(
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255
			),
			'points' => array(
				'type' => 'INT',
				'constraint' => 13
			),
			'timestamp' => array(
                'type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
            )
		);

		$this->dbforge->add_field($fields);
		$this->dbforge->create_table('leaders');
	}

	function down()
	{
		$this->dbforge->drop_table('leaders');
	}

}