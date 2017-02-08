<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php'; ?>
<body class="">
<style>
    .datepicker {
      z-index: 1600 !important; /* has to be larger than 1050 */
    }
</style>
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
                      <p> </p>
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
                          <span class="text-muted"></span>
                        </div>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <!--<div class="col-sm-5">
                  <div class="panel panel-default">
                    <div class="panel-heading">Upload Song/Audio clip</div>
                    <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="musicuplod.php" enctype="multipart/form-data" >
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Audio Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Your audio clip's title">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Cover Art</label>
                          <div class="col-sm-9">
                            <input type="file" name="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"  >
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Mp3 Upload</label>
                          <div class="col-sm-9">
                            <input type="file"  name="file1" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" >
                          </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <p style="float:right;">
                          <button type="submit" class="btn btn-success" ></i> Upload </button> <i class="fa fa-spin fa-spinner hide" id="spin"></i>
                        </p>
                      </form>
                    </div>
                  </div>
                </div>-->
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
                  <form id="wizardform" method="get" action="#">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <ul class="nav nav-tabs font-bold">
                          <li><a href="#step1" data-toggle="tab">Step 1</a></li>
                          <li><a href="#step2" data-toggle="tab">Step 2</a></li>
                          <li><a href="#step3" data-toggle="tab">Step 3</a></li>
                          <li><a href="#step4" data-toggle="tab">Step 4</a></li>
                          <li><a href="#step5" data-toggle="tab">Step 5</a></li>
                        </ul>
                      </div>
                      <div class="panel-body">
                        <p>Fill in the details below. Confrim before submitting.</p>
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
                            <input type="text" class="form-control" data-trigger="change" data-required="true"  placeholder="Title of your song/sound clip">
                            <p class="m-t">Artwork</p>
                            <input type="file" class="form-control" data-trigger="change" data-required="true" placeholder="" accept="image/*">
                            <p class="m-t">Length</p>
                            <div class="row">
                              <div class="col-sm-6"><input type="number" class="form-control" data-trigger="change" data-required="true" min="0" max="59" placeholder="Minutes"></div>
                              <div class="col-sm-6"><input type="number" class="form-control" data-trigger="change" data-required="true" min="1" max="59" placeholder="Seconds"></div>
                            </div>                            
                            <p class="m-t">Mp3</p>
                            <input type="file" class="form-control" data-trigger="change" data-required="true" placeholder="" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" accept=".mp3">
                            <p class="m-t">Date of Release</p>
                            <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="01-01-2000" data-date-format="dd-mm-yyyy" >
                            <p class="m-t">Record Label:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="">
                          </div>
                          <div class="tab-pane" id="step2">
                            <div class="line line-lg"></div>
                            <h4>Contributors</h4>
                            <div class="line line-lg"></div>
                            <p style="text-decoration: underline;">Contributor</p>
                            <select name="account" class="form-control m-b" data-required="true"  placeholder="Contributors to your song.">
                              <option>Performer</option>
                              <option>Producer</option>
                              <option>Author</option>
                              <option>Composer</option>
                              <option value="">Arranger</option>
                            </select>                            
                            <p class="m-t">Name</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="">
                            <p class="m-t">Percentage of Contribution</p>
                            <input type="number" name="percent" min="1" max="99" class="form-control" data-trigger="change" data-required="true"  placeholder="">
                            <p class="m-t">Mobile</p>
                            <input type="number" class="form-control" data-trigger="change" data-required="true" placeholder="">
                            <p class="m-t">Email</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="">
                            <div class="line line-lg"></div>
                            <p style="text-decoration: underline;">Featuring</p>
                            <p class="m-t">Name</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="">
                            <p class="m-t">Mobile</p>
                            <input type="number" class="form-control" data-trigger="change" data-required="true" placeholder="">
                            <p class="m-t">Email</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="">                
                          </div>
                          <div class="tab-pane" id="step3">
                            <div class="line line-lg"></div>
                            <h4>Track Outlets</h4>
                            <div class="line line-lg"></div>
                            <p>Where would you like us to administer your rights?</p>
                            <div class="line line-lg"></div>
                            <p>Local radio stations</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true"  placeholder="Name">
                            <input type="text" class="form-control" data-trigger="change" data-required="true"  placeholder="Frequency">
                            <div class="line line-lg"></div>
                            <p>Internet Radio</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true"  placeholder="Name">
                            <input type="text" class="form-control" data-trigger="change" data-required="true"  placeholder="URL">
                            <div class="line line-lg"></div>
                            <p>Network Service Providers</p>
                            <div class="checkbox i-checks">
                              <label>
                                <input type="checkbox" value="">
                                <i></i>
                                Safaricom Skiza Tunes
                              </label>
                            </div>
                            <div class="checkbox i-checks">
                              <label>
                                <input type="checkbox" value="">
                                <i></i>
                                Airtel Hello Tunes
                              </label>
                            </div>
                            <div class="checkbox i-checks">
                              <label>
                                <input type="checkbox" value="">
                                <i></i>
                                Telkom Orange Hello Tunes
                              </label>
                            </div>
                            <small>Admin fees apply. <a href="">View fees?</a></small>
                          </div>
                          <div class="tab-pane" id="step4">
                            <p>Your email:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="email address">
                          </div>
                          <div class="tab-pane" id="step5">
                            <p>Your email:</p>
                            <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="email address">
                          </div>
                          <ul class="pager wizard m-b-sm">
                            <li class="previous first" style="display:none;"><a href="#">First</a></li>
                            <li class="previous"><a href="#">Previous</a></li>
                            <li class="next last" style="display:none;"><a href="#">Last</a></li>
                            <li class="next"><a href="#">Next</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
          </div>          
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
</body>
</html>
