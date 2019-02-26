<?php include 'view/header.php'; ?>
<link href="main.css" rel="stylesheet" type="text/css"/>
<main>
    <h1>Image Upload</h1>
    <section>
        <html>
            <body>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select Image to Upload
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
            </body> 
        </html>
    </section>
</main>
<?php include 'view/footer.php'; ?>