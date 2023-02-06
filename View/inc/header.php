<!DOCTYPE html>
<html lang="en">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?=ROOT_URL?>static/css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?=ROOT_URL?>static/css/style.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8" />
      <title><?=\BlogPhp\Engine\Config::SITE_NAME?></title>
      <meta name="author" content="Romain Ollier" />

      <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">



  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

    </head>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="<?=ROOT_URL?>static/js/materialize.js"></script>
      <script type="text/javascript" src="<?=ROOT_URL?>static/js/script.js"></script>

      <script src="<?=ROOT_URL?>static/js/tinymce/tinymce.min.js"></script>
      <script>
        tinymce.init({
          selector:'#editable',
          branding: false,
          height: 500,
          menubar: false,
          plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
          ],
          toolbar1: "formatselect | undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
          toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code | caption | styleselect",

          image_caption: true,
          image_advtab: true ,

          external_filemanager_path:"<?=ROOT_URL?>static/filemanager/",
          filemanager_title:"Responsive Filemanager" ,
          external_plugins: { "filemanager" : "<?=ROOT_URL?>static/filemanager/plugin.min.js"},
          visualblocks_default_state: true ,

          style_formats_autohide: true,
          style_formats_merge: true,
        });

      </script>
