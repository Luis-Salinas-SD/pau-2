
<h2 class="mt-none">Flot Charts</h2>
<p class="mb-lg">Flot is a pure JavaScript plotting library for jQuery, with a 
    focus on simple usage, attractive looks and interactive features.</p>

<div class="row">
    <div class="col-md-10">

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Basic Chart</h2>
                <p class="panel-subtitle">You don't have to do much to get an attractive plot. Create a placeholder, make sure it has dimensions (so Flot knows at what size to draw the plot), then call the plot function with your data.</p>
            </header>
            <div class="panel-body">

                <!-- Flot: Basic -->
                <div class="chart chart-md" id="flotBasic"></div>
                <script type="text/javascript">

                    var flotBasicData = [{
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
</div>
