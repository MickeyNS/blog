<?php
include 'template/header.php';
?>
<body>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            <?php
            include 'content/posts.php';
            ?>
            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

<?php
include 'template/sidebar.php';
?>
    </div><!-- /.row -->

</main><!-- /.container -->

<!-- <?php
include 'template/footer.php';
?> -->
</body>
</html>