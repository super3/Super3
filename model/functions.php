<?php
function thumbnail($span, $link, $img) {
    echo '<ul class="thumbnails">';
    echo '<li class="'.$span.'">';
    echo '<a href="'.$link.'" class="thumbnail">';
    echo '<img src="'.$img.'" alt="">';
    echo '</a>';
    echo '</li>';
    echo '</ul>';
}
?>
