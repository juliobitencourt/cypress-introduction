<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>My Awesome Form</h1>
    <form action="submit-form.php" method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="website" placeholder="Website">
        <input id="submit-button" type=" submit" value="Submit Form">
    </form>
    <script>
        let form = document.querySelector('form')
        let formData = new FormData(form)
        form.addEventListener('submit', (e) => {
            e.preventDefault()
            fetch(form.action, {
                method: "POST",
                body: formData
            }).then(resp => {
                if (resp.status === 201) {
                    console.log('Form submited')
                }
            });
        })
    </script>
</body>

</html>