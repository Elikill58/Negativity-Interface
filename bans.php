<?php
require_once './include/page.php';

$page = new Page("ban");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Negativity - Bans</title>
    <link href="./include/css/main.css" rel="stylesheet">
    <link rel="icon" href="./include/img/favicon.png">
</head>
<body>
	<div class="page-wrapper">
        <?php
            $page->show_header();
        ?>
		<div class="content-wrapper">
			<div class="container">
                <table>
                <?php
                    $rows = $page->run_query();
                    if(count($rows) == 0) {
                        $page->print_no_row();
                    } else {
                        foreach ($rows as $row) {
                            $player_name = $page->get_name($row["id"]);
                            if ($player_name === null)
                                continue;
                            $page->print_row($row);
                        }
                        $page->show_page_mover();
                    }

                ?>
                </table>
            </div>
            <?php $page->show_footer(); ?>
        </div>
    </div>
</body>
</html>