<?php

function page_has_children() {
    global $post;
    return get_children($post->ID);
}

function page_is_subpage() {
    global $post;
    if (is_page() && $post->post_parent) {
        return $post->post_parent;
    } else {
        return false;
    }
}
