<?php
include_once './init.php';

if(!isset($_SESSION['auth'])) {
    redirect('login.php');
}

?>

<?php include './header.php' ?>
<?php include './navbar.php' ?>

<div class="container">
    <div class="">
        <div class="mt-5 text-center">
         <h1>Welcome! <?php echo $_SESSION['auth']['name']; ?></h1> 
         </div>
    </div>
</div>



<?php include './footer.php' ?>