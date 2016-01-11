<?php
function page_index() {
    set('title', 'Volba seminářů');
    set('bookmarks', model_get_all());
    return html('main.html.php');
}
?>

