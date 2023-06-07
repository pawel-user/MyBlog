<?php $base = strtok($_SERVER["REQUEST_URI"], '?'); ?>

<nav class="pagination">
    <div class="pagination-field">
           <?php if ($paginator->previous): ?>
                <a class="btn btn-outline-light button-paginator" role="button" href="<?= $base; ?>?page=<?= $paginator->previous; ?>"><i class="fa-solid fa-square-caret-left icon-left-mark"></i>Previous</a>
            <?php else: ?>
                <span class="button-paginator" role="button">Previous</span>
            <?php endif; ?>
            <?php if ($paginator->next): ?>
                <a class="btn btn-outline-light button-paginator" role="button" href="<?= $base; ?>?page=<?= $paginator->next; ?>">Next<i class="fa-solid fa-square-caret-right icon-right-mark"></i></a>
            <?php else: ?>
                <span class="button-paginator" role="button">Next</span>
            <?php endif; ?>
    </div>
</nav>
