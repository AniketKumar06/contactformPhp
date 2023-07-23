<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
    <title>Contact Form</title>
</head>

<body>
    <div class="container">
        <div class="heading">
            <h1>Contact From Using PHP</h1>
        </div>
        <div class="form-container">
            <form>
                <div class="row">
                    <div class="col font-size">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" placeholder="First name" name="firstname">
                    </div>
                    <div class="col font-size">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" name="lastname">
                    </div>
                </div><br />
                <div class="form-group font-size">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email"
                        name="email">
                </div>
                <div class="form-group mb-3">
                    <div class="form-group font-size">
                        <label for="inputAddress2">Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="address">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4 font-size">
                            <label for="city">City</label>
                            <input type="text" class="form-control" placeholder="City" name="city">
                        </div>
                        <div class="form-group col-md-4 font-size">
                            <label for="state">State</label>
                            <select id="inputState" class="form-control" name="state">
                                <option selected>Choose...</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chhattisgarh</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharastra</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Odisha</option>
                                <option>Punjab</option>
                                <option>Rajasthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Telangana</option>
                                <option>Tripura</option>
                                <option>Uttarakhand</option>
                                <option>Uttar Pradesh</option>
                                <option>West Bengal</option>
                            </select>
                        </div>

                        <div class=" form-group col-md-2 font-size">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" placeholder="Zip" name="zip">
                        </div>
                    </div>

                    <div class="form-group font-size">
                        <label for="message">Message</label>
                        <textarea class="form-control" placeholder="Write Your Message Here!!"
                            name="message"></textarea>
                    </div>
                    <button type="submit" class="btn-lg btn-primary  btn-block btn-dark">Submit</button>
            </form>
        </div>

    </div>


</body>

</html>