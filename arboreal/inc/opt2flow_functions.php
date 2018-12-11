<?php

if (!function_exists('getAllCategories')) {

    function getAllCategories($taxonomy = 'product_cat', $orderby = 'name', $show_count = 0, $pad_counts = 0, $hierarchical = 1, $title = '', $empty = 0) {

        $args = array(
            'taxonomy' => $taxonomy,
            'orderby' => $orderby,
            'show_count' => $show_count,
            'pad_counts' => $pad_counts,
            'hierarchical' => $hierarchical,
            'title_li' => $title,
            'hide_empty' => $empty
        );
        return get_categories($args);
    }

}

if (!function_exists('getGaleriaItens')) {

    function getGaleriaItens() {
        $args = array(
            'post_type' => 'galeria',
            'posts_per_page' => -1,
            'orderby' => 'publish_date',
            'order' => 'DESC'
        );
        $loop = new WP_Query($args);
        return $loop->posts;
    }

}

if (!function_exists('getEquipe')) {

    function getEquipe() {
        $args = array(
            'post_type' => 'funcionarios',
            'posts_per_page' => -1,
            'orderby' => 'publish_date',
            'order' => 'ASC'
        );
        $loop = new WP_Query($args);
        return $loop->posts;
    }

}

if (!function_exists('instagram_api_curl_connect')) {

    function instagram_api_curl_connect($api_url) {
        $connection_c = curl_init(); // initializing
        curl_setopt($connection_c, CURLOPT_URL, $api_url); // API URL to connect
        curl_setopt($connection_c, CURLOPT_RETURNTRANSFER, 1); // return the result, do not print
        curl_setopt($connection_c, CURLOPT_TIMEOUT, 20);
        $json_return = curl_exec($connection_c); // connect and get json data
        curl_close($connection_c); // close connection
        return json_decode($json_return); // decode and return
    }

}