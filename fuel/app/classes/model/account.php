<?php

class Model_Account extends \Orm\Model
{
    protected static $_table_name = 'account';
    protected static $_properties = array(
        'id',
        'name',
        'mail',
        'password',
        'account_type',
        'status',
        'post_code',
        'address',
        'tel',
        'fax',
        'insert_time',
        'update_time',
    );
}
