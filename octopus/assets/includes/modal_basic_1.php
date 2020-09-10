<div class="row">
    <div class="col-md-6">

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Basic</h2>
                <p class="panel-subtitle">Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
            </header>
            <div class="panel-body">

                <!-- Modal Basic -->
                <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalBasic">Basic</a>

                <div id="modalBasic" class="modal-block mfp-hide">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">Are you sure?</h2>
                        </header>
                        <div class="panel-body">
                            <div class="modal-wrapper">
                                <div class="modal-text">
                                    <p>Are you sure that you want to delete this image?</p>
                                </div>
                            </div>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary modal-confirm">Confirm</button>
                                    <button class="btn btn-default modal-dismiss">Cancel</button>
                                </div>
                            </div>
                        </footer>
                    </section>
                </div>

                <!-- Modal Icon -->
                <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalIcon">Icon</a>

                <div id="modalIcon" class="modal-block modal-block-primary mfp-hide">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">Are you sure?</h2>
                        </header>
                        <div class="panel-body">
                            <div class="modal-wrapper">
                                <div class="modal-icon">
                                    <i class="fa fa-question-circle"></i>
                                </div>
                                <div class="modal-text">
                                    <p>Are you sure that you want to delete this image?</p>
                                </div>
                            </div>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary modal-confirm">Confirm</button>
                                    <button class="btn btn-default modal-dismiss">Cancel</button>
                                </div>
                            </div>
                        </footer>
                    </section>
                </div>

                <!-- Modal Center Icon -->
                <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalCenterIcon">Center Icon</a>

                <div id="modalCenterIcon" class="modal-block modal-block-primary mfp-hide">
                    <section class="panel">
                        <div class="panel-body text-center">
                            <div class="modal-wrapper">
                                <div class="modal-icon center">
                                    <i class="fa fa-question-circle"></i>
                                </div>
                                <div class="modal-text">
                                    <h4>Are you sure?</h4>
                                    <p>Are you sure that you want to delete this image?</p>
                                </div>
                            </div>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary modal-confirm">Confirm</button>
                                    <button class="btn btn-default modal-dismiss">Cancel</button>
                                </div>
                            </div>
                        </footer>
                    </section>
                </div>

                <!-- Modal No Title -->
                <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalNoTitle">No Title</a>

                <div id="modalNoTitle" class="modal-block mfp-hide">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="modal-wrapper">
                                <div class="modal-text">
                                    <p>Are you sure that you want to delete this image?</p>
                                </div>
                            </div>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary modal-confirm">Confirm</button>
                                    <button class="btn btn-default modal-dismiss">Cancel</button>
                                </div>
                            </div>
                        </footer>
                    </section>
                </div>

                <!-- Modal No Footer -->
                <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalNoFooter">No Footer</a>

                <div id="modalNoFooter" class="modal-block mfp-hide">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">Are you sure?</h2>
                        </header>
                        <div class="panel-body">
                            <div class="modal-wrapper">
                                <div class="modal-text">
                                    <p>Are you sure that you want to delete this image?</p>
                                    <button class="btn btn-primary modal-confirm">Confirm</button>
                                    <button class="btn btn-default modal-dismiss">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Modal Center -->
                <a class="mb-xs mt-xs mr-xs modal-basic btn btn-default" href="#modalCenter">Center</a>

                <div id="modalCenter" class="modal-block mfp-hide">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="modal-wrapper">
                                <div class="modal-text text-center">
                                    <p>Are you sure that you want to delete this image?</p>
                                    <button class="btn btn-primary modal-confirm">Confirm</button>
                                    <button class="btn btn-default modal-dismiss">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Modal Bootstrap -->
                <a class="mb-xs mt-xs mr-xs btn btn-default" data-toggle="modal" data-target="#modalBootstrap">Bootstrap</a>

                <div class="modal fade" id="modalBootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure that you want to delete this image?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Confirm</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
