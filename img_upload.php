<?php include 'view/header.php'; ?>
<link href="main.css" rel="stylesheet" type="text/css"/>
<main>
    <h1>Upload Image</h1>
    <aside>

    </aside>
    <section>
        <!DOCTYPE html>
        <html>
            <body>

                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>

            </body>
        </html>
    </section>
</main>
<?php include 'view/footer.php'; ?>