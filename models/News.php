<?php

class News
{
    public static function getNewsItemById($id) {

//        $host = 'localhost';
//        $dbname = 'mvc_site';
//        $user = 'root';
//        $password = '';
//        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM news WHERE id ='.$id);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $newsItem = $result->fetch();



        return $newsItem;
    }

    public static function getNewsList()
    {
//        $host = 'localhost';
//        $dbname = 'mvc_site';
//        $user = 'root';
//        $password = '';
//        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('SELECT id, title, date, short_content '
            .'FROM news '
            .'ORDER BY date DESC '
            .'LIMIT 10');
//        $result = $db->query('INSERT INTO news (title, date, short_content) '
//            .'VALUES ("Haiti to reform army after 20 years without","2017-07-11","Haitis government has launched a campaign to re-establish its army, dissolved more than 20 years ago.")');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }
        return $newsList;
    }
}