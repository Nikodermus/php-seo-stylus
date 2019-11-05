<?php
$title = 'Title';
$description = 'Description';
$keywords = 'keywords, divided, by, commas';

require '../pages/base/head.php';
require '../pages/lib/nav.php';
?>

<main>
    <h1>You are inside demo!</h1>
    <section class="demo">
        <article class="bg-retina">
            <input type="text" placeholder="This is the plaholder">
            <button>I'm enabled</button>
            <button disabled>I'm not</button>
        </article>
        <article>
            <div class="square">
                <div class="square__content">This is a responsive square</div>
            </div>
        </article>
    </section>
</main>

<?php
require '../pages/lib/footer.php';
?>
