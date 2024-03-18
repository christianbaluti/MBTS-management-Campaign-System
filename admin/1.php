<?php
    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'mbts');

    // Fetch the list of users from the database
    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);

    // Display the list of users
    echo "<table>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td><a href='#' onclick=showUserDetails(" . $row['id'] . ")>" . $row['email'] . "</a></td></tr>";
    }
    echo "</table>";
?>


<script>
    function showUserDetails(userId) {
        $.ajax({
            url: 'get_user_details.php',
            type: 'POST',
            data: { user_id: userId },
            success: function(response) {
                $('#user-details').html(response);
            }
        });
    }
</script>
