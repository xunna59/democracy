   <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Dashboard</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent show" id="dashboard">
                  <li class="nav-item"><a class="nav-link active" href="index" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Home</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="uploads" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Uploaded Images</span></div>
                      </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="videos" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Uploaded Videos</span></div>
                      </a>
                    </li>

                     <?php 
                          

                          if ($roles == 0) {
                            echo ' <li class="nav-item"><a class="nav-link" href="register-observer" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Register Observer</span></div>
                      </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="users" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">View All Observers</span></div>
                      </a>
                    </li> ';
                          }else{

                            echo '  <li class="nav-item"><a class="nav-link" href="users" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">View All Observers</span></div>
                      </a>
                    </li> ';
                          }
                          ?>

                   
                   


                    <li class="nav-item"><a class="nav-link" href="all-reports" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">All Reports</span></div>
                      </a>
                    </li>
                     
                    
                     
                    
                  </ul>
                </li>
               
                

                



              </ul>
            </div>
            <div class="btn navbar-vertical-footer text-danger"><a href="logout" class="text-danger" style="text-decoration: none;"><span class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Sign out</span></a></div> 

           
          </div>
        </nav>