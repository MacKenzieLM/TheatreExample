CREATE TABLE IF NOT EXISTS commentsforward (
    commentid INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username TEXT NOT NULL,
    comment TEXT NOT NULL,
    originalcommentid INT NOT NULL,
    datetime DATETIME NOT NULL,
    reply_of INT NOT NULL,
    CONSTRAINT fk_comments_post_id FOREIGN KEY (originalcommentid) REFERENCES posts(id)
)
