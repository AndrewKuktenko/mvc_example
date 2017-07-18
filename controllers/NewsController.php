<?php

include_once ROOT.'/models/News.php';

class NewsController
{
    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList();

        require_once(ROOT.'/views/news/index.php');

        return true;
    }

    public function actionView($id)
    {

        if($id)
        {
            $newsItem = News::getNewsItemById($id);
//            echo '<pre>';
//            echo print_r($newsItem['title']);
//            echo '<pre>';
            require_once(ROOT.'/views/news/news.php');
        }

        return true;

    }
}