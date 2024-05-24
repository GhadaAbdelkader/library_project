<?php


$sub_heading = "librarians";
$name = "librarians";

$admins = getAllRecords('librarians');


function displayEditMessageScript() {
    echo '<script>
        window.onload = function() {
            var message = document.getElementById("edit-message");
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
function displayDeleteMessageScript() {
    echo '<script>
        window.onload = function() {
            var message = document.getElementById("delete-message");
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

require('Views/librarians/Show.view.php');