<?php

// Check if the images directory exists
if (!is_dir('images')) {
    die("Images directory not found.");
}

// Get all image files in the images directory
$images = glob('images/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// If no images are found, display a message
if (empty($images)) {
    echo "<p>No images found.</p>";
} else {
    // Randomly select an image
    $randomImage = $images[array_rand($images)];
    
    // Display the image
    echo '<img src="' . htmlspecialchars($randomImage) . '" alt="Random Image">';
}
?>
