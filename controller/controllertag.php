<?php
require_once '../model/tagDAO.php';

function indexTagAction(){
    $db = Database::getInstance()->getConnection();

    $tagDAO = new TagDAO($db);
    $tags = $tagDAO->getTags();
    require_once 'view/taglist.php';
}

function createTagAction(){
    require_once 'view/create_tag.php';
}

function storeTagAction(){
    $newTag = new Tag($_POST['tag_name']);
    $db = Database::getInstance()->getConnection();
    $tagDAO = new TagDAO($db);
    $tagDAO->addTag($newTag);
    header('location:index.php?action=list_tags');
    exit();
}

function editTagAction(){
    $tag_name = $_GET['tag_name'];
    $db = Database::getInstance()->getConnection();
    $tagDAO = new TagDAO($db);
    $tag = $tagDAO->getTagByName($tag_name);
    require_once 'view/edit_tag.php';
}

function updateTagAction(){
    $updatedTag = new Tag($_POST['tag_name']);
    $db = Database::getInstance()->getConnection();
    $tagDAO = new TagDAO($db);
    $tagDAO->updateTag($updatedTag);
    header('location:index.php?action=list_tags');
    exit();
}

function deleteTagAction(){
    $tag_name = $_GET['tag_name'];
    $db = Database::getInstance()->getConnection();
    $tagDAO = new TagDAO($db);
    $tag = $tagDAO->getTagByName($tag_name);
    require_once 'view/delete_tag.php';
}

function destroyTagAction(){
    $tag_name = $_GET['tag_name'];
    $db = Database::getInstance()->getConnection();
    $tagDAO = new TagDAO($db);
    $tagDAO->deleteTag($tag_name);
    header('location:index.php?action=list_tags');
    exit();
}
?>
