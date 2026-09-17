<?php
    /* Load projects.json file. */
    $projects_json = file_get_contents('../data/projects.json');
    if ($projects_json === false) {
        http_response_code(500);
        die('Server file processing error.');
    }

    /* Decode file into associative array. */
    $projects_data = json_decode($projects_json, true);
    if ($projects_data === null) {
        http_response_code(500);
        die('Server JSON processing error.');
    }

    /* Sort array by project start date. */
    usort($projects_data, function($a, $b) {
        if ($a['date_started'] == $b['date_started']) return 0;
        return (strtotime($a['date_started']) > strtotime($b['date_started'])) ? 1 : -1;
    });
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Projects</title>
        <link rel="stylesheet" href="/public/main.css">
        <link rel="stylesheet" href="/public/projects.css">
    </head>

    <body>
        <h1>Projects</h1>

        <main>
            <div id="timeline-bar" style="height: calc(<?php echo 20 * sizeof($projects_data) ?>vh)"></div>

            <?php
                foreach ($projects_data as $project) {
                    echo '
                    <article id="' . $project["name"] . '">
                        <div class="timeline-dot"></div>
                        <h2>' . substr($project['date_started'], 0, strpos($project['date_started'], '-')) . '</h2>
                        <a class="project-info" href="' . $project["page_name"] . '">
                            <h3>' . $project["name"] . '</h3>
                            <p>' . $project["category"] . '</p>
                            <p>' . $project["description"] . '</p>
                            <p>Status: ' . $project["status"] . '</p>
                        </a>
                    </article>
                    ';
                }
            ?>
        </main>
    </body>
</html>