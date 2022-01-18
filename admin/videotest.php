<!DOCTYPE html>
<html>
  <head>
    <title>Chunking Upload Demo</title>
  </head>
  <body>
    <!-- (A) UPLOAD BUTTON & FILE LIST -->
    <input type="button" id="pickfiles" value="Upload"/>
    <div id="filelist"></div>

    <!-- (B) LOAD PLUPLOAD FROM CDN -->
    <!-- https://cdnjs.com/libraries/plupload -->
    <!-- https://www.plupload.com/ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/plupload/3.1.3/plupload.full.min.js"></script>
    <script>
    // (C) INITIALIZE UPLOADER
    window.addEventListener("load", () => {
      // (C1) GET HTML FILE LIST
      var filelist = document.getElementById("filelist");

      // (C2) INIT PLUPLOAD
      var uploader = new plupload.Uploader({
        runtimes: "html5",
        browse_button: "pickfiles",
        url: "uploadtrial",
        chunk_size: "10mb",
        filters: {
          max_file_size: "1024mb",
          mime_types: [{title: "Image files", extensions: "jpg,gif,png,mp4"}]
        },
        init: {
          PostInit: () => { filelist.innerHTML = "<div>Ready</div>"; },
          FilesAdded: (up, files) => {
            plupload.each(files, (file) => {
              let row = document.createElement("div");
              row.id = file.id;
              row.innerHTML = `${file.name} (${plupload.formatSize(file.size)}) <strong></strong>`;
              filelist.appendChild(row);
            });
            uploader.start();
          },
          UploadProgress: (up, file) => {
            document.querySelector(`#${file.id} strong`).innerHTML = `${file.percent}%`;
          },
          Error: (up, err) => { console.error(err); }
        }
      });
      uploader.init();
    });
    </script>
  </body>
</html>
