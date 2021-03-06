
<!-- start: page -->
<div class="row">
    <div class="col-lg-6">
        <section class="panel form-wizard" id="w1">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Form Wizard</h2>
            </header>
            <div class="panel-body panel-body-nopadding">
                <div class="wizard-tabs">
                    <ul class="wizard-steps">
                        <li class="active">
                            <a href="#w1-account" data-toggle="tab" class="text-center">
                                <span class="badge hidden-xs">1</span>
                                Account
                            </a>
                        </li>
                        <li>
                            <a href="#w1-profile" data-toggle="tab" class="text-center">
                                <span class="badge hidden-xs">2</span>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#w1-confirm" data-toggle="tab" class="text-center">
                                <span class="badge hidden-xs">3</span>
                                Confirm
                            </a>
                        </li>
                    </ul>
                </div>
                <form class="form-horizontal" novalidate="novalidate">
                    <div class="tab-content">
                        <div id="w1-account" class="tab-pane active">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w1-username">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="username" id="w1-username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w1-password">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control input-sm" name="password" id="w1-password" minlength="6" required>
                                </div>
                            </div>
                        </div>
                        <div id="w1-profile" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w1-first-name">First Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="first-name" id="w1-first-name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w1-last-name">Last Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="last-name" id="w1-last-name" required>
                                </div>
                            </div>
                        </div>
                        <div id="w1-confirm" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w1-email">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="email" id="w1-email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" name="terms" id="w1-terms" required>
                                        <label for="w1-terms">I agree to the terms of service</label>
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
    <div class="col-lg-6">
        <section class="panel form-wizard" id="w2">
            <div class="tabs">
                <ul class="nav nav-tabs nav-justify">
                    <li class="active">
                        <a href="#w2-account" data-toggle="tab" class="text-center">
                            <span class="badge hidden-xs">1</span>
                            Account
                        </a>
                    </li>
                    <li>
                        <a href="#w2-profile" data-toggle="tab" class="text-center">
                            <span class="badge hidden-xs">2</span>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="#w2-confirm" data-toggle="tab" class="text-center">
                            <span class="badge hidden-xs">3</span>
                            Confirm
                        </a>
                    </li>
                </ul>
                <form class="form-horizontal" novalidate="novalidate">
                    <div class="tab-content">
                        <div id="w2-account" class="tab-pane active">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w2-username">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" id="w2-username" name="username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w2-password">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control input-sm" name="password" id="w2-password" required minlength="6">
                                </div>
                            </div>
                        </div>
                        <div id="w2-profile" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w2-first-name">First Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="first-name" id="w2-first-name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w2-last-name">Last Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="last-name" id="w2-last-name" required>
                                </div>
                            </div>
                        </div>
                        <div id="w2-confirm" class="tab-pane">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="w2-email">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" name="email" id="w2-email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" name="terms" id="w2-terms" required>
                                        <label for="w2-terms">I agree to the terms of service</label>
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