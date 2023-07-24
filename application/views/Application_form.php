<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <form action="http://localhost/C3/task1/Register/savedata/" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="number" class="form-control" name="stid" placeholder="Enter Id">

        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="stname" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Date of Joining</label>
            <input type="date" class="form-control"  name="stdate" placeholder="Enter Date of Joining">

        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="staddress" placeholder="Enter Address">
        </div>
        <div class="form-group">
            <label>Department</label>
            <div class="dropdown">
                <select class="form-group" name="sel">
                    <option>B.A Tamil</option>
                    <option>B.A English</option>
                    <option>B.Com</option>
                    <option>BCA</option>
                    <option>B.Sc Mathematics</option>
                    <option>B.Sc Physics</option>
                </select>
            </div>
        </div>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="number" class="form-control" name="stphonenumber placeholder="Enter Phone Number">
        </div>
        <label>Gender</label>
        <div class="input-group">

            <div class="input-group-prepend">
                <div class="input-group-text">
                    <label>Male</label>
                    <input type="radio" aria-label="Radio button for following text input" name="Gender"value="male">
                    <label>Female</label>
                    <input type="radio" aria-label="Radio button for following text input" name="Gender" value="female">
                </div>
                
                    
                
            </div>
        </div>
        <div class="form-group">
            <label>BloodGroup</label>
            <div class="dropdown">
                <select class="form-group" name="sel">
                    <option>0+ve</option>
                    <option>0-ve</option>
                    <option>A+ve</option>
                    <option>A-ve</option>
                    <option>AB+ve</option>
                    <option>AB-ve </option>
                    <option>B+ve</option>
                    <option>B-ve</option>
                </select>
            </div>
        </div>

        <br />

        <button type="submit" class="btn btn-primary">Register
        </button>
    </form>
</body>

</html>