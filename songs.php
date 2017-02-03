<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php'; ?>
<body class="">
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
                <div class="col-sm-7">
                  <div class="panel wrapper-lg">
                    <div class="row">
                      <div class="col-sm-5">
                        <img src="images/m10.jpg" class="img-full m-b">
                      </div>
                      <div class="col-sm-7">
                        <h2 class="m-t-none text-black">Song Title</h2>
                        <div class="clearfix m-b-lg">
                          <a href="#" class="thumb-sm pull-left m-r">
                            <img src="images/a0.png" class="img-circle">
                          </a>
                          <div class="clear">
                            <a href="#" class="text-info">Artist Name</a>
                          </div>
                        </div>
                        <div class="m-b-lg">
                          <a href="#" class="btn btn-info">Play</a> <a href="#" class="btn btn-default">3 airplays this week</a>
                        </div>
                        <div>
                          Stations: <a href="#" class="badge bg-light">Kiss 100</a> <a href="#" class="badge bg-light">Capital FM</a>
                        </div>
                      </div>
                    </div>
                    <div class="m-t">
                      <p> </p>
                    </div>
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
                          <span class="text-muted"> -- </span>
                        </div>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-5">
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
</body>
</html>
