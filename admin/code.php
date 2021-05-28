<?php

$connection=mysqli_connect("localhost","firesafety_mbl","Danpali0","firesafety_mbl");
if(isset($_POST['post_delete_btn']))
{
    $id = $_POST['delete_post_ID'];

    $query = "DELETE FROM gallary WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: manage-gallary.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: manage-gallary.php'); 
    }    
}

if(isset($_POST['slider_delete_btn']))
{
    $id = $_POST['delete_slider_ID'];

    $query = "DELETE FROM slider WHERE Id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: display-slider.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: display-slider.php'); 
    }    
}

if(isset($_POST['client_delete_btn']))
{
    $id = $_POST['delete_client_ID'];

    $query = "DELETE FROM client WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: client.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: client.php'); 
    }    
}
?>