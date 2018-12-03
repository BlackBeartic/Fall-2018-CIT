
<?php include('views/elements/header.php');?>
<?php

CREATE TABLE IF NOT EXISTS `comments` (
`commentID` int(11) NOT NULL AUTO_INCREMENT,
`uID` int(11) NOT NULL,
`commentText` longtext NOT NULL,
`date` datetime NOT NULL,
`postID` int(11) NOT NULL,
PRIMARY KEY (`commentID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;



$sql = 'INSERT INTO comments (comment, commentText, date, commentID, postID, uID) VALUES (?, ?, ?, ?, ?, 1)'
?>




<?php include('views/elements/footer.php');?>
