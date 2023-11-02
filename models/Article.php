<?php

require_once("../app/db.php");

class Article {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createArticle($title, $content, $slug, $userId, $mediaId, $categoryIds) {
        $title = $this->db->quote($title);
        $content = $this->db->quote($content);
        $slug = $this->db->quote($slug);

        // Insérer l'article dans la table "posts"
        $sql = "INSERT INTO posts (namePosts, contentPosts, slugPosts, idUsers, idMedias, creationPosts) 
                VALUES ($title, $content, $slug, $userId, $mediaId, NOW())";

        try {
            $this->db->exec($sql);
            $articleId = $this->db->lastInsertId(); // Récupérer l'ID de l'article inséré
            echo "L'article a été inséré avec succès.";

            // Associer l'article aux catégories
            $this->associateCategoriesWithArticle($articleId, $categoryIds);
        } catch (PDOException $e) {
            echo "Erreur lors de la création de l'article : " . $e->getMessage();
        }
    }

    public function associateCategoriesWithArticle($articleId, $categoryIds) {
        foreach ($categoryIds as $categoryId) {
            $sql = "INSERT INTO posts_categories (idPosts, idCategory) VALUES ($articleId, $categoryId)";

            try {
                $this->db->exec($sql);
            } catch (PDOException $e) {
                echo "Erreur lors de l'association des catégories avec l'article : " . $e->getMessage();
            }
        }
    }
}

// Exemple d'utilisation de la classe Article
$article = new Article($db);
$mediaId = 1; // ID du média associé à l'article (à adapter)
$categoryIds = [1, 2]; // Liste des IDs des catégories associées à l'article (à adapter)
$article->createArticle("Titre de l'article", "Contenu de l'article", "slug-de-l-article", $userId, $mediaId, $categoryIds);

?>
