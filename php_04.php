<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mb-4">ตรวจสอบเลขคู่และเลขคี่</h1>
            
            <!-- Input Form -->
            <form method="post" class="mb-4">
                <div class="row mb-3">
                    <div class="col">
                        <label for="start" class="form-label">Start Number</label>
                        <input type="number" class="form-control" id="start" name="start" required>
                    </div>
                    <div class="col">
                        <label for="end" class="form-label">End Number</label>
                        <input type="number" class="form-control" id="end" name="end" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Retrieve values from the form
                $start = intval($_POST['start']);
                $end = intval($_POST['end']);

                if ($start > $end) {
                    echo "<div class='alert alert-danger'>Start number must be less than or equal to the end number.</div>";
                } else {
                    echo "<h2>Results:</h2>";
                    echo "<div class='row fw-bold border-bottom pb-2 mb-2'>
                            <div class='col-6 text-end'>Number</div>
                            <div class='col-6 text-start'>Type</div>
                          </div>";

                    // Generate and display results
                    for ($i = $start; $i <= $end; $i++) {
                        $result = ($i % 2 == 0) ? "Even" : "Odd";
                        echo "<div class='row border-bottom py-2'>
                                <div class='col-6 text-end'>$i</div>
                                <div class='col-6 text-start'>$result</div>
                              </div>";
                    }
                }
            }
            ?>
        </div>
    </body>
</html>
