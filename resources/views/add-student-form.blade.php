<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Student Form</title>
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <form action="insert-student" method="post" enctype="multipart/form-data">
            @csrf
            <p>
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" placeholder="Enter name" class="form-control" required>
            </p>

            <p>
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" placeholder="Enter email" class="form-control" required>
            </p>

            <p>
                <label for="pass" class="form-label">Password:</label>
                <input type="password" name="pass" placeholder="Enter password" class="form-control" required>
            </p>


            <p>
                <label for="contact" class="form-label">Contact:</label>
                <input type="number" name="contact" placeholder="Enter contact details" class="form-control" required>
            </p>

            <p>
                <label class="form-check-label">Gender:</label>
                <input type="radio" name="gender" id="M" value="M" class="form-check-input" required>
                <label for="M" class="form-check-label"> Male</label>
                <input type="radio" name="gender" id="F" value="F" class="form-check-input" required>
                <label for="F" class="form-check-label"> Female</label>
            </p>

            <p>
                <label for="city" class="form-label">City:</label>
                <select name="city" id="city" class="form-select" required>
                    <option value="">--Choose--</option>
                    <option value="del">Delhi</option>
                    <option value="kol">Kolkata</option>
                    <option value="asn">Asansol</option>
                </select>
            </p>


            <p>
                <label for="" class="form-check-label">Language:</label>
                <input type="checkbox" name="lang[]" id="eng" value="eng" class="form-check-inputs">
                <label for="eng" class="form-check-label"> English</label>
                <input type="checkbox" name="lang[]" id="beng" value="beng" class="form-check-inputs">
                <label for="beng" class="form-check-label"> Bengali</label>
                <input type="checkbox" name="lang[]" id="hindi" value="hindi" class="form-check-inputs">
                <label for="hindi" class="form-check-label"> Hindi</label>
            </p>

            <p>
                <label for="image" class="form-label">Image:</label>
                <input type="file" name="image" id="image" class="form-control">
            </p>


            <p>
                <input type="submit" value="Save" class="btn btn-primary" style="width: 200px; margin-top: 10px;">
            </p>

        </form>
    </div>
</body>

</html>
