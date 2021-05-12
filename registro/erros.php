<?php
if(isset($_SESSION['campos_branco'])): ?>
    <span>Verifique os campos!</span>
    <script src="verification.js"></script>
    <?php
        endif;
        unset($_SESSION['campos_branco']);
?>

<?php
    if(isset($_SESSION['senhas'])): ?>
    <span>Verifique as senhas!</span>
    <script src="verificationpass.js"></script>
    <?php
        endif;
        unset($_SESSION['senhas']);
?>

<?php
    if(isset($_SESSION['registered_user'])): ?>
    <span>Usuario já Registrado</span>
    <script src="verificationpass.js"></script>
    <?php
        endif;
        unset($_SESSION['registered_user']);
?>

<?php
    if(isset($_SESSION['registered_email'])): ?>
    <span>E-Mail já Registrado</span>
    <script src="verificationpass.js"></script>
    <?php
        endif;
        unset($_SESSION['registered_email']);
?>