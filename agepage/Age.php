<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
    
     var name = window.prompt("Please enter your name")
    var ageCheck = window.prompt("Please enter your age:")
   
    if (ageCheck < 18) {
        window.alert("You submitted that you are " + ageCheck + ": years old, " + name + ".");
        window.alert("You must be at least eighteen years old to visit this site.");
    }

        else if (ageCheck > 18 && ageCheck < 101 ) {
            window.alert("You are old enough to visit the iste!")
            window.alert("Welcome " + name + "!");
        }
    else {
        window.alert("You must be honest about your age, " + name + ".");
    }
    </script>
</body>
</html>