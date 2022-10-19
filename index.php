<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload | Download CSV</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <main>
        <section>
            
            <div class="flex f-column alig-center">
                <img src="/assets/images/gamer.png" alt="Logo Gamer Xp Arena">
                <h1>Upload | Download CSV Files</h1>
            </div>

            <hr>
            
            <div class="flex f-column alig-center">
                <h2>Upload File .csv</h2>
                <form action="/assets/controllers/importController.php" method="POST" enctype="multipart/form-data">
                    <div class="mt-1">
                        <label for="formFileLg" class="form-label">CSV File to Database</label>
                        <input class="form-control form-control-lg" id="formFileLg" name="file" type="file">
                    </div>
                    <button class="btn btn-primary mt-2" type="submit">Import</button>
                </form>
            </div>

            <hr>

            <div class="flex f-column alig-center">
                <h2>Download File .csv</h2>
                <form action="/assets/controllers/exportController.php" method="POST">
                    <div class="mt-2 flex f-row">
                        <label for="initDate">Initial Date</label>
                        <input class="form-control" type="date" id="initDate" name="initDate">
                    </div>
                    <div class="mt-2 flex f-row">
                        <label for="endDate">Final Date</label>
                        <input class="form-control" type="date" id="endDate" name="endDate">
                    </div>
                    <button class="btn btn-primary mt-2" type="submit">Export .csv</button>
                </form>
            </div>

        </section>
    </main>
    <?php
        $dataChoice = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        echo $dataChoice;
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="/assets/js/scripts.js"></script>

</body>
</html>