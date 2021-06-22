<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>		 
	<a href='<?php echo base_url() ?>/Gestion/AccueilAdmin'>Retour à l'accueil du back-office</a>
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
	<script>
		$(document).ready(function(){
			console.log("go!");
			$("#file_photo").change(function(){
				formdata = new FormData();
				file =$(this).prop('files')[0];
				formdata.append("fichierphoto", file);
				$.ajax( { url: "<?php echo base_url() ?>/Gestion/Telechargement", type: "POST", data: formdata, contentType: false, processData: false,  success: function (result) {
																																													$("#miniature").attr("src","<?php echo base_url() ?>/assets/photos/enigmes/"+result);
																																													$("#enigme_photo").val(result);

																																																} });
			})
		});
	</script>
</body>
</html>
