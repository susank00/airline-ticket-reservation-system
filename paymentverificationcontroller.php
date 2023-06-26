<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="https://uat.esewa.com.np/epay/transrec" method="GET">
    <input value="100" name="amt" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
    <input value="000AE01" name="rid" type="hidden">
    <input value="Submit" type="submit">
    </form>
    <script>
    var path="https://uat.esewa.com.np/epay/transrec";
var params= {
    amt: 100,
    rid: "000AE01",
    pid: "ee2c3ca1-696b-4cc5-a6be-2c40d929d453",
    scd: "EPAYTEST"
}

function post(path, params) {
    var form = document.createElement("form");
    form.setAttribute("method", "POST");
    form.setAttribute("action", path);

    for(var key in params) {
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", key);
        hiddenField.setAttribute("value", params[key]);
        form.appendChild(hiddenField);
    }

    document.body.appendChild(form);
    form.submit();
}
</script>
<?php
$url = "https://uat.esewa.com.np/epay/transrec";
$data =[
    'amt'=> 1000,
    'rid'=> '000AE01',
    'pid'=>'ee2c3ca1-696b-4cc5-a6be-2c40d929d453',
    'scd'=> 'EPAYTEST',
];

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    ?>
</body>
</html>