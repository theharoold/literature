<div class="work">
    <?php 
    if ($work) { ?>
        <h2><?= $work["title"] ?></h2>
        <p class="work-author"><?= $work["author"] . " | " . $work["publication_year"] ?></p>
        <p class="work-content"><?= $work["content"] ?></p> 
    <?php
    } else {
        ?> 
        <h2>Story not found.</h2>
        <p><a href="https://literature.veljkoloncarevic.in.rs">Return to the list of stories.</a></p>
        <?php
    }
    ?>
</div>