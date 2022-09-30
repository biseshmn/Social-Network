<div class="sn-footer d-xl-none d-flex justify-content-center gap-5">
    <button type="button" class="btn btn-primary btn-lg no-bg" data-bs-toggle="offcanvas" data-bs-target="#UserCanvas" aria-controls="UserCanvas">
        <i class="fa-regular fa-user"></i>
        <small>User</small>
    </button>
    
    <button type="button" class="btn btn-primary btn-lg no-bg" data-bs-toggle="offcanvas" data-bs-target="#RecommendCanvas" aria-controls="RecommendCanvas">
        <i class="fa-regular fa-file"></i>
        <small>Recommended</small>
    </button>
</div>


<!-- OffCanvas of User -->
<div class="offcanvas offcanvas-start p-3 d-xl-none" tabindex="-1" id="UserCanvas" aria-labelledby="UserCanvasLabel">
    <div class="sn-body-user w-100">
        <div class="user d-flex flex-column gap-3">
            <div class="user-info d-flex flex-column align-items-center justify-content-center pb-3">
                <div class="user-info-img mb-4">
                    <img src="images/john.jpg" alt="profile-image">
                </div>

                <h6><b>Pratik Maharjan</b></h6>
                <small>ML Engineer at Microsoft</small>
                <small>Following</small>
            </div>

            <div class="user-contibutors">
                <div class="user-contibutors-heading d-flex align-items-center justify-content-between mb-1">
                    <h5 class="m-0"><b>Contributors</b></h5>
                    <button type="button" class="btn btn-primary btn-sm no-bg">
                        See All
                    </button>
                </div>

                <div class="user-contibutors-list mb-3">
                    <ul class="p-0 m-0">
                        <li>
                            <small><b>Ashna Manandhar</b></small>
                        </li>

                        <li>
                            <small><b>Anjali Shakya</b></small>
                        </li>

                        <li>
                            <small><b>Sanish Karmacharya</b></small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="user-paper-stats">
            <div class="user-paper-stats-heading mb-1">
                <h5 class="m-0"><b>Paper statistics</b></h5>
            </div>
            
            <div class="d-flex gap-5">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <small class="text-muted">Downloads</small>
                        <p class="card-text">1.2k</p>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body p-0">
                        <small class="text-muted">Abstract views</small>
                        <p class="card-text">3.5k</p>
                    </div>
                </div>
            </div>

            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button collapsed rounded-0 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                            <small>Citations (<span>12</span>)</small>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body px-4 py-1">
                            <ul class="p-0 m-0">
                                <li class="mb-1">
                                    <small>Crossref citations</small>
                                </li>

                                <li class="mb-1">
                                    <small>Crossref citations</small>
                                </li>

                                <li class="mb-1">
                                    <small>View all</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed rounded-0 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <small>References</small>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body px-4 py-1">
                            <ul class="p-0 m-0">
                                <li class="mb-1">
                                    <small>Reference 1</small>
                                </li>

                                <li class="mb-1">
                                    <small>Reference 2</small>
                                </li>

                                <li class="mb-1">
                                    <small>View all</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- OffCanvas of Recommendations -->
<div class="offcanvas offcanvas-end p-3" tabindex="-1" id="RecommendCanvas" aria-labelledby="RecommendCanvasLabel">
    <div class="sn-body-suggest">
        <h5>
            <b>Recommendation</b>
        </h5>

        <?php for ($i=0; $i<3; $i++) { ?>
            <div class="card border-dark mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="sn-body-suggest-img overflow-hidden border border-dark rounded-1">
                            <img src="images/doc.jpg" class="img-fluid rounded-start" alt="suggested-image">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-title">
                                <small><b>Design and Development of Unibody Quadcopter Structure Using Optimization and Additive Manufacturing Techniques</small></b>
                            </p>
                            <p class="card-text">
                                <small class="text-muted">14 March 2021</small>
                                    <i class="fa-solid fa-circle fa-2xs text-muted"></i>
                                <small class="text-muted ">Posted in group name Pratik Maharjan</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>