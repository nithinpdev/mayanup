<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>Uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Uploadify/uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>

<body>
	<h1>Uploadify Demo</h1>
	<form method="post" enctype="multipart/form-data">
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
        <input type="submit" name="submit" value="Submit"/>
	</form>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				    'formData'     : {
					                  'timestamp' : '<?php echo $timestamp;?>',
					                  'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                      },
				'swf'      : '<?php echo base_url();?>Uploadify/uploadify.swf',
				'uploader' : '<?php echo base_url();?>Upload/upload_file'
			});
		});
	</script>
</body>
</html>