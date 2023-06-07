<?php

require 'includes/init.php';

$conn = require 'includes/db.php';

$paginator = new Paginator($_GET['page'] ?? 1, 4, Article::getTotal($conn, true));

$articles = Article::getPage($conn, $paginator->limit, $paginator->offset, true);

?>
<?php require 'includes/header.php'; ?>

<?php if (empty($articles)) : ?>
    <p>No articles found.</p>
<?php else : ?>

    <ul id="index">
        <div class="row">
        <?php foreach ($articles as $article) : ?>
                
                <article class="col-lg-6">
                <div class="article-col">
                <h2 class="article-title"><a class="article-txt" href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>

                <time class="time-publishing" datetime="<?= $article['published_at'] ?>"><?php
                    $datetime = new DateTime($article['published_at']);
                    echo $datetime->format("j F, Y");
                ?></time>

                <?php if ($article['category_names']) : ?>
                    <p class="categories"> Categories:  

                        <?php foreach ($article['category_names'] as $name) : ?>
                            <?php if ($name != NULL) : ?> 
                                <?= htmlspecialchars($name); ?>
                            <?php else : ?>
                                -
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </p>
                <?php endif; ?>
                
                <p><?= htmlspecialchars($article['content']); ?></p>
                </div>
            </article>

            <!-- </li> -->
        <?php endforeach; ?>
        </div>
    </ul>

    <?php require 'includes/pagination.php'; ?>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>
