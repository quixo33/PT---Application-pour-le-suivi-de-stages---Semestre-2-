<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 12/02/15
 * Time: 11:29
 */

namespace app\table;

use app\App;

class Articles extends Table{

    //ici le nom de la table a utiliser
    protected static $table = 'articles';

    public static function find($id){
        return self::query("
            SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
            FROM articles
            LEFT JOIN categories
                ON category_id = categories.id
            WHERE articles.id = ?
        ", [$id], true);
    }

    public static function getLast(){
        return self::query("
            SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
            FROM articles
            LEFT JOIN categories
                ON category_id = categories.id
            ORDER BY articles.date DESC
        ");
    }

    public static function lastByCategory($category_id){
        return self::query("
            SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
            FROM articles
            LEFT JOIN categories
                ON category_id = categories.id
            WHERE category_id = ?
            ORDER BY articles.date DESC

        ", [$category_id]);
    }

    /**
     * @return string qui est l'url de l'article
     */
    public function getUrl(){
        return 'index.php?p=article&id=' . $this->id;
    }

    /**
     * @return string qui est un extrait du contenu de l'article
     */
    public function getExtrait(){
        //substr coupe la chaine contenu du caractère de position 0 au 150 eme.
        $html = '<p>' . substr($this->contenu, 0, 150) . ' ...</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a></p>';
        return $html;
    }
}