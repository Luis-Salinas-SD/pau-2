    <div class="col-sm-5 justify-content-center" style="position: absolute;">

        <section align="center" class="panel form-wizard" id="w4">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Form Wizard</h2>
            </header>
            <div class="panel-body">
                <div class="wizard-progress wizard-progress-lg">
                    <div class="steps-progress">
                        <div class="progress-indicator"></div>
                    </div>
                    <ul class="wizard-steps">
                        <li class="active">
                            <a href="#w4-account" data-toggle="tab"><span>1</span>Account Info</a>
                        </li>
                        <li>
                            <a href="#w4-profile" data-toggle="tab"><span>2</span>Profile Info</a>
                        </li>
                        <li>
                            <a href="#w4-billing" data-toggle="tab"><span>3</span>Billing Info</a>
                        </li>
                        <li>
                            <a href="#w4-confirm" data-toggle="tab"><span>4</span>Confirmation</a>
                        </li>
                    </ul>
                </div>

                <form class="form-horizontal" novalidate="novalidate">
                    <div class="tab-content">
                        <div id="w4-account" class="tab-pane active">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="w4-username">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" id="w4-username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="w4-password">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" id="w4-password" required minlength="6">
                                </div>
                            </div>
                        </div>
                        <div id="w4-profile" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="w4-first-name">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="first-name" id="w4-first-name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="w4-last-name">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                </div>
                            </div>
                        </div>
                        <div id="w4-billing" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="w4-cc">Card Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="cc-number" id="w4-cc" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="inputSuccess">Expiration</label>
                                <div class="col-sm-5">
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
                        <div id="w4-confirm" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="w4-email">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email" id="w4-email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" name="terms" id="w4-terms" required>
                                        <label for="w4-terms">I agree to the terms of service</label>
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
    </section>