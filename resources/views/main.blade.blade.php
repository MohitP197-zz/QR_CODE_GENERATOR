<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>

    <div class="container col-md-12">
        <h1>Laravel 5.8 QR Code Generator</h1>
        <form class="form-inline" method="post" action="{{route('myQRCODE')}}" id="qrCodeGenerator">
            @csrf
            <label class="sr-only" for="inlineFormInputName2">Name</label>
            <input type="text" name="qrText" class="form-control mb-2 mr-sm-2" id="textValue" placeholder="Enter text to convert">

            <button type="submit" class="btn btn-primary mb-2" id="qrCodeGenerator">Generate</button>
        </form>
        
    </div>

</body>


</html> 