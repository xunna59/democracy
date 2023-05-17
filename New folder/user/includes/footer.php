 
 <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900"><span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none" />2022 &copy; <a href="https://giguild.com/">G.I.Guide</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.2.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


<script src="<?php echo dirname($_SERVER['PHP_SELF']) . '/script.js' ?>"></script>
<!--   <div class="hidden" id="data"><?php echo htmlspecialchars(json_encode($user), ENT_QUOTES); ?></div>
 -->  <script>
    var user = JSON.parse(document.getElementById('data').textContent);
  </script>
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="assets/js/phoenix.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/chart/chart.min.js"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/leaflet/leaflet.js"></script>
    <script src="vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="assets/js/ecommerce-dashboard.js"></script>
    <script src="js/lga.min.js"></script>
    <script src="js/webcam.min.js"></script>
    <script src="js/video.js"></script>
    <script type="text/javascript">
      

      function configure(){

        Webcam.set({

          width: 450,
          height: 720,
          image_format: 'jpeg',
          jpeg_quality: 90,
         
         

        });

        Webcam.set('constraints',{
        facingMode: "environment"
    });


        Webcam.attach('#my_camera');
      }

      function saveSnap(){

        Webcam.snap(function(data_uri){


          document.getElementById('results').innerHTML = 

          '<img class = "img-responsive" id = "webcam" src = "'+data_uri+'">';


        });

        Webcam.reset();

        var base64image = document.getElementById("webcam").src;

        Webcam.upload(base64image,'function.php',function(code,text){

          alert('Save Successful');
          document.location.href = "index.php"

        });

      }




    </script>



  </body>



</html>