<?php

return array (
  'database' => 
  array (
    'DEFAULT_CHARACTER_SET_NAME' => 'utf8mb4',
    'DEFAULT_COLLATION_NAME' => 'utf8mb4_unicode_ci',
  ),
  'tables' => 
  array (
    'phinxlog' => 
    array (
      'table' => 
      array (
        'table_name' => 'phinxlog',
        'engine' => 'InnoDB',
        'table_comment' => '',
        'table_collation' => 'utf8_general_ci',
        'character_set_name' => 'utf8',
        'row_format' => 'Dynamic',
      ),
      'columns' => 
      array (
        'version' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'phinxlog',
          'COLUMN_NAME' => 'version',
          'ORDINAL_POSITION' => '1',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'NO',
          'DATA_TYPE' => 'bigint',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => '19',
          'NUMERIC_SCALE' => '0',
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'bigint(20)',
          'COLUMN_KEY' => 'PRI',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'migration_name' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'phinxlog',
          'COLUMN_NAME' => 'migration_name',
          'ORDINAL_POSITION' => '2',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'varchar',
          'CHARACTER_MAXIMUM_LENGTH' => '100',
          'CHARACTER_OCTET_LENGTH' => '300',
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => 'utf8',
          'COLLATION_NAME' => 'utf8_general_ci',
          'COLUMN_TYPE' => 'varchar(100)',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'start_time' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'phinxlog',
          'COLUMN_NAME' => 'start_time',
          'ORDINAL_POSITION' => '3',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'timestamp',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => '0',
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'timestamp',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'end_time' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'phinxlog',
          'COLUMN_NAME' => 'end_time',
          'ORDINAL_POSITION' => '4',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'timestamp',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => '0',
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'timestamp',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'breakpoint' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'phinxlog',
          'COLUMN_NAME' => 'breakpoint',
          'ORDINAL_POSITION' => '5',
          'COLUMN_DEFAULT' => '0',
          'IS_NULLABLE' => 'NO',
          'DATA_TYPE' => 'tinyint',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => '3',
          'NUMERIC_SCALE' => '0',
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'tinyint(1)',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
      ),
      'indexes' => 
      array (
        'PRIMARY' => 
        array (
          1 => 
          array (
            'Table' => 'phinxlog',
            'Non_unique' => '0',
            'Key_name' => 'PRIMARY',
            'Seq_in_index' => '1',
            'Column_name' => 'version',
            'Collation' => 'A',
            'Sub_part' => NULL,
            'Packed' => NULL,
            'Null' => '',
            'Index_type' => 'BTREE',
            'Comment' => '',
            'Index_comment' => '',
          ),
        ),
      ),
      'foreign_keys' => NULL,
    ),
    'users' => 
    array (
      'table' => 
      array (
        'table_name' => 'users',
        'engine' => 'InnoDB',
        'table_comment' => '',
        'table_collation' => 'utf8mb4_unicode_ci',
        'character_set_name' => 'utf8mb4',
        'row_format' => 'Dynamic',
      ),
      'columns' => 
      array (
        'id' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'id',
          'ORDINAL_POSITION' => '1',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'NO',
          'DATA_TYPE' => 'int',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => '10',
          'NUMERIC_SCALE' => '0',
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'int(11)',
          'COLUMN_KEY' => 'PRI',
          'EXTRA' => 'auto_increment',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'username' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'username',
          'ORDINAL_POSITION' => '2',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'varchar',
          'CHARACTER_MAXIMUM_LENGTH' => '255',
          'CHARACTER_OCTET_LENGTH' => '1020',
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => 'utf8mb4',
          'COLLATION_NAME' => 'utf8mb4_unicode_ci',
          'COLUMN_TYPE' => 'varchar(255)',
          'COLUMN_KEY' => 'UNI',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'password' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'password',
          'ORDINAL_POSITION' => '3',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'varchar',
          'CHARACTER_MAXIMUM_LENGTH' => '255',
          'CHARACTER_OCTET_LENGTH' => '1020',
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => 'utf8mb4',
          'COLLATION_NAME' => 'utf8mb4_unicode_ci',
          'COLUMN_TYPE' => 'varchar(255)',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'email' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'email',
          'ORDINAL_POSITION' => '4',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'varchar',
          'CHARACTER_MAXIMUM_LENGTH' => '255',
          'CHARACTER_OCTET_LENGTH' => '1020',
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => 'utf8mb4',
          'COLLATION_NAME' => 'utf8mb4_unicode_ci',
          'COLUMN_TYPE' => 'varchar(255)',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'first_name' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'first_name',
          'ORDINAL_POSITION' => '5',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'varchar',
          'CHARACTER_MAXIMUM_LENGTH' => '255',
          'CHARACTER_OCTET_LENGTH' => '1020',
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => 'utf8mb4',
          'COLLATION_NAME' => 'utf8mb4_unicode_ci',
          'COLUMN_TYPE' => 'varchar(255)',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'last_name' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'last_name',
          'ORDINAL_POSITION' => '6',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'varchar',
          'CHARACTER_MAXIMUM_LENGTH' => '255',
          'CHARACTER_OCTET_LENGTH' => '1020',
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => 'utf8mb4',
          'COLLATION_NAME' => 'utf8mb4_unicode_ci',
          'COLUMN_TYPE' => 'varchar(255)',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'user_role_id' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'user_role_id',
          'ORDINAL_POSITION' => '7',
          'COLUMN_DEFAULT' => '2',
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'int',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => '10',
          'NUMERIC_SCALE' => '0',
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'int(11)',
          'COLUMN_KEY' => 'MUL',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'locale' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'locale',
          'ORDINAL_POSITION' => '8',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'varchar',
          'CHARACTER_MAXIMUM_LENGTH' => '255',
          'CHARACTER_OCTET_LENGTH' => '1020',
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => 'utf8mb4',
          'COLLATION_NAME' => 'utf8mb4_unicode_ci',
          'COLUMN_TYPE' => 'varchar(255)',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'enabled' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'enabled',
          'ORDINAL_POSITION' => '9',
          'COLUMN_DEFAULT' => '0',
          'IS_NULLABLE' => 'NO',
          'DATA_TYPE' => 'tinyint',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => '3',
          'NUMERIC_SCALE' => '0',
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'tinyint(1)',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'created_at' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'created_at',
          'ORDINAL_POSITION' => '10',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'datetime',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => '0',
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'datetime',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'created_user_id' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'created_user_id',
          'ORDINAL_POSITION' => '11',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'int',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => '10',
          'NUMERIC_SCALE' => '0',
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'int(11)',
          'COLUMN_KEY' => 'MUL',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'updated_at' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'updated_at',
          'ORDINAL_POSITION' => '12',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'datetime',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => NULL,
          'NUMERIC_SCALE' => NULL,
          'DATETIME_PRECISION' => '0',
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'datetime',
          'COLUMN_KEY' => '',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
        'updated_user_id' => 
        array (
          'TABLE_CATALOG' => 'def',
          'TABLE_NAME' => 'users',
          'COLUMN_NAME' => 'updated_user_id',
          'ORDINAL_POSITION' => '13',
          'COLUMN_DEFAULT' => NULL,
          'IS_NULLABLE' => 'YES',
          'DATA_TYPE' => 'int',
          'CHARACTER_MAXIMUM_LENGTH' => NULL,
          'CHARACTER_OCTET_LENGTH' => NULL,
          'NUMERIC_PRECISION' => '10',
          'NUMERIC_SCALE' => '0',
          'DATETIME_PRECISION' => NULL,
          'CHARACTER_SET_NAME' => NULL,
          'COLLATION_NAME' => NULL,
          'COLUMN_TYPE' => 'int(11)',
          'COLUMN_KEY' => 'MUL',
          'EXTRA' => '',
          'PRIVILEGES' => 'select,insert,update,references',
          'COLUMN_COMMENT' => '',
          'GENERATION_EXPRESSION' => '',
          'SRS_ID' => NULL,
        ),
      ),
      'indexes' => 
      array (
        'PRIMARY' => 
        array (
          1 => 
          array (
            'Table' => 'users',
            'Non_unique' => '0',
            'Key_name' => 'PRIMARY',
            'Seq_in_index' => '1',
            'Column_name' => 'id',
            'Collation' => 'A',
            'Sub_part' => NULL,
            'Packed' => NULL,
            'Null' => '',
            'Index_type' => 'BTREE',
            'Comment' => '',
            'Index_comment' => '',
          ),
        ),
        'username' => 
        array (
          1 => 
          array (
            'Table' => 'users',
            'Non_unique' => '0',
            'Key_name' => 'username',
            'Seq_in_index' => '1',
            'Column_name' => 'username',
            'Collation' => 'A',
            'Sub_part' => NULL,
            'Packed' => NULL,
            'Null' => 'YES',
            'Index_type' => 'BTREE',
            'Comment' => '',
            'Index_comment' => '',
          ),
        ),
        'created_user_id' => 
        array (
          1 => 
          array (
            'Table' => 'users',
            'Non_unique' => '1',
            'Key_name' => 'created_user_id',
            'Seq_in_index' => '1',
            'Column_name' => 'created_user_id',
            'Collation' => 'A',
            'Sub_part' => NULL,
            'Packed' => NULL,
            'Null' => 'YES',
            'Index_type' => 'BTREE',
            'Comment' => '',
            'Index_comment' => '',
          ),
        ),
        'updated_user_id' => 
        array (
          1 => 
          array (
            'Table' => 'users',
            'Non_unique' => '1',
            'Key_name' => 'updated_user_id',
            'Seq_in_index' => '1',
            'Column_name' => 'updated_user_id',
            'Collation' => 'A',
            'Sub_part' => NULL,
            'Packed' => NULL,
            'Null' => 'YES',
            'Index_type' => 'BTREE',
            'Comment' => '',
            'Index_comment' => '',
          ),
        ),
        'user_role_id' => 
        array (
          1 => 
          array (
            'Table' => 'users',
            'Non_unique' => '1',
            'Key_name' => 'user_role_id',
            'Seq_in_index' => '1',
            'Column_name' => 'user_role_id',
            'Collation' => 'A',
            'Sub_part' => NULL,
            'Packed' => NULL,
            'Null' => 'YES',
            'Index_type' => 'BTREE',
            'Comment' => '',
            'Index_comment' => '',
          ),
        ),
      ),
      'foreign_keys' => NULL,
    ),
  ),
);