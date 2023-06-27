<?php
include('dataTrainer.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Trainer</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <section class="bg-dark py-5">
        <div class="container">
            <div class="row">

                <?php foreach ($dataTrainer as $trainer) : ?>

                    <!-- .col start  -->
                    <div class="col-md-4 mb-3">
                        <div class="card">

                            <img src="<?php echo $trainer['avatar']; ?>" alt="avatar" class="card-img-top">
                            <!-- .card-img-top end -->

                            <div class="card-body">
                                <h2>
                                    <?php echo $trainer['name']; ?>
                                </h2>
                                <p><?php echo $trainer['email']; ?></p>
                            </div>
                            <!-- .card-body end -->

                            <div class="card-footer">
                                <a href="<?php echo $trainer['github']; ?>" target="_blank" class="btn btn-dark">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="<?php echo $trainer['linkedin']; ?>" target="_blank" class="btn btn-dark">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                                <a href="<?php echo $trainer['instagram']; ?>" target="_blank" class="btn btn-dark">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                            <!-- .card-footer end -->

                        </div>
                    </div>
                    <!-- .col end -->

                <?php endforeach; ?>

            </div>
        </div>
    </section>

</body>

</html>