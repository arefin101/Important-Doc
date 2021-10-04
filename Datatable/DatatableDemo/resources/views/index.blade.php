<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.2/af-2.3.7/b-2.0.0/b-colvis-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/fc-3.3.3/fh-3.1.9/kt-2.6.4/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.5/sb-1.2.1/sp-1.4.0/sl-1.3.3/datatables.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/jszip-2.5.0/dt-1.11.2/af-2.3.7/b-2.0.0/b-colvis-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/fc-3.3.3/fh-3.1.9/kt-2.6.4/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.5/sb-1.2.1/sp-1.4.0/sl-1.3.3/datatables.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        .dt-buttons{
            float:right;
        }
    </style>

    <title>Document</title>
</head>
<body>

    <div class="container"> 
        <br /> 
        <h3 align="center">Add CSV Excel Export Button in Yajra Laravel Datatable</h3> 
        <br /> 
        <div class="table-responsive"> 
            <div class="panel panel-default"> 
                <div class="panel-heading">
                    Sample Data
                    <button style="float:right; margin-top:-7px" class="btn btn-primary" id="add">Add Button</button>
                </div> 
                <div class="panel-body"> 
                    <table id="table_id" class="display cell-border">
                        <thead>
                            <tr>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr style="background-color:#BEBEBA">
                                <th></th>
                                <th style="text-align:right">Total:</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div> 
            </div> 
        </div> 
        <br /> 
        <br /> 
    </div>

    <script type="text/javascript" src="jquery.dataTables.js"></script>
    <script type="text/javascript" src="dataTables.scrollingPagination.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.11.2/api/sum().js"></script>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                processing: false,
                serverSide: true,
                ajax: `/load`,
                columns: [
                    {data: 'productId', name: 'productId'},
                    {data: 'productName', name: 'productName'},
                    {data: 'quantity', name: 'quantity'},
                    {data: 'action', name: 'action'}
                ],
                dom: 'flrtip',
                buttons: [
                            {
                                extend: 'collection',
                                text: 'Export',
                                buttons: [ 'csv', 'excel', 'pdf', 'print', 'copy'],
                                background:true
                            }
                        ],

                "bDestroy": true,
                "footerCallback": function () {
                    var api = this.api(), data;
        
                    var intVal = function ( i ) {
                        return i;
                    };
                    pageTotal = api
                        .column( 2, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );
        
                    $( api.column( 2 ).footer() ).html(
                        pageTotal 
                    );
                }
                // fnDrawCallback: function () {
                    
                //     let value = sum_table_col( $('#risk_fund_by_sell_invoice_table'), 'total-risk-fund' );
                    
                //     $('#footer_total_risk_fund').text("$" + value.toFixed(2));
                    
                // }

            });



            $('#add').click(function(){
                $('#table_id').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: `/load2`,
                    columns: [
                        {data: 'productId', name: 'productId'},
                        {data: 'productName', name: 'productName'},
                        {data: 'quantity', name:'quantity'},
                        {data: 'action', name: 'action'},
                    ],
                    dom: 'Blfrtip',
                    buttons: [
                        'copy', 'excel', 'pdf'
                    ],
                    "bDestroy": true
                });
            })
            
        } );
        
    </script>
    
</body>
</html>