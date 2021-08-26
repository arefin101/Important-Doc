
<section class="main-div">
    <div class="row">
        <div class="col-4" style="margin-top:10px">
            <div class="card">
                <div class="card-header text-center text-primary"><h3>Total User</h3></div>
                <div class="card-body text-center">
                    <i class="fa fa-user" style="font-size: 100px;" aria-hidden="true"><span style="font-size: 100px;">&nbsp {{ $TotalUser }}<span></i>
                </div>
            </div>
        </div>
        <div class="col-4" style="margin-top:10px">
            <div class="card">
                <div class="card-header text-center text-primary"><h3>Total News</h3></div>
                <div class="card-body text-center">
                <i class="fa fa-newspaper-o"  style="font-size: 100px;" aria-hidden="true"><span style="font-size: 100px;">&nbsp {{ $TotalNews }}<span></i>
                </div>
            </div>
        </div>
        <div class="col-4" style="margin-top:10px">
            <div class="card">
                <div class="card-header text-center text-primary"><h3>Total Interview</h3></div>
                <div class="card-body text-center">
                    <i class="fa fa-file-text-o" style="font-size: 100px;" aria-hidden="true"><span style="font-size: 100px;">&nbsp {{ $TotalInterview }}<span></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6" style="margin-top:10px">
            <div class="card">
                <div class="card-header">Visitors Monthly Visit</div>
                <div class="card-body">
                <canvas id="chart-line" width="299" height="200" ></canvas>
                </div>
            </div>
        </div>
        <div class="col-6" style="margin-top:10px">
            <div class="card">
                <div class="card-header">ewrfwefs</div>
                <div class="card-body">sdfsdf</div>
                <div class="card-footer">fsdfsdf</div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            var ctx = $("#chart-line");
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June"],
                    datasets: [{
                        data: [86, 114, 106, 106, 107, 111],
                        label: "Visitors",
                        borderColor: "#458af7",
                        backgroundColor: '#458af7',
                        fill: false
                    }]
                },
            });
        });
    </script>
    

</section>
