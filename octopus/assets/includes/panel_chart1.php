 <div class="row">
                        <div class="col-md-6">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="fa fa-caret-down"></a>
                                        <a href="#" class="fa fa-times"></a>
                                    </div>

                                    <h2 class="panel-title">Best Seller</h2>
                                    <p class="panel-subtitle">Customize the graphs as much as you want, there are so many options and features to display information using JSOFT Admin Template.</p>
                                </header>
                                <div class="panel-body">

                                    <!-- Flot: Basic -->
                                    <div class="chart chart-md" id="flotDashBasic"></div>
                                    <script>

                                        var flotDashBasicData = [{
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

                                        // See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

                                    </script>

                                </div>
                            </section>
                        </div>
                        <div class="col-md-6">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="fa fa-caret-down"></a>
                                        <a href="#" class="fa fa-times"></a>
                                    </div>
                                    <h2 class="panel-title">Server Usage</h2>
                                    <p class="panel-subtitle">It's easy to create custom graphs on JSOFT Admin Template, there are several graph types that you can use, such as lines, bars, pie charts, etc...</p>
                                </header>
                                <div class="panel-body">

                                    <!-- Flot: Curves -->
                                    <div class="chart chart-md" id="flotDashRealTime"></div>

                                </div>
                            </section>
                        </div>
                    </div>