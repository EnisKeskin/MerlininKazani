<?php
function sidebarlist()
{
    global $db;
    global $list_num;
    global $list;
    $SQL = "SELECT *
            FROM list
            ORDER BY list_id desc";
    $rows = mysqli_query($db, $SQL);
    $list_num = mysqli_num_rows($rows);
    $i = 0;
    while ($row = mysqli_fetch_assoc($rows)) {
        extract($row);
        $list[$i]["list_title"] = $list_title;
        $list[$i]["list_link"] = $list_link;
        $i++;
    }
}
