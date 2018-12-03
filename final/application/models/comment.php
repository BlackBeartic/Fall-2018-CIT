<?php
class Comment extends Model{

  public function setComment($data) {

        if ($isset ($_POST['commentSubmit'])) {
          $uid = $_POST['uID'];
          $date = $_POST['date'];
          $comment = $_POST['commentText'];

          $sql = "INSERT INTO comments (uID, date, commentText) VALUES ('$uid', '$date', '$message')";
          $this->db->execute($sql,$data);
        }
    }
    public function getComment($data) {
      $sql = "SELECT * FROM comments"
      $results = $this->db->execute($sql);
      while ($row = $results->fetch_row()) {
      echo $row['commentText'];
      echo $row['uID'];
      echo $row['commentText'];
    }
  }
}
