DROP DATABASE IF EXISTS comments_db;
CREATE DATABASE comments_db;
USE comments_db;

CREATE TABLE comments(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(90),
  mail VARCHAR(90),
  user_comment VARCHAR(1000)
);

GRANT INSERT
ON comments_db.comments
TO comment_user
IDENTIFIED BY 'pa55word';
