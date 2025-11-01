<?php
require_once 'lib/CouchDB.php';

$couchdb = CouchDB::open('fsock://admin:password@IP:5984/');

//$couchdb now provides interface to whole server (UUIDs generation, replication etc.)
$testdb = $couchdb->db('test'); 

//You want to create document?
$foo = $testdb->doc('foo');
$foo->bar = 'baz';
$foo->save();

//// $couchdb->docs();

//What about attachment?
//~ $attachment = $foo->attachment('xyz');
//~ $attachment->content_type = 'text/plain';
//~ $attachment->data = 'hello, world!';

