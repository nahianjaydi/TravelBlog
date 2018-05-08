<?php
class Blogpost
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
  }

  public function createPost($data)
	{
		$this->db->query("INSERT INTO blog_posts (title, city, story, author_id, author)
		VALUES (:title, :city, :story, :author_id, :author)
		");
		
		$this->db->bind(":title", $data["title"]);
		$this->db->bind(":city", $data["city"]);
		$this->db->bind(":story", $data["story"]);
		$this->db->bind(":author_id", $data["author_id"]);
    $this->db->bind(":author", $data["author"]);

		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}

	}

	public function addImages($data)
	{
		$this->db->query("INSERT INTO images (post_id, dir_name)
		VALUES (:post_id, :dir_name)
		");
		
		$this->db->bind(":post_id", $data["post_id"]);
		$this->db->bind(":dir_name", $data["dir_name"]);

		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}

	}

	public function deletePost($id) {
		$this->db->query("DELETE FROM images WHERE post_id = $id");

		if ($this->db->execute()) {
			$this->db->query("DELETE FROM blog_posts WHERE id = $id LIMIT 1");

			if($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		} else {
			return false;
		}
	}

	public function getAllPosts()
	{
		$this->db->query("SELECT blog_posts.*, images.dir_name 
											FROM blog_posts 
											INNER JOIN images ON blog_posts.id = images.post_id 
											GROUP BY images.post_id 
											ORDER BY blog_posts.date DESC
										");
			// Assign Result Set
		$results = $this->db->resultSet();

		return $results;
	}

	public function getPost($id)
	{
		$this->db->query("SELECT * 
						FROM blog_posts 
						WHERE id = :id ");

		$this->db->bind(":id", $id);
		$post = $this->db->single();

		return $post;
	}

	public function getPostImages($id)
	{
		$this->db->query("SELECT * 
						FROM images 
						WHERE post_id = :id ");

		$this->db->bind(":id", $id);
		$images = $this->db->resultSet();

		return $images;
	}

	public function getAllPostsByUser($id)
	{
		$this->db->query("SELECT * 
						FROM blog_posts 
						WHERE author_id = :id ");

		$this->db->bind(":id", $id);
		$posts = $this->db->resultSet();

		return $posts;
	}
}
?>