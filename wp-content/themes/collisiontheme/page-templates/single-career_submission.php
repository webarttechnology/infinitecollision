<?php

/*
Template Name: Career Submission Page
*/

get_header();

// $args = array(
//     'post_type'      => 'career_submission',
//     'posts_per_page' => -1,
//     'meta_query'     => array(
//         array(
//             'key'   => '_wpcf7_form_id',
//             'value' => 'f50744d', // Change this to your desired form ID
//         ),
//     ),
// );

// $query = new WP_Query($args);

// if ($query->have_posts()) :
//     while ($query->have_posts()) : $query->the_post();
//         $form_data = unserialize(get_the_content());

//         // Display or manipulate the form data as needed
//         echo '<h2>' . get_the_title() . '</h2>';
//         echo '<pre>' . print_r($form_data, true) . '</pre>';

//     endwhile;
// endif;



// Fetch data from Advanced CFDB7 database
function fetch_advanced_cfdb7_data() {
    global $wpdb;

    // Change 'your_form_name' to the name of your Contact Form 7 form
    $form_name = 'Career Form';
    
    $table_name = $wpdb->prefix . 'cfdb7';

    $query = $wpdb->prepare(
        "SELECT * FROM $table_name WHERE form_name = %s",
        $form_name
    );

    $results = $wpdb->get_results($query, ARRAY_A);

    return $results;
}

// Display form data
function display_advanced_cfdb7_data() {
    $data = fetch_advanced_cfdb7_data();

    if ($data) {
        foreach ($data as $entry) {
            $form_value = maybe_unserialize($entry['form_value']);

            if ($form_value !== false) {
                // Display or manipulate the form data as needed
                echo '<h2>Form Entry ID: ' . esc_html($entry['id']) . '</h2>';
                echo '<pre>' . print_r($form_value, true) . '</pre>';
            } else {
                echo '<p>Error: Unable to unserialize form data for entry ID ' . esc_html($entry['id']) . '</p>';
            }
        }
    } else {
        echo 'No form submissions found.';
    }
}

// Output form data on a WordPress page or template
display_advanced_cfdb7_data();


get_footer();
?>
