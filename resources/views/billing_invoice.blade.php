<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pdf Generator!</title>

    <style>
        .card {
margin-bottom: 1.5rem
}
.card {
position: relative;
display: -ms-flexbox;
display: flex;
-ms-flex-direction: column;
flex-direction: column;
min-width: 0;
word-wrap: break-word;
background-color: #fff;
background-clip: border-box;
border: 1px solid #c8ced3;
border-radius: .25rem
}
.card-header:first-child {
border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}
.card-header {
padding: .75rem 1.25rem;
margin-bottom: 0;
background-color: #f0f3f5;
border-bottom: 1px solid #c8ced3
}
    </style>
  </head>
  <body>
    
    <div class="container-fluid">
        <div id="ui-view" data-select2-id="ui-view">
        <div>
        <div class="card">
        <div class="card-header">Invoice
        <strong>#BBB-10010110101938</strong>
        <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
        <i class="fa fa-print"></i> Print</a>
        <a class="btn btn-sm btn-info float-right mr-1 d-print-none" href="#" data-abc="true">
        <i class="fa fa-save"></i> Save</a>
        </div>
        <div class="card-body">
        <div class="row mb-4">
        <div class="col-sm-4">
        <h6 class="mb-3">From:</h6>
        <div>
        <strong>BBBootstrap.com</strong>
        </div>
        <div>42, Awesome Enclave</div>
        <div>New York City, New york, 10394</div>
        <div>Email: admin@bbbootstrap.com</div>
        <div>Phone: +48 123 456 789</div>
        </div>
        <div class="col-sm-4">
        <h6 class="mb-3">To:</h6>
        <div>
        <strong>BBBootstrap.com</strong>
        </div>
        <div>42, Awesome Enclave</div>
        <div>New York City, New york, 10394</div>
        <div>Email: admin@bbbootstrap.com</div>
        <div>Phone: +48 123 456 789</div>
        </div>
        <div class="col-sm-4">
        <h6 class="mb-3">Details:</h6>
        <div>Invoice
        <strong>#BBB-10010110101938</strong>
        </div>
        <div>April 30, 2019</div>
        <div>VAT: NYC09090390</div>
        <div>Account Name: BBBootstrap Inc</div>
        <div>
        <strong>SWIFT code: 99 8888 7777 6666 5555</strong>
        </div>
        </div>
        </div>
        <div class="table-responsive-sm">
        <table class="table table-striped">
        <thead>
        <tr>
        <th class="center">#</th>
        <th>Item</th>
        <th>Description</th>
        <th class="center">Quantity</th>
        <th class="right">Unit Cost</th>
        <th class="right">Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td class="center">1</td>
        <td class="left">Iphone 10</td>
        <td class="left">Apple iphoe 10 with extended warranty</td>
        <td class="center">16</td>
        <td class="right">$999,00</td>
        <td class="right">$999,00</td>
        </tr>
        <tr>
        <td class="center">2</td>
        <td class="left">Samsung S6</td>
        <td class="left">Samsung S6 with extended warranty</td>
        <td class="center">20</td>
        <td class="right">$150,00</td>
        <td class="right">$3.000,00</td>
        </tr>
        </tbody>
        </table>
        </div>
        <div class="row">
        <div class="col-lg-4 col-sm-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
        <div class="col-lg-4 col-sm-5 ml-auto">
        <table class="table table-clear">
        <tbody>
        <tr>
        <td class="left">
        <strong>Subtotal</strong>
        </td>
        <td class="right">$8.497,00</td>
        </tr>
        <tr>
        <td class="left">
        <strong>Discount (20%)</strong>
        </td>
        <td class="right">$1,699,40</td>
        </tr>
        <tr>
        <td class="left">
        <strong>VAT (10%)</strong>
        </td>
        <td class="right">$679,76</td>
        </tr>
        <tr>
        <td class="left">
        <strong>Total</strong>
        </td>
        <td class="right">
        <strong>$7.477,36</strong>
        </td>
        </tr>
        </tbody>
        </table>
        <a class="btn btn-success" href="#" data-abc="true">
        <i class="fa fa-usd"></i> Proceed to Payment</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div> 



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
