<?php

require_once "../Helper/Input.php";
require_once "../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "Menghapus To Do" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");
    if (trim($pilihan) === "x") {
        echo "Berhasil batal" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Berhasil menghapus nomor pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus nomor pilihan" . PHP_EOL;
        }
    }
}
