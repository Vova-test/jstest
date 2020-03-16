<?php
require_once("config.php"); 

if (!empty($_POST)) {
    
    if (!empty($_POST['task'] && $_POST['typeClick'] === 'add')) {
        $stmt = $pdo->prepare("INSERT INTO tasks (is_checked, title, created_at, updated_at)
                                            VALUES (:is_checked, :title, now(), now())");
        $stmt->execute(
            [
            "is_checked" => 0, 
            "title" => $_POST['task']
            ]
        );            
        $idLast = $pdo->lastInsertId();

    } elseif (!empty($_POST['taskId']) && $_POST['typeClick'] === 'check') {
        $stmt = $pdo->prepare("UPDATE tasks SET is_checked = 1 WHERE id = :id");
        $stmt->execute(["id" => $_POST['taskId']]);

    } elseif (!empty($_POST['taskId']) && $_POST['typeClick'] === 'del') {
        $stmt = $pdo->prepare("UPDATE tasks SET deleted_at = now() WHERE id = :id");
        $stmt->execute(["id" => $_POST['taskId']]);

    } else {
        //require_once(ROOT_PATH."/input_task_page.php");   
        $ajaxAnswer=['success' => false];
        echo json_encode($ajaxAnswer);
        return;
    }
    
    //header ('Location: .');
    $ajaxAnswer=['success' => true];
    echo json_encode($ajaxAnswer);
    return;
}

//$page = file_get_contents(ROOT_PATH."/main_page.php");
$stmt = $pdo->prepare(" SELECT 
                            id,
                            title, 
                            is_checked, 
                            deleted_at 
                        FROM 
                            tasks 
                        WHERE  deleted_at is null
                    ");
$stmt->execute(["dummy" => 1]);
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($tasks)) {
    $tasks[] = [
        'id' => 0,
        'title' => 'Do something...',
        'is_checked' => 0,
        'deleted_at' => 0
    ];
}
//echo $page;
//var_dump(ROOT_PATH."/ajax_page_jquery.php");die();
require_once(ROOT_PATH."/ajax_page_jquery.php");
