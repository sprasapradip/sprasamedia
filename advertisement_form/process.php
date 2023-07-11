<?php

// Make sure the user uploaded a file
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
  exit("Please select an image to upload.");
}

// Make sure the uploaded file is an image
$allowed_types = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);
$detected_type = exif_imagetype($_FILES["image"]["tmp_name"]);

if (!in_array($detected_type, $allowed_types)) {
  exit("Invalid file type. Only JPEG, PNG, and GIF images are supported.");
}

// Define the paths to the original and processed images
$original_path = $_FILES["image"]["tmp_name"];
$processed_path = "processed/" . uniqid() . ".png";

// Run the remove_background.py script to remove the background from the image
$command = "python remove_background.py $original_path $processed_path";
$output = shell_exec($command);

// Return the URL of the processed image
echo $processed_path;
