<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dynamic Tech Academy - Profile</title>
    <?php include_once("front/styles.php")?>
</head>

<body>
    <?php include_once("front/navigator.php")?>
    <?php include_once("front/sidebar.php")?>
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#category_one">Category 1</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#category_two">Category 2</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" role="tabpanel" id="category_one">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="card-body"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/c-6AaS7997w" width="100%" height="350"></iframe></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="card-body"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/c-6AaS7997w" width="100%" height="350"></iframe></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="card-body"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/c-6AaS7997w" width="100%" height="350"></iframe></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" role="tabpanel" id="category_two">
                                        <p>Content for tab 2.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include_once("front/scripts.php")?>
</html>