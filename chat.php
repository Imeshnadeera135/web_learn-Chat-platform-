<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
</head>

<body class="bg-info">
    <div class="container-fluid">
        <div class="row">

            <div class="offset-0 text-center mt-5 mb-3 ">
                <h2>My Chat</h2>
            </div>

            <div class="offset-sm-1 col-sm-10 offset-md-2 col-md-8 offset-lg-4 col-lg-4 mb-2">
                <select name="" id="" class="form-select">
                    <option value="1">User 01</option>
                    <option value="2">User 02</option>
                    <option value="3">User 03</option>
                    <option value="4">User 04</option>
                    <option value="5">User 05</option>
                </select>
            </div>

            <div class="offset-sm-1 col-sm-10 offset-md-2 col-md-8 offset-lg-4 col-lg-4 bg-white rounded" style="height: 520px;">
                <div class="row">
                    <!-- msg box -->
                    <div class="offset-1 col-10 border border-1 border-danger rounded" style="height: 500px; margin-top:10px;">
                        <!-- received-->
                        <div class="row">
                            <div class="col-6 bg-success rounded mt-1 ms-1">
                                <div class="row">
                                    <div class="col-12 ">
                                        <label class="form-label fw-bold fs-6 fst-italic">Lara</label>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-white">Hello!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- received-->
                        <!-- sent-->

                        <div class="row d-flex flex-column align-content-end justify-content-end">
                            <div class="col-6 bg-primary rounded mt-1 me-1">
                                <div class="row">
                                    <div class="col12">
                                        <div class="from-label fw-bold fs-6 fst-italic">Me</div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-white">Hello there!!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- msg box-->
                </div>
            </div>

            <div class="offset-lg-4 col-12 col-lg-4 mt-3">
                <div class="row">
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="type">
                    </div>
                    <div class="col-2 d-grid">
                        <button class="btn btn-danger fw-bold fst-italic text-uppercase">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>