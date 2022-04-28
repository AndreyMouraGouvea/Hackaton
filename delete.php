<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `tb_user` WHERE id_user = $id";
    $result = mysqli_query($con, $sql);

    function alert($msg)
    {
        echo '<script>alert("' . $msg . '")</script>';
    }

    function page($pagina)
    {
        echo '<script>window.location = "' . $pagina . '"</script>';
    }

    if ($result) {

        alert('Deletado com Sucesso!');
        page('display.php');
    } else {
        die(mysqli_error($GLOBALS['con']));
    }

    function deleteUser()
    {
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM `tb_user` WHERE id_user = $id";
        $result = mysqli_query($GLOBALS['con'], $sql);

        function alert($msg)
        {
            echo '<script>alert("' . $msg . '")</script>';
        }

        function page($pagina)
        {
            echo '<script>window.location = "' . $pagina . '"</script>';
        }

        if ($result) {

            alert('Deletado com Sucesso!');
            page('display.php');
        } else {
            die(mysqli_error($GLOBALS['con']));
        }
    }
}
