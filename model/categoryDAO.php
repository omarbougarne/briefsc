<?php
require_once  'connexion.php';
require_once 'category.php';
class CategoryDAO
{
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
    }

    public function getCategories()
    {
        $query = "SELECT * FROM category";
        $stmt = $this->db->query($query);
        $stmt->execute();
        $categoriesData = $stmt->fetchAll();
        $categories = array();

        foreach ($categoriesData as $categoryData) {
            $categories[] = new Category(
                $categoryData["cat_id"],
                $categoryData["cat_name"],
                $categoryData["creation_date"]
            );
        }

        return $categories;
    }
    public function addCategory($category)
    {
        $query = "INSERT INTO category (cat_name, creation_date) VALUES (:cat_name, :creation_date)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':cat_name', $category->getCatName());
        $stmt->bindParam(':creation_date', $category->getCreationDate());
        $stmt->execute();
    }


    public function getCategoryById($cat_id)
    {
        $query = "SELECT * FROM category WHERE cat_id = :cat_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':cat_id', $cat_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return new Category($result['cat_id'], $result['cat_name'], $result['creation_date']);
        } else {
            return null;
        }
    }


    public function updateCategory(Category $category)
    {
        $query = "UPDATE category SET cat_name = :cat_name, creation_date = :creation_date WHERE cat_id = :cat_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':cat_id', $category->getCatId());
        $stmt->bindParam(':cat_name', $category->getCatName());
        $stmt->bindParam(':creation_date', $category->getCreationDate());
        $stmt->execute();
    }


    public function deleteCategory($cat_id)
    {
        $query = "DELETE FROM category WHERE cat_id = :cat_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':cat_id', $cat_id);
        $stmt->execute();
    }
}

?>