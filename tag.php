<?php
//Redireciona para a página blog passando o slug (tag) como parâmetro.

$page_object = get_queried_object();

$slug = $page_object->slug;
$link_to_page_blog =  get_permalink(get_page_by_path('blog'));

$redirect_url = $link_to_page_blog . '?topico=' . $slug;

header('Location:' . $redirect_url);
