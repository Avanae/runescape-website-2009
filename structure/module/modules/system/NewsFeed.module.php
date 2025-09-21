<?php

    class NewsFeed extends Module {
        const NEWS_COUNT = 3;
        const UNCOLLAPSED_COUNT = 3;

        public function load() {
            $count = 1;
            $this->template = TemplateManager::load("NewsFeed");
            
            $threads = $this->database->query("SELECT * FROM " . FORUM_DB . ".threads WHERE board_id=1 OR board_id=2 ORDER BY date DESC LIMIT " . self::NEWS_COUNT . "");
        
            while ($thread = $threads->fetch(PDO::FETCH_ASSOC)) {
                $threadLink = "/community/thread/index.php?board_id=" . $thread['board_id'] . "&id=" . $thread['thread_id'] . "&page=1";
                $firstPost = $this->database->query("SELECT * FROM " . FORUM_DB . ".posts WHERE thread_id=" . $thread['thread_id'] . " AND first_post=1 LIMIT 1");
            
                if ($firstPost->rowCount() == 1) {
                    $firstPost = $firstPost->fetch(PDO::FETCH_ASSOC);
                        
                    $this->template->insert("title", $thread['title']);
                    $this->template->insert("date", $thread['date']);
                    $this->template->insert("post", $firstPost['content']);
                    $this->template->insert("collapsed", $count++ > self::UNCOLLAPSED_COUNT ? "collapsed" : "");
                    $this->template->insert("threadLink", $threadLink);
                    $this->display();
                }
            }
        }
    }
?>