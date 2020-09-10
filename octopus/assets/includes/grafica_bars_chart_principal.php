<div class="col-md-10">
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Real-Time Chart</h2>
            <p class="panel-subtitle">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
        </header>
        <div class="panel-body">

            <!-- Flot: Curves -->
            <div class="chart chart-md" id="flotRealTime"></div>
            <script type="text/javascript">

                    var flotRealTime = [{
                            data: [
                                [0, 170],
                                [1, 169],
                                [2, 173],
                                [3, 188],
                                [4, 147],
                                [5, 113],
                                [6, 128],
                                [7, 169],
                                [8, 173],
                                [9, 128],
                                [10, 128]
                            ],
                            label: "Series 1",
                            color: "#0088cc"
                        }, {
                            data: [
                                [0, 115],
                                [1, 124],
                                [2, 114],
                                [3, 121],
                                [4, 115],
                                [5, 83],
                                [6, 102],
                                [7, 148],
                                [8, 147],
                                [9, 103],
                                [10, 113]
                            ],
                            label: "Series 2",
                            color: "#2baab1"
                        }, {
                            data: [
                                [0, 70],
                                [1, 69],
                                [2, 73],
                                [3, 88],
                                [4, 47],
                                [5, 13],
                                [6, 28],
                                [7, 69],
                                [8, 73],
                                [9, 28],
                                [10, 28]
                            ],
                            label: "Series 3",
                            color: "#734ba9"
                        }];

                    // See: assets/javascripts/ui-elements/examples.charts.js for more settings.

                </script>

        </div>
    </section>
</div>