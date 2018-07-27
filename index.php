<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="cover">
      <div class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>US-Major</span></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="http://us-major.com">Home</a>
              </li>
              <li>
                <a href="#">Contacts</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="cover-image" style="background-image : url('https://unsplash.imgix.net/photo-1418226970361-9f1f7227d638?w=1024&amp;q=50&amp;fm=jpg&amp;s=4a5f190c7499eff6f7c77d88d8abf57e')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>PHP Skill test</h1>
            <p>If you handle this ....&nbsp;</p>
            <br>
            <br>
            <a class="btn btn-lg btn-default" data-toggle="modal" href="#starttest">Start</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="starttest">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Let Start the Test</h4>
          </div>
          <div class="modal-body ">
              <h2><p>Type your text to encrypt it ... The server will return
              you the encrypted result.
              <br>---- but we have a error ----&nbsp;
              <br>your mission is to fix it ... Nicely</p>
            </h2><hr>
            <div class="form-group">
                <label class="control-label" for="exampleInputEmail1">Text to encode</label>
                <input class="form-control" id="txtsrc" placeholder="Enter your text" type="text">
              </div>
              
              <span onclick="$.post('encoder.php',{txt:txtsrc.value},function(data) {txtrst.innerHTML=data})" class="btn btn-block btn-primary btn-sm">Submit</span>
              <hr>
              <div class="form-group">
                <label class="control-label">Text Encoded</label>
                <textarea class="form-control" id="txtrst"></textarea>
              </div>
            
          </div>
          <div class="modal-footer">
            <a class="btn btn-default" data-dismiss="modal">Close</a>
          </div>
        </div>
      </div>
    </div>
  

</body></html>