<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reg Form</title>
</head>
<body>
    <div>
        <form action="{{ route('submit_personal_data') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Name</label>
                <input name="f_name" type="text">
            </div>
            <div>
                <label for="">Phone</label>
                <input name="phone_no" type="number">
            </div>
            <div>
                <label for="">Gender: </label>
                <input name="gender" type="radio" value="Male">
                <label for="">Male</label>
                <input name="gender" type="radio" value="Female">
                <label for="">Female</label>
            </div>
            <div>
                <label for="">Education: </label>
                <input name="education" type="checkbox" value="Matric">
                <label for="">Matric</label>
                <input name="education" type="checkbox" value="Intermediate">
                <label for="">Intermediate</label>
            </div>
            <div>
                <label for="">Country: </label>
                <select name="country">
                    <option value="China">China</option>
                    <option value="Canada">Canada</option>
                    <option value="Chile">Chile</option>
                </select>
            </div>
            <div>
                <label for="">Email</label>
                <input name="email" type="email">
            </div>
            <div name="password">
                <label for="">Password</label>
                <input name="password" type="password">
                <label for="">Confirm Password</label>
                <input name="" type="password">
            </div>
            <div>
                <input name="file_no1" type="input">
            </div>
            <div>
                <input name="submit_form" type="submit" value="submit">
            </div>

        </form>
    </div>
</body>
</html>