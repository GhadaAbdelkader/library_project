<?php

class displayMessages
{

   public function createMessage() {
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
    public function editMessage() {
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
    public function deleteMessage() {
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

}