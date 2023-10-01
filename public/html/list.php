<div class="works-list">
    <?php 
    foreach ($works as $item) {
        ?>
        <div class="works-list-item">
            <a href="<?= getFullServerPath() . "?id=" . $item["id"] ?>">
            <h2><?= $item["title"] ?></h2>
            <p class="works-list-item-desc"><?= $item["author"] . " | " . $item["publication_year"] ?></p>
            <p><?= substr($item["content"], 0, 50) . "..." ?></p>
            </a>
        </div>
        <?php
    }
    ?>
</div>