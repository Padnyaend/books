<?php defined('SYSPATH') or die('No direct script access.');

class Model_Listbooks extends Kohana_Model
 {
    public function getBooks()
     {
        $sql = 'SELECT b.name as book,'."\n".
               '       a.name as author'."\n".
               'FROM   `authors` a,'."\n".
               '       `books` b,'."\n".
               '       `books_authors` s'."\n".
               'WHERE  s.book_id = b.id'."\n".
               '  AND  s.author_id = a.id'."\n".
               'ORDER BY b.name';

        return DB::query(Database::SELECT,$sql)->execute()->as_array();
        
     }
 }
