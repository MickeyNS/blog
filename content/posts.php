
<?php
$sql = "SELECT Id, Title, Body, Author, Created_at FROM posts ORDER BY Created_at DESC";
                $statement = $connection->prepare($sql);
                // izvrsavamo upit
                $statement->execute();
                // zelimo da se rezultat vrati kao asocijativni niz.
                // ukoliko izostavimo ovu liniju, vratice nam se obican, numerisan niz
                $statement->setFetchMode(PDO::FETCH_ASSOC);
                // punimo promenjivu sa rezultatom upita
                $posts = $statement->fetchAll();
                // koristite var_dump kada god treba da proverite sadrzaj neke promenjive
                    // echo '<pre>';
                    // var_dump($posts);
                    // echo '</pre>';
?>

           <?php
                foreach ($posts as $post) {
            ?>
             <div class="blog-post">

               <h2 class="blog-post-title">
               	<a href="/content/single-post.php?post_id=<?php echo($post['Id']) ?>"><?php echo($post['Title']) ?></a></h2>
                <p class="blog-post-meta"><?php echo($post['Created_at']) ?> by <a href="#"><?php echo($post['Author']) ?></a></p>

               <p><?php echo($post['Body']) ?></p>
  			</div><!-- /.blog-post
 -->
 
            <?php
                }
            ?> 
<?php include '/home/academy/vivifyacademy-basic-blog-boilerplate/template/footer.php'; ?>