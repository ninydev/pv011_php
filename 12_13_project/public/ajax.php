<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?= "<form action='/pv011_php/12_13_project/public/index.php' method='POST'>"
. "<div><label> Name: <input type='text' name = 'name' value='keeper'></label></div>"
. "<div><label> Email: <input type='text' name = 'email' value='keeper@ninydev.com'></label></div>"
. "<input type='submit'>"
. "</form>";
?>

<script>

    frm = document.forms[0]

    frm.onsubmit = function (event) {
        event.preventDefault()

        fetch('/pv011_php/12_13_project/public/index.php', {
            method: 'POST',
            body: JSON.stringify({
                name: frm.elements.name.value,
                email: frm.elements.email.value
            }),
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(res => {
                console.log(res)
                return res.json()
            })
            .then(text => {
                console.log(text)
                frm.innerHTML = "<p>" + text['data'] + "</p>"
            })
            .catch(err => {
                console.log(err)
            })
        return false

    }


</script>

</body>
</html>