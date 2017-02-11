<?php
    $feedback="";
    if(isset($_GET['var']) && ($_GET['var']=='successful_upload'))
    {
        $feedback="
        <div class='alert success'>
          <span class='closebtn'>&times;</span>  
          <strong>Success!</strong> Your song has been uploaded.
        </div>";
    }
?>

<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php'; ?>
<body class="">
  <?php echo $feedback; ?>
  <style>
      .datepicker {
        z-index: 1600 !important;
      }
  </style>
  <script type="text/javascript" src="js/getDetails.js"></script>
  <section class="vbox">
    <?php include 'header.php'; ?>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php include 'aside.php'; ?>
        <!-- /.aside -->        
        <section id="content">
          <section class="vbox" id="bjax-el">
            <section class="scrollable wrapper-lg">
              <div class="row">
                <div class="col-sm-12">
                  <div class="panel wrapper-lg">
                    <div class="row">
                      <div class="col-sm-5">
                        <img src="images/m10.jpg" class="img-full m-b">
                      </div>
                      <div class="col-sm-7">
                        <h2 class="m-t-none text-black"></h2><!--Song title-->
                        <div class="clearfix m-b-lg">
                          <a href="#" class="thumb-sm pull-left m-r">
                            <img src="images/MusicQuaver.png" class="img-circle"><!--Artist image -->
                          </a>
                          <div class="clear">
                            <a href="#" class="text-info"></a><!--Artist Name-->
                          </div>
                        </div>
                        <div class="m-b-lg">
                          <a href="#" class="btn btn-info">Play</a> <a href="#" class="btn btn-default">0 airplays this week</a>
                        </div>
                        <div>
                          Stations: <a href="#" class="badge bg-light">Kiss 100</a> <a href="#" class="badge bg-light">Capital FM</a>
                        </div>
                      </div>
                    </div>
                    <div class="m-t">
                    </div>
                    <a href="#modal-form" class="btn btn-success" data-toggle="modal">Upload Song</a>
                    <h4 class="m-t-lg m-b">My Songs</h4>
                    <ul class="list-group list-group-lg">

                    <?php
                       $result = sqlsrv_query($conn,"SELECT * FROM AudioClip WHERE AccountNo='$acc' ") or die (sqlsrv_errors()); 
                           while( $member = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
                              

                    ?>
                      <li class="list-group-item">
                        <div class="pull-right m-l">
                          <div class="btn-group">
		                      <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="deletemusic.php?var=<?php echo $member['ID']?>">Delete</a></li>
                              <li><a href="#">Download</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Share</a></li>
                            </ul>
		                      </div>
                        </div>
                        <a href="#" class="jp-play-me m-r-sm pull-left">
                        <audio id="music" controls="controls">
                          <source src="music/<?php echo $member['AudioPath'];   ?>" />  
                        </audio>
                        </a>
                        <div class="clear text-ellipsis">
                          <span><?php echo  $member['AudioTitle'];  ?></span>
                          <span class="text-muted"> - <?php $y= $member['lengthMinutes']; if($y<10){$z="0".$y; echo $z;}else {echo  $y;}; ?>: <?php $y= $member['lengthSeconds']; if($y<10){$z="0".$y; echo $z;}else{ echo  $y;} ; ?></span>
                        </div>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>
  </section>
  <?php include 'scripts.php'; ?>
    <div class="modal fade" id="modal-form" style="clear:both; height:auto; width:100%;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body wrapper-lg">
          <div class="row">
            <div class="col-sm-12">
                  <form id="wizardform" method="POST" action="musicuplod.php" enctype="multipart/form-data">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <ul class="nav nav-tabs font-bold">
                          <li><a href="#step1" data-toggle="tab">Step 1</a></li>
                          <li><a href="#step2" data-toggle="tab">Step 2</a></li>
                          <li><a href="#step3" data-toggle="tab">Step 3</a></li>
                          <li><a href="#step4" data-toggle="tab">Step 4</a></li>
                          <!--<li><a href="#step5" data-toggle="tab">Step 5</a></li>-->
                        </ul>
                      </div>
                      <div class="panel-body">
                        <p>Fill in the details below. Confirm before submitting.</p>
                        <div class="line line-lg"></div>
                        <div class="progress progress-xs m-t-md">
                          <div class="progress-bar bg-success"></div>
                        </div>
                        <div class="tab-content">
                          <div class="tab-pane" id="step1">
                          <div class="line line-lg"></div>
                            <h4>Song Details</h4>
                            <div class="line line-lg"></div>                            
                            <p>Audio Name:</p>
                            <input type="text" class="form-control" id="audio_name" name="name" data-trigger="change" data-required="true"  placeholder="Title of your song/sound clip" onchange="AudioNameFunction()">
                            <p class="m-t">Artwork</p>
                            <input type="file" class="form-control" name="file" data-trigger="change" data-required="true" placeholder="" accept="image/*">
                            <p class="m-t">Length</p>
                            <div class="row">
                              <div class="col-sm-6"><input type="number" name="minutes" id="audio_minutes" class="form-control" data-trigger="change" data-required="true" min="0" max="59" placeholder="Minutes" onchange="minutesFunction()"></div>
                              <div class="col-sm-6"><input type="number" name="seconds" id="audio_seconds" class="form-control" data-trigger="change" data-required="true" min="1" max="59" placeholder="Seconds" onchange="secondsFunction()"></div>
                            </div>                            
                            <p class="m-t">Mp3</p>
                            <input type="file" class="form-control" name="file1" data-trigger="change" data-required="true" placeholder="" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" accept=".mp3">
                            <p class="m-t">Date of Release</p>
                            <input class="input-sm input-s datepicker-input form-control" id="date_released" size="16" name="rdate" type="text" value="20-11-2016" data-date-format="dd-mm-yyyy" onchange="DateReleaseFunction()" onclick="DateReleaseFunction()" >
                            <p class="m-t">Featuring Artist(s):</p>
                            <input type="text" id="ft_name" class="form-control" data-trigger="change" placeholder="Artist's name" onchange="FeatureArtistFunction()">
                            <p class="m-t">Record Label:</p>
                            <input type="text" class="form-control" id="record_label" name="rlabel" data-trigger="change" data-required="true" placeholder="Where did you record from?" onchange="RecordLabelFunction()">
                            <div class="line line-lg"></div>
                          </div>                                                  
                          <div class="tab-pane" id="step2">
                          <div class="line line-lg"></div>
                            <h4>Contributors</h4>
                            <div class="line line-lg"></div>
                            <p style="text-decoration: underline;">Contributor</p>
                            <select name="contribtype" class="form-control m-b" data-required="true"  placeholder="Contributors to your song.">
                              <option value="Performer">Performer</option>
                              <option value="Producer">Producer</option>
                              <option value="Author">Author</option>
                              <option value="Composer">Composer</option>
                              <option value="Arranger">Arranger</option>
                            </select>                                                      
                            <p class="m-t">Name</p>
                            <input type="text" name="contname" class="form-control" data-trigger="change" data-required="true" placeholder="">
                            <p class="m-t">Percentage of Contribution</p>
                            <input type="number" name="percent" min="1" max="99" class="form-control" data-trigger="change" data-required="true"  placeholder="">
                            <p class="m-t">Mobile</p>
                            <input type="number" name="contno" class="form-control" data-trigger="change" data-required="true" placeholder="Phone Number">
                            <p class="m-t">Email</p>
                            <input type="text" name="contemail" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="email address">
                            <div class="line line-lg"></div>
                            <p style="text-decoration: underline;">Featuring</p>
                            <p class="m-t">Name</p>
                            <input type="text" id="ft_name" name="ftname" class="form-control" data-trigger="change" placeholder="Artist's name" onchange="FeatureArtistFunction()">
                            <p class="m-t">Mobile</p>
                            <input type="number" id="ft_no" name="ftno" class="form-control" data-trigger="change" placeholder="Phone Number" onchange="FeatureArtistNumber()">
                            <p class="m-t">Email</p>
                            <input type="text" id="ft_email" name="ftemail"class="form-control" data-trigger="change" data-type="email" placeholder="Email Address" onchange="FeatureArtistEmail()">
                            <div class="line line-lg"></div>                                          
                          </div>
                          <div class="tab-pane" id="step3">
                            <div class="line line-lg"></div>
                            <h4>Track Outlets</h4>
                            <div class="line line-lg"></div>
                            <p>Where would you like us to administer your rights?</p>
                            <div class="checkbox i-checks">
                              <label>
                                <input type="checkbox" name="fm" value="yes">
                                <i></i>
                                Local Radio Stations.
                              </label>
                            </div>
                            <div class="checkbox i-checks">
                              <label>
                                <input type="checkbox" name="internet" value="yes">
                                <i></i>
                                Internet Streams.
                              </label>
                            </div>
                            <div class="checkbox i-checks">
                              <label>
                                <input type="checkbox" name="tv" value="yes">
                                <i></i>
                                TV Stations
                              </label>
                            </div>
                            <div class="line line-lg"></div>
                            <h4>Network Service Providers.</h4>     
                            <p>Admin fees apply. <a href="">Click to view fees.</a></p>
                            <div class="checkbox i-checks">
                              <label>
                                <input type="checkbox" name="safaricom" value="yes">
                                <i></i>
                                Safaricom Skiza Tunes
                              </label>
                            </div>
                            <div class="checkbox i-checks">
                              <label>
                                <input type="checkbox" name="airtel" value="yes">
                                <i></i>
                                Airtel Hello Tunes
                              </label>
                            </div>
                            <div class="checkbox i-checks">
                              <label>
                                <input type="checkbox" name="orange" value="yes">
                                <i></i>
                                Telkom Orange Hello Tunes
                              </label>
                            </div>
                            <div class="line line-lg"></div>                            
                          </div>
                          <div class="tab-pane" id="step4">
                            <div class="line line-lg"></div>
                            <h4>Looks good?</h4>
                            <div class="line line-lg"></div>
                            Here's a summary of your audio's details. Confirm that everything is alright before proceeding.
                            <div class="line line-lg"></div>
                            <h4>Song Details</h4>
                            <div class="row" style="padding: 2px;">                              
                              <div class="col-sm-3">
                                <label>Audio Clip Title:</label>
                              </div>
                              <div class="col-sm-9">
                                <input id="audio_name_display" type="text" class="form-control" value="" disabled>
                              </div>
                            </div>                            
                            <div class="row" style="padding: 2px;">                              
                              <div class="col-sm-3">
                                <label>Featuring:</label>
                              </div>
                              <div class="col-sm-9">
                                <input id="ft_name_dis" type="text" class="form-control" value="No contributing artist(s)." disabled>
                              </div>
                            </div>
                            <div class="row" style="padding: 2px;">                              
                              <div class="col-sm-3">
                                <label>Length:</label>
                              </div>
                              <div class="col-sm-4">
                                <div class="col-sm-6">
                                  <input id="display_minutes" type="text" class="form-control" value="" disabled>
                                </div>
                                <div class="col-sm-6">
                                  <span>Minutes</span>
                                </div>                               
                              </div>
                              <div class="col-sm-4">
                                <div class="col-sm-6">
                                  <input id="display_seconds" type="text" class="form-control" value="" disabled>
                                </div>
                                <div class="col-sm-6">
                                  <span>Seconds</span>
                                </div>                               
                              </div>
                            </div>
                            <div class="row" style="padding: 2px;">                              
                              <div class="col-sm-3">
                                <label>Record Label:</label>
                              </div>
                              <div class="col-sm-9">
                                <input id="record_label_display" type="text" class="form-control" value="" disabled>
                              </div>
                            </div>
                            <div class="row" style="padding: 2px;">                              
                              <div class="col-sm-3">
                                <label>Date Released:</label>
                              </div>
                              <div class="col-sm-9">
                                <input id="date_released_display" type="text" class="form-control" value="" disabled>
                              </div>
                            </div>
                            <div class="line line-lg"></div>
                            <button type="submit" class="btn btn-success" style="margin:0 auto;"> Done <i class="fa fa-check"></i></button> <i class="fa fa-spin fa-spinner hide" id="spin"></i>
                            <div class="line line-lg"></div>
                          </div><!--end of step 4 -->
                          <!--<div class="tab-pane" id="step5" style="text-aligh:center;">
                              <button type="submit" class="btn btn-success" style="margin:0 auto;"> Done <i class="fa fa-check"></i></button> <i class="fa fa-spin fa-spinner hide" id="spin"></i>                     
                          </div>-->
                          <ul class="pager wizard m-b-sm">
                            <li class="previous first" style="display:none;"><a href="#">First</a></li>
                            <li class="previous"><a href="#">Previous</a></li>
                            <li class="next last"><a href="#">Last</a></li>
                            <li class="next" onclick="Details()"><a href="#">Next</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
          </div>          
        </div>
      </div>
    </div>
  </div>
</body>
</html>
