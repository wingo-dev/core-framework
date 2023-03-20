<?php require APPROOT . '/views/inc/header.php'; ?>
<div style="text-align:center;">
    <h1><?php echo $data['title']; ?></h1>
    <p>This is custom php framework. You can implement your project with this framework.<br>
        You need to change .htaccess when you host on your server or use on your pc.<br>
        Meaning is that you need to chagne the path in the file. <br>
        The path is "<code>RewriteBase /phpmvc/public/</code>";
    </p>
    <h2>Thank you.</h2>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>