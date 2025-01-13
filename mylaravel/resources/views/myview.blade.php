<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
</head>
<body>
    <div class="container mt-4">
        {{-- ฟอร์ม --}}
        <form action="{{ url('/mycontroller') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="myinput" class="form-label">ใส่ตัวเลข:</label>
                <input type="number" class="form-control" id="myinput" name="myinput" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        {{-- แสดงผลสูตรคูณ --}}
        @isset($myinput)
            <h2 class="mt-4">ผลลัพธ์สูตรคูณของ {{ $myinput }}</h2>
            <ul class="list-group">
                @for ($i = 1; $i <= 12; $i++)
                    <li class="list-group-item">
                        {{ $i }} x {{ $myinput }} = {{ $i * $myinput }}
                    </li>
                @endfor
            </ul>
        @endisset
    </div>
</body>
</html>
