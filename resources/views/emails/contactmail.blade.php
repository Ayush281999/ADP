<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Welcome to IPS Family</h1>

<p>Welcome {{$details['name']}} to our family. I am glad that you are going to join our organisation.</p>
<p> Verification details :- Name: {{$details['name']}}</p> 
                        <p>Email : {{$details['email']}}</p>
                        <p>Phone : {{$details['phone']}}</p>
<p>Thank You</p>

    
</body>
</html>
