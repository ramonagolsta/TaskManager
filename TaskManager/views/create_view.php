<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container my-5">
    <h2>New Task</h2>

    <?php
    if (!empty($errorMessage)){
        echo "
             <div class='alert alert-warning alert-dismissible fade show' role='alert'>
             <strong>$errorMessage</strong>
             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
             </div>
             ";
    }

    if (!empty($successMessage)) {
        echo "
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>$successMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
    ";
    }
    ?>

    <form method="POST">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Task Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Task Description</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="description" value="<?php echo $description; ?>">
            </div>
        </div>

        <?php
        if (!empty($successMessage)){
            echo "
              <div class='row mb-3'>
              <div class='offset-sm-3 col-sm-6'>
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
             <strong>$successMessage</strong>
             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
             </div>
             </div>
             </div>
             ";
        }
        ?>

        <div class="row mb-3">
            <div class="offset-sm-2 col-sm-4 d-grid">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            <div class="col-sm-4 d-grid">
                <a class="btn btn-outline-primary" href="/index.php" role="button">Go back</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
