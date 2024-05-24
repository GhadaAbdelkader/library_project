<?php

require 'Validator.php';

$sub_heading = "Create";
$name = "librarians";


function displayCreateMessageScript() {
    echo '<script>
        window.onload = function() {
            var message = document.getElementById("create-message");
            if (message) {
                setTimeout(function() {
                    message.style.opacity = "0";
                    setTimeout(function() {
                        message.style.display = "none";
                    }, 1000); // Match this duration with the CSS transition duration
                }, 3000);
            }
        };
    </script>';
}
$errors = isset($_GET['errors']) ? $_GET['errors'] : [];
require('Views/librarians/create.view.php');

