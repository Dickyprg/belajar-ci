<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class NewsModel extends Model {
        protected $table = 'berita';

        protected $allowedFields = ['judulberita', 'author','tglposting','foto','isiberita'];
    }
?>