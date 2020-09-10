<div class="row">
    <div class="col-md-6">
        <section class="panel form-wizard" id="w3">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Form Wizard</h2>
            </header>
            <div class="panel-body">
                <div class="wizard-progress">
                    <div class="steps-progress">
                        <div class="progress-indicator"></div>
                    </div>
                    <ul>
                        <li class="active">
                            <a href="#w3-account" data-toggle="tab"><span>1</span>Account Info</a>
                        </li>
                        <li>
                            <a href="#w3-profile" data-toggle="tab"><span>2</span>Profile Info</a>
                        </li>
                        <li>
                            <a href="#w3-billing" data-toggle="tab"><span>3</span>Billing Info</a>
                        </li>
                        <li>
                            <a href="#w3-confirm" data-toggle="tab"><span>4</span>Confirmation</a>
                        </li>
                    </ul>
                </div>
                <form class="form-horizontal" novalidate="novalidate">
                    <div class="tab-content">
                        <div id="w3-account" class="tab-pane active">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w3-username">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="username" id="w3-username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w3-password">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control input-sm" name="password" id="w3-password" minlength="6" required>
                                </div>
                            </div>
                        </div>
                        <div id="w3-profile" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w3-first-name">First Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="first-name" id="w3-first-name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w3-last-name">Last Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="last-name" id="w3-last-name">
                                </div>
                            </div>
                        </div>
                        <div id="w3-billing" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w3-cc">Card Number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="cc-number" id="w3-cc" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="inputSuccess">Expiration</label>
                                <div class="col-sm-4">
                                    <select class="form-control input-sm" name="exp-month" required>
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="form-control input-sm" name="exp-year" required>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="w3-confirm" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w3-email">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="email" id="w3-email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" name="terms" id="w3-terms" required>
                                        <label for="w3-terms">I agree to the terms of service</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                <ul class="pager">
                    <li class="previous disabled">
                        <a><i class="fa fa-angle-left"></i> Previous</a>
                    </li>
                    <li class="finish hidden pull-right">
                        <a>Finish</a>
                    </li>
                    <li class="next">
                        <a>Next <i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="col-md-6">
        <section class="panel form-wizard" id="w5">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Form Wizard</h2>
            </header>
            <div class="panel-body">
                <div class="wizard-tabs hidden">
                    <ul class="wizard-steps">
                        <li class="active">
                            <a href="#w5-account" data-toggle="tab"><span class="badge">1</span>Account Info</a>
                        </li>
                        <li>
                            <a href="#w5-profile" data-toggle="tab"><span class="badge">2</span>Profile Info</a>
                        </li>
                        <li>
                            <a href="#w5-billing" data-toggle="tab"><span class="badge">3</span>Billing Info</a>
                        </li>
                        <li>
                            <a href="#w5-confirm" data-toggle="tab"><span class="badge">4</span>Confirmation</a>
                        </li>
                    </ul>
                </div>
                <div class="progress progress-striped progress-xl m-md light">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        <span class="sr-only">60%</span>
                    </div>
                </div>
                <form class="form-horizontal" novalidate="novalidate">
                    <div class="tab-content">
                        <div id="w5-account" class="tab-pane active">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w5-username">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="username" id="w5-username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w5-password">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" id="w5-password" minlength="2" required>
                                </div>
                            </div>
                        </div>
                        <div id="w5-profile" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w5-first-name">First Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="first-name" id="w5-first-name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w5-last-name">Last Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="last-name" id="w5-last-name" required>
                                </div>
                            </div>
                        </div>
                        <div id="w5-billing" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w5-cc">Card Number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="cc-number" id="w5-cc" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="inputSuccess">Expiration</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="exp-month" required>
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="form-control" name="exp-year" required>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="w5-confirm" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w5-email">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" id="w5-email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" name="terms" id="w5-terms" required>
                                        <label for="w5-terms">I agree to the terms of service</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                <ul class="pager">
                    <li class="previous disabled">
                        <a><i class="fa fa-angle-left"></i> Previous</a>
                    </li>
                    <li class="finish hidden pull-right">
                        <a>Finish</a>
                    </li>
                    <li class="next">
                        <a>Next <i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
<!-- end: page -->