<?php

namespace Repository {

    use model\Comment;
    use PDO;
    use PDOException;

    interface CommentRepository
    {
        function insert(Comment $comment): Comment;

        function findById(int $id): ?Comment;

        function findAll(): array;
    }

    class CommentRepoImpl implements CommentRepository
    {
        private PDO $connection;

        public function __construct(PDO $connection)
        {
            $this->connection = $connection;
        }

        public function insert(Comment $comment): Comment
        {
            try {
                $sql = "INSERT INTO comments(email, comment) VALUES (?, ?)";
                $statement = $this->connection->prepare($sql);
                $statement->execute([$comment->getEmail(), $comment->getComment()]);

                $id = $this->connection->lastInsertId();
                $comment->setId($id);

                return $comment;
            } catch (PDOException $e) {
                throw new \Exception("Error inserting comment: " . $e->getMessage());
            }
        }

        public function findById(int $id): ?Comment
        {
            $sql = "SELECT * FROM comments WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);
            $row = $statement->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return new Comment($row['id'], $row['email'], $row['comment']);
            }
            return null;
        }

        public function findAll(): array
        {
            $sql = "SELECT * FROM comments";
            $statement = $this->connection->query($sql);
            $comments = [];

            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $comments[] = new Comment($row['id'], $row['email'], $row['comment']);
            }

            return $comments;
        }
    }
}
