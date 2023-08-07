<?php 
$title = "leaderbaord";
include 'inc/header.php';
include 'inc/navbar.php';
?>
<div class="d-flex p-3 mb-2 bg-light text-dark">
    <h2>Leaderboard</h2>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Username</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Read the scores.csv file and store the data in an array
            $scores = [];
            if (($handle = fopen('src/scores.csv', 'r')) !== false) {
                while (($data = fgetcsv($handle)) !== false) {
                    $scores[] = array('username' => $data[0], 'score' => $data[1]);
                }
                fclose($handle);
            }

            // Sort the scores array in descending order based on the score
            usort($scores, function ($a, $b) {
                return $b['score'] - $a['score'];
            });

            // Display the leaderboard
            $rank = 1;
            foreach ($scores as $scoreData) {
                echo '<tr>';
                echo '<td>' . $rank . '</td>';
                echo '<td>' . htmlspecialchars($scoreData['username']) . '</td>';
                echo '<td>' . $scoreData['score'] . '</td>';
                echo '</tr>';
                $rank++;
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include "inc/footer.php";  
?>